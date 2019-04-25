<?php
if( isset($_REQUEST['id']) ) {
	$deletetoolId = (int)$_REQUEST['id'];
	
	if($deletetoolId > 0) {
		$wpdb->query( "DELETE FROM {$wpdb->prefix}seo_tools_list WHERE id = $deletetoolId" );
		
		echo tools_List_Notices::get_notice('success', '<b>Success:</b> tool deleted.');
	}
}