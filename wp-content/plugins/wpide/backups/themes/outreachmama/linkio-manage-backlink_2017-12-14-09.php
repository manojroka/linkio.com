<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c9241eda071c"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/linkio-manage-backlink.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/linkio-manage-backlink_2017-12-14-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Linkio Manage Backlink
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

<div id="primary" class="content-area common-inner">
 <main id="main" class="site-main" role="main">
 
<div class="section-1">
        <div class="left-title">
        <?php the_field('page_title_in_left'); ?>
        </div>
    </div>   
    
    <div class="section-2">
        <div class="full-title">
        <div class="row">
            <?php the_field('section_2_title'); ?>
        </div>
        </div>
    </div>   
    
    
 </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>