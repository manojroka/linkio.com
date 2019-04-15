<?php 
require_once LCM_PLUGIN_FRONT_DIR . '/controllers/frontend.php';
require_once LCM_PLUGIN_FRONT_DIR . '/models/LCMF_model.php';

function lcm_content_scode_function($atts) {
    ob_start();
    $module = 'home';
    $action = 'index'; // default action
    $id = NULL;
    $limit = NULL;
    $page = '1';
    $filter = null;
    $submit_form = null;
    // Get Attributes
    $short_code_attributes = extract( shortcode_atts(
        array(
            'type' => '', // DEFAULT SLUG SET TO EMPTY
            'id' => NULL, // DEFAULT ID SET TO EMPTY 
            'template' => '', // DEFAULT TEMPLATE SET TO EMPTY
            'page' => '1', // DEFAULT PAGE SET TO EMPTY
            'filter' => NULL, // DEFAULT FILTER SET TO EMPTY
            'submit_form' => NULL, // DEFAULT SUBMIT FORM SET TO EMPTY
        ), $atts )
    );
    if( (($type != '') && ($id > '0')) ){
        if($type == 'list'){
            if($page > '1'){
                $limit = $limit*$page;
            }
            $module = 'home';
        }elseif ($type == 'item') {
            
            $module = $template;
            $action = 'detail';
        }elseif ($type == 'filter') {
            $module = 'home';
            $action = 'filter';
        }else {
            return 'wrong short code formate.';
        }
    } else {
        return 'wrong short code formate.';
    }                 
    $controllerName = 'LCMF' . ucfirst($module);
    $expectedController = LCM_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $fcontroller = new $controllerName();
        $fcontroller->perform($action, $id, $module, $limit, $filter, $submit_form);
    }
    return ob_get_clean();
}
add_shortcode('lcm_content', 'lcm_content_scode_function');   
    
    