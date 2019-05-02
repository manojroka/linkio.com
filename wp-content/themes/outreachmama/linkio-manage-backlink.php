<?php
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
            <div class="section-2-repeater">
				<?php if( have_rows('section_2_repeater') ): ?>
				<?php while ( have_rows('section_2_repeater') ) : the_row();
						 
						 $image = get_sub_field('images');
                  $title = get_sub_field('title');
                  $link = get_sub_field('date');
                   ?>
					<div class="timeline-figure">
					<h5><?php echo $title; ?></h5>
					<img src="<?php echo $image; ?>" alt="">
							
						</div>
				        <?php endwhile; ?>
                        <?php endif; ?>
					</div>
			
            
            </div>
        </div>
        </div>
    <div class="section-3" style="background-image:url('<?php the_field('background-image'); ?>')">
       <div class="row">
       <div class="header-title-section-3">
       <h3><?php the_field('section_3_title'); ?></h3>
       </div>
       <div class="backlink-management-list">
           <div class="content-1-2">
                <div class="image-overlay">
                    <img class="overlay-icon" src="<?php the_field('section_3_first_icon'); ?>"/>
                    <h4><?php the_field('section_3'); ?></h4>
                </div>
                <div class="image-overlay">
                    <img class="overlay-icon" src="<?php the_field('section_3_second_icon'); ?>"/>
                    <h4><?php the_field('section_3_2nd__content'); ?></h4>
                </div>
           </div>
           <div class="section-3-logo">
                <img src="<?php the_field('section_3_logo'); ?>"/>
           </div>
            <div class="content-4-5">
                <div class="image-overlay">
                    <img class="overlay-icon" src="<?php the_field('section_3_5th_icon'); ?>"/>
                    <h4><?php the_field('section_3_5th_content'); ?></h4>
                </div>
                 <div class="image-overlay">
                    <img class="overlay-icon" src="<?php the_field('section_3_4th_icon'); ?>"/>
                    <h4><?php the_field('section_3_4th_content'); ?></h4>
                </div>
            </div>
            <div class="content-5">
                 <div class="image-overlay" >
                    <img class="overlay-icon" src="<?php the_field('section_3_3rd_icon'); ?>"/>
                    <h4><?php the_field('section_3_3rd_content'); ?></h4>
                </div>
            </div>
        </div>    
       </div>
    </div>
    

    <div class="section-4">
        <div class="left-tab">
            <div class="left-tab-float-right">
               
               <h4> <?php the_field('section_4_left_tab'); ?></h4>
                <p><?php the_field('left_tab_content'); ?></p>
            </div>
        </div>
        <div class="right-tab">
            <div class="Right-tab-float-left">
                <h4><?php the_field('section_4_right_title'); ?></h4>
                    <p><?php the_field('section_4_right_content'); ?></p> 
            </div>
        </div>
    </div>
    <div class="section-5">
        <div class="row">
            <div class="section5-content">
                <h3><?php the_field('section_5_title'); ?></h3>
                <p><?php the_field('section_5_sub-content'); ?></p>
                <a href="<?php the_field('section_5_anchor_link'); ?>">Try Linkio for Free</a>
            </div>
        </div>
    </div>
    
    
    
 </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>