<?php
/**
 * COmanage Registry Email Address Model
 *
 * Copyright (C) 2010-16 University Corporation for Advanced Internet Development, Inc.
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
 * @copyright     Copyright (C) 2010-16 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v0.1
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

class EmailAddress extends AppModel {
  // Define class name for cake
  public $name = "EmailAddress";
  
  // Current schema version for API
  public $version = "1.0";
  
  // Add behaviors
  public $actsAs = array('Containable',
                         'Normalization' => array('priority' => 4),
                         'Provisioner',
                         'Changelog' => array('priority' => 5));
  
  // Association rules from this model to other models
  public $belongsTo = array(
    // An email address may be attached to a CO Person
    "CoPerson",
    // An email address may be attached to an Org Identity
    "OrgIdentity"
  );
  
  public $hasOne = array("CoInvite");
  
  // Default display field for cake generated views
  public $displayField = "EmailAddress.mail";
  
  // Default ordering for find operations
//  public $order = array("mail");
  
  // Validation rules for table elements
  // Validation rules must be named 'content' for petition dynamic rule adjustment
  public $validate = array(
    // Don't require mail or type since $belongsTo saves won't validate if they're empty
    'mail' => array(
      'content' => array(
        'rule' => array('email'),
        'required' => false,
        'allowEmpty' => false,
        'message' => 'Please enter a valid email address'
      ),
      'filter' => array(
        'rule' => array('validateInput',
                        array('filter' => FILTER_SANITIZE_EMAIL))
      )
    ),
    'type' => array(
      'content' => array(
        'rule' => array('validateExtendedType',
                        array('attribute' => 'EmailAddress.type',
                              'default' => array(EmailAddressEnum::Delivery,
                                                 EmailAddressEnum::Forwarding,
                                                 EmailAddressEnum::Official,
                                                 EmailAddressEnum::Personal))),
        'required' => false,
        'allowEmpty' => false
      )
    ),
    'verified' => array(
      'content' => array(
        'rule' => array('boolean')
      )
    ),
    'co_person_id' => array(
      'content' => array(
        'rule' => 'numeric',
        'required' => false,
        'allowEmpty' => true
      )
    ),
    'org_identity_id' => array(
      'content' => array(
        'rule' => 'numeric',
        'required' => false,
        'allowEmpty' => true
      )
    )
  );
  
  /**
   * Determine if an email address of a given type is already assigned to a CO Person.
   *
   * IMPORTANT: This function should be called within a transaction to ensure
   * actions taken based on availability are atomic.
   *
   * @since  COmanage Registry v0.7
   * @param  Integer CO Person ID
   * @param  String Type of candidate email address
   * @return Boolean True if an email address of the specified type is already assigned, false otherwise
   */
  
  public function assigned($coPersonID, $emailType) {
    $args = array();
    $args['conditions']['EmailAddress.co_person_id'] = $coPersonID;
    $args['conditions']['EmailAddress.type'] = $emailType;
    $args['contain'] = false;
    
    $r = $this->findForUpdate($args['conditions'], array('mail'));
    
    return !empty($r);
  }
  
  /**
   * Actions to take before a save operation is executed.
   *
   * @since  COmanage Registry v0.8.4
   */
  
  public function beforeSave($options = array()) {
    // Make sure verified is set appropriately
    
    if(!empty($this->data['EmailAddress']['id'])) {
      // We have an existing record. Pull the current values.
      
      $args = array();
      $args['conditions']['EmailAddress.id'] = $this->data['EmailAddress']['id'];
      $args['contain'] = false;
      
      $curdata = $this->find('first', $args);
      
      if(!empty($curdata['EmailAddress']['mail'])
         && !empty($this->data['EmailAddress']['mail'])
         && $curdata['EmailAddress']['mail'] != $this->data['EmailAddress']['mail']) {
        // Email address was changed, flag as unverified
        $this->data['EmailAddress']['verified'] = false;
      } else {
        // Use prior setting
        $this->data['EmailAddress']['verified'] = $curdata['EmailAddress']['verified'];
      }
    } else {
      // Adding a new address should default to not verified
      
      $this->data['EmailAddress']['verified'] = false;
    }
    
    return true;
  }
  
  /**
   * Check if an email address is available for assignment (via CoIdentifierAssignment).
   * An email address is available if it is not defined (regardless of status) within the same CO.
   *
   * IMPORTANT: This function should be called within a transaction to ensure
   * actions taken based on availability are atomic.
   *
   * @since  COmanage Registry v0.9.2
   * @param  String $address Candidate email address
   * @param  String $addressType Type of candidate email address
   * @param  Integer CO ID
   * @return Boolean True if email address is not in use, false otherwise
   */
  
  public function checkAvailability($address, $addressType, $coId) {
    // In order to allow ensure that another process doesn't perform the same
    // availability check while we're running, we need to lock the appropriate
    // tables/rows at read time. We do this with findForUpdate instead of a normal find.
    
    $args = array();
    $args['conditions']['CoPerson.co_id'] = $coId;
    $args['conditions']['EmailAddress.mail'] = $address;
    $args['conditions']['EmailAddress.type'] = $addressType;
    $args['joins'][0]['table'] = 'co_people';
    $args['joins'][0]['alias'] = 'CoPerson';
    $args['joins'][0]['type'] = 'INNER';
    $args['joins'][0]['conditions'][0] = 'CoPerson.id=EmailAddress.co_person_id';
    $args['contain'] = false;
    
    $r = $this->findForUpdate($args['conditions'],
                              array('mail'),
                              $args['joins']);
    
    return empty($r);
  }
  
  /**
   * Mark an address as verified.
   *
   * @since  COmanage Registry v0.7
   * @param  Integer Org Identity ID address is associated with
   * @param  Integer CO Person ID address is associated with
   * @param  String Email address to mark verified
   * @param  Integer CO Person ID of verifier
   * @throws InvalidArgumentException
   * @throws RuntimeException
   */
  
  public function verify($orgIdentityId, $coPersonId, $address, $verifierCoPersonId) {
    // First find the record
    
    $args = array();
    if($orgIdentityId) {
      $args['conditions']['EmailAddress.org_identity_id'] = $orgIdentityId;
    }
    if($coPersonId) {
      $args['conditions']['EmailAddress.co_person_id'] = $coPersonId;
    }
    $args['conditions']['EmailAddress.mail'] = $address;
    $args['contain'] = false;
    
    $mail = $this->find('first', $args);
    
    if(empty($mail)) {
      throw new InvalidArgumentException(_txt('er.notfound', array(_txt('ct.email_addresses.1'), $address)));
    }
    
    // And then update it
    $this->id = $mail['EmailAddress']['id'];
    
    // Make sure to disable callbacks since beforeSave will try to update this field, too
    if(!$this->saveField('verified', true, array('callbacks' => false))) {
      throw new RuntimeException(_txt('er.db.save'));
    }
    
    // Finally, create a history record
    
    try {
      $this->CoPerson->HistoryRecord->record($coPersonId,
                                             null,
                                             $orgIdentityId,
                                             $verifierCoPersonId,
                                             ActionEnum::EmailAddressVerified,
                                             _txt('rs.mail.verified', array($address)));
    }
    catch(Exception $e) {
      throw new RuntimeException($e->getMessage());
    }
  }
}
