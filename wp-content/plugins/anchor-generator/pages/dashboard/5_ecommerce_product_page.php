<div class="kblocks" id="ecommerce-product-page">
	<h2>Ecommerce Product Page</h2>
	<?php
		// Build path to page type folder
		$path_to_page_type = PATH_TO_KEYWORDS . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;

		$k51 	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'keywordPlusPartOfKeyword.js' ) ) );
		$k52	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'branded.js' ) ) );
		$k53	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'brandedPlusKeyword.js' ) ) );
		$k54	= implode("\n", json_decode( file_get_contents( $path_to_page_type . 'justNatural.js' ) ) );
	?>

	<label for="k51">Keyword Plus & Just Part of Keyword :</label>
	<textarea rows="20" cols="100" name="ecommerce_product_page[keywordPlusPartOfKeyword]" id="k51"><?php echo $k51; ?></textarea>

	<label for="k52">Branded :</label>
	<textarea rows="20" cols="100" name="ecommerce_product_page[branded]" id="k52"><?php echo $k52; ?></textarea>
	
	<label for="k53">Branded + Keyword :</label>
	<textarea rows="20" cols="100" name="ecommerce_product_page[brandedPlusKeyword]" id="k53"><?php echo $k53; ?></textarea>
	
	<label for="k54">Just Natural :</label>
	<textarea rows="20" cols="100" name="ecommerce_product_page[justNatural]" id="k54"><?php echo $k54; ?></textarea>
</div>