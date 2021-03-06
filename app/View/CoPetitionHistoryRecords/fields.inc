<?php
/**
 * COmanage Registry CO Petition History Record Fields
 *
 * Copyright (C) 2014 University Corporation for Advanced Internet Development, Inc.
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
 * @copyright     Copyright (C) 2014 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v0.9.1
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

  // Determine if fields are editable
  $e = false;
  
  if(($this->action == "add" && $permissions['add']))
    $e = true;
    
  // We shouldn't get here if we don't have at least read permission, but check just in case
  
  if(!$e && !$permissions['view'])
    return false;
  
  // Set up the hidden values
  
  if(isset($this->request->params['named']['copetitionid'])) {
    print $this->Form->hidden('co_petition_id',
                              array('default' => Sanitize::html($this->request->params['named']['copetitionid']))). "\n";
  }
  
  print $this->Form->hidden('action', array('default' => PetitionActionEnum::CommentAdded));
  print $this->Form->hidden('actor_co_person_id', array('default' => $this->Session->read('Auth.User.co_person_id')));

  // Add breadcrumbs
  print $this->element("coCrumb");
  $args = array();
  $args['plugin'] = null;
  $args['controller'] = 'co_petitions';
  $args['action'] = 'index';
  $args['co'] = $cur_co['Co']['id'];
  $args['sort'] = 'created';
  $args['Search.status'][] = StatusEnum::PendingApproval;
  $args['Search.status'][] = StatusEnum::PendingConfirmation;
  $this->Html->addCrumb(_txt('ct.petitions.pl'), $args);

  $args = array(
    'controller' => 'co_petitions',
    'action' => 'view',
    Sanitize::html($this->request->params['named']['copetitionid'])
  );
  $this->Html->addCrumb(_txt('op.view') . ' ' . _txt('ct.petitions.1'), $args);

  $this->Html->addCrumb(_txt('op.petition.comment'));

?>
<table id="<?php print $this->action; ?>_co_petition_history_record" class="ui-widget">
  <tbody>
    <tr class="line1">
      <td>
        <?php print _txt('fd.comment'); ?><span class="required">*</span>
      </td>
      <td>
        <?php print ($e
                     ? $this->Form->input('comment',
                                          array('class' => 'focusFirst',
                                                'size'  => '80'))
                     : ""); ?>
      </td>
    </tr>
    <tr>
      <td>
        <em><span class="required"><?php print _txt('fd.req'); ?></span></em><br />
      </td>
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
