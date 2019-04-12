<?php
/**
 * Description of LCMTactic_model
 *
 * @author linkio.com
 */
class LCMTactic_model extends LCM_model {
    
    function get_all_tactic_templates() {
        
        $sql = "SELECT lmt.* FROM `{$this->table_prefix}lcm_module_templates AS lmt`";
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $getall_qry = "SELECT * FROM `{$this->table_prefix}lcm_template_tactics` WHERE template_id = {$_GET['templateid']} AND module_id={$_GET['mid']}";
        $all_data = $this->db->query_as_object($getall_qry);
        $data = array(
            'template'=>$single_data,
            'lists'=>$all_data
        );
        return $data;
    }
    
    function add_new_tactic() {
        
        $data = $_POST;
        $data = $this->tactic_sanitize($data);
        return $id = $this->db->insert($this->table_prefix.'lcm_template_tactics', $data);
    }
    
    function get_tactic_template() {
        
        $sql = "SELECT lmt.* FROM `{$this->table_prefix}lcm_module_templates AS lmt`";
        $template_detail_qry = "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id = {$_GET['templateid']}";
        $single_data = $this->db->get_row_as_object($template_detail_qry);
        $categories = $this->get_all_categories();
        $data = array(
            'template'=>$single_data,
            'categories'=>$categories,
            );
        return $data;
    }
    
    function get_tactic() {
        
        $sql = "SELECT tq.*, lmt.template_name FROM `{$this->table_prefix}lcm_template_tactics` AS tq "
                . "LEFT JOIN {$this->table_prefix}lcm_module_templates AS lmt ON tq.template_id = lmt.id "
                . "WHERE tq.`module_id`={$_GET['mid']} AND tq.template_id = {$_GET['templateid']} AND tq.id={$_GET['id']}";
        $result = $this->db->get_row_as_object($sql);
        return $result;
    }
    
    function update_tactic() {
        $data = $_POST;
        $data = $this->tactic_sanitize($data);
        $condition = array( 'id' => $_GET['id'], 'template_id' => $data['template_id'], 'module_id' => $data['module_id'] );
        return $this->db->update($this->table_prefix.'lcm_template_tactics', $data, $condition);
    }
    
    function delete_by_id() {
        $this->db->delete("{$this->table_prefix}lcm_template_tactics", array('id'=>$_GET['id']));
    }
    
    function add_new_category() {
        $data = array('name'=>$_POST['category_name']);
        return $id = $this->db->insert($this->table_prefix.'lcm_template_tactics_categories', $data);
    }
    
    function get_all_categories() {
        
        return $this->db->query_as_object("SELECT * FROM `{$this->table_prefix}lcm_template_tactics_categories`");
    }
    
    function remove_categories(){
        
        foreach ($_POST['selected_ids'] as $id){
            if($id > 0){
                $this->db->delete("{$this->table_prefix}lcm_template_tactics_categories", array('id'=>$id));
            }
        }
        return array('status'=>TRUE);
    }
    
    function tactic_sanitize($data) {
        
        $c = 0; $temp = [];
        $tool_included_df = ($data['tool_included_df']);
        foreach($tool_included_df as $value){
            if($value == '0'){        
                if( isset($data['tool_included_df'][$c+1]) && ($data['tool_included_df'][$c+1] == 'on')){ 
                    $temp[] = 'on'; 
                } else { 
                    $temp[] = 'off'; 
                }
            } 
            $c++;
        } 
        $data['tool_included_df'] = $temp;
        $data['tool_included'] = ( array(
                                        'tool_included_name'=>$data['tool_included_name'], 
                                        'tool_included_url'=>$data['tool_included_url'],
                                        'tool_included_df'=>$data['tool_included_df'],
                                        )
                                    );
        foreach ($data['tool_included']['tool_included_name'] as $key => $value) {   
            if(($value == '') || ($value == NULL)){
                unset($data['tool_included']['tool_included_name'][$key]);
                unset($data['tool_included']['tool_included_url'][$key]);
                unset($data['tool_included']['tool_included_df'][$key]);
            }
        }
        $data['tool_included'] = json_encode($data['tool_included']);        
        $data['collapse_expand'] = json_encode(array('lcm_btn_expand'=>$data['lcm_btn_expand'], 'lcm_btn_collapse'=>$data['lcm_btn_collapse']));
        
        if(isset($data['category'])){
            $data['category'] = json_encode($data['category']);
            $data['category'] = sanitize_text_field($data['category']);
        }
        
        $data['name'] = sanitize_text_field($data['name']);
        $data['email'] = sanitize_email($data['email']);
        $data['company'] = stripslashes( $data['company'] );
        $data['company'] = sanitize_text_field($data['company']);
        $data['status'] = sanitize_text_field($data['status']);
        $data['tool_types'] = sanitize_text_field($data['tool_types']);
        
        $data['company_url'] = sanitize_text_field( $data['company_url'] );
        $data['job_position'] = sanitize_text_field($data['job_position']);
        
        $data['tool_included'] = sanitize_text_field($data['tool_included']);
        $data['collapse_expand'] = sanitize_text_field($data['collapse_expand']);
        
        $data['tactic_name'] = stripslashes( $data['tactic_name'] );
        $data['tactic_name'] = sanitize_text_field($data['tactic_name']);
        $data['tactic_description'] = stripslashes( $data['tactic_description'] );
        $data['tactic_description'] = sanitize_textarea_field($data['tactic_description']);
        
        $data['template_id'] = sanitize_text_field($_GET['templateid']);
        $data['module_id'] = sanitize_text_field($_GET['mid']);
        
        unset($data['submit']);
        unset($data['lcm_btn_collapse']);
        unset($data['lcm_btn_expand']);
        unset($data['tool_included_name']);
        unset($data['tool_included_url']);
        unset($data['tool_included_df']); 
        
        return $data;
    }
}
