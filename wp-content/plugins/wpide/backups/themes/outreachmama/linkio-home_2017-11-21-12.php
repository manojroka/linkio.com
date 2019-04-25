<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "40e1c3a3c58d01e2586aae14625c4a217c632bd6a9"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/linkio-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/linkio-home_2017-11-21-12.php") )  ) ){
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
            <div class="blue-button">
                <?php echo do_shortcode('[wp_colorbox_media url="https://www.youtube.com/embed/hxdcOPKVMus" type="youtube" hyperlink="Watch Linkio in Action"]'); ?>
            </div>
            <a class="green-button" href="<?php the_field('button_2'); ?>">Try LINKIO FOR FREE</a>
        </div>
    </div>
    <div class="header-bottom">
    <?php the_field('bottom_text'); ?>
    </div>
    
    <div class="tab-1">
    <div class="row">
        <div class="left-tab"><img src="<?php the_field('add_image_left'); ?>"></div>
        <div class="right-tab"><?php the_field('add_content_right'); ?></div>
    </div>
    </div>
    
    <div class="tab-1 tab-2">
    <div class="row">
        <div class="left-tab"><?php the_field('add_content_left_tab_2'); ?></div>
    </div>
    </div>
    
    <div class="tab-1 tab-3">
    <div class="row">
        <div class="left-tab"><img src="<?php the_field('add_image_tab_3'); ?>"></div>
        <div class="right-tab"><?php the_field('add_content_tab_3'); ?></div>
    </div>
    </div>
    
    <div class="tab-1 tab-2 tab-4">
    <div class="row">
        <div class="left-tab"><?php the_field('add_content_tab_4'); ?></div>
        <div class="right-tab"><img src="<?php the_field('add_image_tab_4'); ?>"></div>
    </div>
    </div>
    
    <div class="tab-1 tab-5">
    <div class="row">
    <h2>What People are Saying</h2>
        <div class="testimonials"><?php echo do_shortcode('[featured-content-slider cat_id="62"]'); ?></div>
    </div>
    </div>
   
    <div class="tab-1 tab-6">
    <div class="row">
        <div class="f-width"><?php the_field('add_content_tab_5'); ?><a href="<?php the_field('add_button_link'); ?>">Try Linkio for Free</a></div>
    </div>
    </div>
    
    <div class="tab-1 tab-7">
    <div class="row">
        <div class="product-generators">
        	            <h2><?php the_field('add_title_6'); ?></h2>
        	            
                         <?php if( have_rows('resources') ): ?>
                        
                         <ul class="resources">
                        
                         <?php while( have_rows('resources') ): the_row(); 
                        
                          // vars
                          $title = get_sub_field('add_title');
                          $image = get_sub_field('add_image');
                          $content = get_sub_field('add_content');
                          $link=get_sub_field('page_anchor_link');
                                      ?>
                        
                          <li class="col-xs-6 col-sm-4 col-md-4 col-lg-4 single-com">
                              <a href="<?php echo $link; ?>"><h4><?php echo $title; ?></h4></a>
                              <?php echo $content; ?>
                              <a href="<?php echo $link; ?>"><img src='<?php echo $image; ?>' ></a>
                          </li>
                        
                         <?php endwhile; ?>
                        
                         </ul>                
                        <?php endif; ?>
                </div>
    </div>
    </div>
    
     <div class="tab-1 tab-8">
    <div class="row">
        <div class="f-width"><h2><?php the_field('add_title_tab_7'); ?></h2><a href="<?php the_field('add_button_link_tab_7'); ?>">Try Linkio for Free</a></div>
    </div>
    </div>
   
   
   
 </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>