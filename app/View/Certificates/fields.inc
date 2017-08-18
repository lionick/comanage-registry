<?php
/**
 * COmanage Registry Certificate Fields
 *
 * Copyright (C) 2010-15 University Corporation for Advanced Internet Development, Inc.
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
 * @copyright     Copyright (C) 2010-15 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v0.1
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

  // Determine if fields are editable
  $e = false;
  
  if(($this->action == "add" && $permissions['add']) || ($this->action == "edit" && $permissions['edit']))
    $e = true;
    
  // We shouldn't get here if we don't have at least read permission, but check just in case
  
  if(!$e && !$permissions['view'])
    return(false);

  $idForBreadcrumbs = '';

  // Migrate the target person from a named argument to a form field
  if(isset($this->request->params['named']['copersonid'])) {
    print $this->Form->hidden('co_person_id', array('default' => filter_var($this->request->params['named']['copersonid'],FILTER_SANITIZE_SPECIAL_CHARS))) . "\n";
    $idForBreadcrumbs = filter_var($this->request->params['named']['copersonid'],FILTER_SANITIZE_SPECIAL_CHARS);
  } elseif(isset($this->request->data['Certificate']['co_person_id'])) {
    print $this->Form->hidden('co_person_id', array('default' => filter_var($this->request->data['Certificate']['co_person_id'],FILTER_SANITIZE_SPECIAL_CHARS))) . "\n";
    $idForBreadcrumbs = filter_var($this->request->data['Certificate']['co_person_id'],FILTER_SANITIZE_SPECIAL_CHARS);
  } elseif(isset($this->request->params['named']['orgidentityid'])) {
    print $this->Form->hidden('org_identity_id', array('default' => filter_var($this->request->params['named']['orgidentityid'],FILTER_SANITIZE_SPECIAL_CHARS))) . "\n";
    $idForBreadcrumbs = filter_var($this->request->params['named']['orgidentityid'],FILTER_SANITIZE_SPECIAL_CHARS);
  } elseif(isset($this->request->data['Certificate']['org_identity_id'])) {
    print $this->Form->hidden('org_identity_id', array('default' => filter_var($this->request->data['Certificate']['org_identity_id'],FILTER_SANITIZE_SPECIAL_CHARS))) . "\n";
    $idForBreadcrumbs = filter_var($this->request->data['Certificate']['org_identity_id'],FILTER_SANITIZE_SPECIAL_CHARS);
  }

  if(isset($this->params['named']['co']))
    print $this->Form->hidden('co_id', array('default' => filter_var($this->params['named']['co'],FILTER_SANITIZE_SPECIAL_CHARS))) . "\n";

  // Add breadcrumbs
  print $this->element("coCrumb");
  if(isset($this->request->params['named']['copersonid']) || isset($this->request->data['Certificate']['co_person_id'])) {
    // CO Person History
    $args = array();
    $args['plugin'] = null;
    $args['controller'] = 'co_people';
    $args['action'] = 'index';
    $args['co'] = $cur_co['Co']['id'];
    $this->Html->addCrumb(_txt('me.population'), $args);
    
    $args = array(
      'controller' => 'co_people',
      'action' => 'canvas',
      $idForBreadcrumbs);
    $this->Html->addCrumb(_txt('ct.co_people.1'), $args);

  } elseif(isset($this->request->params['named']['orgidentityid']) || isset($this->request->data['Certificate']['org_identity_id'])) {
    // Org ID History
    $args = array();
    $args['plugin'] = null;
    $args['controller'] = 'org_identities';
    $args['action'] = 'index';
    if(!$pool_org_identities) {
      $args['co'] = $cur_co['Co']['id'];
    }
    $this->Html->addCrumb(_txt('ct.org_identities.pl'), $args);
    
    $args = array(
      'controller' => 'orgIdentities',
      'action' => 'edit',
      $idForBreadcrumbs);
    $this->Html->addCrumb(_txt('ct.org_identities.1'), $args);
  }
  $crumbTxt = _txt('op.' . $this->action . '-a', array(_txt('ct.certificates.1')));
  $this->Html->addCrumb($crumbTxt);

  $l = 1;
?>
<table id="<?php print $this->action; ?>_certificate" class="ui-widget">
  <tbody>
    <tr class="line<?php print ($l % 2); $l++; ?>">
      <td>
        <?php print _txt('fd.certificate.subject'); ?><span class="required">*</span>
      </td>
      <td>
        <?php print ($e ? $this->Form->input('subject', array('class' => 'focusFirst')) : filter_var($certificates[0]['Certificate']['subject'],FILTER_SANITIZE_SPECIAL_CHARS)); ?>
      </td>
    </tr>
    <tr class="line<?php print ($l % 2); $l++; ?>">
      <td>
        <?php print _txt('fd.certificate.issuer'); ?>
      </td>
      <td>
        <?php print ($e ? $this->Form->input('issuer') : filter_var($certificates[0]['Certificate']['issuer'],FILTER_SANITIZE_SPECIAL_CHARS)); ?>
      </td>
    </tr>
    <tr class="line<?php print ($l % 2); $l++; ?>">
      <td>
        <?php print _txt('fd.type'); ?>
      </td>
      <td>
        <?php
          $attrs['value'] = (isset($certificates) ? $certificates[0]['Certificate']['type'] : "");
          $attrs['empty'] = false;

          if($e) {
            print $this->Form->select('type',
                                      $vv_available_types,
                                      $attrs);

            if($this->Form->isFieldError('type')) {
              print $this->Form->error('type');
            }
          } else {
            print _txt('en.certificate.type', null, filter_var($certificates[0]['Certificate']['type'],FILTER_SANITIZE_SPECIAL_CHARS));
          }
        ?>
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
<?php
  print $this->element("changelog");