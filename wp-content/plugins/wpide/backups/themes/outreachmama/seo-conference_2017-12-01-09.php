<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c9c1a771a8c0"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-conference.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-conference_2017-12-01-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Seo Conference
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
        <div class="tab-01">
            <?php the_field('add_content_tab01'); ?>
            <div class="row"> 
            <div class="left"><?php the_field('left_conetnt_tab01'); ?></div>
            <div class="right"><?php the_field('right_content_tab01'); ?></div>
            </div>
        </div>
        <div class="tab-02">
            <div class="tab-02-inner">
                <?php the_field('add_content_tab02'); ?>
                <div class="left"><?php the_field('left_conetnt_tab02'); ?></div>
                <div class="right"><?php the_field('right_content_tab02'); ?></div>
            </div>
        </div>
        
        <div class="tab-03">
            <div class="row"> 
                <div class="free-ticket"><?php the_field('add_content_tab03'); ?></div>
                <div class="left"><?php the_field('left_box_tab03'); ?></div>
                <div class="right"><?php the_field('right_box_tab03'); ?></div>
            </div>
        </div>
    </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>