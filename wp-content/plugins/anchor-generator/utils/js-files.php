<?php
	function ag_js_file_head($filename) {

		$file_heads = array(
			'blog_content' 					=> 'Blog Content',
			'long_form_content' 			=> 'Long Form Content',

			'company_homepage' 				=> 'Company Home Page',
			'company_service_page'			=> 'Company Service Page',
			'ecommerce_product_page'		=> 'Ecommerce Product Page',
			
			'local_business_homepage'		=> 'Local Business Home Page',
			'local_business_service_page' 	=> 'Local Business Service Page',
		);
		
		$file_head = $file_heads[$filename];
	
$js_file_head = <<<EOT
/*
 * $file_head
 */

EOT;

		return $js_file_head;
	}