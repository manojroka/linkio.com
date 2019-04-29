<?php 

function update_vote_count_function() {
    
    $action = $_POST['action']; //update_vote_count
    $vote_count = $_POST['vote_count'];
    unset($_POST['action']);
    $missing_required_attrs = !isset($_POST['item_id']) || !isset($_POST['template_id']) || !isset($_POST['module']);
    if ($missing_required_attrs) {
        $custom_data = array(
            'vote_count'=>$vote_count,
            'msg'=>'Failed',
        );
        wp_send_json_error($custom_data);
    } else {
        $module = trim($_POST['module']);
        $controllerName = 'LCMF' . ucfirst('home');
        $expectedController = LCM_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
        if (file_exists($expectedController)) {
            require_once $expectedController;
            $fcontroller = new $controllerName();
            $fcontroller->ajaxPerform($action, $module);
        }
    }
    exit;
}
add_action('wp_ajax_update_vote_count', 'update_vote_count_function');
add_action('wp_ajax_nopriv_update_vote_count', 'update_vote_count_function');

function lcm_item_submit_function() {
    
    $module = $_POST['module'];
    $action = 'submit_item';
    //$controllerName = 'LCMF' . ucfirst($module);
    $controllerName = 'LCMF' . ucfirst('home');
    $expectedController = LCM_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
    if (file_exists($expectedController)) {
        require_once $expectedController;
        $fcontroller = new $controllerName();
        $fcontroller->ajaxPerform($action, $module);
    }
    exit;
}
add_action('wp_ajax_lcm_item_submit', 'lcm_item_submit_function');
add_action('wp_ajax_nopriv_lcm_item_submit', 'lcm_item_submit_function');

function lcm_get_search_item_ids_function() {
    $module = $_POST['module'];
    $action = $_POST['action']; //lcm_get_search_item_ids
    unset($_POST['action']);
    $missing_required_attrs = !isset($_POST['template_id']) || !isset($_POST['module']);
    if ($missing_required_attrs) {
        $custom_data = array(
            'msg'=>'Something is missing.',
        );
        wp_send_json_error($custom_data);
    }else{        
        $controllerName = 'LCMF' . ucfirst('home');
        $expectedController = LCM_PLUGIN_FRONT_DIR . '/controllers/' . $controllerName . '.php';
        if (file_exists($expectedController)) {
            require_once $expectedController;
            $fcontroller = new $controllerName();
            ob_start();
            $fcontroller->ajaxPerform($action, $module);
            $output = ob_get_contents();
            ob_end_clean();
            wp_send_json_success(array('msg'=>$output));
        }
    }
    exit;
}
add_action('wp_ajax_lcm_get_search_item_ids', 'lcm_get_search_item_ids_function');
add_action('wp_ajax_nopriv_lcm_get_search_item_ids', 'lcm_get_search_item_ids_function');

