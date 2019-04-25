<?php
	header('Content-Type: application/javascript');

	// SECTION: GENERIC FUNCTIONS
	$genericPath = 'categorization/generic/';
	require_once( $genericPath . '1-is-no-text.js' );
	require_once( $genericPath . '2-is-totally-random.js' );
	
	// SECTION: EXACT FUNCTIONS
	$exactPath = 'categorization/exact/';
	require_once( $exactPath . '1-is-title-tag.js' );
	require_once( $exactPath . '2-is-branded.js' );
	require_once( $exactPath . '3-is-exact-keyword.js' );
	require_once( $exactPath . '4-is-brand-keyword-together.js' );

	require_once( $exactPath . '5-is-keyword-plus-word.js' );
	require_once( $exactPath . '6-is-only-part-of-keyword.js' );

	// SECTION: URL FUNCTIONS
	$urlPath = 'categorization/url/';
	require_once( $urlPath . '1-is-website-name.js' ); // WebsiteName.com / linkio.com
	require_once( $urlPath . '2-is-homepage-url.js' ); // www.linkio.com
	require_once( $urlPath . '3-is-naked-url-no-protocol.js' ); // (www.)linkio.com/abc
	require_once( $urlPath . '4-is-naked-url.js' ); // http://(www.)linkio.com/abc
	require_once( $urlPath . '5-3rd-party-url.js' );

	// SECTION: OTHER FUNCTIONS
	$otherPath = 'categorization/other/';
	require_once( $otherPath . '1-is-just-natural.js' );
