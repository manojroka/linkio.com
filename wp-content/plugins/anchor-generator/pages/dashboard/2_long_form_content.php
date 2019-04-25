<div class="kblocks" id="long-form-content">
	<h2>Long Form Content</h2>
	<?php
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;

		$k21 	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'keywordPlusPartOfKeyword.js' ) ) );
		$k22	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'branded.js' ) ) );
		$k23	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'brandedPlusKeyword.js' ) ) );
		$k24	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'justNatural.js' ) ) );
	?>

	<label for="k21">Keyword Plus & Just Part of Keyword :</label>
	<textarea rows="20" cols="100" name="long_form_content[keywordPlusPartOfKeyword]" id="k21"><?php echo $k21; ?></textarea>

	<label for="k22">Branded :</label>
	<textarea rows="20" cols="100" name="long_form_content[branded]" id="k22"><?php echo $k22; ?></textarea>
	
	<label for="k23">Branded + Keyword :</label>
	<textarea rows="20" cols="100" name="long_form_content[brandedPlusKeyword]" id="k23"><?php echo $k23; ?></textarea>
	
	<label for="k24">Just Natural :</label>
	<textarea rows="20" cols="100" name="long_form_content[justNatural]" id="k24"><?php echo $k24; ?></textarea>
</div>