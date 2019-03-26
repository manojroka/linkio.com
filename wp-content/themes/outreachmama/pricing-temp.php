<?php
/**
 * Template Name: Pricing Template
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
<div class="inner-head">
    <img src="<?php the_field('header_image'); ?>">
    <div class="header-inner">
        <?php the_field('header_content'); ?>
    </div>
</div>

<div id="primary" class="content-area common-inner2">


 <main id="main" class="site-main" role="main">
 
 <div class="tabs-section">
 <div class="row-1100">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Early Adopter</a></li>
    <li><a data-toggle="tab" data-toggle="tooltip" href="#menu1">Starter</a></li>
    <li><a data-toggle="tab" data-toggle="tooltip" href="#menu2">Standard</a></li>
    <li><a data-toggle="tab" data-toggle="tooltip" href="#menu3">Pro</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
        <div class="left col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="discount-inner">
        <div class="orignal-price">
            <div class="left"><?php the_field('per_month_original_price'); ?></div>
            <div class="right"><?php the_field('original_website_qty'); ?></div>
        </div>
        <div class="discount-circle">
            <h3>Early</h3>
            <h4>Adopter</h4>
            <h5>Discount</h5>
        </div>
        <div class="sale-price">
            <div class="left"><?php the_field('per_month_sale_price'); ?></div>
            <div class="right"><?php the_field('sale_website_qty'); ?></div>
        
        
        <div class="percent-offer">
            <div class="left"><?php the_field('benefits_percentage_left'); ?></div>
            <div class="right"><?php the_field('benefits_percentage_right'); ?></div>
        </div>    
        <div class="button-section">
        
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FWW3S4F77LAJW">
<input class="pay-button" type="image" src="" border="0" name="submit" alt="Secure Massive Discount">
</form>
        
        
        
        </div>    
       <!-- for date reset goto master.js  -->
        <div id="countup">
          <div class="timmer">Price Increase in</div>
          <p id="days">30</p>
          <p class="timeRefDays">Days</p>
          <p id="hours">00</p>
          <p class="timeRefHours">Hours</p>
          <p id="minutes">00</p>
          <p class="timeRefMinutes">Minutes</p>
          <!--<p id="seconds">00</p>-->
          <!--<p class="timeRefSeconds">second</p>-->
          </div>


          <div class="paypal-logo">
          <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"></a>
          </div>  


        </div>
        
        </div>
        
        
        
        </div>
        <div class="right col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h3>Features:</h3>
            <?php the_field('early_adopter_right'); ?>
        </div>
     	        
    </div>
    <div id="menu1" class="tab-pane fade">
      
        <div class="left col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
        <div class="right col-xs-12 col-sm-6 col-md-6 col-lg-12">
           <h3>Price Increase Coming Soon</h3>
        </div>

    </div>
    <div id="menu2" class="tab-pane fade">
    
        <div class="left col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
        <div class="right col-xs-12 col-sm-6 col-md-6 col-lg-12">
            <h3>Price Increase Coming Soon</h3>
        </div>
 
    </div>
    <div id="menu3" class="tab-pane fade">
    
        <div class="left col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
        <div class="right col-xs-12 col-sm-6 col-md-6 col-lg-12">
            <h3>Price Increase Coming Soon</h3>
        </div>

    </div>
  
  </div>
</div>
</div>

<div class="faqs">
     <div class="row-1100">
     <h2><?php the_field('add_title'); ?></h2>
       <div class="ind-full">
              <?php if( have_rows('add_frequently_asked_questions') ): ?>
                <?php while ( have_rows('add_frequently_asked_questions') ) : the_row(); ?>
                    <div class="about-con indus-box col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="main-con">
                            <div class="indus-img">
                            <span class="zoomimg" style="background-image:url(<?php the_sub_field('add_industries_image'); ?>)"></span>
                            </div>
                            <div class="indus-content">
                                
                                <?php the_sub_field('add_faq'); ?>
                            </div>
                        </div>
                        <div class="more-btn1"><a class="hvr-sweep-to-bottom btn btn-primary red-btn readmore">Read More </a></div>
                    </div> 
                  <?php endwhile; ?>
                <?php endif; ?>	 
            </div>
     </div>
</div>



 </main><!-- .site-main -->

</div>



</div><!-- .content-area -->

<?php get_footer(); ?>



