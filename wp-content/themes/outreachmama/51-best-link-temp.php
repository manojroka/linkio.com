<?php
/**
 * Template Name: 51 Best Link Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area common-inner2 bg-new02">
<div class="row-1015">

 <main id="main" class="site-main" role="main">
  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

   // Include the page content template.
   get_template_part( 'template-parts/content', 'page' );

   // If comments are open or we have at least one comment, load up the comment template.
   if ( comments_open() || get_comments_number() ) {
    comments_template();
   }

   // End of the loop.
  endwhile;
  ?>

 </main><!-- .site-main -->

</div>



</div><!-- .content-area -->

<?php get_footer(); ?>

<div class="main-tag-scroll">
<a href="#link-sec04" class="scroll-btn">up arrow</a>
</div>


