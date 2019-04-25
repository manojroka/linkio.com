<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ddf8b0d7e26bd46cd68a481c28044d6ad60361860d"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/tools-common/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/tools-common/footer_2018-07-17-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
	if(in_array($toolCode, array('ats', 'atc')))
		$footerLogo = $theme_uri . '/' . $toolCode . '-tool/images/logo-footer.jpg';
	
	if($toolCode == 'seo-tools')
		$footerLogo = $theme_uri . '/seo-tools/images/logo-footer.jpg';
?>
<footer>
	<div class="container" id="footer-top">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="https://www.linkio.com/"><img src="<?php echo $footerLogo; ?>" /></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<h3>Contact us</h3>
				<!--<a href="#">Work With Us</a>-->
				<a href="mailto:info@linkio.com" class="mailto">info@linkio.com</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<h3>Visit us</h3>
				<a href="https://www.facebook.com/linkioapp/" id="footer-facebook" target="_blank"></a>
				<a href="https://twitter.com/linkioapp" id="footer-twitter" target="_blank"></a>
				<a href="https://www.youtube.com/channel/UCJlhr2AbF3NqvtohPN89UmQ" id="footer-youtube" target="_blank"></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 footer-box">
				<h3>Sign up to our newsletter</h3>
				<?php echo do_shortcode('[contact-form-7 id="5858" title="newsletter"]'); ?>
				<?php /* <input type="email" placeholder="Your email address" id="signup-email"> */ ?>
			</div>
		</div>
	</div>
	<div class="container" id="footer-bottom">
		<div class="row">
			<div class="col-md-12 text-center">
				<p>© <?php echo date("Y"); ?> Linkio.com  All rights reserved. <a href="https://app.linkio.com/policy" target="_blank">Privacy Policy</a> | <a href="https://app.linkio.com/terms" target="_blank">Terms & Conditions</a> | <a href="https://app.linkio.com/gdpr" target="_blank">About the GDPR</a></p>
			</div>
		</div>
	</div>
</footer>