<?php
/**
 * Plugin Name: Percentage Tool Analyze
 * Plugin URI: 
 * Description: This plugin manages percentage tools.
 * Version: 1.0
 * Author: Manoj Roka
 * Author URI:  
 */
define( 'PTA_VERSION', '1.0' );

define( 'PTA_PLUGIN', __FILE__ );
define( 'PTA_PLUGIN_DIR_NAME', dirname( __FILE__ ) );
define( 'PTA_PLUGIN_BASENAME', plugin_basename( PTA_PLUGIN ) );
define( 'PTA_PLUGIN_DIR', untrailingslashit( dirname( PTA_PLUGIN ) ) );
define( 'PTA_PLUGIN_ADMIN_DIR', PTA_PLUGIN_DIR . '/admin' );
define( 'PTA_PLUGIN_FRONT_DIR', PTA_PLUGIN_DIR . '/frontend' );
define( 'PTA_PLUGIN_FRONT_DIR_URL', plugin_dir_url( __FILE__ ) . 'frontend');
define( 'PTA_PLUGIN_ADMIN_DIR_URL', plugin_dir_url( __FILE__ ) . 'admin');
define( 'PTA_PLUGIN_IMG_UPLOAD_BASE_DIR', wp_upload_dir()['baseurl']);
define( 'PTA_HOME_URL', get_home_url());

/**
 * MAIN
*/
//error_reporting(-1); ini_set('error_reporting', E_ALL); 
require_once PTA_PLUGIN_DIR. '/system/manage.php';


