<?php
/**
 * COmanage Registry CO Petition Send Confirmation View
 *
 * Copyright (C) 2016 University Corporation for Advanced Internet Development, Inc.
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
 * @copyright     Copyright (C) 2016 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v1.1.0
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */
?>
<?php
  $params = array('title' => _txt('rs.ev.sent', array($vv_co_invite['CoInvite']['mail'])));
  print $this->element("pageTitle", $params);
?>

<p>
You are seeing this text because <b>debug</b> is true in the configuration file <b>app/Config/core.php</b>.
</p>
<p>
Email would be sent to <b><?php print $vv_co_invite['CoInvite']['mail']; ?></b> with the URL
<br />
<br />
<?php 
  $u = $this->Html->url(array('controller' => 'co_invites', 'action' => 'reply', $vv_co_invite['CoInvite']['invitation']), true);
  
  print $this->Html->link($u, $u);
?>
</p>
