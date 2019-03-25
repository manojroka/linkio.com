<?php

class LCMQuote extends LCMAdmin{
    
    function __construct() {
        parent::__construct();
        $model_file = 'LCMQuote_model';
        $expected_model_file = LCM_PLUGIN_ADMIN_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->q_model = new $model_file();
        }
    }
    
    public function index() {
        
        $this->data['data'] = $this->q_model->get_all_quote_templates();        
        $this->page = 'quote/list';
    }
    
    function create_new() {
        if(isset($_POST) && isset($_POST['submit'])){
            $result = $this->q_model->add_new_quote();
            if($result['status'] === TRUE){
                $this->flash_notice->set_flash('success','<strong>Success:</strong> Successfully added data.');
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
            } else {
                $this->flash_notice->set_flash('error','<strong>Error:</strong>' .$result['last_error']);
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&action=create_new&msg" );
            }
        }
        $this->data['data'] = $this->q_model->get_quote_template();
        $this->page = 'quote/add';
    }
    
    function edit() {
        if(isset($_POST) && isset($_POST['submit'])){
            $result = $this->q_model->update_quote();
            if($result['status'] === TRUE){   
                if($result['rows_affected'] > '0'){
                    $this->flash_notice->set_flash('success','<strong>Success:</strong> data successfully saved.');
                    wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&id={$_GET['id']}&action=edit&msg" );
                } elseif($result['rows_affected'] == '0') {
                    $this->flash_notice->set_flash('info','<strong>Info:</strong> You did not changed anythings.');
                    wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&id={$_GET['id']}&action=edit&msg" );
                }
            } else {
                $this->flash_notice->set_flash('error','<strong>Error:</strong>' .$result['last_error']);
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&id={$_GET['id']}&action=edit&msg" );
            }
        }
        $this->data['data'] = $this->q_model->get_quote();
        $this->page = 'quote/edit';
    }
    
    
    function delete() {
        $delete_status = $this->q_model->delete_by_id();
        $this->flash_notice->set_flash('success','<strong>Success: </strong>' .'You have successfully deleted');
        wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
    }
}
