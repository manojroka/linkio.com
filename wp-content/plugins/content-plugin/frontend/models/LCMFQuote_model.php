<?php

class LCMFQuote_model extends LCMF_model {
    
    function get_quote_detail_by_id($id) {
        
        $query = "SELECT ltq.*, lmt.template_name AS module_template_name, lm.name AS module_name, lm.slug AS module "
            . "FROM `".$this->table_prefix."lcm_template_quotes` AS ltq "
            . "LEFT JOIN `".$this->table_prefix."lcm_module_templates` AS lmt ON ltq.template_id = lmt.id "
            . "LEFT JOIN `".$this->table_prefix."lcm_modules` AS lm ON ltq.module_id = lm.id "
            . "WHERE ltq.id = ".$id."";
        return $this->db->lcm_db_result($query,'row_as_object');    
    }
    
    function save_item() {
        
        $post_data = $_POST;
        $is_validate = $this->quote_validation($post_data);
        if(isset($is_validate['last_error'])){
            return $is_validate;
        }
        
        $data = $this->quote_sanitize($is_validate);
        return $this->save_new_item($this->table_prefix.'lcm_template_'.$post_data["module"].'s', $data);
    }
    
    function upload_image() {
        
        $result = FALSE;
        if(isset($_FILES)){
            
            $upload_directory = wp_upload_dir();
            $db_sub_directory = $upload_directory['subdir'].'/';
            $uploaddir = $upload_directory['path'].'/';;
            $file = $uploaddir . basename($_FILES['headshot']['name']); 
            $file_name = sanitize_title(pathinfo($file, PATHINFO_FILENAME)).time().'.'.pathinfo($file, PATHINFO_EXTENSION);
            $file_to_upload = $uploaddir.$file_name;
            
            if (move_uploaded_file($_FILES['headshot']['tmp_name'], $file_to_upload)) { 
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
        return $result;
    }
    
    function quote_sanitize($data) {
        
        $data['title'] = stripslashes( $data['title'] );
        $data['title'] = sanitize_text_field($data['title']);
        $data['name'] = sanitize_text_field($data['name']);
        $data['email'] = sanitize_email($data['email']);
        $data['company'] = stripslashes( $data['company'] );
        $data['company'] = sanitize_text_field($data['company']);
        $data['status'] = sanitize_text_field($data['status']);
        $data['company_website'] = sanitize_text_field($data['company_website']);
        $data['job_position'] = sanitize_text_field($data['job_position']);
        $data['headshot'] = sanitize_text_field($data['headshot']);
        
        $data['quote_description'] = stripslashes( $data['quote_description'] );
        //$data['quote_description'] = sanitize_textarea_field($data['quote_description']);
        
        $data['module_id'] = sanitize_text_field($data['module_id']);
        $data['template_id'] = sanitize_text_field($data['template_id']);
        
        unset($data['action']);
        unset($data['module']);
        return $data;
    }
    
    function quote_validation($post_data) {
        
        $error_msg = NULL;
        
        $post_data['content'] = $post_data['quote_description'];
        $chk_validate = $this->common_validation($post_data, 200);
        unset($post_data['content']);
        if($chk_validate != NULL){
            $error_msg = $chk_validate;
        }
        
        //---------- title validate---------
        if($post_data['title'] == NULL){    
            $error_msg[] = array('id'=>'i-title', 'msg'=>'Please enter the title');
        }
        
        //---------- name validate---------
        if($post_data['name'] == NULL){    
            $error_msg[] = array('id'=>'i-name', 'msg'=>'Please enter the author');
        }
        
        //---------- company validate---------
        if($post_data['name'] == NULL){    
            $error_msg[] = array('id'=>'i-company', 'msg'=>'Please enter the company');
        }
        //---------- job position validate---------
        if($post_data['job_position'] == NULL){    
            $error_msg[] = array('id'=>'i-job_position', 'msg'=>'Please enter the position');
        }
        
        //---upload image------
        $image_upload = $this->upload_image();
        if(($image_upload != FALSE) && ($image_upload['status'] != FALSE) ){
            $post_data['headshot'] = $image_upload['status_id'];
        } else {
            $error_msg[] = array('id'=>'i-headshot', 'msg'=>$image_upload['last_error']);
        }
        
        if($error_msg != NULL){
            $err_data = array(
                'status'=>FALSE,
                'last_error'=> $error_msg
            );
            return $err_data;
        }
        return $post_data;
    }
    
    function get_search_item_ids() {
        
        if($_POST['qry_string'] == ''){
            $s_query = "SELECT * 
                    FROM `".$this->table_prefix."lcm_template_{$_POST['module']}s` 
                    WHERE template_id = {$_POST['template_id']} AND status = 'Published' 
                    LIMIT 0, 1000";
        }else{
            $s_query = "SELECT *, 
                    MATCH (`title`) AGAINST ('{$_POST['qry_string']}*' IN BOOLEAN MODE) AS relevance1, 
                    MATCH (`quote_description`) AGAINST ('{$_POST['qry_string']}*' IN BOOLEAN MODE) AS relevance2 
                    FROM {$this->table_prefix}lcm_template_{$_POST['module']}s 
                    WHERE template_id = {$_POST['template_id']} AND status = 'Published' 
                    HAVING (relevance1 + relevance2) > 0 
                    ORDER BY (relevance1 *3 ) + (relevance2) DESC 
                    LIMIT 0, 1000";       
                    
            $s_query = "SELECT * 
                    FROM `".$this->table_prefix."lcm_template_{$_POST['module']}s` 
                    WHERE template_id = {$_POST['template_id']} AND status = 'Published' 
                    AND (`title` LIKE '%{$_POST['qry_string']}%' OR `quote_description` LIKE '%{$_POST['qry_string']}%') 
                    LIMIT 0, 1000";
                    
        }
        return $this->db->lcm_db_result($s_query, 'object');
    }
    
}
