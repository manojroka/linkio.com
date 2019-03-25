<?php

class PTAS {
    //==admin menu function==========
    public static function ptas_admin_menu() {
        add_menu_page('Percentages Tool', 'Percentages Tool', 'manage_options', 'percentages-tool', 'ptas_dashboard', 'dashicons-menu');
    }
    public static function ptas_init() {
        //==admin menu==========
        add_action('admin_menu', array('PTAS', 'ptas_admin_menu'));
    }
}
if (!function_exists('ptas_init')) {
    function ptas_init() {
        PTAS::ptas_init();
    }
}
add_action('plugins_loaded', 'ptas_init', 10, 0);



if (is_admin()) {
    ob_start();
    ob_clean();
    //session_start();
    require_once PTA_PLUGIN_ADMIN_DIR . '/controllers/admin.php';
} else {    
    'Oops! wrong page dude.';
}



function ptas_dashboard() {
    
    $module = 'dashboard'; // default module
    $action = 'index'; // default action
    $controllerName = 'PTA' . ucfirst($module);
    $expectedController = PTA_PLUGIN_ADMIN_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $controller = new $controllerName();
        $controller->do_action($action);
    }
}


