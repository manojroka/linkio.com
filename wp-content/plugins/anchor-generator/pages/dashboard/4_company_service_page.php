<div class="kblocks" id="company-service-page">
	<h2>Company Service Page</h2>
	<?php
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;

		$k41 	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'keywordPlusPartOfKeyword.js' ) ) );
		$k42	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'branded.js' ) ) );
		$k43	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'brandedPlusKeyword.js' ) ) );
		$k44	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'justNatural.js' ) ) );
	?>

	<label for="k41">Keyword Plus & Just Part of Keyword :</label>
	<textarea rows="20" cols="100" name="company_service_page[keywordPlusPartOfKeyword]" id="k41"><?php echo $k41; ?></textarea>

	<label for="k42">Branded :</label>
	<textarea rows="20" cols="100" name="company_service_page[branded]" id="k42"><?php echo $k42; ?></textarea>
	
	<label for="k43">Branded + Keyword :</label>
	<textarea rows="20" cols="100" name="company_service_page[brandedPlusKeyword]" id="k43"><?php echo $k43; ?></textarea>
	
	<label for="k44">Just Natural :</label>
	<textarea rows="20" cols="100" name="company_service_page[justNatural]" id="k44"><?php echo $k44; ?></textarea>
</div>