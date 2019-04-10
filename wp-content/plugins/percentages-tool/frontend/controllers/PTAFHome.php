<?php
/**
 * Description of PTAFHome
 *
 * @author linkio.com
 */
class PTAFHome extends PTAfrontend {
    
    function __construct() {
        parent::__construct();
        $model_file = 'PTAFHome_model';
        $expected_model_file = PTA_PLUGIN_FRONT_DIR . '/models/' . $model_file . '.php';
        if (file_exists($expected_model_file)) {
            require_once $expected_model_file;
            $this->home_model = new $model_file();
        }
    }
    
    function index() {
        $this->page = 'index';
    }

    function pta_generate_url_list() {
        
        error_reporting(E_ALL); ini_set('display_errors', 1);
        
        $homepage_url = $_POST['home_page_url'];
        if ($homepage_url == '' || $homepage_url == NULL) {
            $custom_data = array(
                'msg' => 'Please Enter Homepage Url',
            );
            wp_send_json_error($custom_data);
        }
        
        if (substr($homepage_url, -1) != '/') {
            $homepage_url .= '/';
        }
        
        $result_array = $this->home_model->read_all_url($homepage_url);
        if($result_array == FALSE){
            $custom_data = array(
                'msg' => 'Sorry, no xml file found.',
            );
            wp_send_json_error($custom_data);
        }
        
        $url_list = NULL;
        foreach ($result_array['url'] as $key => $url) {
            
            $url_list[$key] = $url;
            $url_list[$key]['website_type'] = $_POST['website_type'];
            $url_list[$key]['domain_type'] = $_POST['domain_type'];
            
            if ($this->fully_parse_url($url['loc']) == $this->fully_parse_url($homepage_url)) {
                $url_list[$key]['page_type'] = 'home_page';
            }else{
                $url_list[$key]['page_type'] = 'informational_page';
            }
            $url_list[$key]['page_subtype'] = $this->get_sub_page_detail($url_list[$key]);
        }
        $this->data['url_lists'] = $url_list;
        $this->page = 'url_list';
    }
    
    function fully_parse_url($url) {
        $removed_http = preg_replace("(^https?://)", "", $url);
        if (strpos($removed_http, 'www.') !== false) {
            $removed_http = str_replace("www.", "", $removed_http);
        }
        return $removed_http;
    }
    
    function get_sub_page_detail($url_value = NULL) {
        
        $result = NULL;
        // check for domain type
        $domain_condition = "";
        $web_type_condition = "";
        if($url_value['page_type'] == 'home_page'){
            $domain_condition = "AND domain_type = '{$url_value['domain_type']}' ";
            if($url_value['website_type'] == 'local'){
                $web_type_condition = "AND website_type = '{$url_value['website_type']}' ";
            } else {
                $web_type_condition = "AND website_type != 'local' ";
            }
        }elseif($url_value['page_type'] == 'commercial_page'){
            $web_type_condition = "AND website_type = '{$url_value['website_type']}' ";
        }
        global $wpdb;
        $query_detail = "SELECT * FROM `{$wpdb->prefix}pta_category_sub_type` "
                                        . "WHERE page_type = '{$url_value['page_type']}' {$domain_condition} {$web_type_condition}";       
        $result = $wpdb->get_results( $query_detail )[0];
        
        $query_list = "SELECT * FROM `{$wpdb->prefix}pta_category_sub_type` "
                                        . "WHERE page_type = '{$url_value['page_type']}'";
        $result2 = $wpdb->get_results( $query_list );
        $arr_result = array(
            'detail'=>$result,
            'list'=>$result2
        );
        return $arr_result;
    }
    
    function pta_ajax_page_sub_type_name() {
        
        if(isset($_POST['action'])){
            if($_POST['action'] == 'pta_ajax_page_sub_type_name'){
                $url_value = $_POST;
                if($_POST['page_type'] == 'Home Page'){
                    $url_value['page_type'] = 'home_page';
                }elseif($_POST['page_type'] == 'Commercial Page'){
                    $url_value['page_type'] = 'commercial_page';
                }elseif($_POST['page_type'] == 'Informational Page'){
                    $url_value['page_type'] = 'informational_page';
                }
            }
        }
        require_once PTA_PLUGIN_FRONT_DIR . '/views/include/' . 'utls' . '.php';
        $ideal_percent = $this->get_sub_page_detail($url_value);
        $popup = _subpage_popup_table($_POST['pta_sn'], $ideal_percent['detail']);
        $html_view = array('sub_page'=>$ideal_percent, 'popup'=>$popup);
        echo wp_send_json_success($html_view);
    }
    
    function pta_ajax_get_ideal_percent() {
        
        global $wpdb;
        $query_detail = "SELECT * FROM `{$wpdb->prefix}pta_category_sub_type` WHERE id = '{$_POST['id']}'";       
        $result = $wpdb->get_results( $query_detail )[0];
        
        require_once PTA_PLUGIN_FRONT_DIR . '/views/include/' . 'utls' . '.php';
        $popup = _subpage_popup_table($_POST['pta_sn'], $result);
        $html_view = array('popup'=>$popup);
        echo wp_send_json_success($html_view);
    }
    
}
