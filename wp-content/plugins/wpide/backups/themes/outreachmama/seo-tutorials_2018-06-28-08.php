<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ddf8b0d7e26bd46cd68a481c28044d6ad0cf40089d"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-tutorials.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-tutorials_2018-06-28-08.php") )  ) ){
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
.page-template-seo-tutorials .chapter.chapter3.beginners .google-bot h2 {
    background-image: none !important;
    font-size: 36px;
}
.page-template-seo-tutorials .chp-rep {
    background-color: #f6f1e6;
    padding: 25px;
    border: 1px solid #fff;
    margin-bottom: 20px;
}
.page-template-seo-tutorials .chp-rep a {
    color: #d40606;
}
.page-template-seo-tutorials .content-rep-list {
    background-color: #fefbf3;
    float: left;
    width: 100%;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
    border-bottom: 1px solid #fff;
    margin-bottom: 30px;
}
.page-template-seo-tutorials .content-rep-list .content-rep {
    float: left;
    width: 50%;
    border: 1px solid #efe8d8;
    padding: 30px;
    min-height: 470px;
    border-top: 0px;
}
.page-template-seo-tutorials .content-rep-list .content-rep h4 {
    font-size: 20px;
    font-weight: 300;
    font-style: italic;
}
.page-template-seo-tutorials .beginners.black-font .content-rep-list .content-rep h4::after {
    background: transparent !important;
}
.page-template-seo-tutorials .content-rep-list .content-rep:nth-of-type(3) {
    min-height: 225px;
	border-bottom:0px;
}
.page-template-seo-tutorials .content-rep-list .content-rep:nth-of-type(4) {
    min-height: 225px;
	border-bottom:0px;
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
            <a href="#" class="close-chapter" id="chp1">CLOSE CHAPTER</a>
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
            <a href="#" class="open-chapter" id="chp2">EXPAND CHAPTER</a>
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
            <a href="#" id="chp3" class="open-chapter">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter4 beginners" >
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_4_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_4_visible_content');?>
        </div>
        <div class="chapter-full" id="chapter4" style="display:none;">
            <?php the_field('chapter_4_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#"id="chp4" class="open-chapter">EXPAND CHAPTER</a>
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
        <div class="chapter-full" id="chapter5" style="display:none;">
            <?php the_field('chapter_5_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp5" class="open-chapter">EXPAND CHAPTER</a>
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
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp6" class="open-chapter">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
  <div class="chapter chapter7 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_7_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_7_visible_content');?>
        </div>
        <div class="chapter-full"  id="chapter7" style="display:none;">
            <?php the_field('chapter_7_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp7" class="open-chapter">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>

 </main><!-- .site-main -->
</div><!-- .content-area -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#chp1").click(function(event){
         event.preventDefault();
    var x = document.getElementById("chapter1");
    
    if (x.style.display === "none") {
           $("#chapter1").slideDown("slow");
           document.getElementById("chp1").innerHTML = "CLOSE CHAPTER"; 
    } else {
           $("#chapter1").slideUp("slow");
            document.getElementById("chp1").innerHTML = "EXPAND CHAPTER";
    }
});
$("#chp2").click(function(event){
    event.preventDefault();
    var x = document.getElementById("chapter2");    
    if (x.style.display === "none") {
            $("#chapter2").slideDown("slow");
           document.getElementById("chp2").innerHTML = "CLOSE CHAPTER"; 
    } else {
           $("#chapter2").slideUp("slow");
            document.getElementById("chp2").innerHTML = "EXPAND CHAPTER";
    }
});
$("#chp3").click(function(event){
    event.preventDefault();
    var x = document.getElementById("chapter3");    
    if (x.style.display === "none") {
            $("#chapter3").slideDown("slow");
           document.getElementById("chp3").innerHTML = "CLOSE CHAPTER"; 
    } else {
           $("#chapter3").slideUp("slow");
            document.getElementById("chp3").innerHTML = "EXPAND CHAPTER";
    }
});
$("#chp4").click(function(event){
    event.preventDefault();
    var x = document.getElementById("chapter4");    
    if (x.style.display === "none") {
            $("#chapter4").slideDown("slow");
           document.getElementById("chp4").innerHTML = "CLOSE CHAPTER"; 
    } else {
           $("#chapter4").slideUp("slow");
            document.getElementById("chp4").innerHTML = "EXPAND CHAPTER";
    }
});
$("#chp5").click(function(event){
    event.preventDefault();
    var x = document.getElementById("chapter5");    
    if (x.style.display === "none") {
            $("#chapter5").slideDown("slow");
           document.getElementById("chp5").innerHTML = "CLOSE CHAPTER"; 
    } else {
           $("#chapter5").slideUp("slow");
            document.getElementById("chp5").innerHTML = "EXPAND CHAPTER";
    }
});
$("#chp6").click(function(event){
    event.preventDefault();
    var x = document.getElementById("chapter6");    
    if (x.style.display === "none") {
            $("#chapter6").slideDown("slow");
           document.getElementById("chp6").innerHTML = "CLOSE CHAPTER"; 
    } else {
           $("#chapter6").slideUp("slow");
            document.getElementById("chp6").innerHTML = "EXPAND CHAPTER";
    }
});
$("#chp7").click(function(event){
    event.preventDefault();
    var x = document.getElementById("chapter7");    
    if (x.style.display === "none") {
            $("#chapter7").slideDown("slow");
           document.getElementById("chp7").innerHTML = "CLOSE CHAPTER"; 
    } else {
           $("#chapter7").slideUp("slow");
            document.getElementById("chp7").innerHTML = "EXPAND CHAPTER";
    }
});
});
</script>
<?php get_footer(); ?>



