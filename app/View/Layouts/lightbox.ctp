<?php
/**
 * COmanage Registry Lightbox Layout
 *
 * Copyright (C) 2015 University Corporation for Advanced Internet Development, Inc.
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
 * @copyright     Copyright (C) 2015 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry v1.0
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

  // As a general rule, all Registry pages are post-login and so shouldn't be cached
  header("Expires: Thursday, 10-Jan-69 00:00:00 GMT");
  header("Cache-Control: no-store, no-cache, max-age=0, must-revalidate");
  header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- <?php
    // Include version number, but only if logged in
    if($this->Session->check('Auth.User')) {
      print chop(file_get_contents(APP . "Config/VERSION"));
    }
    ?> -->
    <title><?php print _txt('coordinate') . ': ' . filter_var($title_for_layout,FILTER_SANITIZE_STRING)?></title>
    <?php print $this->Html->charset(); ?>
    <?php print $this->Html->meta('favicon.ico','/favicon.ico',array('type' => 'icon')); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />

    <!-- Include the comanage and jquery style sheets -->
    <?php
    print $this->Html->css('jquery/ui/css/comanage-theme/jquery-ui-1.10.0.comanage');
    print $this->Html->css('jquery/superfish/css/superfish');
    print $this->Html->css('comanage');
    print $this->Html->css('comanage-lightbox');
    ?>

    <!-- Get jquery code -->
    <?php
    print $this->Html->script('jquery/ui/js/jquery-1.9.0.js');
    print $this->Html->script('jquery/ui/js/jquery-ui-1.10.0.custom.min.js');
    print $this->Html->script('jquery/superfish/js/superfish.js');
    print $this->Html->script('jquery/spin.min.js');
    ?>

    <!-- Get timezone detection -->
    <?php print $this->Html->script('jstimezonedetect/jstz.min.js'); ?>
    <script type="text/javascript">
      // Determines the time zone of the browser client
      var tz = jstz.determine();
      // This won't be available for the first delivered page, but after that the
      // server side should see it and process it
      document.cookie = "cm_registry_tz_auto=" + tz.name() + "; path=/";
    </script>


    <?php if($this->here != '/registry/pages/eds/index'):
      // Don't load the following scripts when loading the Shib EDS. ?>
      <!-- noty scripts -->
      <?php
      print $this->Html->script('jquery/noty/jquery.noty.js');
      print $this->Html->script('jquery/noty/layouts/topCenter.js');
      print $this->Html->script('jquery/noty/themes/comanage.js');
      ?>
      <!-- COmanage JavaScript library and onload scripts -->
      <?php
      print $this->Html->script('comanage.js');
      print $this->element('javascript');
      ?>
    <?php endif // !eds ?>

      <!-- Include external files and scripts -->
      <?php
      print $this->fetch('meta');
      print $this->fetch('css');
      print $this->fetch('script');
      ?>
  </head>

  <body class="<?php print $this->params->controller . ' ' . $this->params->action ?>"
        onload="js_onload_call_hooks()">

    <div id="lightboxContent">
      <?php
        // insert the page internal content
        print $this->fetch('content');
      ?>
    </div>

    <?php if(Configure::read('debug') > 0): ?>
      <div>
        <?php print $this->element('sql_dump'); ?>
      </div>
    <?php endif; ?>
  </body>
</html>
