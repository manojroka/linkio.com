<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LCMTool extends LCMAdmin{
    
    function __construct() {
        parent::__construct();
        $model_file = 'LCMTool_model';
        $expected_model_file = LCM_PLUGIN_ADMIN_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->t_model = new $model_file();
        }
    }
    
    public function index() {
        
        $this->data['data'] = $this->t_model->get_all_tool_templates();        
        $this->page = 'tool/list';
    }
    
    function create_new() {
        if(isset($_POST) && isset($_POST['submit'])){
            
            $result = $this->t_model->add_new_tool();
            if($result['status'] === TRUE){
                $this->flash_notice->set_flash('success','<strong>Success:</strong> Successfully added data.');
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
            } else {
                $this->flash_notice->set_flash('error','<strong>Error:</strong>' .$result['last_error']);
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&action=create_new&msg" );
            } 
        }
        $this->data['data'] = $this->t_model->get_tool_template();
        $this->page = 'tool/add';
    }
    
    function edit() {
        if(isset($_POST) && isset($_POST['submit'])){
            
            $result = $this->t_model->update_tool();
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
        $this->data['data'] = $this->t_model->get_tool();
        $this->data['data']->types = $this->t_model->get_all_types();
        $this->page = 'tool/edit';
    }
    
    function delete() {
        $delete_status = $this->t_model->delete_by_id();
        $this->flash_notice->set_flash('success','<strong>Success: </strong>' .'You have successfully deleted');
        wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
    }
    
    function _type_add() {
        $result = $this->t_model->add_new_type();
        if($result['status']== TRUE){ 
            $result['types'] = $this->t_model->get_all_types();
        }
        echo json_encode($result);
        exit;
    }
    
    function _type_remove() {
        $result = $this->t_model->remove_types();
        if($result['status']== TRUE){ 
            $result['types'] = $this->t_model->get_all_types();
        }
        echo json_encode($result);
        exit;
    }
}
