<?php
/**
 * Template Name: Linkio Web Features
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
        <?php the_field('section_1_sub_content');?>
        <div class="anchor-btn">
            <a class="anchor-btn-1" href="<?php the_field('section_1_button_url');?>"><?php the_field('section_1_button_text');?></a>
            <a class="anchor-btn-2" href="<?php the_field('section_2_button_2_url');?>"><?php the_field('section_2_button_text');?></a>
        </div>
    </div>
 </div>  
 <div class="section2">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_2_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_2_image');?>">
    </div>
 </div>
 </div>
 <div class="section2 section3">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_3_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_3_image');?>">
    </div>
 </div>
 </div>
  <div class="section2 section4">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_4_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_4_images');?>">
    </div>
 </div>
 </div>
<div class="section2 section5">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_5_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_5_images');?>">
    </div>
 </div>
</div> 
 <div class="section2 section6">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_6_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_6_images');?>">
    </div>
 </div>
</div> 
 <div class="section2 section7">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_7_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_7_images');?>">
    </div>
 </div>
 </div>
<div class="section2 section8">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_8_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_8_images');?>">
    </div>
 </div>
</div> 
 <div class="section2 section9">
 <div class="row">
    <div class="left-text">
        <?php the_field('section_9_sub_content');?>
    </div>
    <div class="right-text">
        <img src="<?php the_field('section_9_images');?>">
    </div>
 </div>
</div> 

<div class="section10 section1">
    <div class="row">
       <h2><?php the_field('section_10_title');?></h2>
    
    <div class="anchor-btn">
        <a class="anchor-btn-1" href="<?php the_field('section10_button_1_url');?>"><?php the_field('section10_button_1_text');?></a>
        <a class="anchor-btn-2" href="<?php the_field('section10_button2_url');?>"><?php the_field('section10_button_2_text');?></a>
    </div>
    
    </div>
    
  
    
</div>




 </main><!-- .site-main -->
 <?php get_sidebar( 'content-bottom' ); ?>
</div><!-- .content-area -->




<?php get_footer(); ?>