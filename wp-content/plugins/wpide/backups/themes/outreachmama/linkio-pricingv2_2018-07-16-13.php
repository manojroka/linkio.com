<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ddf8b0d7e26bd46cd68a481c28044d6af81dc54b68"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/linkio-pricingv2.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/linkio-pricingv2_2018-07-16-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Linkio Pricing V2
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <div class="section1">
    <div class="row">
        <h2><?php the_field('section_1_title');?></h2>
        
        <div class="row">
         <div class="tabs-section">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Monthly Billing</a></li>
                <li><a data-toggle="tab" data-toggle="tooltip" href="#menu1">Annual Billing</a></li>        
             </ul>
        </div>
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
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
                                <p><?php the_sub_field('automation') ?></p>
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
            <div id="menu1" class="tab-pane fade">
            
                 <div class="pricing_repeater">
                    <?php if( have_rows('pricing_repeater_annuall') ): ?>
                     <ul class="pricing-ul">
                     <?php while( have_rows('pricing_repeater_annuall') ): the_row(); ?>
                      <li class="pricing-li">
                             <div class="pricing-title">
                                <?php the_sub_field('pricing_title_annuall') ?>
                             </div>
                             <div class="pricing-price">
                                 <?php the_sub_field('price_annuall') ?>
                             </div>
                            <div class="web-count">
                                <?php the_sub_field('web_count_annuall') ?>
                            </div>
                            <div class="analyzed-count">
                                <?php the_sub_field('analyzed_count_annuall') ?>
                            </div>
                            <div class="automation">
                                <p><?php the_sub_field('automation_annuall') ?></p>
                            </div>
                            <div class="users-unlimit">
                                <?php the_sub_field('users_annuall') ?>
                            </div>
                            <div class="pricing-btn">
                                <a href="<?php the_sub_field('button_url_annuall') ?>"><?php the_sub_field('button_text_annuall') ?></a>
                            </div>
                            <div class="pricing-desc">
                                <?php the_sub_field('short_description_annuall') ?>
                            </div>
                            <div class="pricing-btn">
                                <a href="<?php the_sub_field('button_url_annuall') ?>"><?php the_sub_field('button_text_annuall') ?></a>
                            </div>
                      </li>
                     <?php endwhile; ?>
                    
                     </ul>
                     <p class="price-shown">*Prices shown are billed monthly</p>
                    <?php endif; ?>  
                </div>
        </div>    
    </div>
        
        
    </div>
 </div>
<div class="section10 section1">
    <div class="row">
       <h2><?php the_field('section_2_title');?></h2>
    
    <div class="anchor-btn">
        <a class="anchor-btn-1" href="<?php the_field('section2_button_1_url');?>"><?php the_field('section2_button_1_text');?></a>
        <a class="anchor-btn-2" href="<?php the_field('section2_button_2_url');?>"><?php the_field('section2_button_2_text');?></a>
    </div>
    
    </div>
    
  
    
</div>




 </main><!-- .site-main -->
 <?php get_sidebar( 'content-bottom' ); ?>
</div><!-- .content-area -->




<?php get_footer(); ?>