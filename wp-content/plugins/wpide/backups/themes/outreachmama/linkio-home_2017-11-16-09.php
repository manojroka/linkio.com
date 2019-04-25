<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "bb35afa4523ecece2e15e6c7eb71dd7179a8f1f703"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/linkio-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/linkio-home_2017-11-16-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Linkio Home
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
 
    <div class="header-section">
        <?php the_field('content'); ?>
        <div class="bottom-button">
            <a class="blue-button" href="<?php the_field('button_1'); ?>">Watch Linkio in Action</a>
            <a class="green-button" href="<?php the_field('button_2'); ?>">Try LINKIO FOR FREE</a>
        </div>
    </div>
    <div class="header-bottom">
    <?php the_field('bottom_text'); ?>
        Linkio is the best way to plan, track, automate, and report on link building </br>campaigns, enabling you to move from start to impact – fast.
    </div>
   
 </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>