<?php
/**
 * Description of LCMTool_model
 *
 * @author linkio.com
 */
class LCMTool_model extends LCM_model {
    
    function get_all_tool_templates() {
        
        $sql = "SELECT lmt.* FROM `{$this->table_prefix}lcm_module_templates AS lmt`";
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $getall_qry = "SELECT * FROM `{$this->table_prefix}lcm_template_tools` WHERE template_id = {$_GET['templateid']} AND module_id={$_GET['mid']}";
        $all_data = $this->db->query_as_object($getall_qry);
        $data = array(
            'template'=>$single_data,
            'lists'=>$all_data
        );
        return $data;
    }
    
    function add_new_tool() {
        
        $data = $_POST;
        $images_upload = $this->upload_images();
        if(($images_upload != FALSE) && ($images_upload['success'] != NULL) ){
            $data['images'] = json_encode($images_upload['success']);
        }
        $data = $this->tool_sanitize($data);
        return $id = $this->db->insert($this->table_prefix.'lcm_template_tools', $data);
    }
    
    function get_tool_template() {
        
        $sql = "SELECT lmt.* FROM `{$this->table_prefix}lcm_module_templates AS lmt`";
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $types = $this->get_all_types();
        $data = array(
            'template' => $single_data,
            'types' => $types,
            );
        return $data;
    }
    
    function get_tool() {
        
        $sql = "SELECT tq.*, lmt.template_name FROM `{$this->table_prefix}lcm_template_tools` AS tq "
                . "LEFT JOIN {$this->table_prefix}lcm_module_templates AS lmt ON tq.template_id = lmt.id "
                . "WHERE tq.`module_id`={$_GET['mid']} AND tq.template_id = {$_GET['templateid']} AND tq.id={$_GET['id']}";
        return $this->db->get_row_as_object($sql);
    }
    
    function update_tool() {
        
        $data = $_POST;
        
        $images_upload = $this->upload_images();
        if(($images_upload != FALSE) ){
            $num = count($_POST['path_img']);
            for ($i = 0; $i < $num; $i++) {
                array_push($images_upload['success'], array(
                    'img_path' => $_POST['path_img'][$i],
                    'img_caption' => $_POST['path_caption'][$i]));
                array_push($images_upload['error'], array(
                    'img_path' => $_POST['path_img'][$i],
                    'img_caption' => $_POST['path_caption'][$i]));
            }
            if (isset($images_upload['success'])) {
                $data['images'] = json_encode($images_upload['success']);
            } else {
                # code...
                $data['images'] = json_encode($images_upload['error']);
            }
        }
        $data = $this->tool_sanitize($data);
        $condition = array( 'id' => $_GET['id'], 'template_id' => $data['template_id'], 'module_id' => $data['module_id'] );
        return $this->db->update($this->table_prefix.'lcm_template_tools', $data, $condition);
    }
    
    function add_new_type() {
        $data = array('name'=>$_POST['type_name']);
        return $id = $this->db->insert($this->table_prefix.'lcm_template_tools_types', $data);
    }
    
    function get_all_types() {
        
        return $this->db->query_as_object("SELECT * FROM `{$this->table_prefix}lcm_template_tools_types`");
    }
    
    function remove_types(){
        
        foreach ($_POST['selected_ids'] as $id){
            if($id > 0){
                $this->db->delete("{$this->table_prefix}lcm_template_tools_types", array('id'=>$id));
            }
        }
        return array('status'=>TRUE);
    }
    
    function upload_images() {
        

        $result = FALSE;
        if (isset($_FILES['img_path'])) {

            $upload_directory = wp_upload_dir();

            $updir = $upload_directory['basedir'];
            $db_sub_directory = $upload_directory['subdir'] . '/';
            $path = $upload_directory['path'] . '/';
            // $path = $upload_directory['path'];

            $upload_dir_url = $upload_directory['url'];

            $uploaddir = $path;

            $num_files = count($_FILES['img_path']['tmp_name']);
            $uploded_images = array();
            $un_uploded_images = array();

            $var = 0;
            if (count($_POST['old_path_img']) == 0) {
                goto end;
            }
            for ($m = 0; $m < count($_POST['old_path_img']); $m++) {

                $pathimg = count($_POST['path_img']);
                if ($pathimg == 0) {
                    unlink($updir . $_POST['old_path_img'][$m]);
                    goto loopend;
                }

                for ($i = 0; $i < $pathimg; $i++) {
                    $_POST['old_path_img'][$m];
                    $_POST['path_img'][$i];
                    if ($_POST['old_path_img'][$m] == $_POST['path_img'][$i]) {
                        $var = 0;
                        goto loopend;
                        // unlink($updir.$_POST['old_path_img'][$m]);
                    } else {
                        $var = 1;
                    }
                }
                loopend:
                if ($var == 1) {
                    unlink($updir . $_POST['old_path_img'][$m]);
                }
            }
            end:
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
    
    function delete_by_id() {
        $this->db->delete("{$this->table_prefix}lcm_template_tools", array('id'=>$_GET['id']));
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
                                        'link_name'=>$data['link_name'], 
                                        'link_url'=>$data['link_url'],
                                        'link_df'=>$data['link_df'],
                                        'link_desc'=>$data['link_desc'],
                                        )
                                    );
        foreach ($data['additional_links']['link_name'] as $key => $value) {   
            if(($value == '') || ($value == NULL)){
                unset($data['additional_links']['link_name'][$key]);
                unset($data['additional_links']['link_url'][$key]);
                unset($data['additional_links']['link_df'][$key]);
                unset($data['additional_links']['link_desc'][$key]);
            }
        }
        if(count($data['additional_links']['link_url']) > 0){
            $data['additional_links'] = json_encode($data['additional_links']);
        } else {
            unset($data['additional_links']);
            $data['additional_links'] = sanitize_text_field(NULL);
        }
        $data['additional_links'] = sanitize_text_field($data['additional_links']);
        
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
        
        
        if(isset($data['type'])){
            $data['type'] = json_encode($data['type']);
            $data['type'] = sanitize_text_field($data['type']);
        }
        
        $data['template_id'] = $_GET['templateid'];
        $data['module_id'] = $_GET['mid'];
        
        $data['summary'] = stripslashes( $data['summary'] );
        $data['description'] = stripslashes( $data['description'] );
        $data['collapse_expand'] = json_encode(array('lcm_btn_expand'=>$data['lcm_btn_expand'], 'lcm_btn_collapse'=>$data['lcm_btn_collapse']));
        
        if(isset($data['images'])){
            $data['images'] = stripslashes( $data['images'] );
            $data['images'] = sanitize_text_field($data['images']);
        }
        
        $data['name'] = sanitize_text_field($data['name']);
        $data['email'] = sanitize_email($data['email']);
        $data['company'] = stripslashes( $data['company'] );
        $data['company'] = sanitize_text_field($data['company']);
        $data['status'] = sanitize_text_field($data['status']);
        
        $data['summary'] = sanitize_textarea_field($data['summary']);
        //$data['description'] = sanitize_textarea_field($data['description']);
        
        $data['tool_name'] = stripslashes( $data['tool_name'] );
        $data['tool_name'] = sanitize_text_field($data['tool_name']);
        $data['home_page_url'] = sanitize_text_field($data['home_page_url']);
        $data['price'] = sanitize_text_field($data['price']);
        $data['videos'] = sanitize_text_field($data['videos']);
        $data['collapse_expand'] = sanitize_text_field($data['collapse_expand']);
        
        $data['template_id'] = sanitize_text_field($_GET['templateid']);
        $data['module_id'] = sanitize_text_field($_GET['mid']);
        
        if(isset($data['img_caption'])){
           unset($data['img_caption']); 
        }
        if(isset($data['path_caption'])){
           unset($data['path_caption']); 
        }
        if (isset($data['path_img'])) {
            unset($data['path_img']);
        }
        if (isset($data['old_path_img'])) {
            unset($data['old_path_img']);
        }
        
        unset($data['lcm_btn_collapse']);
        unset($data['lcm_btn_expand']);
        unset($data['link_name']);
        unset($data['link_url']);
        unset($data['link_df']);
        unset($data['link_desc']);
        unset($data['videoss']);
        unset($data['submit']);
        
        return $data;
    }
    
}
