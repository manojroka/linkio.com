<?php
/**
 * Description of PTADashboard
 *
 * @author linkio.com
 */
class PTADashboard extends PTAadmin{
    
    
    function index() {
        
        global $wpdb;
        $result = $wpdb->get_results( "SELECT * FROM `{$wpdb->prefix}pta_category_sub_type`"  );
        
        $data = array('category_sub_type'=>$result);
        
        $this->data = $data;
        $this->page = 'index';
        
    }
    
    
}
