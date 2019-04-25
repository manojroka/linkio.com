<?php
/**
 * Description of LCMHome_model
 *
 * @author linkio.com
 */
class LCMHome_model extends LCM_model {
    
    function get_all_home_templates() {
        
        $sqll = "SELECT stl.*, {$this->table_prefix}lcm_modules.name AS module_name, {$this->table_prefix}lcm_modules.slug AS module_slug, 
                (CASE
                    WHEN stl.module_id = 1 THEN (SELECT count(id) FROM {$this->table_prefix}lcm_template_quotes WHERE template_id = stl.id)
                    WHEN stl.module_id = 2 THEN (SELECT count(id) FROM {$this->table_prefix}lcm_template_tactics WHERE template_id = stl.id)
                    WHEN stl.module_id = 3 THEN (SELECT count(id) FROM {$this->table_prefix}lcm_template_websites WHERE template_id = stl.id)
                    WHEN stl.module_id = 4 THEN (SELECT count(id) FROM {$this->table_prefix}lcm_template_tools WHERE template_id = stl.id)
                    ELSE 'n/a'
                END) AS i_count
                FROM `{$this->table_prefix}lcm_module_templates` AS stl 
                LEFT JOIN {$this->table_prefix}lcm_modules ON stl.module_id = {$this->table_prefix}lcm_modules.id ORDER BY id DESC";
        $list_templates = $this->db->query_as_object($sqll);
        
        $modules_lists = $this->db->query_as_object("SELECT * FROM `{$this->table_prefix}lcm_modules` LIMIT 4");
        
        $data = array(
            'templates'=>$list_templates,
            'modules'=>$modules_lists
        );
        return $data;
    }
    
    function add_new_home() {
        $data = $_POST;
        unset($data['submit']);
        return $this->db->insert($this->table_prefix.'lcm_module_templates', $data);
    }
    
    function get_home() {
        
        $modules_lists = $this->db->query_as_object("SELECT * FROM `{$this->table_prefix}lcm_modules`");
        $template_data = $this->db->get_row_as_object( "SELECT * FROM `{$this->table_prefix}lcm_module_templates` WHERE id={$_GET['id']}");
        $data = array(
            'templates'=>$template_data,
            'modules'=>$modules_lists
        );
        return $data;
    }
    
    function update_home() {
        
        $data = $_POST;
        unset($data['submit']);
        
        $condition = array( 'id' => $_GET['id']);
        return $this->db->update($this->table_prefix.'lcm_module_templates', $data, $condition);
    }
    
    function single_module_detail() {
        $modules_detail = $this->db->get_row_as_object( "SELECT * FROM `{$this->table_prefix}lcm_modules` WHERE id={$_POST['module_id']}");
        $data = array(
            'modules_detail'=>$modules_detail
        );
        return $data;
    }
    
    function delete_by_id() {
        $get_query = "SELECT lmt.*, lm.slug AS module "
                . "FROM `{$this->table_prefix}lcm_module_templates` AS lmt "
                . "LEFT JOIN {$this->table_prefix}lcm_modules AS lm ON lm.id = lmt.module_id "
                . "WHERE lmt.id={$_GET['id']}";
        $template_data = $this->db->get_row_as_object($get_query);
        if($template_data != NULL){
            $this->db->delete("{$this->table_prefix}lcm_module_templates", array('id'=>$template_data->id));
            $this->db->delete("{$this->table_prefix}lcm_template_{$template_data->module}s", array('template_id'=>$template_data->id));
        }
    }
}
