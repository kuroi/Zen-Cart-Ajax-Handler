<?php
/**
 * page header file for the ajax sandbox
 *
 * @package AJAX Handler
 * @copyright Copyright 2011 Kuroi Web Design and Design
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU Public License v3
 */

require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

$product = zen_get_random_product();
extract($product);
