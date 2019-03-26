<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LCMDb
 *
 * @author linkio.com
 */
class LCM_model {
    
    public function __construct() {
        
        $Db_file = 'DB_Connect';
        $expectedDb_file = LCM_PLUGIN_ADMIN_DIR . '/libraries/' . $Db_file . '.php';
        if (file_exists($expectedDb_file)) {
            require_once $expectedDb_file;
            $this->db = new $Db_file();
            $this->table_prefix = $this->db->get_table_prefix();
        }
        
    }
    

}