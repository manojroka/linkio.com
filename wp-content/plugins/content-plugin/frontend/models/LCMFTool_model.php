<?php

class LCMFTool_model extends LCMF_model {
    
    function get_tool_detail_by_id($id) {
        
        $query = "SELECT ltt.*, lmt.template_name AS module_template_name, lm.name AS module_name, lm.slug AS module "
            . "FROM `".$this->table_prefix."lcm_template_tools` AS ltt "
            . "LEFT JOIN `".$this->table_prefix."lcm_module_templates` AS lmt ON ltt.template_id = lmt.id "
            . "LEFT JOIN `".$this->table_prefix."lcm_modules` AS lm ON ltt.module_id = lm.id "
            . "WHERE ltt.id = ".$id."";
        return $this->db->lcm_db_result($query,'row_as_object');    
    }
    
    function get_types() {
        return $this->db->lcm_db_result("SELECT * FROM `".$this->table_prefix."lcm_template_tools_types`", 'object');
    }
    
    function save_item() {
        
        $post_data = $_POST;
        
        $images_upload = $this->upload_images();
        if(($images_upload != FALSE) && ($images_upload['success'] != NULL) ){
            //$this->delete_image(); 
            $post_data['images'] = json_encode($images_upload['success']);
        }
        
        $is_validate = $this->tool_validation($post_data);
        if($is_validate != FALSE){
            return $is_validate;
        }
        
        $data = $this->tool_sanitize($post_data);
        return $this->save_new_item($this->table_prefix.'lcm_template_'.$post_data["module"].'s', $data);
    }
    
    function upload_images() {
        $result = FALSE;
        if (isset($_FILES['img_path'])) {
            $upload_directory = wp_upload_dir();
            $updir = $upload_directory['basedir'];
            $db_sub_directory = $upload_directory['subdir'] . '/';
            $uploaddir = $upload_directory['path'] . '/';
            $num_files = count($_FILES['img_path']['tmp_name']);
            $uploded_images = array();
            $un_uploded_images = array();
            for ($x = 0; $x < $num_files; $x++) {
                if ($_FILES['img_path']['name'][$x] != '') {
                    $file = $uploaddir . basename($_FILES['img_path']['name'][$x]);
                    $file_name = sanitize_title(pathinfo($file, PATHINFO_FILENAME)) . time() . '.' . pathinfo($file, PATHINFO_EXTENSION);
                    $file_to_upload = $uploaddir . $file_name;
                    $img_with_caption = array(
                        'img_path' => $db_sub_directory . $file_name,
                        'img_caption' => $_POST['img_caption'][$x]
                    );
                    if (move_uploaded_file($_FILES['img_path']['tmp_name'][$x], $file_to_upload)) {
                        array_push($uploded_images, $img_with_caption);
                    } else {
                        array_push($un_uploded_images, $img_with_caption);
                    }
                }
            }
            $result = array(
                'success' => $uploded_images,
                'error' => $un_uploded_images
            );
        }
        return $result;
    }
    
    
    function tool_sanitize($data) {
        
        $c = 0; $temp = [];
        $tool_included_df = ($data['link_df']);
        foreach($tool_included_df as $value){
            if($value == '0'){        
                if( isset($data['link_df'][$c+1]) && ($data['link_df'][$c+1] == 'on')){ 
                    $temp[] = 'on'; 
                } else { 
                    $temp[] = 'off'; 
                }
            } 
            $c++;
        }
        $data['link_df'] = $temp;
        
        $data['additional_links'] = ( array(
            'link_name' => $data['link_name'],
            'link_url' => $data['link_url'],
            'link_df' => $data['link_df'],
            'link_desc' => $data['link_desc'],
                )
                );
        foreach ($data['additional_links']['link_name'] as $key => $value) {
            if (($value == '') || ($value == NULL)) {
                unset($data['additional_links']['link_name'][$key]);
                unset($data['additional_links']['link_url'][$key]);
                unset($data['additional_links']['link_df'][$key]);
                unset($data['additional_links']['link_desc'][$key]);
            }
        }
        $data['additional_links'] = json_encode($data['additional_links']);
        $data['additional_links'] = sanitize_textarea_field($data['additional_links']);
        
        
        $temp = NULL;
        if(count($data['videos']) > 0){
            foreach ($data['videos'] as $video) {
                if($video != ''){
                    $temp[] = $video;
                }
            }
            if($temp != NULL){
                $temp = json_encode($temp);
            }
        }
        unset($data['videos']);
        $data['videos'] = $temp;
        $data['videos'] = sanitize_textarea_field($data['videos']);
        
        if(isset($data['type'])){
            $data['type'] = json_encode($data['type']);
            $data['type'] = sanitize_text_field($data['type']);
        }
        
        $data['tool_name'] = stripslashes( $data['tool_name'] );
        $data['tool_name'] = sanitize_text_field($data['tool_name']);
        $data['name'] = sanitize_text_field($data['name']);
        $data['email'] = sanitize_email($data['email']);
        $data['company'] = stripslashes( $data['company'] );
        $data['company'] = sanitize_text_field($data['company']);
        $data['status'] = sanitize_text_field($data['status']);
        $data['home_page_url'] = sanitize_text_field($data['home_page_url']);
        
        $data['summary'] = stripslashes( $data['summary'] );
        $data['summary'] = sanitize_textarea_field($data['summary']);
        
        $data['description'] = stripslashes( $data['description'] );
        //$data['description'] = sanitize_textarea_field($data['description']);
        
        $data['collapse_expand'] = json_encode(array('lcm_btn_expand'=>$data['lcm_btn_expand'], 'lcm_btn_collapse'=>$data['lcm_btn_collapse']));
        $data['collapse_expand'] = sanitize_text_field($data['collapse_expand']);
        
        $data['price'] = sanitize_text_field($data['price']);
        $data['is_cooke'] = sanitize_text_field($data['is_cooke']);
        
        $data['module_id'] = sanitize_text_field($data['module_id']);
        $data['template_id'] = sanitize_text_field($data['template_id']);
        
        unset($data['action']);
        unset($data['module']);
        unset($data['img_caption']);
        unset($data['lcm_btn_collapse']);
        unset($data['lcm_btn_expand']);
        unset($data['link_name']);
        unset($data['link_url']);
        unset($data['link_df']);
        unset($data['link_desc']);
        unset($data['videoss']);
        
        return $data;
    }
    
    function tool_validation($post_data) {
        $error_msg = '';
        
        $post_data['content'] = $post_data['description'];
        $chk_validate = $this->common_validation($post_data, 500);
        if($chk_validate != NULL){
            $error_msg = $chk_validate;
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
    
    function get_search_item_ids() {
        
        $condition_keyword = "";
        if($_POST['qry_string'] != ''){
            $condition_keyword = " AND (tool_name LIKE '%{$_POST['qry_string']}%') OR (description LIKE '%{$_POST['qry_string']}%')";
        }
        $s_query = "SELECT * 
                    FROM `".$this->table_prefix."lcm_template_{$_POST['module']}s` 
                    WHERE template_id = {$_POST['template_id']}{$condition_keyword}";
        return $this->db->lcm_db_result($s_query, 'object');
    }
}
