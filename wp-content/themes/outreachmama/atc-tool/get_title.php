<?php
	if( !isset($_REQUEST["url"]) )
		die();

	$url = trim($_REQUEST["url"]);
	
	// For debugging purposes
	if( $url == 'http://google.com' )
		die( json_encode( array("title" => "Google") ) );

	if( $url == 'http://facebook.com' )
		die( json_encode( array("title" => "Facebook") ) );
	
	function file_get_contents_curl($url){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.13) Gecko/20101206 Ubuntu/10.10 (maverick) Firefox/3.6.13');
		curl_setopt($ch, CURLOPT_ENCODING , "gzip");
		
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		$data = curl_exec($ch);

		curl_close($ch);
		
		// return mb_detect_encoding( $data );
		return $data;
	}

	$html = file_get_contents_curl($url);

	preg_match('/<title>(.+)<\/title>/', $html, $matches);
	$title = $matches[1];
	$title = str_replace('&amp;', '&', $title);

	// For debugging purposes:
	// $remoteIp = $_SERVER['REMOTE_ADDR'];
	// if( $remoteIp == '95.87.220.53' )
		// var_dump( $html );
	
	if($title == null)
		$title = '';

	echo json_encode( array("title" => $title) );