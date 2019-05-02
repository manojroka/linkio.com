<?php
/**
 * Plugin Name: Content Templates
 * Plugin URI: 
 * Description: This plugin manages content of your wordpress website.
 * Version: 1.0
 * Author: Manoj Roka
 * Author URI:  
 */

define( 'LCM_VERSION', '1.0' );
define( 'LCM_PLUGIN', __FILE__ );
define( 'LCM_PLUGIN_DIR_NAME', dirname( __FILE__ ) );
define( 'LCM_PLUGIN_BASENAME', plugin_basename( LCM_PLUGIN ) );
define( 'LCM_PLUGIN_DIR', untrailingslashit( dirname( LCM_PLUGIN ) ) );
define( 'LCM_PLUGIN_ADMIN_DIR', LCM_PLUGIN_DIR . '/admin' );
define( 'LCM_PLUGIN_FRONT_DIR', LCM_PLUGIN_DIR . '/frontend' );
define( 'LCM_PLUGIN_FRONT_DIR_URL', plugin_dir_url( __FILE__ ) . 'frontend');
define( 'LCM_PLUGIN_ADMIN_DIR_URL', plugin_dir_url( __FILE__ ) . 'admin');
define( 'LCM_PLUGIN_IMG_UPLOAD_BASE_DIR', wp_upload_dir()['baseurl']);
define( 'LCM_PLUGIN_IMG_UPLOAD_BASE_PATH', wp_upload_dir()['basedir']);
define( 'LCM_HOME_URL', get_home_url());
define( 'HOME_URL', get_home_url());

/**
 * MAIN
 */
//error_reporting(-1); ini_set('error_reporting', E_ALL); 

require_once LCM_PLUGIN_DIR. '/system/control.php';
require_once LCM_PLUGIN_DIR. '/settings.php';
require_once LCM_PLUGIN_DIR. '/frontend/short_codes.php';
require_once LCM_PLUGIN_DIR. '/admin/lcm_admin_ajax.php';
require_once LCM_PLUGIN_DIR. '/frontend/ajax_handler.php';

