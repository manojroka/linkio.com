<?php

//namespace admin;

/**
 * template class for page controllers
 * Class Page
 */
class LCMadmin {

    public $flash_notice;
    public $page;
    public $hasLayout;
    public $data;

    public function __construct() {
        //add_action ('wp_loaded', array(&$this,'redirect'),1);
        
        $Db_file = 'DB_Connect';
        $expectedDb_file = LCM_PLUGIN_ADMIN_DIR . '/libraries/' . $Db_file . '.php';
        if (file_exists($expectedDb_file)) {
            require_once $expectedDb_file;
            $this->db = new $Db_file();
            $this->table_prefix = $this->db->get_table_prefix();
        }
        $Notice_file = 'LCM_Notices';
        $expectedNotice_file = LCM_PLUGIN_ADMIN_DIR . '/libraries/' . $Notice_file . '.php';
        if (file_exists($expectedNotice_file)) {
            include $expectedNotice_file;
            $this->flash_notice = new $Notice_file();
            
        }
        $this->page = 'index';
        $this->hasLayout = TRUE;
        $this->data = [];
    }

    /**
     * controls the lifecycle of the controller
     * @param string $action
     */
    public function perform($action = 'index') {
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
        require_once LCM_PLUGIN_ADMIN_DIR . '/views/include/' . 'dropdown_selector' . '.php';
        require_once LCM_PLUGIN_ADMIN_DIR . '/views/include/lcm-notice.php';
        require_once LCM_PLUGIN_ADMIN_DIR . '/views/include/template.php';
        $view = LCM_PLUGIN_ADMIN_DIR . '/views/pages/' . $this->page . '.php';
        if (file_exists($view)) {
            require_once $view;
        } else {
            echo ' 404 not found. ' . $view;
        }
    }
    

}

