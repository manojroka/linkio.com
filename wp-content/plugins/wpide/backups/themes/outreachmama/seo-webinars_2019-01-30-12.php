<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "25c67326c4a0b48238af035723f9ac88839d59db90"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-webinars.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-webinars_2019-01-30-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Seo Webinars
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <main id="main" class="site-main" role="main">
        <div class="full-width-resource-header">
            
            <img src="https://www.linkio.com/wp-content/uploads/2019/01/hero_dark.png">
            
            <div class="header-inner">
            
            <div class="row-1100">
                <h2>FREE SEO WEBINARS:</h2>
                <h4>Keyword Research, Online Optimization,</h4>
                <h4>Content Marketing and Link Building</h4>
            </div>
            
            </div>
            
            
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
#category-two, #category-three, #category-four, #category-five, #category-six {
    display: none;
}
#topic-one, #topic-two, #topic-three, #topic-four {
    display: none;
}
#cat2-top2, #cat2-top3, #cat2-top4 {
    display: none;
}
#cat3-top2, #cat3-top3, #cat3-top4 {
    display: none;
}
#cat4-top2, #cat4-top3, #cat4-top4 {
    display: none;
}
#cat5-top2, #cat5-top3,#cat5-top4 {
    display: none;
}
#cat6-top2, #cat6-top3, #cat5-top4 {
    display: none;
}
</style>

  <div class="resource-full-width webinars-full-width">    
    
        <div class="row-1100">
        <div class="webinars-content-area">
            <?php the_field('webinars_content_area')?>
        </div>
            <div class="resource-left">
                <div class="resource-half-left tags categories">
                    <h4>Categories:</h4>
                  <div class="resource-check"><input rel="category-one" type="checkbox" checked  value="4" name="test" id="f-option1" class="all"><label for="f-option1"> All</label></div>
                  <!--<div class="resource-check"><input rel="category-two" type="radio" value="1" name="test" id="f-option2" class="all-2"> <label for="f-option2">Guides</label></div>-->
                  <div class="resource-check"><input rel="category-three" type="checkbox" value="1" name="test" id="f-option3" class="all-2"> <label for="f-option3">General SEO</label></div>
                  <!--<div class="resource-check"><input rel="category-four" type="radio" value="1" name="test" id="f-option4" class="all-2"><label for="f-option4"> Videos</label></div>-->
                  <div class="resource-check"><input rel="category-five" type="checkbox" value="1" name="test" id="f-option5" class="all-2"><label for="f-option5"> For Beginners</label></div>
                  <div class="resource-check"><input rel="category-six" type="checkbox" value="1" name="test" id="f-option6" class="all-2"><label for="f-option6"> Onsite Optimization</label></div>
                  <div class="resource-check"><input rel="category-six" type="checkbox" value="1" name="test" id="f-option7" class="all-2"><label for="f-option7"> Content Marketing</label></div>
                  <div class="resource-check"><input rel="category-six" type="checkbox" value="1" name="test" id="f-option8" class="all-2"><label for="f-option8"> Link Building</label></div>
                  <div class="resource-check"><input rel="category-six" type="checkbox" value="1" name="test" id="f-option9" class="all-2"><label for="f-option9"> Keyword Research</label></div>
                  <div class="resource-check"><input rel="category-six" type="checkbox" value="1" name="test" id="f-option10" class="all-2"><label for="f-option10"> Technical SEO</label></div>
                </div>
                <div class="resource-half-right  tags topics">
                <h4>Topics</h4>
                  <div class="resource-check"><input rel="topic-one"  type="radio" checked value="3" name="test2" id="t-option1" class="all"><label for="t-option1"> All</label></div>
                  <div class="resource-check"><input rel="topic-two"  type="radio" value="2" name="test2" id="t-option2" class="all-2"><label for="t-option2">Link Building</label></div>
                  <div class="resource-check"><input rel="topic-three"  type="radio" value="2" name="test2" id="t-option3" class="all-2"><label for="t-option3">Seo Strategy</label></div>
                  <div class="resource-check"><input rel="topic-four"  type="radio" value="2" name="test2" id="t-option4" class="all-2"><label for="t-option4">Anchor Text</label></div>
                </div>
                        
            </div>
            <div id="resource-right" class="resource-right ">
                <div class="resource-list-tab  category-one topic-one" id="category-one">
                         <?php if( have_rows('resource_repeater') ): ?>
                
                      <ul class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                        
                        <li class="resource-list category-one topic-one">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left"><?php the_sub_field('category')?></div>
                                <div class="right"><?php the_sub_field('topic')?></div>
                            </div>
                        </li>
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                     
                     <div class="resource-list-tab category-two topic-one" id="category-two">
                    
                    <?php if( have_rows('resource_repeater') ): ?>
                      <ul class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Guides', $value)) { ?>
                        
                        <li class="resource-list category-two category-one topic-one">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Guides</div>
                                <div class="right"><?php the_sub_field('topic')?></div>
                            </div>
                        </li>
						<?php } ?> 
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                
                <div class="resource-list-tab category-three topic-one category-one" id="category-three">
                    <?php if( have_rows('resource_repeater') ): ?>
                      <ul class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Tools', $value)) { ?>
                        
                        <li class="resource-list category-three category-one  topic-one ">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Tools</div>
                                <div class="right"><?php the_sub_field('topic')?></div>
                            </div>
                        </li>
						<?php } ?> 
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                <div class="resource-list-tab category-four topic-one" id="category-four">
                    <?php if( have_rows('resource_repeater') ): ?>
                      <ul class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Videos', $value)) { ?>
                        
                        <li class="resource-list category-four category-one topic-one">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Videos</div>
                                <div class="right"><?php the_sub_field('topic')?></div>
                            </div>
                        </li>
						<?php } ?> 
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                <div class="resource-list-tab category-five topic-one" id="category-five">
                    <?php if( have_rows('resource_repeater') ): ?>
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Case Studies', $value)) { ?>
                        
                        <li class="resource-list category-five category-one topic-one">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Case Studies</div>
                                <div class="right"><?php the_sub_field('topic')?></div>
                            </div>
                        </li>
						<?php } ?> 
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
              
                 <div class="resource-list-tab category-six topic-one" id="category-six">
                    <?php if( have_rows('resource_repeater') ): ?>
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Learn', $value)) { ?>
                        
                        <li class="resource-list category-six topic-one category-one">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Learn</div>
                                <div class="right"><?php the_sub_field('topic')?></div>
                            </div>
                        </li>
						<?php } ?> 
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                
                 <div class="resource-list-tab topic-one category-one" id="topic-one">
                    <?php if( have_rows('resource_repeater') ): ?>
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                        <li class="resource-list topic-one category-one">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left"><?php the_sub_field('category')?></div>
                                <div class="right">All</div>
                            </div>
                        </li>
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                <div class="resource-list-tab topic-one category-one topic-one topic-two" id="topic-two">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('topic');
                        if(in_array('Link Building', $value)) { ?>
                    
                    
                        <li class="resource-list topic-one category-one topic-two">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left"><?php the_sub_field('category')?></div>
                                <div class="right">Link Building</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                
                
                <div class="resource-list-tab topic-one category-one topic-one topic-three" id="topic-three">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('topic');
                        if(in_array('SEO Strategy', $value)) { ?>
                    
                    
                        <li class="resource-list topic-one category-one topic-three">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left"><?php the_sub_field('category')?></div>
                                <div class="right">SEO Strategy</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                <div class="resource-list-tab topic-one category-one topic-one topic-four" id="topic-four">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('topic');
                        if(in_array('Anchor Text', $value)) { ?>
                        <li class="resource-list topic-one category-one topic-four">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left"><?php the_sub_field('category')?></div>
                                <div class="right">Anchor Text</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                    
                </div>
                
                <div class="resource-list-tab topic-one category-one topic-one topic-two category-two" id="cat2-top2">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Guides', $value) AND in_array('Link Building', $value1)){ ?>
                        <li class="resource-list  topic-two category-two">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Guides</div>
                                <div class="right">Link Building</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                <div class="resource-list-tab topic-one category-one topic-one topic-three category-two" id="cat2-top3">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Guides', $value) AND in_array('SEO Strategy', $value1)){ ?>
                        <li class="resource-list  topic-three category-two">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Guides</div>
                                <div class="right">SEO Strategy</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                <div class="resource-list-tab topic-one category-one topic-one topic-four category-two" id="cat2-top4">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Guides', $value) AND in_array('Anchor Text', $value1)){ ?>
                        <li class="resource-list  topic-four category-two">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Guides</div>
                                <div class="right">Anchor Text</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                
                <div class="resource-list-tab  topic-two category-three" id="cat3-top2">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Tools', $value) AND in_array('Link Building', $value1)){ ?>
                        <li class="resource-list  topic-two category-three">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Tools</div>
                                <div class="right">Link Building</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                
                
                
                <div class="resource-list-tab  topic-three category-three" id="cat3-top3">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Tools', $value) AND in_array('SEO Strategy', $value1)){ ?>
                        <li class="resource-list  topic-three category-three">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Tools</div>
                                <div class="right">SEO Strategy</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                
                <div class="resource-list-tab  topic-four category-three" id="cat3-top4">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Tools', $value) AND in_array('Anchor Text', $value1)){ ?>
                        <li class="resource-list  topic-four category-three">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Tools</div>
                                <div class="right">Anchor Text</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                    <div class="resource-list-tab  topic-two category-four" id="cat4-top2">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Videos', $value) AND in_array('Link Building', $value1)){ ?>
                        <li class="resource-list  topic-two category-four">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Videos</div>
                                <div class="right">Link Building</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                
                <div class="resource-list-tab  topic-three category-four" id="cat4-top3">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Videos', $value) AND in_array('SEO Strategy', $value1)){ ?>
                        <li class="resource-list  topic-three category-four">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Videos</div>
                                <div class="right">SEO Strategy</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                          <div class="resource-list-tab  topic-four category-four" id="cat4-top4">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Videos', $value) AND in_array('Anchor Text', $value1)){ ?>
                        <li class="resource-list  topic-four category-four">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Videos</div>
                                <div class="right">Anchor Text</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
      
             <div class="resource-list-tab  topic-two category-five" id="cat5-top2">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Case Studies', $value) AND in_array('Link Building', $value1)){ ?>
                        <li class="resource-list  topic-two category-five">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Case Studies</div>
                                <div class="right">Link Building</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                <div class="resource-list-tab  topic-three category-five" id="cat5-top3">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Case Studies', $value) AND in_array('SEO Strategy', $value1)){ ?>
                        <li class="resource-list  topic-three category-five">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Case Studies</div>
                                <div class="right">SEO Strategy</div>
                            </div>
                        </li>
                        <?php } ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                
       
                
                
                
                <div class="resource-list-tab  topic-four category-five" id="cat5-top4">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Case Studies', $value) AND in_array('Anchor Text', $value1)){ ?>
                        <li class="resource-list  topic-four category-five">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.outreachmama.com/wp-content/uploads/2018/02/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Case Studies</div>
                                <div class="right">Anchor Text</div>
                            </div>
                        </li>
                        </ul> 
                        <?php }
                        else{
                        ?>
                        <li class="topic-four category-five" id="no-result-found">
                       
                        <div class="result-right"><h4>Oops, we couldn't find any results</h4>
                        <p>If this is something you'd like to see, make a suggestion for a new resource and we'll do our best to get it created.</p></div>
                         <div class="result-left"><img src="https://www.linkio.com/wp-content/uploads/2017/12/pleased-resized.png"></div>
                        </li>
                        <?php }
                        ?> 
                        
                        
                         <?php endwhile; ?>
                                       
                    <?php endif; ?>
                </div>
                
                
                
                
                
                
                
                <div class="resource-list-tab  topic-two category-six" id="cat6-top2">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Learn', $value) AND in_array('Link Building', $value1)){ ?>
                        <li class="resource-list  topic-two category-six">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Learn</div>
                                <div class="right">Link Building</div>
                            </div>
                        </li>
                        <?php }
                        ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                 <div class="resource-list-tab  topic-three category-six" id="cat6-top3">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Learn', $value) AND in_array('SEO Strategy', $value1)){ ?>
                        <li class="resource-list  topic-three category-six">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Learn</div>
                                <div class="right">SEO Strategy</div>
                            </div>
                        </li>
                        <?php }
                        ?> 
						
                         <?php endwhile; ?>
                        </ul>                
                    <?php endif; ?>
                </div>
                
                
                 <div class="resource-list-tab  topic-four topic-four" id="cat6-top4">
                    <?php if( have_rows('resource_repeater') ): ?>
                    
                      <ul class="tab-content-resource results list-unstyled">
                     <?php while( have_rows('resource_repeater') ): the_row(); ?>
                          <?php                         
                         $value = get_sub_field('category');
                         $value1 = get_sub_field('topic');
                        if (in_array('Learn', $value) AND in_array('Anchor Text', $value1)){ ?>
                        <li class="resource-list  topic-four category-six">
                            <div class="resource-image">
                            <?php
                                if(get_sub_field('resources_thumbnail_image'))
                                {
                                 $feat_image =get_sub_field('resources_thumbnail_image');    
                                }
                                else 
                                {
                                    $feat_image = 'https://www.linkio.com/wp-content/uploads/2018/04/plaveholder2.jpg';
                                }
                                ?>
                                <a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><img src="<?php echo $feat_image ;?>"></a>
                            </div>
                            <h4><a href="<?php the_sub_field('resource_anchor_link')?>" target="_blank"><?php the_sub_field('resource_title')?></a></h4>
                            <div class="recource-bottom">
                                <div class="left">Learn</div>
                                <div class="right">Anchor Text</div>
                            </div>
                        </li>
                        <?php }
                        ?> 
						
                         <?php endwhile; ?>
                        </ul> 
                        <?php else:
                    echo '<p class="test">Nothing found</P>';?>
                    <?php endif; ?>
                </div>
      
                      
                
                
                
            </div>
        </div>
    </div>



 </main><!-- .site-main -->





    <script>
    /*
  This is a jQuery script for 2-step checkbox filtering
  I'll be explaining lines that seems to have importance
  Please note that the 2nd Block of checkboxes must be disabled in the html via attribute 'disabled'
*/
//show all categories
var _showCategories = function(item) {
  for (var x = 0; x < item.length; ++x) {
    $(item[x]).fadeIn();
  }
};

//categories array will be used to store the parent ID of each .results block
//the resources array will hold all the input[type="checkbox"]:checked values
//the initial will be used as a string container to target the specific result that needs to be displayed
var categories = [],
  resources = [],
  initial = "";

//list all the category blocks
categories[0] = "#category-one";
categories[1] = "#category-two";
categories[2] = "#category-three";
categories[3] = "#category-four";
categories[4] = "#category-five";
categories[5] = "#category-six";
categories[6] = "#topic-one";
categories[7] = "#topic-two";
categories[8] = "#topic-three";
categories[9] = "#topic-four";
categories[10] = "#cat2-top2";
categories[11] = "#cat2-top3";
categories[12] = "#cat2-top4";
categories[13] = "#cat3-top2";
categories[14] = "#cat3-top3";
categories[15] = "#cat3-top4";
categories[16] = "#cat4-top2";
categories[17] = "#cat4-top3";
categories[18] = "#cat4-top4";
categories[19] = "#cat5-top2";
categories[20] = "#cat5-top3";
categories[21] = "#cat5-top4";
categories[22] = "#cat6-top2";
categories[23] = "#cat6-top3";
categories[24] = "#cat6-top4";




$('div.tags').find('input[type="radio"]').click(function() {
  
  //everytime there is a new category/clicked
  //remove values from the resources array and initial variable
  //to remove duplication of entries
  resources = [];
  initial = "";
  
  //check everything on the first checkbox block if anything is checked
  if ($('div.tags.categories input[type="radio"]:checked').length > 0) {
    $('.results li').hide();
    //we remove the attribute on the
    //second checkbox block to be able to filter it
    
    //in all inputs that are checked, get it's value (rel in this case)
    //check if the value already exists in our resources array
    //if not, put all those values into the array
    $('div.tags').find('input:checked').each(function() {
      if (($.inArray($(this).attr('rel'), resources)) === -1) {
        resources.push($(this).attr('rel'));
      }
      
      //convert our resources array to string
      //then replace the commas (,) with periods (.)
      initial = resources.toString();
      initial = initial.replace(/,/g, '.');
    });    
    
    
    //iterate through all the categories
    //and check if a category block's li children has the classes 
    //that we inserted in the initial variable
    //else fade the block out
    for (var i = 0; i < categories.length; ++i) {
     
     
     if ($(categories[i] + " .results > li." + initial).length != 0) {
        $(".results > li." + initial).show('fast');
        $(categories[i]).fadeIn('fast');
        document.getElementById("no-result-found").setAttribute(
        "style", "position: absolute; display:block");
        
  	 }
  	 
      else {
        $(categories[i]).fadeOut('fast');
	
      }
    }
  } else {
    //reset all when all of the checkboxes are unticked
    
    $('.results > li').fadeIn('fast');
    _showCategories(categories);
  }
});

	$(document).ready(function(){

            $('input.all').click(function(){
                 if ($('input[value=4]').is(':checked') && $('input[value=3]').is(':checked')) {
                     $('#resource-right').addClass('redtext');
                } else if($(this).is(":checked")) {
                     $('#resource-right').removeClass('redtext');
                }
            });
        
        });



	$(document).ready(function(){

            $('input.all-2').click(function(){
                 if($(this).is(":checked")) {
                     $('#resource-right').removeClass('redtext');
                } else if($(this).is(":checked")) {
                     $('#resource-right').removeClass('redtext');
                }
            });
        
        });

    </script>	
</div><!-- .content-area -->

<?php get_footer(); ?>