<?php

class LCMFTactic_model extends LCMF_model{
    
    function get_tactic_detail_by_id($id) {
        
        $query = "SELECT ltq.*, lmt.template_name AS module_template_name, lm.name AS module_name, lm.slug AS module "
            . "FROM `".$this->table_prefix."lcm_template_tactics` AS ltq "
            . "LEFT JOIN `".$this->table_prefix."lcm_module_templates` AS lmt ON ltq.template_id = lmt.id "
            . "LEFT JOIN `".$this->table_prefix."lcm_modules` AS lm ON ltq.module_id = lm.id "
            . "WHERE ltq.id = ".$id."";
        return $this->db->lcm_db_result($query,'row_as_object');    
    }
    
    function get_categories() {
        return $this->db->lcm_db_result("SELECT * FROM `".$this->table_prefix."lcm_template_tactics_categories`", 'object');
    }
    
    function save_item() {
        $post_data = $_POST;
        
        $is_validate = $this->tactic_validation($post_data);
        if($is_validate != FALSE){
            return $is_validate;
        }
        
        $data = $this->tactic_sanitize($post_data);
        return $this->save_new_item($this->table_prefix.'lcm_template_'.$post_data["module"].'s', $data);
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
        if(isset($data['category'])){
            $data['category'] = json_encode($data['category']);
            $data['category'] = sanitize_text_field($data['category']);
        }
        $data['tool_included'] = json_encode($data['tool_included']);        
        $data['tool_included'] = sanitize_text_field($data['tool_included']);
        $data['collapse_expand'] = json_encode(array('lcm_btn_expand'=>$data['lcm_btn_expand'], 'lcm_btn_collapse'=>$data['lcm_btn_collapse']));
        $data['collapse_expand'] = sanitize_text_field($data['collapse_expand']);
        $data['tactic_description'] = stripslashes( $data['tactic_description'] );
        $data['tactic_description'] = sanitize_textarea_field($data['tactic_description']);
        
        $data['tactic_name'] = sanitize_text_field($data['tactic_name']);
        $data['name'] = sanitize_text_field($data['name']);
        $data['email'] = sanitize_email($data['email']);
        $data['company'] = sanitize_text_field($data['company']);
        $data['status'] = sanitize_text_field($data['status']);
        $data['tool_types'] = sanitize_text_field($data['tool_types']);
        $data['is_cooke'] = sanitize_text_field($data['is_cooke']);
        $data['module_id'] = sanitize_text_field($data['module_id']);
        $data['template_id'] = sanitize_text_field($data['template_id']);
        unset($data['action']);
        unset($data['module']);
        unset($data['lcm_btn_collapse']);
        unset($data['lcm_btn_expand']);
        unset($data['tool_included_name']);
        unset($data['tool_included_url']);
        unset($data['tool_included_df']);
        return $data;
    }
    
    function tactic_validation($post_data) {
        $error_msg = '';
        
        if($post_data['tactic_description'] == ''){
            $error_msg .= '<p>Please, Enter Tactic Description</p>';
        }elseif(str_word_count($post_data['tactic_description']) > 500){
            $error_msg .= '<p>Tactic Description must not be greater then 500 word.</p>';
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
