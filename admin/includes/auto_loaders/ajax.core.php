<?php
/**
 * autoloader array for ajax handler
 * based on standard admin autoload array, with unnecessary elements dropped
 *
 * @package InitSystem and AJAX handler
 * @copyright Copyright 2011 Kuroi Web Design and Development
 * @copyright Copyright Portions 2003-2006 Zen Cart Development Team
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU Public License v3
 */

$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'class.base.php');
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'class.notifier.php');
$autoLoadConfig[0][] = array('autoType'=>'classInstantiate',
                             'className'=>'notifier',
                             'objectName'=>'zco_notifier');
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'sniffer.php');
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'logger.php',
                             'classPath'=>DIR_WS_CLASSES);
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'shopping_cart.php');
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'products.php');
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'table_block.php',
                             'classPath'=>DIR_WS_CLASSES);
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'box.php',
                             'classPath'=>DIR_WS_CLASSES);
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'message_stack.php',
                             'classPath'=>DIR_WS_CLASSES);
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'split_page_results.php',
                             'classPath'=>DIR_WS_CLASSES);
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'object_info.php',
                             'classPath'=>DIR_WS_CLASSES);
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'class.phpmailer.php');
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'class.smtp.php');
$autoLoadConfig[0][] = array('autoType'=>'class',
                             'loadFile'=>'upload.php',
                             'classPath'=>DIR_WS_CLASSES);
/**
 * Breakpoint 10.
 *
 */
$autoLoadConfig[10][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_file_db_names.php');
$autoLoadConfig[10][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_database.php');
$autoLoadConfig[10][] = array('autoType'=>'require',
                              'loadFile'=>DIR_FS_CATALOG . DIR_WS_INCLUDES . 'version.php');
/**
 * Breakpoint 20.
 *
 */
$autoLoadConfig[20][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_db_config_read.php');
/**
 * Breakpoint 30.
 *
 */
$autoLoadConfig[30][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_gzip.php');
$autoLoadConfig[30][] = array('autoType'=>'classInstantiate',
                              'className'=>'sniffer',
                              'objectName'=>'sniffer');
/**
 * Breakpoint 40.
 *
 */
$autoLoadConfig[40][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_general_funcs.php');
$autoLoadConfig[40][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_tlds.php');
/**
 * Breakpoint 60.
 *
 */
$autoLoadConfig[60][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_sessions.php');
/**
 * Breakpoint 70.
 *
 */
$autoLoadConfig[70][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_languages.php');
/**
 * Breakpoint 80.
 *
 */
$autoLoadConfig[80][] = array('autoType'=>'init_script',
                              'loadFile'=>'init_templates.php');
/**
 * Breakpoint 90.
 *
 */
$autoLoadConfig[90][] = array('autoType'=>'classInstantiate',
                              'className'=>'products',
                              'objectName'=>'zc_products');
$autoLoadConfig[90][] = array('autoType'=>'require',
                              'loadFile'=>DIR_WS_FUNCTIONS . 'localization.php');
/**
 * Breakpoint 100.
 *
 */
$autoLoadConfig[100][] = array('autoType'=>'classInstantiate',
                               'classPath'=>DIR_WS_CLASSES,
                               'className'=>'messageStack',
                               'objectName'=>'messageStack');
/**
 * Breakpoint 120.
 *
 */
$autoLoadConfig[120][] = array('autoType'=>'init_script',
                               'loadFile'=>'init_special_funcs.php');

/**
 * Breakpoint 130.
 *
 */
$autoLoadConfig[130][] = array('autoType'=>'init_script',
                               'loadFile'=>'init_category_path.php');
/**
 * Breakpoint 140.
 *
 */
$autoLoadConfig[140][] = array('autoType'=>'init_script',
                               'loadFile'=>'init_errors.php');
/**
 * Breakpoint 150.
 *
 */
$autoLoadConfig[150][] = array('autoType'=>'init_script',
                               'loadFile'=>'init_admin_auth.php');
/**
 * Breakpoint 160.
 *
 */
$autoLoadConfig[160][] = array('autoType'=>'require',
                               'loadFile'=>DIR_FS_CATALOG . DIR_WS_FUNCTIONS . 'audience.php');
