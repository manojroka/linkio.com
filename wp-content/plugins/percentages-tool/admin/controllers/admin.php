<?php
/**
 * PTAadmin class for page controllers
 * Class Page
 */
class PTAadmin {
    
    public $page;
    public $hasLayout;
    public $data;

    public function __construct() {   
        $this->page = '';
        $this->hasLayout = TRUE;
        $this->data = [];
    }
    /**
     * controls the lifecycle of the controller
     * @param string $action
     */
    public function do_action($action = 'index') {
        $this->$action();
        if ($this->hasLayout) {
            $this->renderHttpResponse();
        }
    }

    private function renderHttpResponse() {
        
        if($this->page != ''){
            $view = PTA_PLUGIN_ADMIN_DIR . '/views/' . $this->page . '.php';
            if (file_exists($view)) {
                if(isset($this->data)){
                    if($this->data != NULL){
                        extract($this->data);
                    }
                }
                require_once $view;
            } else {
                echo ' 404 not found. ' . $view;
            }
        }
    }
    

}

