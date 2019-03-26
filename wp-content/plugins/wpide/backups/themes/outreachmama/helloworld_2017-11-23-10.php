<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "40e1c3a3c58d01e2586aae14625c4a21eeafd38401"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/helloworld.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/helloworld_2017-11-23-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Link 500
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
        <div class="header1">
            <?php the_field('header_content'); ?>
        </div>
        <div class="tab-2">
            <div class="left-tab">
            <?php the_field('content_area'); ?>
            
            <div class="link-lists">
            
            <li class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-lists-li-top">
                          <div class="list-box list-box1"><p>Rank</p></div>
                          <div class="list-box list-box2"><p>Logo</p></div>
                          <div class="list-box list-box3"><p>Company</p></div>
                          <div class="list-box list-box4"><p>Domain Authority</p></div>
                          <div class="list-box list-box5"><p>Url</p></div>
            </li>
            
            
        	            <?php if( have_rows('the_2018_link_500') ): ?>
                        
                         <ul class="link-lists-500">
                        
                         <?php while( have_rows('the_2018_link_500') ): the_row(); 
                        
                          // vars
                          $rank = get_sub_field('rank');
                          $logo = get_sub_field('logo');
                          $company = get_sub_field('company');
                          $domain =get_sub_field('domain_authority');
                          $url =get_sub_field('url_');
                                      ?>
                        
                          <li class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-lists-li">
                          <div class="list-box list-box1"><?php echo $rank; ?></div>
                          <div class="list-box list-box2"><img src='<?php echo $logo; ?>' ></div>
                          <div class="list-box list-box3"><?php echo $company; ?></div>
                          <div class="list-box list-box4"><?php echo $domain; ?></div>
                          <div class="list-box list-box5"><a href="<?php echo $url; ?>"><?php echo $url; ?></a></div>
                          
                          </li>
                        
                         <?php endwhile; ?>
                        
                         </ul>                
                        <?php endif; ?>
                </div>
            
            
            
            </div>
            <div class="right-tab">
            fvfdssvsv
            </div>
        </div>
    </main><!-- .site-main -->

 <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>