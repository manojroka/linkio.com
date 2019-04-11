<?php
/**
 * Description of PTAFHome_model
 *
 * @author linkio.com
 */
class PTAFHome_model {
    
    function site_map_to_get_url_arr($s_map_url, $is_direct = NULL) {
        
        $url_list = [];
        $arr_urls = NULL;
        if($is_direct == TRUE){
            $arr_urls = $s_map_url['url'];
        } else {
            if(@simplexml_load_file($s_map_url) != NULL){
                $xml_obj = NULL;
                $xml_obj = @simplexml_load_file($s_map_url);
                if($xml_obj != NULL){
                    $arr_urls = json_decode(json_encode($xml_obj),TRUE)['url'];
                }
            }
        }
        
        if($arr_urls != NULL){
            if(isset( $arr_urls['loc'] )){
                $url_list[] = $arr_urls['loc'];
            } else {
                foreach ($arr_urls as $arr_url) {
                    $url_list[] = $arr_url['loc'];
                }
            }   
        }
        return $url_list;
    }
    
    function site_map_arr_to_url($site_maps_arr) {
        $all_urls = array();
        foreach ($site_maps_arr as $xml1) {
            $urls = $this->site_map_to_get_url_arr($xml1['loc']);
            if($urls != NULL){
                foreach ($urls as $url) { 
                    $all_urls[] = $url;              
                }
            }
        }
        return $all_urls;
    }
    
    function sort_urls($all_urls) {
        $sorted_url = array();
        $all_urls = array_unique($all_urls);
        asort($all_urls, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
        foreach ($all_urls as $url) {
            $sorted_url[] = $url;
        }
        return $sorted_url;
    }
    
    
    function pta_get_all_urls($homepage_url) {
        
        
        $url_sitemap = $homepage_url . 'sitemap.xml';
        if(@simplexml_load_file($url_sitemap) != NULL){
            $xml = @simplexml_load_file($url_sitemap);
        }else {
            return FALSE;
        }
        
        $site_maps = json_decode(json_encode($xml),TRUE);
        if(isset($site_maps['sitemap'])){
            $all_urls = $this->site_map_arr_to_url($site_maps['sitemap']);
        }elseif (isset ($site_maps['url'])) {
            $all_urls = $this->site_map_to_get_url_arr($site_maps, TRUE);
        } else {
            return FALSE;
        }
        $all_urls = $this->sort_urls($all_urls);
        return $all_urls;
    }
    
    function pta_get_home_page($original_h_page, $arr_h_page = NULL) {
        $return_val = FALSE;
        if($arr_h_page == NULL){
            if (substr($original_h_page, -1) != '/') {
                $original_h_page .= '/';
            }
            $return_val = $original_h_page;
        }else{
            if ($this->fully_parse_url($original_h_page) == $this->fully_parse_url($arr_h_page)) {
                $return_val = TRUE;
            }
        }
        return $return_val;
    }
    
    function fully_parse_url($url) {
        $removed_http = preg_replace("(^https?://)", "", $url);
        if (strpos($removed_http, 'www.') !== false) {
            $removed_http = str_replace("www.", "", $removed_http);
        }
        if (substr($removed_http, -1) != '/') {
            $removed_http .= '/';
        }
        return $removed_http;
    }
    
}
