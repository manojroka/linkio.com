<?php
	define('LINKIO_ROOT', '../../../../../');
	
	// https://wordpress.stackexchange.com/questions/47049/what-is-the-correct-way-to-use-wordpress-functions-outside-wordpress-files
	define('WP_USE_THEMES', false);
	require(LINKIO_ROOT . 'wp-load.php');
	
	// 1. Validate the data ...
	if( !isset($_REQUEST['tool_id']) || ($_REQUEST['tool_id'] == '') ) die('Error: Missing tool id !');
	$tool_id = (int)$_REQUEST['tool_id'];
	
	if($tool_id < 1) die('Error: Invalid tool id !');
	
	$ip = $_SERVER['REMOTE_ADDR'];
	global $wpdb;
	
	// 2. Check if the user .. has already voted for this tool
	$votes = $wpdb->get_var(
		$wpdb->prepare("
			SELECT COUNT(*)
			FROM {$wpdb->prefix}seo_tools_votes
			WHERE
				ip = %s AND
				tool_id = %d
		", $ip, $tool_id)
	);

	// DEPRECATED: 2. Check if the user .. has already voted for this tool .. today ...
	/* $votes = $wpdb->get_var(
		$wpdb->prepare("
			SELECT COUNT(*)
			FROM {$wpdb->prefix}seo_tools_votes
			WHERE
				ip = %s AND
				tool_id = %d AND
				voted_on = CURDATE()
		", $ip, $tool_id)
	); */
	
	if($votes > 0) die("You've already voted for this tool.");
	
	// 3. Insert vote into votes table ...
	$result1 = $wpdb->insert( 
		$wpdb->prefix . 'seo_tools_votes',
		array( 
			'ip' 		=> $ip,
			'tool_id' 	=> $tool_id, 
			'voted_on' 	=> current_time('mysql', 1), 
		), 
		array(
			'%s',
			'%d',
			'%s',
		)
	);
	
	// 4. Update vote into seo_tools_list table ...
	if($result1 !== false) {
		$result2 = $wpdb->query(
			$wpdb->prepare( 
				"
					UPDATE {$wpdb->prefix}seo_tools_list
					SET votes = votes + 1
					WHERE id = %d
				",
				$tool_id
			)
		);
	}
	
	if ($result2 === false)
		die('Error: Cannot update votes.');
	
	// $wpdb->show_errors(); // For debugging
	// echo $wpdb->print_error(); // For debugging

	die('Success');