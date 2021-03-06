<?php
/**
 * COmanage Registry CO NSF Demographic Fields
 *
 * Copyright (C) 2011-15 University Corporation for Advanced Internet Development, Inc.
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
 * @copyright     Copyright (C) 2011-15 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v0.3
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

  // Determine if fields are editable
  $e = false;

  if(($this->action == "add" && $permissions['add']) || ($this->action == "edit" && $permissions['edit']))
    $e = true;

  // We shouldn't get here if we don't have at least read permission, but check just in case

  if(!$e && !$permissions['view'])
    return false;

  // Set hidden defaults for CO and CoPerson id so users don't need to see it
  $args = array('default' => $cur_co['Co']['id']);
  print $this->Form->hidden('co_id', $args). "\n";

  if(isset($this->request->params['named']['copersonid'])) {
    // Populate default CO Person ID for add
    $args = array('default' => Sanitize::html($this->request->params['named']['copersonid']));
  }

  print $this->Form->hidden('co_person_id', $args). "\n";

  //globals
  global $cm_lang, $cm_texts;

  // Combine options and descriptions for display
  // Note: these options must be plain text, as the html is escaped before rendering.
  foreach($cm_texts[ $cm_lang ]['en.nsf.race'] as $key => $value)
  {
    $optionDesc['race'][$key] = $value;
    if(isset($cm_texts[ $cm_lang ]['en.nsf.race.desc'][$key]))
      $optionDesc['race'][$key] .= " - " . $cm_texts[ $cm_lang ]['en.nsf.race.desc'][$key];
  }

  // Currently has no description, but may as well leave it as an option.
  foreach($cm_texts[ $cm_lang ]['en.nsf.disab'] as $key => $value)
  {
    $optionDesc['disability'][$key] = $value;
    if(isset($cm_texts[ $cm_lang ]['en.nsf.disab.desc'][$key]))
      $optionDesc['disability'][$key] .= " - " . $cm_texts[ $cm_lang ]['en.nsf.disab.desc'][$key];
  }

  $emptyArg = array('empty' => true);
?>
<table id="<?php print $this->action; ?>_co_nsf_demographic" class="ui-widget">
  <tbody>
    <tr class="line2">
      <td>
        <?php print _txt('fd.de.gender'); ?>
      </td>
      <td>
        <?php
          $attrs['value'] = (isset($co_nsf_demographics) ? $co_nsf_demographics[0]['CoNsfDemographic']['gender'] : '');
          $attrs['empty'] = false;
          
          if($e) {
            print $this->Form->select('gender',
                                      $cm_texts[ $cm_lang ]['en.nsf.gender'],
                                      $attrs);
            
            if($this->Form->isFieldError('gender')) {
              print $this->Form->error('gender');
            }
          } else {
            print _txt('en.nsf.gender', null, $CoNsfDemographics[0]['CoNsfDemographic']['gender']);
          }
        ?>
      </td>
    </tr>
    <tr class="line1">
      <td>
        <?php print _txt('fd.de.citizen'); ?>
      </td>
      <td>
        <?php
          $attrs['value'] = (isset($co_nsf_demographics) ? $co_nsf_demographics[0]['CoNsfDemographic']['citizenship'] : '');
          $attrs['empty'] = false;
          
          if($e) {
            print $this->Form->select('citizenship',
                                      $cm_texts[ $cm_lang ]['en.nsf.citizen'],
                                      $attrs);
            
            if($this->Form->isFieldError('citizenship')) {
              print $this->Form->error('citizenship');
            }
          } else {
            print _txt('en.nsf.citizen', null, $CoNsfDemographics[0]['CoNsfDemographic']['citizenship']);
          }
        ?>
      </td>
    </tr>
    <tr class="line2">
      <td>
        <?php print _txt('fd.de.ethnic'); ?>
      </td>
      <td>
        <?php
          $attrs['value'] = (isset($co_nsf_demographics) ? $co_nsf_demographics[0]['CoNsfDemographic']['ethnicity'] : '');
          $attrs['empty'] = false;
          
          if($e) {
            print $this->Form->select('ethnicity',
                                      $cm_texts[ $cm_lang ]['en.nsf.ethnic'],
                                      $attrs);
            
            if($this->Form->isFieldError('ethnicity')) {
              print $this->Form->error('ethnicity');
            }
          } else {
            print _txt('en.nsf.ethnic', null, $CoNsfDemographics[0]['CoNsfDemographic']['ethnicity']);
          }
        ?>
      </td>
    </tr>
    <tr class="line1">
      <td>
        <?php print _txt('fd.de.race'); ?>
      </td>
      <td>
        <?php 
          $args = array('type'     => 'select',
                        'multiple' => 'checkbox',
                        'options'  => $optionDesc['race'],
                        'selected' => (isset($race_options) ? $race_options : array())
                       );
          print ($e ? $this->Form->input('race', $args)
                    : _txt('en.nsf.race',
                           null,
                           $CoNsfDemographics[0]['CoNsfDemographic']['race']));
        ?>
      </td>
    </tr>
    <tr class="line2">
      <td>
        <?php print _txt('fd.de.disab'); ?>
      </td>
      <td>
        <?php 
          $args = array('type'     => 'select',
                        'multiple' => 'checkbox',
                        'options'  => $optionDesc['disability'],
                        'selected' => (isset($disability_options) ? $disability_options : array())
                       );
          print ($e ? $this->Form->input('disability', $args)
                    : _txt('en.nsf.disab',
                           null,
                           $CoNsfDemographics[0]['CoNsfDemographic']['disability']));
        ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>

        <?php
        if($e) {
          print $this->Form->submit($submit_label);
          print $this->Form->button(_txt('op.reset'),
            array('type'=>'reset'));
        }
        ?>

      </td>
    </tr>
  </tbody>
</table>

<?php
  print $this->element("changelog");