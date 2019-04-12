<?php

class LCMFWebsite_model extends LCMF_model{
        
    function get_website_detail_by_id($id) {
        
        $query = "SELECT ltw.*, lmt.template_name AS module_template_name, lm.name AS module_name, lm.slug AS module "
            . "FROM `".$this->table_prefix."lcm_template_websites` AS ltw "
            . "LEFT JOIN `".$this->table_prefix."lcm_module_templates` AS lmt ON ltw.template_id = lmt.id "
            . "LEFT JOIN `".$this->table_prefix."lcm_modules` AS lm ON ltw.module_id = lm.id "
            . "WHERE ltw.id = ".$id."";
        return $this->db->lcm_db_result($query,'row_as_object');    
    }
    
    function save_item() {
        
        $post_data = $_POST;
        //---upload image------
        $image_upload = $this->upload_image();
        if(($image_upload != FALSE) && ($image_upload['status'] != FALSE) ){
            $post_data['website_logo'] = $image_upload['status_id'];
        } else {
            return $image_upload;
        }
        
        $is_validate = $this->website_validation($post_data);
        if($is_validate != FALSE){
            return $is_validate;
        }
        
        $data = $this->website_sanitize($post_data);
        return $this->save_new_item($this->table_prefix.'lcm_template_'.$post_data["module"].'s', $data);
    }
    
    function upload_image() {
        
        $result = array(
            'status'=>TRUE,
            'status_id'=> null,
            'rows_affected'=>'Image Is not Uploaded..'
        );
        if(isset($_FILES)){
            if($_FILES['website_logo']['name'] != '' || $_FILES['website_logo']['name'] != NULL){
                $upload_directory = wp_upload_dir();
                $db_sub_directory = $upload_directory['subdir'].'/';
                $uploaddir = $upload_directory['path'].'/';
                $file = $uploaddir . basename($_FILES['website_logo']['name']); 
                $file_name = sanitize_title(pathinfo($file, PATHINFO_FILENAME)).time().'.'.pathinfo($file, PATHINFO_EXTENSION);
                $file_to_upload = $uploaddir.$file_name;
                if (move_uploaded_file($_FILES['website_logo']['tmp_name'], $file_to_upload)) { 
                    $result = array(
                        'status'=>TRUE,
                        'status_id'=> $db_sub_directory.$file_name,
                        'rows_affected'=>'Image Successfully uploaded.'
                    );
                } else {
                    $result = array(
                        'status'=>FALSE,
                        'upload_path'=> $db_sub_directory.$file_name,
                        'last_error'=>'Image Could not be uploaded.'
                    );
                }
            }
        }
        return $result;
    }
    
    function website_sanitize($data) {
        
        $data['website_name'] = stripslashes( $data['website_name'] );
        $data['website_name'] = sanitize_text_field($data['website_name']);
        $data['name'] = sanitize_text_field($data['name']);
        $data['email'] = sanitize_email($data['email']);
        $data['company'] = stripslashes( $data['company'] );
        $data['company'] = sanitize_text_field($data['company']);
        $data['status'] = sanitize_text_field($data['status']);
        $data['website_url'] = sanitize_text_field($data['website_url']);
        $data['website_logo'] = sanitize_text_field($data['website_logo']);
        $data['is_cooke'] = sanitize_text_field($data['is_cooke']);
        $data['website_description'] = stripslashes( $data['website_description'] );
        $data['website_description'] = sanitize_textarea_field($data['website_description']);
        
        $data['module_id'] = sanitize_text_field($data['module_id']);
        $data['template_id'] = sanitize_text_field($data['template_id']);
        
        unset($data['action']);
        unset($data['module']);
        return $data;
    }
    
    function website_validation($post_data) {
        
        $error_msg = '';
        
        if($post_data['website_description'] == ''){
            $error_msg .= '<p>Please, Enter Description</p>';
        }elseif(str_word_count($post_data['website_description']) > 200){
            $error_msg .= '<p>Description must not be greater then 200 word.</p>';
        }
        
        if(isset($post_data['is_cooke'])){
            if($post_data['is_cooke'] != 'on'){
                $error_msg .= '<p>Please accept to the Terms and Conditions.</p>';
            }
        }
        if($error_msg != ''){
            $err_data = array(
                'status'=>FALSE,
                'last_error'=>$error_msg
            );
            return $err_data;
        }
        return FALSE;
    }
}
