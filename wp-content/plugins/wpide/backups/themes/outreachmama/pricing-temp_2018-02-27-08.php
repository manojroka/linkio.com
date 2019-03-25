<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c97c6ba1eb49"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/pricing-temp.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/pricing-temp_2018-02-27-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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
    <li><a data-toggle="tab" href="#menu1">Starter</a></li>
    <li><a data-toggle="tab" href="#menu2">Standard</a></li>
    <li><a data-toggle="tab" href="#menu3">Pro</a></li>
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
            
        <div class="button-section"><a href="#">Secure Massive Discount</a></div>    
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
        <div class="right col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h3>Features:</h3>
            <?php the_field('starter_right'); ?>
        </div>

    </div>
    <div id="menu2" class="tab-pane fade">
    
        <div class="left col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
        <div class="right col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h3>Features:</h3>
            <?php the_field('standard_right'); ?>
        </div>
 
    </div>
    <div id="menu3" class="tab-pane fade">
    
        <div class="left col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
        <div class="right col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h3>Features:</h3>
            <?php the_field('pro_right'); ?>
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



