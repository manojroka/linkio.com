<?php
/**
 * Description of PTAFHome_model
 *
 * @author linkio.com
 */
class PTAFHome_model {
    
    
    function read_all_url($homepage_url) {
        
        $url_page_sitemap = $homepage_url . 'page-sitemap.xml';
        $url_sitemap = $homepage_url . 'sitemap.xml';
        $url_xmlsitemap = $homepage_url . 'xmlsitemap.php';
        //$result_array = simpleXML_load_file($url_page_sitemap,"SimpleXMLElement",LIBXML_NOCDATA);
        if(@simplexml_load_file($url_page_sitemap) != NULL){
            $xml = @simplexml_load_file($url_page_sitemap);
        }elseif(@simplexml_load_file($url_sitemap) != NULL){
            $xml = @simplexml_load_file($url_sitemap);
        }elseif(@simplexml_load_file($url_xmlsitemap) != NULL){
            $xml = @simplexml_load_file($url_xmlsitemap);
        } else {
            return FALSE;
        }
        $json_string = json_encode($xml);
        $result_array = json_decode($json_string, TRUE);
        return $result_array;
    }
    
}
