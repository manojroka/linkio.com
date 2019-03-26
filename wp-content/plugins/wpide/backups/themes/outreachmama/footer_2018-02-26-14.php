<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c965aa32f22c"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/footer_2018-02-26-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

<footer id="colophon" class="site-footer site-footer-two" role="contentinfo">		
		
		<div class="row-1100">
		    <div class="footer-two">
    		    <div class="foot-1 footer-box">
        		    
                  <a href="https://www.linkio.com"><img src="https://www.linkio.com/wp-content/uploads/2017/11/footer-logo.jpg"></a>
                  
    		    </div>
    		    <div class="foot-2 footer-box">
    		        <h5>Contact us</h5>
    		        <ul>
    		            <li><a href="#">Work With Us</a></li>
    		            <li><a href="mailto:info@linkio.com">info@linkio.com</a></li>
    		        </ul>
    		    </div>
    		    <div class="foot-3 footer-box">
    		        <h5>Visit Us</h5>
    		        <h5 class="manage-backlink-header5">Follow Us</h5>
    		         <ul>
    		            <li><a class="facebook" href="https://www.facebook.com/linkioapp/" rel="nofollow" target="_blank">Facebook</a></li>
    		            <li><a class="twitter" href="https://twitter.com/linkioapp" rel="nofollow" target="_blank">twitter</a></li>
    		            <li><a class="youtube" href="https://www.youtube.com/channel/UCJlhr2AbF3NqvtohPN89UmQ" rel="nofollow" target="_blank">You Tube</a></li>
    		        </ul>
    		    </div>
    		    <div class="foot-4 footer-box">
    		        <h5>Sign up to our newsletter</h5>
    		        <?php echo do_shortcode('[contact-form-7 id="5858" title="newsletter"]'); ?>
    		       
    		    </div>
    		    <div class="footer-bottom">
    		        <p>© <?php echo date("Y"); ?> Linkio.com  All rights reserved.</p>
    		    </div>
    		</div>
		    </div>
		    	</footer>
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

<script type="text/javascript">
ga('send', {
hitType: 'event',
eventCategory: 'form',
eventAction: 'send',
eventLabel: 'contactus'
});
  

</script>

<script src="https://www.linkio.com/wp-content/themes/outreachmama/js/master2.js"></script>

</body>
</html>
