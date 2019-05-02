<?php


function lcm_tactic_category_function() {
    $module = $_POST['module'];
    $action = $_POST['perform_action']; //_category_add || _category_remove;
    $controllerName = 'LCM' . ucfirst($module);
    $expectedController = LCM_PLUGIN_ADMIN_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $fcontroller = new $controllerName();
        $fcontroller->perform($action);
    }
    exit;
}
add_action('wp_ajax_lcm_tactic_category', 'lcm_tactic_category_function');


function lcm_tool_type_function() {
    $module = $_POST['module'];
    $action = $_POST['perform_action']; //_type_add || _type_remove;
    $controllerName = 'LCM' . ucfirst($module);
    $expectedController = LCM_PLUGIN_ADMIN_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $fcontroller = new $controllerName();
        $fcontroller->perform($action);
    }
    exit;
}
add_action('wp_ajax_lcm_item_status_update', 'lcm_item_status_update_function');

function lcm_item_status_update_function() {
    $module = $_POST['module'];
    $action = $_POST['action']; //lcm_item_status_update
    $controllerName = 'LCM' . ucfirst('home');
    $expectedController = LCM_PLUGIN_ADMIN_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $fcontroller = new $controllerName();
        $fcontroller->perform($action);
    }
    exit;
}
add_action('wp_ajax_lcm_item_status_update', 'lcm_item_status_update_function');
