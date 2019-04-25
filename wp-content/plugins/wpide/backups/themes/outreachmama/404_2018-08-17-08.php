<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ddf8b0d7e26bd46cd68a481c28044d6ac79b498364"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/404.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/404_2018-08-17-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="row-1015 blog">
<style>
body.error404 .site-content {
    border-top: transparent;
    padding: 150px 0px;
    background-image: url('https://www.linkio.com/wp-content/uploads/2018/08/404-bg.jpg');
    background-repeat: no-repeat;
    background-color: #f8f8f8;
    background-position: center;
}
body.error404 .error-404.not-found {
    width: 1100px;
}
body.error404 .error-404.not-found h4 {
    font-size: 23px;
    color: #005689;
    text-transform: uppercase;
    margin-top: 40px;
   margin-bottom: 15px;
}
body.error404 .error-404.not-found p {
    color: #2f3a41 !important;
    font-weight: 300;
}
body.error404 .error-404.not-found p a {
    color: #1abc9c;
}
body.error404 .search-form {
    width: 400px;
    float: none;
    margin: 0 auto;
}
body.error404 .search-form input {
    background-color: #fff;
    border-radius: 5px !important;
    border-color: #a5a7ab;
}
body.error404 input[type="search"].search-field {
     width: calc(100% - 0px) !important;
}
body.error404 .error-404-container {
    float: none;
    margin: 0 auto;
    width: 900px;
    text-align: center;
}
body.error404 .search-submit {
    background-color: transparent;
    background-image: url('https://www.linkio.com/wp-content/uploads/2018/08/search.png');
    background-repeat: no-repeat;
    background-size: 26px;
    background-position: center;
    color: transparent !important;
}
</style>
	<div id="primary" class="content-area testettetette">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="error-404-container">
					<div class="img-center">
					    <img src="https://www.linkio.com/wp-content/uploads/2018/08/404.png">
					</div>
					<h4>Um, yeah. Something went Wrong!</h4>
					<p>The page you’re trying to access doesn’t appear to exist. Looking for anything specific? Use our Search tool below or go to <a href="https://www.linkio.com/">Home Page</a></p>					
						<?php get_search_form(); ?>
				</div><!-- .page-header -->

				<div class="page-content">


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
