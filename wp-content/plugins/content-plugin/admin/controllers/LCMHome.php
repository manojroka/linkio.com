<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LCMHome extends LCMAdmin{
    
    function __construct() {
        parent::__construct();
        $model_file = 'LCMHome_model';
        $expected_model_file = LCM_PLUGIN_ADMIN_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->h_model = new $model_file();
        }
    }
    
    public function index() {
        $this->data['data'] = $this->h_model->get_all_home_templates();
        $this->page = 'home/list';
    }
    
    function create_new() {
        if(isset($_POST) && isset($_POST['submit'])){
            if(($_POST['template_name'] == '') || ($_POST['template_name'] == NULL) || ($_POST['module_id'] <= '0') ){   
                $this->flash_notice->set_flash('error','Please enter the template name');
                wp_redirect( "admin.php?page=lcms&msg" );
            } else {
                $module = $this->h_model->single_module_detail();
                $result = $this->h_model->add_new_home();
                if($result['status'] === TRUE){
                    $this->flash_notice->set_flash('success','<strong>Success:</strong> A new content template of type '.$module['modules_detail']->name.' is successfully created.');
                    wp_redirect( "admin.php?page=lcms&msg" );
                } else {
                    $this->flash_notice->set_flash('error','<strong>Error:</strong>' .$result['last_error']);
                    wp_redirect( "admin.php?page=lcms&msg" );
                }
            }
        }
        $this->data['data'] = $this->h_model->get_all_home_templates();
        $this->page = 'home/list';
    }
    
    function edit() {
        
        if(isset($_POST) && isset($_POST['submit'])){      
            $result = $this->h_model->update_home();
            if($result['status'] === TRUE){ 
                if($result['rows_affected'] > '0'){
                    $this->flash_notice->set_flash('success',$_POST['template_name'].' data successfully saved.');
                    wp_redirect( "admin.php?page=lcms&msg" );
                } elseif($result['rows_affected'] == '0') {
                    $this->flash_notice->set_flash('info','<strong>Info: </strong> you did not changed anything on '.$_POST['template_name'].'.');
                    wp_redirect( "admin.php?page=lcms&msg" );
                }
            } else {
                $this->flash_notice->set_flash('error',$result['last_error']);
                wp_redirect( "admin.php?page=lcms&msg" );
            }
        }
        $this->data['data'] = $this->h_model->get_home();
        $this->page = 'home/edit';
    }
    
    function delete() {
        $delete_status = $this->h_model->delete_by_id();
        $this->flash_notice->set_flash('success','<strong>Success: </strong>' .'You have successfully deleted');
        wp_redirect( "admin.php?page=lcms&msg" );
    }
}
