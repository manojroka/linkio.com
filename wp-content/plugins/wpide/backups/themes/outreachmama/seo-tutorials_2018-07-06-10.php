<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ddf8b0d7e26bd46cd68a481c28044d6ab463c4061f"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-tutorials.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-tutorials_2018-07-06-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Seo Tutorials
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
.page-template-seo-tutorials .chapter-table-resposnive {
    font-size: 16px;
    line-height: 25px;
    font-family: 'Nunito', sans-serif;
    color: #100d07;
    border-bottom: 1px solid #ddd;
    float: left;
    width: 100%;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    font-weight: 300;   
}
.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-1 {
    border-top: 1px solid #ddd;
}
.page-template-seo-tutorials .chapter-title {
    float: left;
    width: 35%;
    padding: 10px;
    background-color: #ec7b26;
    color: #fff;
    min-height: 70px;
}
.page-template-seo-tutorials .chapter-content-table {
    width: 65%;
    float: left;
    padding: 10px;
}
.page-template-seo-tutorials .chapter-content-table {
    width: 65%;
    float: left;
}
.page-template-seo-tutorials .chapter-title h6 {
    font-size: 16px;
    line-height: 25px;
    font-family: 'Nunito', sans-serif;
}
.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-1,.page-template-seo-tutorials  .chapter-table-resposnive.chapter-table-resposnive-6,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-11,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-16,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-21,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-26 {
    margin-top: 20px;
    border-top: 1px solid #ddd;
}
.chapter-title.chapter-title-1,.chapter-title.chapter-title-6,.chapter-title.chapter-title-11,.chapter-title.chapter-title-16,.chapter-title.chapter-title-21,.chapter-title.chapter-title-26{
    min-height:auto;
}
.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-5,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-10,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-15,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-20,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-25,.page-template-seo-tutorials .chapter-table-resposnive.chapter-table-resposnive-30 {
    background-color: #c5e0b4;
}
.chapter-table-resposnive.chapter-table-resposnive-30 {
    margin-bottom:20px;
}
.page-template-seo-tutorials .chapter-content-table.chapter-content-table-1,.page-template-seo-tutorials .chapter-content-table.chapter-content-table-6,.page-template-seo-tutorials .chapter-content-table.chapter-content-table-11,.page-template-seo-tutorials .chapter-content-table.chapter-content-table-16,.page-template-seo-tutorials .chapter-content-table.chapter-content-table-21,.page-template-seo-tutorials .chapter-content-table.chapter-content-table-26 {
    font-weight: bold;
}
.page-template-seo-tutorials .chapter-content-table.chapter-content-table-30 {
    background-image: url('https://www.linkio.com/wp-content/uploads/2018/07/table-icon.jpg');
    background-position: bottom;
    background-repeat: no-repeat;
    padding-bottom: 25px;
}
.chapter-table-resposnive-start {
    display: none;
}
.chapter-full {
    overflow: hidden;
}
</style>
<div id="primary" class="content-area common-inner2">

 <main id="main" class="site-main" role="main">
 
 <div class="beginners">
    <div class="row-1100">
        <div class="left title">
            <?php the_field('title'); ?>
        </div>
        <div class="right share-friend">
            <ul>
            <li class="facebook"><a href="#"><img src="https://www.linkio.com/wp-content/uploads/2018/05/facebook.png"/></a></li>
            <li class="linkdin"><a href="#"><img src="https://www.linkio.com/wp-content/uploads/2018/05/linkedin.png"/></a></li>
            <li class="twitter"><a href="#"><img src="https://www.linkio.com/wp-content/uploads/2018/05/twitter1.png"/></a></li>
            </ul>
        </div>
        <div class="left content-area"><?php the_field('content_area'); ?></div>
        <div class="right image"><img class="overlay-icon" src="<?php the_field('add_right_image'); ?>"/></div>
    </div>
 </div>
 <div class="chapter chapter1 beginners black-font" >
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter1_title');?>
      
        <div class="right image">
            <img class="cp1-icon" src="<?php the_field('chapter_1_right_image');?>">
        </div>
          <div class="left content-area">
        
        <?php the_field('chapter_1_sub_content');?>
        </div>
        <p><?php the_field('chapter_1_visble content');?></p>
        <div class="chapter-full" id="chapter1">
            <?php the_field('chapter_1_bottom_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="close-chapter chapter-button" id="chp1">CLOSE CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter2 beginners " >
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_2_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_2_visble_content');?>
        </div>
        <div class="chapter-full" id="chapter2" style="display:none;" >
            <?php the_field('chapter_2_hidden_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter chapter-button" id="chp2">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter3 beginners black-font">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_3_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_3_visible_content');?>
        </div>
        <div class="chapter-full" id="chapter3" style="display:none;">
            <?php the_field('chapter_3_read_more_content');?>
            <div class="google-bot">
                <?php the_field('chapter_3_google_bot');?>

             <?php if( have_rows('chapter_3_rep') ): ?>
                
                 <div  class="chp-rep-list">
                 <?php while( have_rows('chapter_3_rep') ): the_row();  ?>
                  <div class="chp-rep">
                    <?php the_sub_field('sub_content_repeater');?>                        
                  </div>
                    <?php endwhile; ?>
                 </div>                
                <?php endif; ?>
                <div class="chp-rep" style="margin-bottom:0px;">
                <?php the_field('chapter_3_content_section_top_content');?>   
            </div>
            <?php if( have_rows('chapter_3_repeater_(copy)') ): ?>
                <div  class="content-rep-list">
                     <?php while( have_rows('chapter_3_repeater_(copy)') ): the_row();  ?>
                          <div class="content-rep">
                            <?php the_sub_field('chapter_3_content_section');?>                        
                          </div>
                    <?php endwhile; ?>
                 </div>                
                <?php endif; ?>
                <?php the_field('chapter_3_content_section_bottom');?>   
            </div>
            <div class="google-bot" style="margin-top:25px;">
                <?php the_field('chapter_3_traffic_data');?>
            </div>
            <div class="google-bot" style="margin-top:25px;">
                <?php the_field('chapter_3_user_metric');?>
            </div>
                            
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp3" class="open-chapter chapter-button">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter4 beginners " >
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_4_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_4_visible_content');?>
        </div>
        
        <div class="chapter-full black-font" id="chapter4" style="display:none;">
            <?php the_field('chapter_4_read_more_content');?>
            <?php $count=1;?>
            <?php if( have_rows('chapter4_repeater') ): ?>
			    <?php while( have_rows('chapter4_repeater') ): the_row(); ?>
			         <div class="google-bot green-color-bot green-color-bot-<?php echo $count; ?>">
						<?php the_sub_field('parent_repeater'); ?>
							<div class="chp-rep-list green-chp-list green-chp-list-<?php echo $count;?>"> 
							<?php $count2=1;?>
							<?php if( have_rows('chapter_4_sub_repeater') ): ?>
								
								<?php while( have_rows('chapter_4_sub_repeater') ): the_row();?>
									 <div class="chp-rep chp-rep-<?php echo $count2;?>"><?php the_sub_field('chapter_4_sub_repeater_content'); ?></div>
									 <?php $count2++;?>
								<?php endwhile; ?>
								
							<?php endif; ?>
							</div>
							
                        </div>        
                        <?php $count++;?>
					<?php endwhile;  ?>
                    
                        
				<?php endif; ?>

        </div>
           
        <div class="read-more-chapter">
            <a href="#"id="chp4" class="open-chapter chapter-button">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
  <div class="chapter chapter5 beginners" >
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_5_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_5_visible_content');?>
        </div>
        <div class="chapter-full " id="chapter5" style="display:none;">
            <?php the_field('chapter_5_read_more_content');?>
            
            <div class="google-bot white-color-bot black-font">
                <?php the_field('chapter_5_read_more_content__(copy)');?>
                <div class="chapter-table chapter-table-desk">
                <?php $count=1;?>
            <?php if( have_rows('chapter_5_top_content_repeater') ): ?>
			    <?php while( have_rows('chapter_5_top_content_repeater') ): the_row(); ?>
			    <div class="chp-table chp-table-<?php echo $count; ?>">
			         <div class="table-title table-title-<?php echo $count; ?>">
						<h6><?php the_sub_field('chapter_5_top_conten_title'); ?></h6>
						</div>
							<div class="sub-table sub-table-<?php echo $count;?>"> 
							<?php $count2=1;?>
							<?php if( have_rows('chapter_5_sub_repeater') ): ?>
								<?php while( have_rows('chapter_5_sub_repeater') ): the_row();?>
									 <div class="table-content table-content-<?php echo $count2;?>"><?php the_sub_field('chapter_5_sub_repeater_content'); ?></div>
									 <?php $count2++;?>
								<?php endwhile; ?>
								
							<?php endif; ?>
							</div>
                        </div>        
                        <?php $count++;?>
					<?php endwhile;  ?>
                <?php endif; ?>
			</div>
			
			
                <div class="chapter-table-resposnive-start">
                <?php $count=1;?>
                <?php $count2=1;?>
                  <?php if( have_rows('chapter_5_top_content_repeater_(copy)') ): ?>
                  
                      <div class="chapter-table-container chapter-table-resposnive-<?php echo $count2;?>">
                     <?php while( have_rows('chapter_5_top_content_repeater_(copy)') ): the_row(); ?>
                        
                            <div class="chapter-table-resposnive chapter-table-resposnive-<?php echo $count;?>">
                            <div class="chapter-title chapter-title-<?php echo $count2;?>">
                                <h6><?php the_sub_field('chapter_5_top_conten_title1')?></h6>
                            </div>
                            <div class="chapter-content-table chapter-content-table-<?php echo $count2;?>">
                                    <?php the_sub_field('chapter_5_sub_content_rep')?>
                            </div>
                        </div>
                        <?php $count++;?>
                        <?php $count2++;?>

                         <?php endwhile; ?>
                        </div>    
                    <?php endif; ?>

                </div>
            
                <?php the_field('chapter_5_bottom');?>
            <div class="chp-rep-list chp-blue">
                <div class="chp-rep">
                    <?php the_field('chapter_5_domain');?>
                </div>
                <div class="chp-rep">
                    <?php the_field('chapter_5_Backlink');?>
                </div>
            </div>
            
                
            </div>
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp5" class="open-chapter chapter-button">EXPAND CHAPTER</a>
        </div>
        
    </div>
</div>
 </div>
  <div class="chapter chapter6 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_6_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_6_visible_content');?>
        </div>
        <div class="chapter-full"  id="chapter6" style="display:none;">
            <?php the_field('chapter_6_read_more_content');?>
            <div class="google-bot white-color-bot black-font">
                <?php The_field('chapter_6_read_more_bottom');?>
            </div>
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp6" class="open-chapter chapter-button">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
  <div class="chapter chapter7 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <div class="left content-area black-font">
            <?php the_field('chapter_7_title');?>
            <?php the_field('chapter_7_visible_content');?>
        </div>
        <div class="right image">
            <img class="cp1-icon" src="https://www.linkio.com/wp-content/uploads/2018/07/chptitle.png">
        </div>
        <div class="chapter-full"  id="chapter7" style="display:none;">
            <?php the_field('chapter_7_read_more_content');?>
                <?php if( have_rows('chapter_7_repeater') ): ?>
                 <?php while( have_rows('chapter_7_repeater') ): the_row();  ?>
                  <div  class="google-bot purple-color">
                      <?php the_sub_field('chapter_7_sub_content');?>
                    </div>
                 <?php endwhile; ?>
                <?php endif; ?>    
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp7" class="open-chapter chapter-button">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
  <div class="chapter conclusion beginners black-font">
    <div class="row-1100">
    <h2><?php the_field('conclusion_title'); ?></h2>
        <div class="left content-area"><?php the_field('conclusion_left'); ?></div>
        <div class="right image"><img class="overlay-icon" src="<?php the_field('conclusion_right_image'); ?>"/></div>
    </div>
 </div>

 </main><!-- .site-main -->
</div><!-- .content-area -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
( function( $ ) {
	$( document ).ready( function() {
       $('.read-more-chapter').on('click',function(e){
    	    var $currentClick = $(this).find('a.chapter-button');
    	    e.preventDefault();
    	    if($currentClick.html()=='CLOSE CHAPTER') {
    	        $(this).parent().find('.chapter-full').css('height','0px');
    	        $currentClick.html('EXPAND CHAPTER');
    	        $('html, body').animate({
                    scrollTop:  $(this).parent().find('.chapter').offset().top
                 },slow)

    	    } else {
    	        $(this).parent().find('.chapter-full').css('height','auto');
    	        $(this).parent().find('.chapter-full').slideDown("slow");
    	        $currentClick.html('CLOSE CHAPTER');
    	    }
      });
    } );
} )( jQuery );
</script>



<?php get_footer(); ?>



