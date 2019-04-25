<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB_Connect
 *
 * @author linkio.com
 */
class DBF_Connect {
    
    public function __construct() {
        //add_action ('wp_loaded', array(&$this,'redirect'),1);
        global $wpdb;
        $this->db = $wpdb;
        $this->table_prefix = $wpdb->prefix;
    }
    
    function get_table_prefix() {    
        return $this->table_prefix;
    }
      
    function result_as_object($qry) {
        return $this->db->get_results($qry);
        
    }
    
    
    function lcm_db_result($query, $result_type) {
        if($result_type == 'row_as_object'){
            $result = $this->db->get_row($query, OBJECT);
        }elseif ($result_type == 'object') {
            $result = $this->db->get_results($query, OBJECT);
        }elseif ($result_type == 'row_as_array') {
            $result = $this->db->get_row($query);
        }
        if($result != NULL){
            $return_status = array(
                'status'=>TRUE,
                'num_rows'=>$this->db->num_rows,
                'result'=>$result,
            );
        } else {
            if($this->db->last_error != ''){
                $return_status = array(
                    'status'=>FALSE,
                    'last_error'=>$this->db->last_error,
                    'last_query'=>$this->db->last_query,
                );
            } else {
                $return_status = array(
                    'status'=>TRUE,
                    'num_rows'=>$this->db->num_rows,
                    'result'=>$result,
                );
            }
        }
        return $return_status;
    }
    
    
    
    function row_as_object($qry) {
        $result = $this->db->get_row($qry, OBJECT);
        if($result != NULL){
            $return_status = array(
                'status'=>TRUE,
                'num_rows'=>$this->db->num_rows,
                'result'=>$this->db->last_result,
            );
        } else {
            if($this->db->last_error != ''){
                $return_status = array(
                    'status'=>FALSE,
                    'last_error'=>$this->db->last_error,
                    'last_query'=>$this->db->last_query,
                );
            } else {
                $return_status = array(
                    'status'=>TRUE,
                    'num_rows'=>$this->db->num_rows,
                    'result'=>$this->db->last_result,
                );
            }
        }
        return $return_status;
    }
    
    function insert($table_name, $data) {
        
        $return_status = null;
        $result = $this->db->insert(
                $table_name,
                $data		
        );
        if($result == TRUE){
            $return_status = array(
                'status'=>TRUE,
                'status_id'=>$this->db->insert_id,
            );
        } else {
            $return_status = array(
                'status'=>FALSE,
                'last_error'=>$this->db->last_error,
                'last_query'=>$this->db->last_query,
            );
        }
        return $return_status;
    }
    
    function update($table_name, $data, $condition) {
        $return_status = null;
        $result = $this->db->update( $table_name, $data, $condition);
        if($result == FALSE){
            $this->db->show_errors();
            $this->db->print_error();
            $return_status = array(
                'status'=>FALSE,
                'last_error'=>$this->db->last_error,
                'last_query'=>$this->db->last_query,
            );
        }else{
            $return_status = array(
                'status'=>TRUE,
                'status_id'=>$this->db->insert_id,
                'rows_affected'=>$this->db->rows_affected,
            );
        }
        return $return_status;
    }
    
    //simple update 
    function custom_update_query($qry) {
        $result = $this->db->query($qry);
        if ($result == FALSE) {
            $return_status = array(
                'status' => FALSE,
                'last_error' => $this->db->last_error,
                'last_query' => $this->db->last_query,
            );
        } else {
            $return_status = array(
                'status' => TRUE,
                'status_id' => $this->db->insert_id,
                'rows_affected' => $this->db->rows_affected,
                'last_query' => $this->db->last_query,
            );
        }
        return $return_status;
    }

}


