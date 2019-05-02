<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c95c28ddbdac"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-tutorials.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-tutorials_2018-05-03-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Seo Tutorials
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



<div id="primary" class="content-area common-inner2">

 <main id="main" class="site-main" role="main">
 
 <div class="beginners">
    <div class="row-1100">
        <div class="left title">
            <?php the_field('title'); ?>
        </div>
        <div class="right share-friend">
            <?php the_field('page_title_in_left'); ?>
        </div>
        <div class="left content-area"><?php the_field('content_area'); ?></div>
        <div class="right image"><img class="overlay-icon" src="<?php the_field('add_right_image'); ?>"/></div>
    </div>
 </div> 

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





</div><!-- .content-area -->

<?php get_footer(); ?>



