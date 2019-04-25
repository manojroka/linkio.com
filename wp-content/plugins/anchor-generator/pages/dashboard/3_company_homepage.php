<div class="kblocks" id="company-homepage">
	<h2>Company Homepage</h2>
	<?php
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;

		$k31 	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'keywordPlusPartOfKeyword.js' ) ) );
		$k32	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'branded.js' ) ) );
		$k33	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'brandedPlusKeyword.js' ) ) );
		$k34	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'justNatural.js' ) ) );
	?>

	<label for="k31">Keyword Plus & Just Part of Keyword :</label>
	<textarea rows="20" cols="100" name="company_homepage[keywordPlusPartOfKeyword]" id="k31"><?php echo $k31; ?></textarea>

	<label for="k32">Branded :</label>
	<textarea rows="20" cols="100" name="company_homepage[branded]" id="k32"><?php echo $k32; ?></textarea>
	
	<label for="k33">Branded + Keyword :</label>
	<textarea rows="20" cols="100" name="company_homepage[brandedPlusKeyword]" id="k33"><?php echo $k33; ?></textarea>
	
	<label for="k34">Just Natural :</label>
	<textarea rows="20" cols="100" name="company_homepage[justNatural]" id="k34"><?php echo $k34; ?></textarea>
</div>
