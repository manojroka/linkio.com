<?php
/**
 * The Tools List bootstrap file
 *
 * This file is used by WordPress to show the plugin info in the admin area.
 * This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://linkio.com
 * @since             0.1.0
 * @package           Tools_List
 *
 * @wordpress-plugin
 * Plugin Name:       Tools List
 * Description:       Lite approach to SEO Tools management.
 * Version:           0.1.0
 * Author:            Damyan Mirchev - Exigio Ltd.
 * Author URI:        http://exigio.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tools-list
 * Domain Path:       /languages
 */
 
// Activate for temp low-risk tests
// if($_SERVER['REMOTE_ADDR'] != '95.87.220.53')
	// return;
 
// If this file is called directly, abort.
if(!defined( 'WPINC' )) {
	die;
}

/**
 * Load defines & versions
 */
require_once('defined.php');
require_once('versions.php');

/**
 * Load external files
 */
require_once('utils/class-notices.php');
require_once('utils/validation.php');
require_once('utils/js-files.php');
 
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-activator.php
 */
function activate_tools_list() {
	
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator.php
 */
function deactivate_tools_list() {
	
}

/**
 * The code that runs during plugin deinstallation.
 * This action is documented in includes/class-uninstaller.php
 */
function uninstall_tools_list() {
	
}

register_activation_hook( 	__FILE__, 'activate_tools_list' 	);
register_deactivation_hook( __FILE__, 'deactivate_tools_list' 	);
register_uninstall_hook( 	__FILE__, 'uninstall_tools_list' 	);


/**
 * MAIN
 */
require_once 'start-tools-list.php';
start_tools_list();