<div class="kblocks" id="local-business-homepage">
	<h2>Local Business Homepage</h2>
	<?php
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;

		$k61 	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'keywordPlusPartOfKeyword.js' ) ) );
		$k62	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'branded.js' ) ) );
		$k63	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'brandedPlusKeyword.js' ) ) );
		$k64	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'justNatural.js' ) ) );
	?>

	<label for="k61">Keyword Plus & Just Part of Keyword :</label>
	<textarea rows="20" cols="100" name="local_business_homepage[keywordPlusPartOfKeyword]" id="k61"><?php echo $k61; ?></textarea>

	<label for="k62">Branded :</label>
	<textarea rows="20" cols="100" name="local_business_homepage[branded]" id="k62"><?php echo $k62; ?></textarea>
	
	<label for="k63">Branded + Keyword :</label>
	<textarea rows="20" cols="100" name="local_business_homepage[brandedPlusKeyword]" id="k63"><?php echo $k63; ?></textarea>
	
	<label for="k64">Just Natural :</label>
	<textarea rows="20" cols="100" name="local_business_homepage[justNatural]" id="k64"><?php echo $k64; ?></textarea>
</div>