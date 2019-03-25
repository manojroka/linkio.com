<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c9c060fb1534"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/helloworld.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/helloworld_2017-12-12-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Link 500
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
        <div class="header1">
            <?php the_field('header_content'); ?>
        </div>
        <div class="tab-2">
        <div class="row">
            <div class="left-tab">
            <?php the_field('content_area'); ?>
            <div class="social-icons"><?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?></div>
            
            
         
            
            <div class="link-lists for-desktop">
            
            <li class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-lists-li-top">
                          <div class="list-box list-box1"><p>Rank</p></div>
                          <div class="list-box list-box2"><p>Logo</p></div>
                          <div class="list-box list-box3"><p>Company</p></div>
                          <div class="list-box list-box4"><p>Domain Authority</p></div>
                          <div class="list-box list-box5"><p>Url</p></div>
            </li>
            
            
        	            <?php if( have_rows('the_2018_link_500') ): ?>
                        
                         <ul class="link-lists-500">
                        
                         <?php while( have_rows('the_2018_link_500') ): the_row(); 
                        
                          // vars
                          $rank = get_sub_field('rank');
                          $logo = get_sub_field('logo');
                          $company = get_sub_field('company');
                          $domain =get_sub_field('domain_authority');
                          $url =get_sub_field('url_');
                                      ?>
                                      
                                      
                     
   
                              <li class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-lists-li">
                              <div class="list-box list-box1"><?php echo $rank; ?></div>
                              <div class="list-box list-box2"><img src='<?php echo $logo; ?>' ></div>
                              <div class="list-box list-box3"><?php echo $company; ?></div>
                              <div class="list-box list-box4"><?php echo $domain; ?></div>
                              <div class="list-box list-box5"><a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a></div>
                              </li>
                        
                 
                        
                
                        
                        
                         <?php endwhile; ?>
                        
                         </ul>                
                        <?php endif; ?>
                </div>
            
            
        
            </div>
            <div class="right-tab">
            <h3><?php the_field('side_bar_title'); ?></h3>
            <div class="testimonials"><?php echo do_shortcode('[featured-content-slider slides_column="1" autoplay="false" cat_id="65"]'); ?></div>
            <a class="button-2-l" href="<?php the_field('button_sidebar'); ?>">TRY LINKIO FOR FREE</a>
            </div>
            
            </div>
        </div>
        
        <div class="tab-3">
            <div class="row">
                <div class="tab-3-left">
                    <?php the_field('the_link_500'); ?>
                    <a class="button-1-l" href="<?php the_field('button_1'); ?>">Apply to THE Link 500</a>
                </div>
                
                <div class="tab-3-right">
                    <?php the_field('about_linkio'); ?>
                    <a class="button-2-l" href="<?php the_field('button_2'); ?>">TRY LINKIO FOR FREE</a>
                </div>
            </div>
        </div>
        
    </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>