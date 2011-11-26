<?php
/**
 * database queries for the ajax sandbox
 *
 * @package AJAX Handler
 * @copyright Copyright 2011 Kuroi Web Design and Development
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU Public License v3
 */

function zen_get_random_product()
{
  // first we read the data we want from a single product chosen at random and load them into the retVal var ready to be returned
  global $db;
  $sql = "SELECT p.products_id, p.products_image, pd.products_name
          FROM " . TABLE_PRODUCTS . " p
          LEFT JOIN " . TABLE_PRODUCTS_DESCRIPTION . " pd ON pd.products_id = p.products_id
          ORDER BY RAND()
          LIMIT 1";
  $result = $db->Execute($sql);
  $retVal = $result->fields;

  // then we check if that product has an image and either way tweal the retVal image value to add the images path
  if (!empty($retVal['products_image']) && file_exists(DIR_FS_CATALOG_IMAGES . $retVal['products_image']))
  {
    $retVal['products_image'] = DIR_WS_CATALOG_IMAGES . $retVal['products_image'];
  } else
  {
    $retVal['products_image'] = DIR_WS_CATALOG_IMAGES . 'no_picture.gif';
  }

  // finally we return the image extracted and tweaked to the place that called this function
  return $retVal;
}
