<?php

class LCMF_model {
    
    public function __construct() {
        $Db_file = 'DBF_Connect';
        $expectedDb_file = LCM_PLUGIN_FRONT_DIR . '/libraries/' . $Db_file . '.php';
        if (file_exists($expectedDb_file)) {
            require_once $expectedDb_file;
            $this->db = new $Db_file();
            $this->table_prefix = $this->db->get_table_prefix();
        }    
    }
    
    function vote_status_check() {
        $query = "SELECT COUNT(*) AS voted, i_tbl.vote_count "
                . "FROM {$this->table_prefix}lcm_clients_ip_records AS ltv "
                . "JOIN {$this->table_prefix}lcm_template_{$_POST['module']}s AS i_tbl ON {$_POST['item_id']} = i_tbl.id "
                . "WHERE ltv.item_id = {$_POST['item_id']} AND ltv.clients_ip = '" .$_SERVER['REMOTE_ADDR']. "' AND ltv.template_id = {$_POST['template_id']} AND ltv.module_id = {$_POST['module_id']} AND ltv.record_for = 'vote'";
        $res = $this->db->lcm_db_result($query, 'row_as_array');
        return $res;
    }
    
    function update_vote() {
        
        $data = array(
            'item_id' => $_POST['item_id'],
            'template_id' => $_POST['template_id'],
            'module_id' => $_POST['module_id'],
            'clients_ip' => $_SERVER['REMOTE_ADDR'],
            'voted_date' => time(),
        );
        $insert_into_vote_client = $this->save_client_ip($data, 'vote');
        if($insert_into_vote_client['status']==TRUE){
                $query = "UPDATE {$this->table_prefix}lcm_template_{$_POST['module']}s SET vote_count = vote_count + 1 WHERE id = {$data['item_id']} "
                . "AND template_id = {$data['template_id']} AND module_id = {$data['module_id']}";
            return $this->db->custom_update_query($query);
        } else {
            return array(
                'status' => FALSE,
                'last_error' => $insert_into_vote_client['last_error'],
                'last_query' => $insert_into_vote_client['last_query'],
            );
        }
    }
    
    function save_new_item($table_name, $data_array) {
        
        $save_status = $this->db->insert($table_name, $data_array);
        if($save_status['status'] == TRUE){
            $data_array['item_id'] = $save_status['status_id'];
            $this->save_client_ip($data_array, 'cookie');
        }
        return $save_status;
    }
    
    function save_client_ip($data_array, $condition_chk) {
        $data = array(
            'item_id' => $data_array['item_id'],
            'template_id' => $data_array['template_id'],
            'module_id' => $data_array['module_id'],
            'clients_ip' => $_SERVER['REMOTE_ADDR'],
            'record_date' => time(),
            'record_for' => $condition_chk
        );
        return $this->db->insert($this->table_prefix . 'lcm_clients_ip_records', $data);
    }
    
    function get_search_item_ids($query_condition) {
        
        $s_query = "SELECT id 
                    FROM `".$this->table_prefix."lcm_template_{$_POST['module']}s` 
                    WHERE template_id = {$_POST['template_id']} {$query_condition}";
        
        $id_s = $this->db->lcm_db_result($s_query, 'object');
        if($id_s['status'] == TRUE){
            if($id_s['num_rows'] > 0){                
                $custom_data = array(
                    'msg'=>$id_s['result'],
                );
                return wp_send_json_success($custom_data);
            }else{
                $custom_data = array(
                    'msg'=>'Your entered does not matched any data.',
                );
                return wp_send_json_error($custom_data);
            }
        }else{
            $custom_data = array(
                'msg'=>'Error:Something is wrong.',
            );
            return wp_send_json_error($custom_data);
        }
    }
}
