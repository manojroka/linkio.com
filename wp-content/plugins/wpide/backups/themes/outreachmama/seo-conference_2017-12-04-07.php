<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c91f6a50a615"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-conference.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-conference_2017-12-04-07.php") )  ) ){
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
        <div class="tab-02-main">
            <div class="tab-02-inner">
                <?php the_field('add_content_tab02'); ?>
                <div class="left"><?php the_field('left_conetnt_tab02'); ?></div>
                <div class="right"><?php the_field('right_content_tab02'); ?></div>
            </div>
        </div>
        </div>
        
        <div class="tab-03">
            <div class="row"> 
                <div class="free-ticket"><?php the_field('add_content_tab03'); ?></div>
                <div class="left"><?php the_field('left_box_tab03'); ?></div>
                <div class="right"><?php the_field('right_box_tab03'); ?></div>
            </div>
        </div>
        
        <div class="tab-04">
            <div class="row"> 
                <h2><?php the_field('title_tab04'); ?></h2>
                <div class="tab-04-left">
                
         
             <?php if( have_rows('left_list') ): ?>
                
                 <ul class="left_list">
                
                 <?php while( have_rows('left_list') ): the_row(); 
                
                  // vars
                  $number = get_sub_field('list_number');
                  $content = get_sub_field('list_left');
                              ?>
                
                  <li class="left-list">
                  <div class="list-number"><?php echo $number; ?></div>
                  <div class="list-content"><?php echo $content; ?></div>        
                            
                  </li>
                
                 <?php endwhile; ?>
                
                 </ul>                
                <?php endif; ?>
                
                
                </div>
                
                
                
                
                <div class="tab-04-right">
                
                <?php if( have_rows('right_list') ): ?>
                
                 <ul class="right_list">
                
                 <?php while( have_rows('right_list') ): the_row(); 
                
                  // vars
                  $number = get_sub_field('list_number');
                  $content = get_sub_field('list_left');
                              ?>
                
                  <li class="right-list">
                  <div class="list-number"><?php echo $number; ?></div>
                  <div class="list-content"><?php echo $content; ?></div>        
                            
                  </li>
                
                 <?php endwhile; ?>
                
                 </ul>                
                <?php endif; ?>
                
                
                </div>
       
            </div>
        </div>
        
        
        
        <div class="tab-05">
            <div class="row"> 
                <h2><?php the_field('title_tab05'); ?></h2>
                <div class="testimonials"><?php echo do_shortcode('[featured-content-slider cat_id="62"]'); ?></div>
            </div>
        </div>
        
        <div class="tab-06">
            <div class="row"> 
                <div class="bottom-05"><?php the_field('add_content_tab06'); ?></div>
            </div>
        </div>
        
        <div class="tab-03 tab-07">
            <div class="row"> 
                <div class="free-ticket"><?php the_field('add_content_tab03'); ?></div>
                
            </div>
        </div>
    </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>