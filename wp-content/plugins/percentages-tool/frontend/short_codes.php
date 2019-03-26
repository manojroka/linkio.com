<?php require_once PTA_PLUGIN_FRONT_DIR . '/controllers/frontend.php';


function pta_percentages_tool_analysis_shortcode_function(){
    ob_start();
    $module = 'home';
    $action = 'index';
    $controllerName = 'PTAF' . ucfirst($module);
    $expectedController = PTA_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $ptaf_controller = new $controllerName();
        $ptaf_controller->do_action($action);
    }
    return ob_get_clean();
}
add_shortcode('percentages_tool_analysis', 'pta_percentages_tool_analysis_shortcode_function');   