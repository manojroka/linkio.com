<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Websites | Templates
 * and open the template in the editor.
 */
class LCMWebsite extends LCMAdmin{
    
    function __construct() {
        parent::__construct();
        $model_file = 'LCMWebsite_model';
        $expected_model_file = LCM_PLUGIN_ADMIN_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->t_model = new $model_file();
        }
    }
    
    public function index() {
        
        $this->data['data'] = $this->t_model->get_all_website_templates();        
        $this->page = 'website/list';
    }
    
    function create_new() {
        
        $this->flash_notice->set_i_values();
        if(isset($_POST) && isset($_POST['submit'])){
            
            $result = $this->t_model->add_new_website();
            if($result['status'] === TRUE){
                $this->flash_notice->set_flash('success','<strong>Success:</strong> Successfully added data.');
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
            } else {
                $this->flash_notice->set_flash('error','<strong>Error:</strong>' .$result['last_error']);
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&action=create_new&msg" );
            }   
        }
        $this->data['data'] = $this->t_model->get_website_template();
        $this->page = 'website/add';
    }
    
    function edit() {
        if(isset($_POST) && isset($_POST['submit'])){
            $result = $this->t_model->update_website();
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
        $this->data['data'] = $this->t_model->get_website();
        $this->page = 'website/edit';
    }
    
    function delete() {
        $delete_status = $this->t_model->delete_by_id();
        $this->flash_notice->set_flash('success','<strong>Success: </strong>' .'You have successfully deleted');
        wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
    }
}
