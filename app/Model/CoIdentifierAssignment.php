<?php
/**
 * COmanage Registry CO Identifier Assignment Model
 *
 * Copyright (C) 2012-16 University Corporation for Advanced Internet Development, Inc.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright     Copyright (C) 2012-16 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v0.6
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

class CoIdentifierAssignment extends AppModel {
  // Define class name for cake
  public $name = "CoIdentifierAssignment";
  
  // Current schema version for API
  public $version = "1.0";
  
  // Add behaviors
  public $actsAs = array('Containable');
  
  // Association rules from this model to other models
  public $belongsTo = array("Co");     // A CO Identifier Assignment is attached to a CO
  
  public $hasMany = array(
    "CoSequentialIdentifierAssignment" => array('dependent' => true)
  );
  
  // Default display field for cake generated views
  public $displayField = "description";
  
  // Validation rules for table elements
  public $validate = array(
    'co_id' => array(
      'rule' => 'numeric',
      'required' => true,
      'message' => 'A CO ID must be provided'
    ),
    'identifier_type' => array(
      'content' => array(
        'rule' => array('validateExtendedType',
                        array('attribute' => 'Identifier.type',
                              'default' => array(IdentifierEnum::ePPN,
                                                 IdentifierEnum::ePTID,
                                                 IdentifierEnum::Mail,
                                                 IdentifierEnum::OpenID,
                                                 IdentifierEnum::UID))),
        'required' => false,
        'allowEmpty' => false
      )
    ),
    'email_type' => array(
      'rule' => array(
        'inList',
        array(
          ContactEnum::Home,
          ContactEnum::Office
        )
      ),
      'required' => false,
      'allowEmpty' => true
    ),
    'description' => array(
      'rule' => '/.*/',
      'required' => false,
      'allowEmpty' => true
    ),
    'login' => array(
      'rule' => array('boolean'),
    ),
    'algorithm' => array(
      'rule' => array(
        'inList',
        array(
          IdentifierAssignmentEnum::Random,
          IdentifierAssignmentEnum::Sequential
        )
      ),
      'required' => true
    ),
    'format' => array(
      'rule' => '/.*/',
      'required' => true
    ),
    'minimum' => array(
      'rule' => 'numeric',
      'required' => false,
      'allowEmpty' => true
    ),
    'maximum' => array(
      'rule' => 'numeric',
      'required' => false,
      'allowEmpty' => true
    ),
    'permitted' => array(
      'rule' => array(
        'inList',
        array(
          PermittedCharacterEnum::AlphaNumeric,
          PermittedCharacterEnum::AlphaNumDotDashUS,
          PermittedCharacterEnum::AlphaNumDDUSQuote,
          PermittedCharacterEnum::Any
        )
      )
    ),
    'collision_resolution' => array(
      'rule' => '/.*/'
    ),
    'exclusions' => array(
      'rule' => array(
        'inList',
        array(
          IdentifierAssignmentExclusionEnum::Confusing,
          IdentifierAssignmentExclusionEnum::Offensive,
          IdentifierAssignmentExclusionEnum::Superstitious
        )
      )
    )
  );
  
  /**
   * Auto-assign an identifier to a CO Person if one does not already exist.
   * Note: This method is atomic. Multiple concurrent runs will not result in multiple assignments.
   * Note: This method will not trigger provisioning. Manually trigger provisioning if required.
   *
   * @since  COmanage Registry v0.6
   * @param  Array CoIdentifierAssignment data, as returned by find
   * @param  Integer CO Person ID
   * @param  Integer Actor CO Person ID
   * @return Integer ID of newly created Identifier
   * @throws InvalidArgumentException
   * @throws OverflowException (identifier already exists)
   * @throws RuntimeException
   */
  
  public function assign($coIdentifierAssignment, $coPersonID, $actorCoPersonID) {
    $ret = null;
    
    // Determine if we are actually assigning an email address instead of an identifier.
    $assignEmail = false;
    
    if($coIdentifierAssignment['CoIdentifierAssignment']['identifier_type'] == 'mail'
       && !empty($coIdentifierAssignment['CoIdentifierAssignment']['email_type'])) {
      $assignEmail = true;
    }
    
    // Begin a transaction. This is more because we need to ensure the integrity of
    // data between SELECT and INSERT/UPDATE than that we expect to rollback.
    
    $dbc = $this->getDataSource();
    $dbc->begin();
    
    // Find the CO Person.
    
    $args = array();
    $args['conditions']['CoPerson.id'] = $coPersonID;
    $args['contain'][] = 'PrimaryName';
    $args['contain'][] = 'Identifier';
    
    $coPerson = $this->Co->CoPerson->find('first', $args);
    
    if(empty($coPerson)) {
      $dbc->rollback();
      throw new InvalidArgumentException(_txt('er.notfound',
                                         array(_txt('ct.co_people.1'),
                                               $coPersonID)));
    }
    
    // Check for the Identifier. If the person already has one of this sort,
    // don't generate a new one.
    
    if($assignEmail) {
      if($this->Co->CoPerson->EmailAddress->assigned($coPersonID,
                                                     $coIdentifierAssignment['CoIdentifierAssignment']['email_type'])) {
        $dbc->commit();
        throw new OverflowException(_txt('er.ia.already'));
      }
    } else {
      if($this->Co->CoPerson->Identifier->assigned($coPersonID,
                                                   $coIdentifierAssignment['CoIdentifierAssignment']['identifier_type'])) {
        $dbc->commit();
        throw new OverflowException(_txt('er.ia.already'));
      }
    }
    
    // Generate the new identifier. This requires several steps. First, substitute
    // non-collision number parameters. If no format is specified, default to "(#)".
    // We'll use PrimaryName in case there is more than one.
    
    $iaFormat = "(#)";
    
    if(isset($coIdentifierAssignment['CoIdentifierAssignment']['format'])
       && $coIdentifierAssignment['CoIdentifierAssignment']['format'] != '') {
      $iaFormat = $coIdentifierAssignment['CoIdentifierAssignment']['format'];
    }
    
    $base = $this->substituteParameters($iaFormat,
                                        $coPerson['PrimaryName'],
                                        $coIdentifierAssignment['CoIdentifierAssignment']['permitted']);
    
    // Now that we've got our base, loop until we get a unique identifier.
    // We try a maximum of 10 (0 through 9) times, and track identifiers we've
    // seen already.
    
    $tested = array();
    
    for($i = 0;$i < 10;$i++) {
      $sequenced = $this->selectSequences($base,
                                          $i,
                                          $coIdentifierAssignment['CoIdentifierAssignment']['permitted']);
      
      // There may or may not be a collision number format. If so, we should end
      // up with a unique candidate (though for random it's possible we won't).
      $candidate = $this->assignCollisionNumber($coIdentifierAssignment['CoIdentifierAssignment']['id'],
                                                $sequenced,
                                                $coIdentifierAssignment['CoIdentifierAssignment']['algorithm'],
                                                $coIdentifierAssignment['CoIdentifierAssignment']['minimum'],
                                                $coIdentifierAssignment['CoIdentifierAssignment']['maximum']);
      
      if(!in_array($candidate, $tested)) {
        // We have a new candidate (ie: one that wasn't generated on a previous loop),
        // so let's see if it is already in use.
        
        if(($assignEmail
            && $this->Co->CoPerson->EmailAddress->checkAvailability($candidate,
                                                                    $coIdentifierAssignment['CoIdentifierAssignment']['email_type'],
                                                                    $coIdentifierAssignment['CoIdentifierAssignment']['co_id']))
           ||
           (!$assignEmail
            && $this->Co->CoPerson->Identifier->checkAvailability($candidate,
                                                                  $coIdentifierAssignment['CoIdentifierAssignment']['identifier_type'],
                                                                  $coIdentifierAssignment['CoIdentifierAssignment']['co_id']))) {
          // This one's good... insert it into the table and break the loop
          
          // We need to update the appropriate validation rule with the current CO ID
          // so that extended types can validate correctly. In order to do that, we need
          // the CO ID. We'll pick it out of the CO Identifier Assignment data.
          
          $coId = $coIdentifierAssignment['CoIdentifierAssignment']['co_id'];
          
          if($assignEmail) {
            $emailAddressData = array();
            $emailAddressData['EmailAddress']['mail'] = $candidate;
            $emailAddressData['EmailAddress']['type'] = $coIdentifierAssignment['CoIdentifierAssignment']['email_type'];
            $emailAddressData['EmailAddress']['co_person_id'] = $coPerson['CoPerson']['id'];
            
            // We need to update the Email Address validation rule
            $this->Co->CoPerson->EmailAddress->validate['type']['content']['rule'][1]['coid'] = $coId;
            
            // We need to call create to reset the model state since we're (possibly) doing multiple distinct
            // saves against the same model.
            $this->Co->CoPerson->EmailAddress->create($emailAddressData);
            
            if($this->Co->CoPerson->EmailAddress->save($emailAddressData, array('provision' => false))) {
              $ret = $this->Co->CoPerson->EmailAddress->id;
            }
          } else {
            $identifierData = array();
            $identifierData['Identifier']['identifier'] = $candidate;
            $identifierData['Identifier']['type'] = $coIdentifierAssignment['CoIdentifierAssignment']['identifier_type'];
            $identifierData['Identifier']['login'] = $coIdentifierAssignment['CoIdentifierAssignment']['login'];
            $identifierData['Identifier']['co_person_id'] = $coPerson['CoPerson']['id'];
            $identifierData['Identifier']['status'] = StatusEnum::Active;
            
            // We need to update the Identifier validation rule
            $this->Co->CoPerson->Identifier->validate['type']['content']['rule'][1]['coid'] = $coId;
            
            // We need to call create to reset the model state since we're (possibly) doing multiple distinct
            // saves against the same model.
            $this->Co->CoPerson->Identifier->create($identifierData);
            
            if($this->Co->CoPerson->Identifier->save($identifierData, array('provision' => false))) {
              $ret = $this->Co->CoPerson->Identifier->id;
            }
          }
          
          if($ret) {
            // Create a history record
            try {
              $this->Co->CoPerson->HistoryRecord->record($coPerson['CoPerson']['id'],
                                                         null,
                                                         null,
                                                         $actorCoPersonID,
                                                         ActionEnum::IdentifierAutoAssigned,
                                                         _txt('en.action', null, ActionEnum::IdentifierAutoAssigned) . ': '
                                                         . $candidate . ' (' . $coIdentifierAssignment['CoIdentifierAssignment']['identifier_type']
                                                         . ($assignEmail ? ':'.$coIdentifierAssignment['CoIdentifierAssignment']['email_type'] : '')
                                                         . ')');
            }
            catch(Exception $e) {
              $dbc->rollback();
              throw new RuntimeException(_txt('er.db.save'));
            }
          } else {
            $dbc->rollback();
            throw new RuntimeException(_txt('er.db.save'));
          }
          
          break;
        }
        // else try the next one
        
        $tested[] = $candidate;
      }
    }
    
    $dbc->commit();
    
    // Return the new ID (or throw an error if we don't have one)
    
    if(!$ret) {
      throw new RuntimeException(_txt('er.ia.failed'));
    }
    
    return $ret;
  }
  
  /**
   * Assign a collision number if the current identifier segment accepts one.
   *
   * @since  COmanage Registry v0.6
   * @param  String Sequenced string as returned by selectSequences
   * @param  Integer CO Identifier Assignment ID
   * @param  IdentifierAssignmentEnum Algorithm to assign collision number
   * @param  Integer Minimum number to assign
   * @param  Integer Maximum number to assign (for Random only)
   * @return String Candidate string, possibly with a collision number assigned
   * @throws InvalidArgumentException
   */
  
  private function assignCollisionNumber($coIdentifierAssignmentID, $sequenced, $algorithm, $min, $max) {
    // We expect $sequenced to be %s and not %d in order to be able to ensure
    // a specific width (ie: padded and/or truncated). This also makes sense in that
    // identifiers are really strings, not numbers.
    
    if(preg_match('/\%[0-9.]*s/', $sequenced)) {
      switch($algorithm) {
        case IdentifierAssignmentEnum::Random:
          // Simply pick a number between $min and $max.
          return sprintf($sequenced, mt_rand($min, ($max ? $max : mt_getrandmax())));
          break;
        case IdentifierAssignmentEnum::Sequential:
          return sprintf($sequenced, $this->CoSequentialIdentifierAssignment->next($coIdentifierAssignmentID, $sequenced, $min));
          break;
        default:
          throw new InvalidArgumentException(_txt('er.unknown', array($algorithm)));
          break;
      }
    } else {
      # Nothing to do, just return the same string
      
      return $sequenced;
    }
  }
  
  /**
   * Select the sequenced segments to be processed for the given iteration.
   *
   * @since  COmanage Registry v0.6
   * @param  String  Base string as returned by substituteParameters
   * @param  Integer Iteration number (between 0 and 9)
   * @param  Enum    Acceptable characters for substituted parameters (PermittedCharacterEnum)
   * @return String Identifier with sequenced segments selected
   */
  
  private function selectSequences($base, $iteration, $permitted) {
    $sequenced = "";
    
    // Loop through the string
    for($j = 0;$j < strlen($base);$j++) {
      switch($base[$j]) {
        case '\\':
          // Copy the next character directly
          if($j+1 < strlen($base)) {
            $j++;
            $sequenced .= $base[$j];
          }
          break;
        case '[':
          // Sequenced segment
          
          if($j+3 < strlen($base)) {
            $j++;
            
            if($base[$j] <= $iteration) {
              // This segment is now in effect, copy until we see a close bracket
              // (and jump past the ':')
              $j += 2;
              
              // Assemble the text for this segment. If after parameter substitution
              // we end up with no permitted characters, skip this segment
              
              $segtext = "";
              
              while($base[$j] != ']') {
                $segtext .= $base[$j];
                $j++;
              }
              
              if(strlen($segtext) > 0
                 && preg_match('/'. _txt('en.chars.permitted.re', null, $permitted) . '/', $segtext)) {
                $sequenced .= $segtext;
              }
            } else {
              // Move to end of segment, we're not using this one yet
              
              while($base[$j] != ']') {
                $j++;
              }
            }
          }
          break;
        default:
          // Just copy this character
          $sequenced .= $base[$j];
          break;
      }
    }
    
    return $sequenced;
  }
  
  /**
   * Perform parameter substitution on an identifier format to generate the base
   * string used in identifier assignment.
   *
   * @since  COmanage Registry v0.6
   * @param  String CoIdentifierAssignment format
   * @param  Array Name array
   * @param  Enum    Acceptable characters for substituted parameters (PermittedCharacterEnum)
   * @return String Identifier with paramaters substituted
   */
  
  private function substituteParameters($format, $name, $permitted) {
    $base = "";
    
    // Loop through the format string
    for($i = 0;$i < strlen($format);$i++) {
      switch($format[$i]) {
        case '\\':
          // Copy the next character directly
          if($i+1 < strlen($format)) {
            $i++;
            $base .= $format[$i];
          }
          break;
        case '(':
          // Parameter to substitute
          if($i+2 < strlen($format)) {
            // Move past '('
            $i++;
            
            $width = "";
            
            // Check if the next character is a width specifier
            if($format[$i+1] == ':') {
              // Don't advance $i yet since we still need it, so use $j instead
              for($j = $i+2;$j < strlen($format);$j++) {
                if($format[$j] != ')') {
                  $width .= $format[$j];
                } else {
                  break;
                }
              }
            }
            
            // Do the actual parameter replacement, blocking out characters that aren't permitted
            
            if($permitted) {
              // $permitted is generally expected to be provided, except in some edge upgrade cases
              $charregex = '/'. _txt('en.chars.permitted.re.not', null, $permitted) . '/';
            }
            
            switch($format[$i]) {
              case 'f':
                $base .= sprintf("%.".$width."s",
                                 preg_replace($charregex, '', strtolower($name['family'])));
                break;
              case 'F':
                $base .= sprintf("%.".$width."s",
                                 preg_replace($charregex, '', $name['family']));
                break;
              case 'g':
                $base .= sprintf("%.".$width."s",
                                 preg_replace($charregex, '', strtolower($name['given'])));
                break;
              case 'G':
                $base .= sprintf("%.".$width."s",
                                 preg_replace($charregex, '', $name['given']));
                break;
              case 'm':
                $base .= sprintf("%.".$width."s",
                                 preg_replace($charregex, '', strtolower($name['middle'])));
                break;
              case 'M':
                $base .= sprintf("%.".$width."s",
                                 preg_replace($charregex, '', $name['middle']));
                break;
              case '#':
                // Convert the collision number parameter to a sprintf style specification,
                // left padded with 0s. Note that assignCollisionNumber expects %s, not %d.
                $base .= "%" . ($width != "" ? ("0" . $width . "." . $width) : "") . "s";
                break;
            }
            
            // Move past the width specifier
            if($width != "") {
              $i += strlen($width) + 1;
            }
            
            // Move past the ')'
            $i++;
          }
          break;
        default:
          // Just copy this character
          $base .= $format[$i];
          break;
      }
    }
    
    return $base;
  }
  
  /**
   * Check if a given extended type is in use by any CO Identifier Assignment.
   *
   * @since  COmanage Registry v0.9.2
   * @param  String Attribute, of the form Model.field
   * @param  String Name of attribute (any default or extended type may be specified)
   * @param  Integer CO ID
   * @return Boolean True if the extended type is in use, false otherwise
   */
  
  public function typeInUse($attribute, $attributeName, $coId) {
    // Note we are effectively overriding AppModel::typeInUse().
    
    // Inflect the model names
    $attr = explode('.', $attribute, 2);
    
    if($attr[0] == 'Identifier' && $attr[1] == 'type') {
      // For MVPA attribute, we need to see if the type is specified as part of the
      // attribute name.
      
      $args = array();
      $args['conditions']['CoIdentifierAssignment.identifier_type'] = $attributeName;
      $args['conditions']['CoIdentifierAssignment.co_id'] = $coId;
      $args['contain'] = false;
      
      return (boolean)$this->find('count', $args);
    }
    // else nothing to do
    
    return false;
  }
}
