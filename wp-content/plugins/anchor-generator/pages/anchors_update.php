<?php
	// Save operation .. filename -> anchor_type ..
	if( empty($_POST) )
		return;

	// Validate that all 7 page types exist
	if( !ag_is_valid_page_types($_POST) )
		$errorMsg .= "A missing page type !<br>";

	// For debugging
	// echo '<br><strong>Pages:</strong> <br>';
	
	$file_index = 1;
	// 7 folders - for each page type ... 4 files - for each anchor type ...
	foreach($_POST as $page_type => $anchor_types) {
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . $file_index . '_' . $page_type . DIRECTORY_SEPARATOR;

		// For debugging
		// echo $file_name . '<br>';
		// var_dump( $anchor_types );

		// Validate that all 4 textareas exist
		// if( !ag_is_valid_anchor_types($anchor_types) ) {
			// $errorMsg .= 'One or more blocks with keywords is empty or missing !<br>';
			// $errorMsg .= 'No save applied !<br>';
			// break;
		// }

		foreach($anchor_types as $anchor_type => $anchor_keywords) {
			// Init file contents
			$file_contents = '';

			// For debugging
			// echo $anchor_type . '<br>';

			// Explode POST keywords  .. & convert data into json array
			
			// UNRELIABLE:
			// $json_keywords = json_encode( explode(PHP_EOL, stripslashes($anchor_keywords)) );
			$json_keywords = json_encode( explode("\n", str_replace("\r", '', stripslashes($anchor_keywords))) );
			$file_contents .= $json_keywords;

			// Update 4 anchor_type files in each page_type folder
			$file_name = $path_to_page_type . $anchor_type . '.js';
			$update_result = file_put_contents($file_name, $file_contents);

			if($update_result === FALSE) {
				$errorMsg .= 'Cannot save file - most probably a permissions problem !<br>';
				return;
			}
		}

		$file_index++;
	}
	
	$successMsg .= 'Keywords updated successfully !';
	
	// # Update:
	// blog content / long form content / company homepage / local business homepage
	// local business service page / company service page / ecommerce product page