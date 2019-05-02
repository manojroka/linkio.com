<?php
// Save operation
if( isset($_REQUEST['save']) ) {
	global $wpdb;
	
	// For debugging:
	// echo '<b>SAVE tool</b> <br>';
	// echo '<b>Link 1 Text: ' . $_REQUEST['link1_text'];
	// exit;

	$type = '';
	if(isset($_REQUEST['type'])) $type = implode(',', $_REQUEST['type']);
	
	// Do follow ...
	$home_dofollow = $link1_dofollow = $link2_dofollow = $link3_dofollow = $link4_dofollow = $link5_dofollow = 0;
	if(isset($_REQUEST['home_dofollow'])) $home_dofollow = 1;
	if(isset($_REQUEST['link1_dofollow'])) $link1_dofollow = 1;
	if(isset($_REQUEST['link2_dofollow'])) $link2_dofollow = 1;
	if(isset($_REQUEST['link3_dofollow'])) $link3_dofollow = 1;
	if(isset($_REQUEST['link4_dofollow'])) $link4_dofollow = 1;
	if(isset($_REQUEST['link5_dofollow'])) $link5_dofollow = 1;
	
	// Main data ...	
	$data = array(
		'name' 			=> $_REQUEST['name'],
		'status' 		=> $_REQUEST['status'],
		'type' 			=> $type,
		
		'votes' 		=> $_REQUEST['votes'],
		'price' 		=> $_REQUEST['price'],
		'homepage_url' 	=> $_REQUEST['homepage_url'],
		
		'home_dofollow'	=> $home_dofollow,
		'summary' 		=> str_replace(array("\\", "\'"), array("", "'"), $_REQUEST['summary']),
		'description'	=> str_replace(array("\\", "\'"), array("", "'"), $_REQUEST['description']),

		/* Links */
		'link1' 		=> $_REQUEST['link1'], 'link1_text'	=> $_REQUEST['link1_text'], 'link1_dofollow' => $link1_dofollow,
		'link2' 		=> $_REQUEST['link2'], 'link2_text'	=> $_REQUEST['link2_text'], 'link2_dofollow' => $link2_dofollow,
		'link3' 		=> $_REQUEST['link3'], 'link3_text'	=> $_REQUEST['link3_text'], 'link3_dofollow' => $link3_dofollow,
		'link4' 		=> $_REQUEST['link4'], 'link4_text'	=> $_REQUEST['link4_text'], 'link4_dofollow' => $link4_dofollow,
		'link5' 		=> $_REQUEST['link5'], 'link5_text'	=> $_REQUEST['link5_text'], 'link5_dofollow' => $link5_dofollow,

		/* Images */
		'img1' 		=> $_REQUEST['img1'], 'img1_text' => $_REQUEST['img1_text'], 
		'img2' 		=> $_REQUEST['img2'], 'img2_text' => $_REQUEST['img2_text'], 
		'img3' 		=> $_REQUEST['img3'], 'img3_text' => $_REQUEST['img3_text'], 
		'img4' 		=> $_REQUEST['img4'], 'img4_text' => $_REQUEST['img4_text'], 
		'img5' 		=> $_REQUEST['img5'], 'img5_text' => $_REQUEST['img5_text'], 

		/* Videos */
		'video1' 		=> $_REQUEST['video1'],
		'video2' 		=> $_REQUEST['video2'],
		'video3' 		=> $_REQUEST['video3'],
		'video4' 		=> $_REQUEST['video4'],
		'video5' 		=> $_REQUEST['video5'],
	);
	
	if( isset($_REQUEST['id']) ) $where = array('id' => $_REQUEST['id']);
	
	$format = array( 
		'%s', '%s', '%s',
		'%s', '%s', '%s',
		'%s', '%s', '%s',
		
		/* Links */
		'%s', '%s', '%d',
		'%s', '%s', '%d',
		'%s', '%s', '%d',
		'%s', '%s', '%d',
		'%s', '%s', '%d',

		/* Images */
		'%s', '%s', '%s', '%s', '%s',
		'%s', '%s', '%s', '%s', '%s',
		
		/* Videos */
		'%s', '%s', '%s', '%s', '%s',
	);
	
	// For debugging
	// if( isset($_REQUEST['action']) && ($_REQUEST['action'] == 'add') ) {
		// var_dump( $data );
		// die();
	// }
	
	// Insert or update depending on initial screen ...
	if($_REQUEST['action'] == 'add') {
		$result = $wpdb->insert(
			$wpdb->prefix . 'seo_tools_list',
			$data,
			$format		
		);
	}
	if($_REQUEST['action'] == 'edit') {
		$result = $wpdb->update(
			$wpdb->prefix . 'seo_tools_list',
			$data,
			$where,
			$format		
		);
	}	
	
	if($result === false) {
		echo tools_List_Notices::get_notice('error', '<b>Error:</b> Cannot add/update tool data.');
		$wpdb->show_errors();
		$wpdb->print_error();
	} 
	
	if($result !== false) {
		$toolName = $_REQUEST['name'];
		echo "<script>window.location = 'admin.php?page=tools_list_dashboard&msg={$toolName}+updated+successfully.'</script>";
		// return;
	}
}	
?>