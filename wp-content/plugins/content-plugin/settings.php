<?php

class LCMS {
    //==admin menu function==========
    public static function lcms_admin_menu() {
        add_menu_page('Content Templates', 'Content Templates', 'manage_options', 'lcms', 'lcms_dashboard', 'dashicons-menu');
        add_submenu_page(null, null, ' Template Item', 'manage_options', 'template-item', 'template_item');
    }

    public static function lcms_init() {
        //==admin menu==========
        add_action('admin_menu', array('LCMS', 'lcms_admin_menu'));
    }
}
add_action('plugins_loaded', 'lcms_init', 10, 0);

if (!function_exists('lcms_init')) {
    function lcms_init() {
        LCMS::lcms_init();
    }
}

if (is_admin()) {
    ob_start();
    ob_clean();
    session_start();
    // require_once LCM_PLUGIN_ADMIN_DIR . '/libraries/LCM_Notices.php';
    require_once LCM_PLUGIN_ADMIN_DIR . '/controllers/admin.php';
    require_once LCM_PLUGIN_ADMIN_DIR . '/models/LCM_model.php';
} else {
    'Oops! wrong page dude.';
}

function lcms_dashboard() {
    $module = 'home';
    if (isset($_GET['module'])) {
        $module = $_GET['module'];
    }
    $controllerName = 'LCM' . ucfirst($module);
    $expectedController = LCM_PLUGIN_ADMIN_DIR . '/controllers/' . $controllerName . '.php';
    $action = 'index'; // default action
    
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $controller = new $controllerName();
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }
        $controller->perform($action);
    }
}


function lcm_register_css_and_js(){
    //----frontend-----
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css'); 
    wp_enqueue_style( 'lcm_style', LCM_PLUGIN_FRONT_DIR_URL . '/views/assets/css/lcm_style.css' );
    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, true );
    wp_enqueue_script( 'lcm-js-script', LCM_PLUGIN_FRONT_DIR_URL . '/views/assets/js/lcm-js-script.js', null, null, true  );
    wp_enqueue_media ();
    wp_enqueue_script( 'tinymce_js', includes_url( 'js/tinymce/' ) . 'wp-tinymce.php', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'lcm_register_css_and_js' );

if (is_admin()) {
    function lcm_admin_css_and_js() {
        //----admin-----
        wp_enqueue_style('lcm_admin_style', LCM_PLUGIN_ADMIN_DIR_URL . '/views/assets/css/lcm_admin_style.css');
        wp_enqueue_script('lcm_admin_script', LCM_PLUGIN_ADMIN_DIR_URL . '/views/assets/js/lcm_admin_js.js', null, null, true);
    }
    add_action('admin_enqueue_scripts', 'lcm_admin_css_and_js');
}






