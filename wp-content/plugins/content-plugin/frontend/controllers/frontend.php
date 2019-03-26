<?php

//namespace admin;

/**
 * template class for page controllers
 * Class Page
 */
class LCMfrontend {
    public $page;
    public $hasLayout;
    public $data;
    public $id;
    public $item_id;
    public $template_id;
    public $module_id;

    public function __construct() {
        //add_action ('wp_loaded', array(&$this,'redirect'),1);
        $this->page = NULL;
        $this->hasLayout = TRUE;
        $this->data = array();
        $this->id = NULL;
        $this->limit = '';
        $this->filter = NULL;
        $this->lcmf_model = NULL;
        $this->submit_form = NULL;
    }

    /**
     * controls the lifecycle of the controller
     * @param string $action
     */
    public function perform($action = 'index', $id = null, $module = null, $limit = null, $filter = null, $submit_form = null) {
        
        //-------load model start--------
        $model_file = 'LCMF' . ucfirst($module).'_model';
        $expected_model_file = LCM_PLUGIN_FRONT_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->lcmf_model = new $model_file();
        }
        //--------load model end---------
        
        $this->id = $id;
        if($limit > 0){
            $this->limit = $limit;
        }
        if($filter == 'y'){
            $this->filter = $filter;
        }
        if($submit_form == 'y'){
            $this->submit_form = $submit_form;
        }
        
        $this->$action();
        if ($this->hasLayout) {
            $this->renderHttpResponse();
        }
    }

    private function renderHttpResponse() {
        //LCMS::seo_assets_admin_init();
        if(isset($this->data)){
            if($this->data != NULL){
                extract($this->data);
            }
        }
        
        if($this->page != NULL){
            require_once LCM_PLUGIN_FRONT_DIR . '/views/include/' . 'utls' . '.php';
            require_once LCM_PLUGIN_FRONT_DIR . '/views/include/' . 'common-widgets' . '.php';
            $view = LCM_PLUGIN_FRONT_DIR . '/views/' . $this->page . '.php';
            if (file_exists($view)) {
                require_once $view;
            } else {
                echo ' 404 not found. ' . $view;
            }
        }
        
    }
    
    public function ajaxPerform($action = 'index', $module = null, $item_id=null, $template_id=null, $module_id=null) {
        //-------load model start--------
        $this->item_id = $item_id;
        $this->template_id = $template_id;
        $this->module_id = $module_id;
        $model_file = 'LCMF' . ucfirst($module) . '_model';
        $expected_model_file = LCM_PLUGIN_FRONT_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->lcmf_model = new $model_file();
        }
        $this->$action();
        if ($this->hasLayout) {
            $this->renderHttpResponse();
        }
    }

}

