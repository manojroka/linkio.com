<?php

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
 
function ag_admin_init() {
	// Enqueue styles
	wp_enqueue_style( ANCHOR_GENERATOR_NAME, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), ANCHOR_GENERATOR_VERSION, 'all' );
	
	// wp_enqueue_style( 'wp-color-picker' );
	// wp_enqueue_style('jquery-ui-css', plugin_dir_url( __FILE__ ) . 'jqueryui/1.8.2/themes/smoothness/jquery-ui.css', array(), ANCHOR_GENERATOR_VERSION, 'all' );
	// wp_enqueue_style( ANCHOR_GENERATOR_NAME, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), ANCHOR_GENERATOR_VERSION, 'all' );

	// Enqueue scripts
	// wp_enqueue_script('jquery-ui-datepicker');
	// wp_enqueue_script( ANCHOR_GENERATOR_NAME, plugin_dir_url( __FILE__ ) . 'js/admin.js', array( 'jquery', 'wp-color-picker' ), ANCHOR_GENERATOR_VERSION, false );
}

function ag_load_page() {
	require_once 'pages/dashboard.php';
}

function ag_admin_menu() {
	add_menu_page('Anchor Generator', 'Anchor Generator', 'manage_options', 'anchor_generator_dashboard', 'ag_load_page', 'dashicons-menu');
}

function start_anchor_generator() {
	add_action('admin_init', 'ag_admin_init');
	add_action('admin_menu', 'ag_admin_menu');
}
