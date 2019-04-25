<h1>Anchor Text Generator</h1>
<?php
	if( !is_dir(PATH_TO_KEYWORDS) ) {
		echo Anchor_Generator_Notices::get_notice('error', '<b>Error:</b> No access to keywords files.');
		return;
	}
?>

<h2 class="nav-tab-wrapper">
    <a href="#" class="nav-tab" id="tab-blog-content">Blog Content</a>
    <a href="#" class="nav-tab" id="tab-long-form-content">Long-Form Content</a>
    
	<a href="#" class="nav-tab" id="tab-company-homepage">Company Homepage</a>
	<a href="#" class="nav-tab" id="tab-company-service-page">Company Service Page</a>
	<a href="#" class="nav-tab" id="tab-ecommerce-product-page">Ecommerce Product Page</a>

	<a href="#" class="nav-tab" id="tab-local-business-homepage">Local Business Homepage</a>
    <a href="#" class="nav-tab" id="tab-local-business-service-page">Local Business Service Page</a>
</h2>

<?php
	// Update all anchors ..
	$errorMsg = $successMsg = '';

	require_once "anchors_update.php";

	if($errorMsg != '') {
		echo Anchor_Generator_Notices::get_notice('error', '<b>Error:</b><br>' . $errorMsg);
		return;
	}
	
	if($successMsg != '')
		echo Anchor_Generator_Notices::get_notice('success', '<b>Success:</b><br>' . $successMsg);
?>

<form action="#" method="post" name="save_anchors" id="save_anchors" class="validate" novalidate="novalidate">
	<?php
		// Load all anchors ..
		// require_once "anchors_load.php";
		
			require_once 'dashboard/1_blog_content.php';
			require_once 'dashboard/2_long_form_content.php';

			require_once 'dashboard/3_company_homepage.php';
			require_once 'dashboard/4_company_service_page.php';
			require_once 'dashboard/5_ecommerce_product_page.php';

			require_once 'dashboard/6_local_business_homepage.php';
			require_once 'dashboard/7_local_business_service_page.php';
	?>
	<p class="submit"><input type="submit" class="button button--primary" value="Save"></p>
</form>


<script type="text/javascript">
jQuery(function($) {
	$('.nav-tab').click(function() {
		$(this).focus();
		blockId = $(this).attr('id').replace('tab-', '#');

		$('.kblocks').hide().delay(1).filter(blockId).show();
	});
});
</script>
