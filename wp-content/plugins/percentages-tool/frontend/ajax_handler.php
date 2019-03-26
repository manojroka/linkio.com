<?php

function pta_generate_url_list_function() {    
    
    $module = 'home';
    $action = $_POST['action']; //pta_generate_url_list
    $controllerName = 'PTAF' . ucfirst($module);
    $expectedController = PTA_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $ptaf_controller = new $controllerName();
        $ptaf_controller->do_action($action, 'return_as_html');
    }
    exit;
}
add_action('wp_ajax_pta_generate_url_list', 'pta_generate_url_list_function');
add_action('wp_ajax_nopriv_pta_generate_url_list', 'pta_generate_url_list_function');

function pta_ajax_page_sub_type_name_function() {    
    
    $module = 'home';
    $action = $_POST['action']; //pta_ajax_page_sub_type_name
    $controllerName = 'PTAF' . ucfirst($module);
    $expectedController = PTA_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $ptaf_controller = new $controllerName();
        $ptaf_controller->do_action($action);
    }
    exit;
}
add_action('wp_ajax_pta_ajax_page_sub_type_name', 'pta_ajax_page_sub_type_name_function');
add_action('wp_ajax_nopriv_pta_ajax_page_sub_type_name', 'pta_ajax_page_sub_type_name_function');

function pta_ajax_get_ideal_percent_function() {    
    
    $module = 'home';
    $action = $_POST['action']; //pta_ajax_get_ideal_percent
    $controllerName = 'PTAF' . ucfirst($module);
    $expectedController = PTA_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $ptaf_controller = new $controllerName();
        $ptaf_controller->do_action($action);
    }
    exit;
}
add_action('wp_ajax_pta_ajax_get_ideal_percent', 'pta_ajax_get_ideal_percent_function');
add_action('wp_ajax_nopriv_pta_ajax_get_ideal_percent', 'pta_ajax_get_ideal_percent_function');




