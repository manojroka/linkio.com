<?php
/**
 * Template Name: Linkio FAQ V2 Template
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
 <div class="section1">
    <div class="row">
            <h2><?php the_field('section_1_title');?></h2>
            <div class="sub-content">
                <?php the_field('section_1_subcontent');?>
            </div>
        <div class="anchor-btn">
            <a class="anchor-btn-1" href="<?php the_field('anchor_1_button_text_url');?>"><?php the_field('anchor_1_btn');?></a>
            <a class="anchor-btn-2" href="<?php the_field('anchor_2_button_url');?>"><?php the_field('anchor_2_button_text');?></a>
        </div>
    </div>
 </div>
 <div class="section1 section2">

             <?php $count=1;?>
             <?php if( have_rows('faq_repeater') ): ?>
                 <?php while( have_rows('faq_repeater') ): the_row(); 
                
                  // vars
                  
                  $title = get_sub_field('faq_title');
                  $link = get_sub_field('faq_subcontent');
                    ?>
                 <div class="border-tp-bm">
    <div class="row">
    <div class="row-750 ft-left">
                  <div class="faq-list faq-list-<?php echo $count;?>">
                    <h2><?php echo $title; ?></h2></a>
                    <p><?php echo $link; ?></p>
                </div>
                    </div>    
            </div>
            </div>
                <?php $count++;?>
                 <?php endwhile; ?>
                <?php endif; ?>
            
</div>

<div class="section3 section1">
    <div class="row">
        <h2><?php the_field('section_3_title');?></h2>
        <div class="anchor-btn">
        <a class="anchor-btn-1" href="<?php the_field('section_3_button_1_url');?>"><?php the_field('section_3_button_1_text');?></a>
        <a class="anchor-btn-2" href="<?php the_field('section_3_button_2_url');?>"><?php the_field('section_3_button_2_text');?></a>
    </div>
    </div>
    
  
    
</div>

 </main><!-- .site-main -->
 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>