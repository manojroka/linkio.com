<?php
/**
 * Description of LCMQuote_model
 *
 * @author linkio.com
 */
class LCMQuote_model extends LCM_model {
    
    function get_all_quote_templates() {
        
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $getall_qry = "SELECT * FROM `{$this->table_prefix}lcm_template_quotes` WHERE template_id = {$_GET['templateid']} AND module_id={$_GET['mid']}";
        $all_data = $this->db->query_as_object($getall_qry);
        $data = array(
            'template'=>$single_data,
            'lists'=>$all_data
        );
        return $data;
    }
    
    function add_new_quote() {
        
        $data = $_POST;
        //---upload image------
        $image_upload = $this->upload_image();
        if(($image_upload != FALSE) && ($image_upload['status'] != FALSE) ){
            $data['headshot'] = $image_upload['status_id'];
        } else {
            return $image_upload;
        }
        
        $validation_check = $this->common_validation($data);
        if($validation_check != NULL){
            return array(
                    'status'=>FALSE,
                    'last_error'=>$validation_check
                );
        }
        
        $data = $this->quote_sanitize($data);
        return $id = $this->db->insert($this->table_prefix.'lcm_template_quotes', $data);
    }
    
    function get_quote_template() {
        
        $sql = "SELECT lmt.* FROM `{$this->table_prefix}lcm_module_templates AS lmt`";
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $data = array(
            'template'=>$single_data,
            );
        return $data;
    }
    
    function get_quote() {
        
        $sql = "SELECT tq.*, lmt.template_name FROM `{$this->table_prefix}lcm_template_quotes` AS tq "
                . "LEFT JOIN {$this->table_prefix}lcm_module_templates AS lmt ON tq.template_id = lmt.id "
                . "LEFT JOIN {$this->table_prefix}lcm_modules AS mt ON tq.module_id = mt.id "
                . "WHERE tq.`module_id`={$_GET['mid']} AND tq.template_id = {$_GET['templateid']} AND tq.id={$_GET['id']}";
        return $this->db->get_row_as_object($sql);
    }
    
    function update_quote() {
        
        $data = $_POST;
        $image_upload = $this->upload_image();
        if(($image_upload != FALSE) && ($image_upload['status'] != FALSE) ){
            $this->delete_image();
            $data['headshot'] = $image_upload['status_id'];
        }
        
        $validation_check = $this->common_validation($data);
        if($validation_check != NULL){
            return array(
                    'status'=>FALSE,
                    'last_error'=>$validation_check
                );
        }
        
        $data = $this->quote_sanitize($data);
        $condition = array( 'id' => $_GET['id'], 'template_id' => $data['template_id'], 'module_id' => $data['module_id'] );
        return $this->db->update($this->table_prefix.'lcm_template_quotes', $data, $condition);
        
    }
    
    function upload_image() {
        
        $result = FALSE;
        if(isset($_FILES)){
            $upload_directory = wp_upload_dir();
            $db_sub_directory = $upload_directory['subdir'].'/';
            $path = $upload_directory['path'].'/';
            $upload_dir_url = $upload_directory['url'];
            $uploaddir = $path;
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
    
    function delete_image() {
        $upload_directory = wp_upload_dir();
        $file_path = $upload_directory['basedir'].$_POST['headshot'];
        if (file_exists($file_path)) {
            @unlink($file_path);
        }
    }
    
    function delete_by_id() {
        $this->db->delete("{$this->table_prefix}lcm_template_quotes", array('id'=>$_GET['id']));
    }
    
    function quote_sanitize($data) {
        
        if(isset($data['is_weburl_df'])){
            $data['is_weburl_df'] = sanitize_text_field($data['is_weburl_df']);
        } else {
            $data['is_weburl_df'] = sanitize_text_field('nofollow');
        }
        
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
        
        $data['template_id'] = sanitize_text_field($_GET['templateid']);
        $data['module_id'] = sanitize_text_field($_GET['mid']);
        
        unset($data['submit']);
        return $data;
    }
    
}
