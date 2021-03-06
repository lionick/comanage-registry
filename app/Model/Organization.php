<?php
/**
 * COmanage Registry Organization Model
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

class Organization extends AppModel {
  // Define class name for cake
  public $name = "Organization";
  
  // Current schema version for API
  public $version = "1.0";
  
  // Association rules from this model to other models
  
  // Default display field for cake generated views
  public $displayField = "name";
  
  // Default ordering for find operations
  public $order = array("name");
  
  // Validation rules for table elements
  public $validate = array(
    'name' => array(
      'rule' => 'notBlank',
      'required' => true,
      'message' => 'A name must be provided'
    ),
    'domain' => array(
      'rule' => '/.*/',
      'required' => false,
      'allowEmpty' => true
    ),
    'directory' => array(
      'rule' => '/.*/',
      'required' => false,
      'allowEmpty' => true
    ),
    'search_base' => array(
      'rule' => '/.*/',
      'required' => false,
      'allowEmpty' => true
    ),
  );
}
