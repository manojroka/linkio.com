<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ae84071b56a439e96aaf1c79c558e02d189f021329"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/directory-submission-sites.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/directory-submission-sites_2018-10-12-10.php") )  ) ){
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

    <div  class="header-section">
        <div class="row-1055">
            <div class="profile-section">
            <?php the_field('header_title');?> 
            </div>
            <img src="https://www.linkio.com/wp-content/uploads/2018/10/header-img.jpg" />
            </div>    
        </div>  
        <div class="content-section">
            <div class="row-1055">
                <div class="section1">
                <?php the_field('section_1');?>
                </div>
                <div class="table-of-content">
                    <h2>Table of Contents</h2>
                    <ol>
                        <li class="one"><a href="#">Then and Now</a></li>
                        <li class="two"><a href="#">Before We Begin: A Brief Caveat</a></li>
                        <li class="three"><a href="#">5 Dead Simple Ways to Find Hidden Directory Links and Create Explosive SEO</a></li>
                        <li class="four"><a href="#">The No Nonsense Way to Determine the Quality of a Potential Link</a></li>
                        <li class="five"><a href="#"># Epic Directory Sites to Get You Started</a></li>
                        <li class="six"><a href="#">How to Effectively Execute a Directory Link Building Campaign</a></li>
                        <li class="seven"><a href="#">Over to You</a></li>
                    </ol>
                
                </div>
            </div>        
        </div>
    </div>

</div><!-- .content-area -->

<?php get_footer(); ?>