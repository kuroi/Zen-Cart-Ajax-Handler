<?php
/**
 * ajax.php is used to as a front controller for ajax requests
 *
 * @package AJAX handler
 * @copyright Copyright 2011 Kuroi Web Design and Development
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU Public License v3
 */

// load common stuff
$loaderPrefix = 'ajax';
require('includes/application_top.php');

// initialise the ajax response array - this will be loaded with vars to be returned in json format to the calling page
$ajax_response = array();
$ajax_response['error'] = FALSE;

// if it exists, include language file for this ajax handler
if (file_exists(DIR_FS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $_POST['handler'] . '.php'))
{
  require_once(DIR_FS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $_POST['handler'] . '.php');
}

// include the ajax handler, or if it can't be found, return an error
if (file_exists(DIR_FS_ADMIN . DIR_WS_AJAX_HANDLERS . $_POST['handler'] . '.php'))
{
  require_once(DIR_FS_ADMIN . DIR_WS_AJAX_HANDLERS . $_POST['handler'] . '.php');
} else
{
  $ajax_response['error'] = 'fatal error: ajax handler not found';
}

// return the responses garnered earlier and close off the "page"
echo json_encode($ajax_response);
require(DIR_WS_INCLUDES . 'application_bottom.php');