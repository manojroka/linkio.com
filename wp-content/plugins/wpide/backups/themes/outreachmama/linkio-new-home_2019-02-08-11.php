<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "25c67326c4a0b48238af035723f9ac882af525ebfe"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/linkio-new-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/linkio-new-home_2019-02-08-11.php") )  ) ){
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
<style>
/*------------------------------------------------*/
/* Switch SECTION START*/
/*------------------------------------------------*/

</style>
<div id="primary" class="content-area common-inner">
 <main id="main" class="site-main" role="main">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div  class="header-section-new">
        <div class="row">
            <?php the_field('section_1_title');?> 
            <div class="video-section">
                <div class="video-container">
                    
               <iframe width="489" height="274" src="<?php the_field('section_1_video')?>" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
    <div class="twitter-section">
    <div class="row-750">
<blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Are you using <a href="https://twitter.com/Linkioapp?ref_src=twsrc%5Etfw">@Linkioapp</a>? <a href="https://twitter.com/annaleacrowe?ref_src=twsrc%5Etfw">@annaleacrowe</a> says it’s one of the best <a href="https://twitter.com/hashtag/SEO?src=hash&amp;ref_src=twsrc%5Etfw">#SEO</a> project management tools. 👏 Here&#39;s why: <a href="https://t.co/kyGKOgm1dt">https://t.co/kyGKOgm1dt</a> <a href="https://t.co/MSD46xRat3">pic.twitter.com/MSD46xRat3</a></p>&mdash; SearchEngineJournal® (@sejournal) <a href="https://twitter.com/sejournal/status/1059357666529677312?ref_src=twsrc%5Etfw">November 5, 2018</a></blockquote>
<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/Linkioapp?ref_src=twsrc%5Etfw">@linkioapp</a> you are rock guys, have tried your app yesterday , its definitely one of the best i have used for link building!</p>&mdash; Semi (@SemiSemson) <a href="https://twitter.com/SemiSemson/status/1017296747331313664?ref_src=twsrc%5Etfw">July 12, 2018</a></blockquote>
<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Trying out <a href="https://twitter.com/Linkioapp?ref_src=twsrc%5Etfw">@linkioapp</a> for a link analysis. This is probably the most accurate analysis tool I&#39;ve used so far.</p>&mdash; Jeremy Gallas (@jeremygallas) <a href="https://twitter.com/jeremygallas/status/1017057986307555328?ref_src=twsrc%5Etfw">July 11, 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>






        </div>
    </div>
        <div class="partner-logo">
            <div class="row-1200">
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
         <div class="tabs-section">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Monthly Billing</a></li>
                
                <div class="Switch switch-tabbed-common Round Off">
                	<div class="Toggle"></div>
                </div>
                <li><a data-toggle="tab" data-toggle="tooltip" href="#menu1">Annual Billing</a></li>    
             </ul>
             <div>
              	
                		
                			
                		
              
            </div>	
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
                                <p><?php the_sub_field('aut') ?></p>
                            </div>
                            <div class="users-unlimit">
                                <?php the_sub_field('users') ?>
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
                    <?php if( have_rows('pricing_repeater_annual') ): ?>
                     <ul class="pricing-ul">
                     <?php while( have_rows('pricing_repeater_annual') ): the_row(); ?>
                      <li class="pricing-li">
                             <div class="pricing-title">
                                <?php the_sub_field('pricing_title_annual') ?>
                             </div>
                             <div class="pricing-price">
                                 <?php the_sub_field('price_annual') ?>
                             </div>
                            <div class="web-count">
                                <?php the_sub_field('web_count_annual') ?>
                            </div>
                            <div class="analyzed-count">
                                <?php the_sub_field('analyzed_count_annual') ?>
                            </div>
                            <div class="automation">
                                <p><?php the_sub_field('automation_annual') ?></p>
                            </div>
                            <div class="users-unlimit">
                                <?php the_sub_field('users_annual') ?>
                            </div>
                            <div class="pricing-btn">
                                <a href="<?php the_sub_field('button_url_annual') ?>"><?php the_sub_field('button_text_annual') ?></a>
                            </div>
                            <div class="pricing-desc">
                                <?php the_sub_field('short_description_annual') ?>
                            </div>
                            <div class="pricing-btn">
                                <a href="<?php the_sub_field('button_url_annual') ?>"><?php the_sub_field('button_text_annual') ?></a>
                            </div>
                      </li>
                     <?php endwhile; ?>
                    
                     </ul>
                     <p class="price-shown">*Prices shown are billed annual</p>
                    <?php endif; ?>  
                </div>
            </div>
        </div>    
    </div>
    </div>

<div class="section2 section7 section8">
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function () {

	// Switch Click
	$('.Switch').click(function () {

		// Check If Enabled (Has 'On' Class)
		if ($(this).hasClass('On')) {

			// Try To Find Checkbox Within Parent Div, And Check It
			$(this).parent().find('input:checkbox').attr('checked', true);

			// Change Button Style - Remove On Class, Add Off Class
			$(this).removeClass('On').addClass('Off');
			$('#menu1').removeClass('active in');
			$('.nav.nav-tabs li:first-child').addClass('active'); 
			$('.nav.nav-tabs li:last-child').removeClass('active'); 
			$('#home').addClass('active in');

		} else {// If Button Is Disabled (Has 'Off' Class)

			// Try To Find Checkbox Within Parent Div, And Uncheck It
			$(this).parent().find('input:checkbox').attr('checked', false);

			// Change Button Style - Remove Off Class, Add On Class
			$(this).removeClass('Off').addClass('On');
			$('#menu1').addClass('active in');
			$('#home').removeClass('active in');
			$('.nav.nav-tabs li:first-child').removeClass('active'); 
			$('.nav.nav-tabs li:last-child').addClass('active'); 

		}

	});

	// Loops Through Each Toggle Switch On Page
	$('.Switch').each(function () {

		// Search of a checkbox within the parent
		if ($(this).parent().find('input:checkbox').length) {

			// This just hides all Toggle Switch Checkboxs
			// Uncomment line below to hide all checkbox's after Toggle Switch is Found
			//$(this).parent().find('input:checkbox').hide();

			// For Demo, Allow showing of checkbox's with the 'show' class
			// If checkbox doesnt have the show class then hide it
			if (!$(this).parent().find('input:checkbox').hasClass("show")) {$(this).parent().find('input:checkbox').hide();}
			// Comment / Delete out the above line when using this on a real site

			// Look at the checkbox's checkked state
			if ($(this).parent().find('input:checkbox').is(':checked')) {

				// Checkbox is not checked, Remove the 'On' Class and Add the 'Off' Class
				$(this).removeClass('On').addClass('Off');

			} else {

				// Checkbox Is Checked Remove 'Off' Class, and Add the 'On' Class
				$(this).removeClass('Off').addClass('On');

			}

		}

	});

});

////////////////////////////////////////////////////////
// Ignore This Bit - Only To Load Syntax Highlighting //
////////////////////////////////////////////////////////

$.getScript("https://alexgorbatchev.com/pub/sh/current/scripts/shCore.js", function () {
	$.getScript("https://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js", function () {
		$.getScript("http://agorbatchev.typepad.com/pub/sh/3_0_83/scripts/shBrushXml.js", function () {
			$.getScript("http://agorbatchev.typepad.com/pub/sh/3_0_83/scripts/shBrushCss.js", function () {
				SyntaxHighlighter.all();
			});
		});
	});
});

// - Ignore End
//# sourceURL=pen.js
</script>

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>