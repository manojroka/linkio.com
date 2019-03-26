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
class DB_Connect {
    
    public function __construct() {
        //add_action ('wp_loaded', array(&$this,'redirect'),1);
        global $wpdb;
        $this->db = $wpdb;
        $this->table_prefix = $wpdb->prefix;
    }
    
    
    function get_table_prefix() {    
        return $this->table_prefix;
    }
    
    function query_as_object($qry) {
        return $this->db->get_results($qry);
        
    }
    
    function get_row_as_object($qry) {
        return $this->db->get_row($qry, OBJECT);
        
    }
    
    function insert($table_name, $data) {
        
        $return_status = null;
        $result = $this->db->insert(
                $table_name,
                $data		
        );
        if($result !== FALSE){
            
            $return_status = array(
                'status'=>TRUE,
                'status_id'=>$this->db->insert_id,
            );
        } else {
            $this->db->show_errors();
            $this->db->print_error();
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
        if($result === FALSE){
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
    function delete($table, $where) {
        $return_status = $this->db->delete( $table, $where, $where_format = null );
        if($result === FALSE){
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
    
}


