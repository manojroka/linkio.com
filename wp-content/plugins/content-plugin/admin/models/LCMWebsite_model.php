<?php
/**
 * Description of LCMWebsite_model
 *
 * @author linkio.com
 */
class LCMWebsite_model extends LCM_model {
    
    function get_all_website_templates() {
        
        $sql = "SELECT lmt.* FROM `{$this->table_prefix}lcm_module_templates AS lmt`";
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $getall_qry = "SELECT * FROM `{$this->table_prefix}lcm_template_websites` WHERE template_id = {$_GET['templateid']} AND module_id={$_GET['mid']}";
        $all_data = $this->db->query_as_object($getall_qry);
        $data = array(
            'template'=>$single_data,
            'lists'=>$all_data
        );
        return $data;
    }
    
    function add_new_website() {
        
        $data = $_POST;
        //---upload image------
        $image_upload = $this->upload_image();
        if(($image_upload != FALSE) && ($image_upload['status'] != FALSE) ){
            $data['website_logo'] = $image_upload['status_id'];
        } else {
            return $image_upload;
        }
        $data = $this->website_sanitize($data);
        return $id = $this->db->insert($this->table_prefix.'lcm_template_websites', $data);
    }
    
    function get_website_template() {
        
        $sql = "SELECT lmt.* FROM `{$this->table_prefix}lcm_module_templates AS lmt`";
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $data = array(
            'template'=>$single_data,
            );
        return $data;
    }
    
    function get_website() {
        
        $sql = "SELECT tq.*, lmt.template_name FROM `{$this->table_prefix}lcm_template_websites` AS tq "
                . "LEFT JOIN {$this->table_prefix}lcm_module_templates AS lmt ON tq.template_id = lmt.id "
                . "WHERE tq.`module_id`={$_GET['mid']} AND tq.template_id = {$_GET['templateid']} AND tq.id={$_GET['id']}";
        return $this->db->get_row_as_object($sql);
    }
    
    function update_website() {
        $data = $_POST;
        $image_upload = $this->upload_image();
        if(($image_upload != FALSE) && ($image_upload['status'] != FALSE) ){
            $this->delete_image();
            $data['website_logo'] = $image_upload['status_id'];
        }
        $data = $this->website_sanitize($data);
        $condition = array( 'id' => $_GET['id'], 'template_id' => $data['template_id'], 'module_id' => $data['module_id'] );
        return $this->db->update($this->table_prefix.'lcm_template_websites', $data, $condition);
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
                $path = $upload_directory['path'].'/';
                $upload_dir_url = $upload_directory['url'];
                $uploaddir = $path;
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
    
    function delete_image() {
        $upload_directory = wp_upload_dir();
        $file_path = $upload_directory['basedir'].$_POST['website_logo'];
        if (file_exists($file_path)) {
            @unlink($file_path);
        }
    }
    
    function delete_by_id() {
   
        $this->db->delete("{$this->table_prefix}lcm_template_websites", array('id'=>$_GET['id']));
    }
    
    function website_sanitize($data) {
        
        if(isset($data['is_weburl_df'])){
            $data['is_weburl_df'] = sanitize_text_field($data['is_weburl_df']);
        } else {
            $data['is_weburl_df'] = sanitize_text_field('nofollow');
        }
        
        $data['website_name'] = stripslashes( $data['website_name'] );
        $data['website_name'] = sanitize_text_field($data['website_name']);
        $data['name'] = sanitize_text_field($data['name']);
        $data['email'] = sanitize_email($data['email']);
        $data['company'] = stripslashes( $data['company'] );
        $data['company'] = sanitize_text_field($data['company']);
        $data['status'] = sanitize_text_field($data['status']);
        $data['website_url'] = sanitize_text_field($data['website_url']);
        $data['website_logo'] = sanitize_text_field($data['website_logo']);
        
        $data['website_description'] = stripslashes( $data['website_description'] );
        //$data['website_description'] = sanitize_textarea_field($data['website_description']);
        
        $data['template_id'] = sanitize_text_field($_GET['templateid']);
        $data['module_id'] = sanitize_text_field($_GET['mid']);
        
        unset($data['submit']);
        return $data;
    }
}
