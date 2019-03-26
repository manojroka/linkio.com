<?php
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

<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
