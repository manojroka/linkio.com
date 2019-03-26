<?php
	define('LINKIO_ROOT', '../../../../../');
	
	// https://wordpress.stackexchange.com/questions/47049/what-is-the-correct-way-to-use-wordpress-functions-outside-wordpress-files
	define('WP_USE_THEMES', false);
	require(LINKIO_ROOT . 'wp-load.php');
	
	// 1. Validate the data ...
	if( !isset($_REQUEST['name']) 			|| ($_REQUEST['name'] == '') ) 			die('Error: Missing name !');
	if( !isset($_REQUEST['summary']) 		|| ($_REQUEST['summary'] == '') ) 		die('Error: Missing summary !');
	if( !isset($_REQUEST['description'])	|| ($_REQUEST['description'] == '') )	die('Error: Missing description !');
	if( !isset($_REQUEST['price']) 			|| ($_REQUEST['price'] == '') ) 		die('Error: Missing price !');
	if( !isset($_REQUEST['homepage_url']) 	|| ($_REQUEST['homepage_url'] == '') )	die('Error: Missing url !');
	
	// 2. Set values
	$name 			= $_REQUEST['name'];
	$summary 		= $_REQUEST['summary'];
	$description 	= $_REQUEST['description'];

	$type 		= isset($_REQUEST['type']) ? $_REQUEST['type'] : '';
	if(in_array($_REQUEST['price'], array('Free', 'Paid', 'Freemium'))) $price = $_REQUEST['price'];
	else $price = '';
	
	$status 	= 'Suggested';
	$homepage_url 		= $_REQUEST['homepage_url'];

	// For debugging
	// var_dump(
		// $name,
		// $summary,
		// $type,
		// $price,
		// $homepage_url
	// );

	// 3. Insert the data into WordPress ...
	global $wpdb;
	$result = $wpdb->insert(
		$wpdb->prefix . 'seo_tools_list',
		array(
			'name' 			=> $name,
			'summary' 		=> $summary,
			'description' 	=> $description,

			'status' 		=> $status,
			'type' 			=> implode(',', $type),
			'price' 		=> $price,

			'homepage_url' 	=> $homepage_url,
			
			// Links ...
			'link1'			=> $_REQUEST['link1'], 'link1_text' => $_REQUEST['link1_text'],
			'link2'			=> $_REQUEST['link2'], 'link2_text' => $_REQUEST['link2_text'],
			'link3'			=> $_REQUEST['link3'], 'link3_text' => $_REQUEST['link3_text'],
			'link4'			=> $_REQUEST['link4'], 'link4_text' => $_REQUEST['link4_text'],
			'link5'			=> $_REQUEST['link5'], 'link5_text' => $_REQUEST['link5_text'],

			// Images ...
			'img1'			=> $_REQUEST['img1'], 'img1_text' => $_REQUEST['img1_text'],
			'img2'			=> $_REQUEST['img2'], 'img2_text' => $_REQUEST['img2_text'],
			'img3'			=> $_REQUEST['img3'], 'img3_text' => $_REQUEST['img3_text'],
			'img4'			=> $_REQUEST['img4'], 'img4_text' => $_REQUEST['img4_text'],
			'img5'			=> $_REQUEST['img5'], 'img5_text' => $_REQUEST['img5_text'],
			
			// Videos ...
			'video1'		=> $_REQUEST['video1'],
			'video2'		=> $_REQUEST['video2'],
			'video3'		=> $_REQUEST['video3'],
			'video4'		=> $_REQUEST['video4'],
			'video5'		=> $_REQUEST['video5'],
		), 
		array(
			'%s',
			'%s',
			'%s',

			'%s',
			'%s',
			'%s',
			
			'%s',
			
			// Links ... 10 strings ...
			'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s',
			
			// Images ... 10 strings ...
			'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s',
			
			// Videos ... 5 strings ...
			'%s', '%s', '%s', '%s', '%s',
		)
	);
	// $wpdb->show_errors(); // For debugging
	// echo $wpdb->print_error(); // For debugging
	
	// https://stackoverflow.com/questions/6529242/wpdb-what-does-it-return-on-fail?answertab=active#tab-top
	if ($result === false)
		die('Error: Cannot insert new tool.');
	
	// 4. Send notification email
	mail('ajay@linkio.com', 'Linkio - Submit new tool', print_r($_REQUEST, true));	
	
	// 5. Temporary
	// mail('d.mirchev@exigio.com', 'Linkio - Submit new tool', print_r($_REQUEST, true));


	die('Success');