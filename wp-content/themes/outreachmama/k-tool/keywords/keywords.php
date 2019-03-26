<?php
	header('Content-Type: application/javascript');
	
	// Init vars
	$keywords = file_get_contents('0_init.js');

$keywords .= <<<EOT
\n
/*
 * Blog Content
 */
\n
EOT;
	$keywords .= "KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword['blog_content'] = " 	. file_get_contents('1_blog_content/keywordPlusPartOfKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_branded['blog_content'] = " 					. file_get_contents('1_blog_content/branded.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_brandedPlusKeyword['blog_content'] = " 			. file_get_contents('1_blog_content/brandedPlusKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_justNatural['blog_content'] = " 				. file_get_contents('1_blog_content/justNatural.js') . ";\n\n";

$keywords .= <<<EOT
\n
/*
 * Long Form Content
 */
\n
EOT;
	$keywords .= "KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword['long_form_content'] = " 	. file_get_contents('2_long_form_content/keywordPlusPartOfKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_branded['long_form_content'] = " 					. file_get_contents('2_long_form_content/branded.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_brandedPlusKeyword['long_form_content'] = " 		. file_get_contents('2_long_form_content/brandedPlusKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_justNatural['long_form_content'] = " 				. file_get_contents('2_long_form_content/justNatural.js') . ";\n\n";

$keywords .= <<<EOT
\n
/*
 * Company Homepage
 */
\n
EOT;

	$keywords .= "KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword['company_homepage'] = " 	. file_get_contents('3_company_homepage/keywordPlusPartOfKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_branded['company_homepage'] = " 					. file_get_contents('3_company_homepage/branded.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_brandedPlusKeyword['company_homepage'] = " 			. file_get_contents('3_company_homepage/brandedPlusKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_justNatural['company_homepage'] = " 				. file_get_contents('3_company_homepage/justNatural.js') . ";\n\n";

$keywords .= <<<EOT
\n
/*
 * Company Service Page
 */
\n
EOT;

	$keywords .= "KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword['company_service_page'] = " 	. file_get_contents('4_company_service_page/keywordPlusPartOfKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_branded['company_service_page'] = " 					. file_get_contents('4_company_service_page/branded.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_brandedPlusKeyword['company_service_page'] = " 			. file_get_contents('4_company_service_page/brandedPlusKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_justNatural['company_service_page'] = " 				. file_get_contents('4_company_service_page/justNatural.js') . ";\n\n";

$keywords .= <<<EOT
\n
/*
 * Ecommerce Product Page
 */
\n
EOT;

	$keywords .= "KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword['ecommerce_product_page'] = " 	. file_get_contents('5_ecommerce_product_page/keywordPlusPartOfKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_branded['ecommerce_product_page'] = " 					. file_get_contents('5_ecommerce_product_page/branded.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_brandedPlusKeyword['ecommerce_product_page'] = "		. file_get_contents('5_ecommerce_product_page/brandedPlusKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_justNatural['ecommerce_product_page'] = " 				. file_get_contents('5_ecommerce_product_page/justNatural.js') . ";\n\n";

$keywords .= <<<EOT
\n
/*
 * Local Business Home Page
 */
\n 
EOT;

	$keywords .= "KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword['local_business_homepage'] = " . file_get_contents('6_local_business_homepage/keywordPlusPartOfKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_branded['local_business_homepage'] = " 					. file_get_contents('6_local_business_homepage/branded.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_brandedPlusKeyword['local_business_homepage'] = "		. file_get_contents('6_local_business_homepage/brandedPlusKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_justNatural['local_business_homepage'] = " 				. file_get_contents('6_local_business_homepage/justNatural.js') . ";\n\n";
	
$keywords .= <<<EOT
\n
/*
 * Local Business Service Page
 */
\n
EOT;

	$keywords .= "KEYWORD_TOOL.PageType_keywordPlusPartOfKeyword['local_business_service_page'] = " . file_get_contents('7_local_business_service_page/keywordPlusPartOfKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_branded['local_business_service_page'] = " 					. file_get_contents('7_local_business_service_page/branded.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_brandedPlusKeyword['local_business_service_page'] = "		. file_get_contents('7_local_business_service_page/brandedPlusKeyword.js') . ";\n\n";
	$keywords .= "KEYWORD_TOOL.PageType_justNatural['local_business_service_page'] = " 				. file_get_contents('7_local_business_service_page/justNatural.js') . ";\n\n";

	echo $keywords;

	// DEPRECATED: Load all the keywords
	// Init vars
	// require_once('_old/0_init.js');

	// require_once('_old/1_blog_content.js');
	// require_once('_old/2_long_form_content.js');
	// require_once('_old/3_company_homepage.js');

	// require_once('_old/4_company_service_page.js');
	// require_once('_old/5_ecommerce_product_page.js');
	
	// require_once('_old/6_local_business_homepage.js');
	// require_once('_old/7_local_business_service_page.js');