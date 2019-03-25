<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LCMTactic extends LCMAdmin{
    
    function __construct() {
        parent::__construct();
        $model_file = 'LCMTactic_model';
        $expected_model_file = LCM_PLUGIN_ADMIN_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->t_model = new $model_file();
        }
    }
    
    public function index() {
        
        $this->data['data'] = $this->t_model->get_all_tactic_templates();        
        $this->page = 'tactic/list';
    }
    
    function create_new() {
        if(isset($_POST) && isset($_POST['submit'])){
            
            $result = $this->t_model->add_new_tactic();
            if($result['status'] === TRUE){
                $this->flash_notice->set_flash('success','<strong>Success:</strong> Successfully added data.');
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
            } else {
                $this->flash_notice->set_flash('error','<strong>Error:</strong>' .$result['last_error']);
                wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&action=create_new&msg" );
            }  
        }
        $this->data['data'] = $this->t_model->get_tactic_template();
        $this->page = 'tactic/add';
    }
    
    function edit() {
        if(isset($_POST) && isset($_POST['submit'])){      
            $result = $this->t_model->update_tactic();
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
        $this->data['data'] = $this->t_model->get_tactic();
        $this->data['data']->categories = $this->t_model->get_all_categories();
        $this->page = 'tactic/edit';
    }
    
    function delete() {
        $delete_status = $this->t_model->delete_by_id();
        $this->flash_notice->set_flash('success','<strong>Success: </strong>' .'You have successfully deleted');
        wp_redirect( "admin.php?page=lcms&module={$_GET['module']}&mid={$_GET['mid']}&templateid={$_GET['templateid']}&msg" );
    }
    
    function _category_add() {
        $result = $this->t_model->add_new_category();
        if($result['status']== TRUE){ 
            $result['categories'] = $this->t_model->get_all_categories();
        }
        echo json_encode($result);
        exit;
    }
    
    function _category_remove() {
        $result = $this->t_model->remove_categories();
        if($result['status']== TRUE){ 
            $result['categories'] = $this->t_model->get_all_categories();
        }
        echo json_encode($result);
        exit;
    }
}
