<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c9248d848abb"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/linkio-new-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/linkio-new-home_2018-05-14-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Linkio HomePage-New Template
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
    <div  class="header-section-new">
        <div class="row">
            <?php the_field('section_1_title');?> 
            <div class="video-section">
                <div class="video-container">
                    <iframe src="<?php the_field('section_1_video')?>" 	height="274px"	width="489px"></iframe>
                </div>    
            </div>    
            <div class="anchor-btn">
                <a class="anchor-btn-1" href="<?php the_field('anchor_link_1')?>">Features</a>
                <a class="anchor-btn-2" href="<?php the_field('anchor_link_2')?>">Try Free</a>
            </div>
        </div>    
    </div>
    <div class="section2">
        <div class="row">
            <?php the_field('section_2_title');?>
            <?php the_field('section_2_sub_content');?>
            <div class="img-center">
                <img src="<?php the_field('section_2_bottom_image');?>">
            </div>    
        </div>
    </div>
    <div class="section3 section2">
    <div class="row-750">
        <h2><?php the_field('section_3_Title');?></h2>
            <?php the_field('section_3_subcontent');?>
        </div>
        <div class="img-center">
            <img src="<?php the_field('section_3_images');?>">
        </div>    
        <div class="row-750">
            <p><?php the_field('section_3_bottom_content');?></p>
        </div>    
    </div>

    <div class="section4 section2">
    <div class="row-750">
        <h2><?php the_field('section_4_title');?></h2>
        <?php the_field('section_4_subcontent');?>
        <div class="img-center img-pad-top">
            <img src="<?php the_field('section_4_images');?>">
        </div>    
    </div>
    </div>
    <div class="section5 section2">
        <div class="row-750">
            <h2><?php the_field('testimonial_title');?></h2>
           
             <?php if( have_rows('testimonial') ): ?>
                 <ul class="testimonial-ul">
                 <?php while( have_rows('testimonial') ): the_row(); ?>
                  <li class="testimonial-list">
                      <div class="testimonial-profile">
                        <img src='<?php the_sub_field('featured_images') ?>' >
                     </div>
                     <div class="testimonila-detail">
                        <?php the_sub_field('testimonial_subcontent') ?>
                     </div>
                     <div class="testimonial-author">
                        <div class="testimonial-ft-right">
                            <div class="testimonial-name">
                                   <p> <?php the_sub_field('testimonial_name') ?></p>
                                </div>
                            <div class="testimonial-position">
                                <p><?php the_sub_field('profession') ?></p>
                            </div>
                        </div>    
                     </div>
                  </li>
                 <?php endwhile; ?>
                
                 </ul>                
                <?php endif; ?>
        </div>    
    </div>
    <div class="section2 section6">
    <div class="row-750">
        <h2><?php the_field('section_6_title');?></h2>
    </div>    
        <div class="partner-logo">
            <div class="row">
                 <?php if( have_rows('logo_images_rep') ): ?>
                     <div class="logo-div">
                         <?php while( have_rows('logo_images_rep') ): the_row(); ?>
                            <div class="logo-images">
                                <a href="<?php the_sub_field('logo_link')?>"><img src='<?php the_sub_field('logo_images')?>'></a>
                            </div>
                        <?php endwhile; ?>
                     </div>                
                    <?php endif; ?>      
            </div>
        </div>
    </div>
    
    <div class="section2 scetion7">
        <div class="row-750">
            <?php the_field('section_7_itle');?>
        </div>
        <div class="row">
            <div class="pricing_repeater">
                <?php if( have_rows('pricing_repeater') ): ?>
                 <ul class="pricing-ul">
                 <?php while( have_rows('pricing_repeater') ): the_row(); ?>
                  <li class="pricing-li">
                         <div class="pricing-title">
                            <?php the_sub_field('pricing_title') ?>
                         </div>
                         <div class="pricing-price">
                             <?php the_sub_field('price') ?>
                         </div>
                        <div class="web-count">
                            <?php the_sub_field('web_count') ?>
                        </div>
                        <div class="analyzed-count">
                            <?php the_sub_field('analyzed_count') ?>
                        </div>
                        <div class="automation">
                            <?php the_sub_field('aut') ?>
                        </div>
                        <div class="pricing-btn">
                            <a href="<?php the_sub_field('button_url') ?>"><?php the_sub_field('button_text') ?></a>
                        </div>
                        <div class="pricing-desc">
                            <?php the_sub_field('short_description') ?>
                        </div>
                        <div class="pricing-btn">
                            <a href="<?php the_sub_field('button_url') ?>"><?php the_sub_field('button_text') ?></a>
                        </div>
                  </li>
                 <?php endwhile; ?>
                
                 </ul>
                 <p class="price-shown">*Prices shown are billed monthly</p>
                <?php endif; ?>  
            </div>
        </div>    
    </div>

<div class="section2 section7">
    <div class="row">
        <div class="section7-title">
            <h2><?php the_field('section_7_title');?></h2>
        </div>
        <div class="section7-btn">
        <a href="<?php the_field('section_7_button_1_text_url');?>" class="anchor-btn-1"><?php the_field('section_7_button_1_text');?></a>
        <a href="<?php the_field('section_7_button_2_text__url');?>" class="anchor-btn-2"><?php the_field('section_7_button_2_text');?></a>
        </div>
        
    </div>

</div>

   
 </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>