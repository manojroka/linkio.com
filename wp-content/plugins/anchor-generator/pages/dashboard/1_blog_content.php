<div class="kblocks" id="blog-content">
	<h2>Blog Content</h2>
	<?php
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;

		$k11 	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'keywordPlusPartOfKeyword.js' ) ) );
		$k12	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'branded.js' ) ) );
		$k13	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'brandedPlusKeyword.js' ) ) );
		$k14	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'justNatural.js' ) ) );
	?>

	<label for="k11">Keyword Plus & Just Part of Keyword :</label>
	<textarea rows="20" cols="100" name="blog_content[keywordPlusPartOfKeyword]" id="k11"><?php echo $k11; ?></textarea>

	<label for="k12">Branded :</label>
	<textarea rows="20" cols="100" name="blog_content[branded]" id="k12"><?php echo $k12; ?></textarea>
	
	<label for="k13">Branded + Keyword :</label>
	<textarea rows="20" cols="100" name="blog_content[brandedPlusKeyword]" id="k13"><?php echo $k13; ?></textarea>
	
	<label for="k14">Just Natural :</label>
	<textarea rows="20" cols="100" name="blog_content[justNatural]" id="k14"><?php echo $k14; ?></textarea>
</div>