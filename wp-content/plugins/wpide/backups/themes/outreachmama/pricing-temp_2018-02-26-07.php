<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c99c5dfcc7f5"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/pricing-temp.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/pricing-temp_2018-02-26-07.php") )  ) ){
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
<div class="row-1100">

 <main id="main" class="site-main" role="main">
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Early Adopter</a></li>
    <li><a data-toggle="tab" href="#menu1">Starter</a></li>
    <li><a data-toggle="tab" href="#menu2">Standard</a></li>
    <li><a data-toggle="tab" href="#menu3">Pro</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     
     1	        
    </div>
    <div id="menu1" class="tab-pane fade">
      
      2
    </div>
    <div id="menu2" class="tab-pane fade">
     
    3
    </div>
    <div id="menu3" class="tab-pane fade">
      
      4
    </div>
  
  </div>

 </main><!-- .site-main -->

</div>



</div><!-- .content-area -->

<?php get_footer(); ?>



