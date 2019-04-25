<div class="kblocks" id="local-business-service-page">
	<h2>Local Business Service Page</h2>
	<?php
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;

		$k71 	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'keywordPlusPartOfKeyword.js' ) ) );
		$k72	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'branded.js' ) ) );
		$k73	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'brandedPlusKeyword.js' ) ) );
		$k74	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'justNatural.js' ) ) );
	?>

	<label for="k71">Keyword Plus & Just Part of Keyword :</label>
	<textarea rows="20" cols="100" name="local_business_service_page[keywordPlusPartOfKeyword]" id="k71"><?php echo $k71; ?></textarea>

	<label for="k72">Branded :</label>
	<textarea rows="20" cols="100" name="local_business_service_page[branded]" id="k72"><?php echo $k72; ?></textarea>
	
	<label for="k73">Branded + Keyword :</label>
	<textarea rows="20" cols="100" name="local_business_service_page[brandedPlusKeyword]" id="k73"><?php echo $k73; ?></textarea>
	
	<label for="k74">Just Natural :</label>
	<textarea rows="20" cols="100" name="local_business_service_page[justNatural]" id="k74"><?php echo $k74; ?></textarea>
</div>