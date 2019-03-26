<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ae84071b56a439e96aaf1c79c558e02d9ee33f2f82"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/directory-submission-sites.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/directory-submission-sites_2018-11-30-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Directory Submission Sites
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.guest-list-link-contct').click(function(e){    
        $('#myModal1').fadeIn('slow');
    });
    });
  $(document).ready(function() {
    $('.close').click(function(e){    
        $('#myModal1').hide('slow');
    });
   
});
</script>

<script>


// $('.print').hide();


$(function() {
  $(document).scroll(function() {
    var y = $(this).scrollTop();

    if ((y + $(window).height()) > ($(document).height() * 0.9650)) {
     $("#text-2").css("display", "none");
      return;
    }

    if (y > 0) {
             $("#text-2").css("display", "block");
    } else {
             $("#text-2").css("display", "none");
    }
  });
})

$(function() {
  $(document).scroll(function() {
    var y = $(this).scrollTop();

    if ((y + $(window).height()) > ($(document).height() * 0.9650)) {
     $("#text-4").css("display", "none");
      return;
    }

    if (y > 0) {
             $("#text-4").css("display", "block");
    } else {
             $("#text-4").css("display", "none");
    }
  });
})
$(function() {
  $(document).scroll(function() {

    if ($('#text-3').css('position') == 'fixed') {
            $('#text-3').addClass('fixed-sidebar-chap');
    } else {
     $('#text-3').removeClass('fixed-sidebar-chap');       
    }
  });
})
</script>

<style>
/*------------------------------------------------*/
/* Switch SECTION START*/
/*------------------------------------------------*/
._form-label {
    color: #515151;
}
._form_element {
    width: 100% !important;
    padding-left: 0px !important;
    margin-left: 0px !important;
}
._form_element input {
    width: 100% !important;
}
._button-wrapper._inline-style {
    margin-left: 0px !important;
}
._button-wrapper #_form_28_submit {
    padding: 12px 30px !important;
}
._button-wrapper._inline-style {
    margin-left: 0px !important;
    margin-top: 10px !important;
}
/*main-master5367*/
.page-template-directory-submission-sites .modal-dialog {
    width: 460px;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    vertical-align: middle;
    position: absolute;
    height: 350px;
}
@media only screen and (max-width: 979px) {
.page-template-directory-submission-sites .linkio-title-chapter {
   width: 96vw;
}
.page-template-directory-submission-sites .g-post-links {
   width: 96vw;
}
.guest-list-cat {
	padding-left: 10px;
    color: #272625 !important;
    font-size: 17px !important;
}
/*2882*/
.guest-list-link-contct {
    width: 24%;
}
.guest-list-cat {
    width: 27%;
}
}
@media only screen and (max-width: 767px) {
    .page-template-directory-submission-sites .linkio-title-chapter {
    width: 100%;
}
.page-template-directory-submission-sites .g-post-links {
   width: 100%; 
}
/*3822*/
.page-template-directory-submission-sites .section.section6 ul, ol {
    padding: 0 0px !important;
}
/*5109*/
.guest-list-cat {
    width: 37%;
	padding-left: 0px !important;
}

/*5113*/
.guest-list-site {
    width: 57%;
}
.page-template-directory-submission-sites .modal-dialog {
    width: 90%;
    height: 320px;
    margin-top:15% !important;
}
.modal-dialog input {
    width: 100% !important;
}
.page-template-directory-submission-sites .modal.fade {
    background-color: rgb(0,0,0,.1);
}
.page-template-directory-submission-sites .modal.fade .modal-content .modal-body ._form-content div {
    margin: 0px 0 0 !important;
}
.page-template-directory-submission-sites .modal.fade .modal-content .modal-body ._form-content {
    position: relative;
    top: -20px;
}
.page-template-directory-submission-sites .section6 ul.listing-sites li {
    padding-left: 0px !important;
}
}
@media only screen and (max-width: 479px) {
    .guest-list-cat {
    width: 50%;
    font-size: 15px !important;
      font-weight:400 !important;
}
.linkio-title-chapter .guest-list-site {
    width: 50% !important;
}
.linkio-title-chapter .guest-list-cat {
    width: 50% !important;
}
.page-template-directory-submission-sites .section6 ul.listing-sites li {
    margin-left: 0px !important;
}
.listing-sites .guest-list-cat {
    font-weight: 400 !important;
    width: 100% !important;
    text-align: center !important;
}
.listing-sites .guest-list-site {
    width: 100%;
    text-align: center;
    margin-bottom: 4px;
    margin-top: 4px;
}
.listing-sites .guest-list-site a {
    font-size: 14px !important;
}
.guest-list-cat {
    width: 50%;
    font-size: 15px !important;
 
}
.linkio-title-chapter .guest-list-site {
    width: 50% !important;
}
.guest-list-link-contct {
    width: 200px;
    font-size:13px !important;
}
}
</style>
<div id="primary" class="content-area common-inner">

<div class="modal fade" id="myModal1" role="dialog" style="display:none">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p> <?php echo do_shortcode('[activecampaign form=28]'); ?></p>
        </div>
        
      </div>
      
    </div>
  </div>
 <main id="main" class="site-main" role="main">

    <div  class="header-section">
        <div class="row-1055">
            <div class="profile-section">
            <?php the_field('header_title');?>
            </div>
          <!--  <img src="https://www.linkio.com/wp-content/uploads/2018/10/linkio-novo.jpg" /> -->
            </div>    
        </div>  
        <div class="content-section">
            <div class="row-1055">
                <div class="container-nav-practice-mobile table-cont-resp container-nav-practice-mobile table-cont-resp q2w3-fixed-widget-container">
                <li id="text-3_clone" class="widget widget_text q2w3-widget-clone-directory-table-of-content-mobile-responsive"></li>
                    <li id="text-3" class="widget widget_text " style="display: block;">
        <button onclick="myFunction()"><span class="fa fa-bars"> </span>Table of Contents</button>

        <nav id="nav-practice-mobile" class="nav-practice-mobile" role="navigation" style="display:none;">
                
                <div class="table-of-content table-of-content-resp">

                    <ol>
                        <li class="one"><a class="ps2id __mPS2id _mPS2id-h" href="#content-sectionblue">Then and Now</a></li>
                        <li class="two"><a class="ps2id __mPS2id _mPS2id-h" href="#section3">Before We Begin: A Brief Caveat</a></li>
                        <li class="three"><a class="ps2id __mPS2id _mPS2id-h" href="#section-lightblue">4 Dead Simple Ways to Find Hidden Directory Links and Create Explosive SEO</a></li>
                        <li class="four"><a class="ps2id __mPS2id _mPS2id-h" href="#content-sectiondarkblue">The No Nonsense Way to Determine the Quality of a Potential Link</a></li>
                        <li class="five"><a class="ps2id __mPS2id _mPS2id-h" href="#section6"># Epic Directory Sites to Get You Started</a></li>
                        <li class="six"><a class="ps2id __mPS2id _mPS2id-h" href="#content-sectiongrey">How to Effectively Execute a Directory Link Building Campaign</a></li>
                        <li class="seven"><a class="ps2id __mPS2id _mPS2id-h" href="#section8">Over to You</a></li>
                    </ol>
                </div>
        </nav>
        </li>
                

<script>
function myFunction() {
    var x = document.getElementById("nav-practice-mobile");
    if (x.style.display === "none") {
        x.style.display = "block";
        
    } else {
        x.style.display = "none";
    }
}

$(function() {
  $(document).scroll(function() {
    var button_my_button = "#nav-practice-mobile li a";
    $(button_my_button).click(function(){
    var x = document.getElementById("nav-practice-mobile");
            x.style.display = "none";
    });
  });
})
</script>
   
            
    </div>
                <div class="table-sidebar">
                    <?php dynamic_sidebar( 'directory-table-of-content' ); ?>
                    <?php dynamic_sidebar( 'fixed-banner' );?>
                    
                </div>
                <div class="section section1">
                    <?php the_field('section_1');?>
                </div>
            </div>
            <div id="content-sectionblue" class="content-sectionblue ps2id">
                <div class="row-1055">
                    <div class="section section2 section-blue">
                        <?php the_field('section_2');?>
                    </div>  
                </div>
            </div>
            <div class="content-flt-left">
            <div class="row-1055">
                <div id="section3" class="section section3 ps2id">
                    <?php the_field('section_3');?>
                </div>  
            </div>
            </div>
            <div id="section-lightblue" class="section-lightblue ps2id">
                <div class="row-1055">
                    <div class="section section4">
                        <?php the_field('section_4');?>
                    </div>
                </div>
            </div>
                <div id="content-sectiondarkblue" class="content-sectiondarkblue ps2id">
                    <div class="row-1055">
                        <div class="section section5 section-blue">
                            <?php the_field('section_5');?>
                        </div>  
                    </div>
                </div>
                <div class="content-section6">
                <div class="row-1055">
                    <div id="section6" class="section section6 ps2id">
                        <?php the_field('section_6');?>
                        
                        <?php echo do_shortcode( '[guest-posting-site-list]');?> 
                        
                    </div>  
                </div>
                </div>
                <div id="content-sectiongrey" class="content-sectiongrey ps2id">
                    <div class="row-1055">
                        <div class="section section7 section-blue">
                            <?php the_field('section_7');?>
                        </div>  
                    </div>
                </div>
                <div class="greybg-section">
                <div class="row-1055">
                    <div id="section8" class="section section8 ps2id">
                        <?php the_field('section_8');?>
                       
                     
                    </div>
                    <div class="sec8-img">
                    <img src="<?php the_field('section_8_image');?>" />
                    </div>
                </div>
                </div>
    </div>
<div class="disqus-comment-sec">
<div class="row-1055">
 <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

   // Include the page content template.
   get_template_part( 'template-parts/content', 'page' );

   // If comments are open or we have at least one comment, load up the comment template.
   if ( comments_open() || get_comments_number() ) {
    comments_template();
   }

   // End of the loop.
  endwhile;
  ?>
</div>
</div>

</div><!-- .content-area -->

<?php get_footer(); ?>