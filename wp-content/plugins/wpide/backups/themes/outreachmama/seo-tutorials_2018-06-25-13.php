<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ddf8b0d7e26bd46cd68a481c28044d6a944a494e33"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-tutorials.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-tutorials_2018-06-25-13.php") )  ) ){
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
 <div class="chapter chapter1 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter1_title');?>
        <div class="left content-area">
        
        <?php the_field('chapter_1_sub_content');?>
        </div>
        <div class="right image">
            <img class="cp1-icon" src="<?php the_field('chapter_1_right_image');?>">
        </div>
        <div class="chapter-full">
            <?php the_field('chapter_1_bottom_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="close-chapter">CLOSE CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter2 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_2_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_2_visble_content');?>
        </div>
        <div class="chapter-full" style="display:none;">
            <?php the_field('chapter_1_bottom_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter3 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_3_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_3_visible_content');?>
        </div>
        <div class="chapter-full" style="display:none;">
            <?php the_field('chapter_3_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter4 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_4_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_4_visible_content');?>
        </div>
        <div class="chapter-full" style="display:none;">
            <?php the_field('chapter_4_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>
  <div class="chapter chapter5 beginners">
 <div class="row-1100">
    <div class="chapter-content">
        <?php the_field('chapter_5_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_5_visible_content');?>
        </div>
        <div class="chapter-full" style="display:none;">
            <?php the_field('chapter_5_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter">EXPAND CHAPTER</a>
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
        <div class="chapter-full" style="display:none;">
            <?php the_field('chapter_6_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter">EXPAND CHAPTER</a>
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
        <div class="chapter-full" style="display:none;">
            <?php the_field('chapter_7_read_more_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter">EXPAND CHAPTER</a>
        </div>
    </div>
</div>
 </div>

 </main><!-- .site-main -->





</div><!-- .content-area -->

<?php get_footer(); ?>



