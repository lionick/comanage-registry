/**
* COmanage Registry Default JavaScript
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
* @since         COmanage Registry v0.1
* @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
* @version       1.0
*/

// On page load, call any defined initialization functions.
// Make sure function is defined before calling.
function js_onload_call_hooks() {
  if(window.js_local_onload) {
    js_local_onload();
  }
}

// On form submit, call any defined functions.
// Make sure function is defined before calling.
function js_onsubmit_call_hooks() {
  if(window.js_local_onsubmit) {
    js_local_onsubmit();
  }
}

// Generate flash notifications for messages
function generateFlash(text, type) {
  var n = noty({
    text: text,
    type: type,
    dismissQueue: true,
    layout: 'topCenter',
    theme: 'comanage'
  });
}

// Returns an i18n string with tokens replaced.
// For use in JavaScript dialogs.
// text          - body text for the array with tokens {0}, {1}, etc
// replacements  - Array of strings to replace tokens
function replaceTokens(text,replacements) {
  var processedString = text;
  for (var i = 0; i < replacements.length; i++) {
    processedString = processedString.replace("{"+i+"}", replacements[i]);
  }
  return processedString;
}

// Generate a dialog box confirming <txt>.  On confirmation, forward to <url>.
// txt                - body text           (string, required)
// url                - forward url         (string, required)
// confirmbtxt        - confirm button text (string, optional)
// cancelbtxt         - cancel button text  (string, optional)
// titletxt           - dialog title text   (string, optional)
// tokenReplacements  - strings to replace tokens in dialog body text (array, optional)
function js_confirm_generic(txt, url, confirmbtxt, cancelbtxt, titletxt, tokenReplacements) {

  var bodyText = txt;
  var forwardUrl = url;
  var confbutton = confirmbtxt;
  var cxlbutton = cancelbtxt;
  var title = titletxt;
  var replacements = tokenReplacements;

  // Perform token replacements on the body text if they exist
  if (replacements != undefined) {
    bodyText = replaceTokens(bodyText,replacements);
  }

  // Set defaults for confirm, cancel, and title
  // Values for the default variables are set globally
  if(confbutton == undefined) {
    confbutton = defaultConfirmOk;
  }
  if(cxlbutton == undefined) {
    cxlbutton = defaultConfirmCancel;
  }
  if(title == undefined) {
    title = defaultConfirmTitle;
  }

  // Set the title of the dialog
  $("#dialog").dialog("option", "title", title);

  // Set the body text of the dialog
  $("#dialog-text").text(bodyText);

  // Set the dialog buttons
  var dbuttons = {};
  dbuttons[cxlbutton] = function() { $(this).dialog("close"); };
  dbuttons[confbutton] = function() { window.location = forwardUrl; };
  $("#dialog").dialog("option", "buttons", dbuttons);

  // Open the dialog
  $('#dialog').dialog('open');
}
