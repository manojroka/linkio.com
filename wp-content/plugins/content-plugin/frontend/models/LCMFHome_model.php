<?php

class LCMFHome_model extends LCMF_model{
    
    function get_template_name_by_id($id) {
        
        $module_detail = $this->db->lcm_db_result('SELECT lmt.*, lm.slug AS module '
                . 'FROM `'.$this->table_prefix.'lcm_module_templates` AS lmt '
                . 'LEFT JOIN `'.$this->table_prefix.'lcm_modules` AS lm ON lmt.module_id = lm.id '
                . ' WHERE lmt.id = '.$id, 'row_as_object');
        if($module_detail['status']==TRUE){
            if(count((array)$module_detail['result']) > 0){
                $module_detail['result']->saved_cookie = count((array) $this->db->lcm_db_result("SELECT * FROM `{$this->table_prefix}lcm_clients_ip_records` WHERE module_id = '{$module_detail['result']->module_id}' AND record_for = 'cookie' AND clients_ip = '{$_SERVER['REMOTE_ADDR']}'", 'row_as_object')['result']);
            }   
        }
        return $module_detail;
    }
    
    function get_all_templates_by_id($module, $id, $limit, $offset) {
        
        if($limit > '0' && $offset > '0'){
            $query = "SELECT * FROM `".$this->table_prefix."lcm_template_".$module."s` WHERE template_id=".$id." AND status = 'Published' LIMIT $limit OFFSET $offset";
        }elseif($limit > '0'){
            $query = "SELECT * FROM `".$this->table_prefix."lcm_template_".$module."s` WHERE template_id=".$id." AND status = 'Published' LIMIT $limit";
        }elseif($offset > '0'){
            $query = "SELECT * FROM `".$this->table_prefix."lcm_template_".$module."s` WHERE template_id=".$id." AND status = 'Published' OFFSET $offset";
        }else{
            $query = "SELECT * FROM `".$this->table_prefix."lcm_template_".$module."s` WHERE template_id=".$id." AND status = 'Published' ";
        }
        $result = $this->db->lcm_db_result($query, 'object');
        // - get tactic categories lists------
        if($result['status']==TRUE){
            $result['categories'] = $this->db->lcm_db_result("SELECT * FROM `".$this->table_prefix."lcm_template_tactics_categories`", 'object')['result'];
            $result['types'] = $this->db->lcm_db_result("SELECT * FROM `".$this->table_prefix."lcm_template_tools_types`", 'object')['result'];
            
        }
        return $result;
    }
    
}
