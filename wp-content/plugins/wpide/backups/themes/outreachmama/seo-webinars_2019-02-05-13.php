<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "25c67326c4a0b48238af035723f9ac88e9dd7acb59"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-webinars.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-webinars_2019-02-05-13.php") )  ) ){
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

 <main id="main" class="site-main" role="main">
        <div class="full-width-resource-header">
            
            <img src="https://www.linkio.com/wp-content/uploads/2019/02/Linkio_Webinars_banner_bigger_2.png">
            
            <div class="header-inner">
            
            <div class="row-1100">
                <h2>FREE SEO WEBINARS:</h2>
                <h4>Keyword Research, Online Optimization,</h4>
                <h4>Content Marketing and Link Building</h4>
            </div>
            
            </div>
            
            
        </div>



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








/**
 * Form & Checkbox Styles
 */


 

 
button{
  display: inline-block;
  vertical-align: top;
  padding: .4em .8em;
  margin: 0;
  background: #084376;
  border: 0;
  color: #fff;
  font-size: 16px;
  font-weight: 700;
  border-radius: 4px;
  cursor: pointer;
}
 
button:focus{
  outline: 0 none;
}

.checkbox{
  display: block;
  position: relative;
  cursor: pointer;
  margin-bottom: 8px;
}

.checkbox input[type="checkbox"]{
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  cursor: pointer;
  margin: 0;
  opacity: 0;
  z-index: 1;
}

.checkbox label{
  display: inline-block;
  vertical-align: top;
  text-align: left;
  padding-left: 1.5em;
}

.checkbox label:before,
.checkbox label:after{
  content: '';
  display: block;
  position: absolute;
}

.checkbox label:before{
  left: 0;
  top: 0;
  width: 18px;
  height: 18px;
  margin-right: 10px;
  background: #ddd;
  border-radius: 3px;
}

.checkbox label:after{
  content: '';
  position: absolute;
  top: 4px;
  left: 4px;
  width: 10px;
  height: 10px;
  border-radius: 2px;
  background:#084376;
  opacity: 0;
  pointer-events: none;
}

.checkbox input:checked ~ label:after{
  opacity: 1;
}

.checkbox input:focus ~ label:before{
  background: #eee;
}

/**
 * Container/Target Styles
 */
label{
  font-weight: 300;
}
.container{
  min-height: 400px;
  text-align: justify;
  position: relative;
}

.container .mix,
.container .gap{
  
  display: inline-block;
  margin: 0 5%;
}

.container .mix{
  
  display: none;
}

.container .mix.green{
  background: #a6e6a7;
}

.container .mix.blue{
  background: #6bd2e8;
}

.container .mix.circle{
  border-radius: 999px;
}

.container .mix.triangle{
  width: 0;
  height: 0;
  border: 50px solid transparent;
  border-top-color: #68b8c4;
  border-left-color: #68b8c4;
}

.container .mix.sm{
  width: 50px;
  height: 50px;
}

/**
 * Fail message styles
 */

.container .fail-message{
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  text-align: center;
  opacity: 0;
  pointer-events: none;
  
  -webkit-transition: 150ms;
  -moz-transition: 150ms;
  transition: 150ms;
}

.container .fail-message:before{
  content: '';
  display: inline-block;
  vertical-align: middle;
  height: 100%;
}

.container .fail-message span{
  display: inline-block;
  vertical-align: middle;
  font-size: 20px;
  font-weight: 700;
}

.container.fail .fail-message{
  opacity: 1;
  pointer-events: auto;
}

.webinars-full-width h2 {

    text-align: left;
    font-weight: 700 !important;
    color: #203442 !important;
    margin-bottom: 0;
    line-height: normal !important;
    letter-spacing: 1px;

}
.author-list {

    margin: 0;

}
.author-list li {

    display: inline-block;
    color: #cccccc !important;
    font-weight: 700 !important;
    margin-right: 20px;
    font-size: 15px !important;
}
.author-list li.author-by{
    
}
.author-list li.author-date{
    
}
.author-list li.head-of-seo {

    padding-left: 30px;
    background-image: url(https://www.linkio.com/wp-content/uploads/2019/02/small-calendar.png);
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 20px;
    margin-right: 0;
    color: #5c6785 !important;

}
.webinars-description {

    text-align: left;
    margin-top: 25px;
    letter-spacing: 0.5px;
    margin-bottom: 60px;

}
.author-list li span{
    color:#5c6785;
}
.register-button-web {

    display: block;
    text-align: center;

}
.register-button-web a {

    color: #fff;
    background: #084376;
    padding: 10px 20px;
    display: inline-block;
    border-radius: 5px;
    font-size: 17px;

}
</style>
</style>

  <div class="resource-full-width webinars-full-width">    
    
        <div class="row-1100">
            <div class="webinars-content-area">
                <?php the_field('webinars_content_area')?>
            </div>
        
        
    <div class="resource-left">   

        <form class="controls" id="Filters">
          <!-- We can add an unlimited number of "filter groups" using the following format: -->
          
          <fieldset>
            <h4>Category</h4>
            <div class="checkbox">
              <input type="checkbox" value=".general-seo">
              <label>General SEO</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" value=".for-beginners">
              <label>For Beginners</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" value=".onsite-optimization">
              <label>Onsite Optimization</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" value=".content-marketing">
              <label>Content Marketing</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" value=".link-building">
              <label>Link Building</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" value=".keyword-research">
              <label>Keyword Research</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" value=".technical-seo">
              <label>Technical SEO</label>
            </div>
          </fieldset>
          
          
          <button id="Reset">Clear Filters</button>
        </form>
    </div>


    <div id="resource-right" class="resource-right ">
        <div id="Container" class="container">
          <div class="fail-message"><span>No items were found matching the selected filters</span></div>
          
          
          
          
          		<div class="mix general-seo"  data-bound="">
                    <?php if( have_rows('webinars_repeater') ): ?>
                      <div class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('webinars_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('General SEO', $value)) { ?>
						 
                        <h2><?php the_sub_field('webinars_title')?></h2>
                        <ul class="author-list">
                            <li class="author-by">by <span><?php the_sub_field('author')?></span></li>
                            <li class="author-date">Head of SEO at <a href="https://www.<?php the_sub_field('head_of_seo')?>/"><span><?php the_sub_field('head_of_seo')?></span></a></li>
                            <li class="head-of-seo"><?php the_sub_field('date')?></li>
                        </ul>
                        <div class="webinars-description">
                            <?php the_sub_field('webinars_description')?>
                            <div class="register-button-web"><a href="<?php the_sub_field('register_button_link')?>">REGISTER</a></div>
                        </div>
                            
                    
        
						<?php } ?> 
                         <?php endwhile; ?>
                        </div>                
                    <?php endif; ?>
                    
                </div>
                <div class="mix for-beginners"  data-bound="">
                    <?php if( have_rows('webinars_repeater') ): ?>
                      <div class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('webinars_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('For Beginners', $value)) { ?>
						 
                        <h2><?php the_sub_field('webinars_title')?></h2>
                        <ul class="author-list">
                            <li class="author-by">by <span><?php the_sub_field('author')?></span></li>
                            <li class="author-date">Head of SEO at <a href="https://www.<?php the_sub_field('head_of_seo')?>/"><span><?php the_sub_field('head_of_seo')?></span></a></li>
                            <li class="head-of-seo"><?php the_sub_field('date')?></li>
                        </ul>
                        <div class="webinars-description">
                            <?php the_sub_field('webinars_description')?>
                            <div class="register-button-web"><a href="<?php the_sub_field('register_button_link')?>">REGISTER</a></div>
                        </div>
                            
                    
        
						<?php } ?> 
                         <?php endwhile; ?>
                        </div>                
                    <?php endif; ?>
                    
                </div>
                <div class="mix onsite-optimization"  data-bound="">
                    <?php if( have_rows('webinars_repeater') ): ?>
                      <div class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('webinars_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Onsite Optimization', $value)) { ?>
						 
                        <h2><?php the_sub_field('webinars_title')?></h2>
                        <ul class="author-list">
                            <li class="author-by">by <span><?php the_sub_field('author')?></span></li>
                            <li class="author-date">Head of SEO at <a href="https://www.<?php the_sub_field('head_of_seo')?>/"><span><?php the_sub_field('head_of_seo')?></span></a></li>
                            <li class="head-of-seo"><?php the_sub_field('date')?></li>
                        </ul>
                        <div class="webinars-description">
                            <?php the_sub_field('webinars_description')?>
                            <div class="register-button-web"><a href="<?php the_sub_field('register_button_link')?>">REGISTER</a></div>
                        </div>
                            
                    
        
						<?php } ?> 
                         <?php endwhile; ?>
                        </div>                
                    <?php endif; ?>
                    
                </div>
                <div class="mix content-marketing"  data-bound="">
                    <?php if( have_rows('webinars_repeater') ): ?>
                      <div class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('webinars_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Content Marketing', $value)) { ?>
						 
                        <h2><?php the_sub_field('webinars_title')?></h2>
                        <ul class="author-list">
                            <li class="author-by">by <span><?php the_sub_field('author')?></span></li>
                            <li class="author-date">Head of SEO at <a href="https://www.<?php the_sub_field('head_of_seo')?>/"><span><?php the_sub_field('head_of_seo')?></span></a></li>
                            <li class="head-of-seo"><?php the_sub_field('date')?></li>
                        </ul>
                        <div class="webinars-description">
                            <?php the_sub_field('webinars_description')?>
                            <div class="register-button-web"><a href="<?php the_sub_field('register_button_link')?>">REGISTER</a></div>
                        </div>
                            
                    
        
						<?php } ?> 
                         <?php endwhile; ?>
                        </div>                
                    <?php endif; ?>
                    
                </div>
                <div class="mix link-building"  data-bound="">
                    <?php if( have_rows('webinars_repeater') ): ?>
                      <div class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('webinars_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Link Building', $value)) { ?>
						 
                        <h2><?php the_sub_field('webinars_title')?></h2>
                        <ul class="author-list">
                            <li class="author-by">by <span><?php the_sub_field('author')?></span></li>
                            <li class="author-date">Head of SEO at <a href="https://www.<?php the_sub_field('head_of_seo')?>/"><span><?php the_sub_field('head_of_seo')?></span></a></li>
                            <li class="head-of-seo"><?php the_sub_field('date')?></li>
                        </ul>
                        <div class="webinars-description">
                            <?php the_sub_field('webinars_description')?>
                            <div class="register-button-web"><a href="<?php the_sub_field('register_button_link')?>">REGISTER</a></div>
                        </div>
                            
                    
        
						<?php } ?> 
                         <?php endwhile; ?>
                        </div>                
                    <?php endif; ?>
                    
                </div>
                <div class="mix keyword-research"  data-bound="">
                    <?php if( have_rows('webinars_repeater') ): ?>
                      <div class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('webinars_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Keyword Research', $value)) { ?>
						 
                        <h2><?php the_sub_field('webinars_title')?></h2>
                        <ul class="author-list">
                            <li class="author-by">by <span><?php the_sub_field('author')?></span></li>
                            <li class="author-date">Head of SEO at <a href="https://www.<?php the_sub_field('head_of_seo')?>/"><span><?php the_sub_field('head_of_seo')?></span></a></li>
                            <li class="head-of-seo"><?php the_sub_field('date')?></li>
                        </ul>
                        <div class="webinars-description">
                            <?php the_sub_field('webinars_description')?>
                            <div class="register-button-web"><a href="<?php the_sub_field('register_button_link')?>">REGISTER</a></div>
                        </div>
                            
                    
        
						<?php } ?> 
                         <?php endwhile; ?>
                        </div>                
                    <?php endif; ?>
                    
                </div>
                <div class="mix technical-seo"  data-bound="">
                    <?php if( have_rows('webinars_repeater') ): ?>
                      <div class="tab-content-resource results list-unstyled">
                
                     <?php while( have_rows('webinars_repeater') ): the_row(); ?>
                        <?php                         
                         $value = get_sub_field('category');
                        if(in_array('Technical SEO', $value)) { ?>
						 
                        <h2><?php the_sub_field('webinars_title')?></h2>
                        <ul class="author-list">
                            <li class="author-by">by <span><?php the_sub_field('author')?></span></li>
                            <li class="author-date">Head of SEO at <a href="https://www.<?php the_sub_field('head_of_seo')?>/"><span><?php the_sub_field('head_of_seo')?></span></a></li>
                            <li class="head-of-seo"><?php the_sub_field('date')?></li>
                        </ul>
                        <div class="webinars-description">
                            <?php the_sub_field('webinars_description')?>
                            <div class="register-button-web"><a href="<?php the_sub_field('register_button_link')?>">REGISTER</a></div>
                        </div>
                            
                    
        
						<?php } ?> 
                         <?php endwhile; ?>
                        </div>                
                    <?php endif; ?>
                    
                </div>
                
     
          		
          
          
          
          
          
          
          
          
          
          
        </div>
    </div>
        
        
        
        
      
          
        </div>
    </div>



 </main><!-- .site-main -->





   
</div><!-- .content-area -->

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.js"></script>
<script>// To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "checkboxFilter".

var checkboxFilter = {

  // Declare any variables we will need as properties of the object

  $filters: null,
  $reset: null,
  groups: [],
  outputArray: [],
  outputString: '',

  // The "init" method will run on document ready and cache any jQuery objects we will need.

  init: function () {
    var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.

    self.$filters = $('#Filters');
    self.$reset = $('#Reset');
    self.$container = $('#Container');

    self.$filters.find('fieldset').each(function () {
      self.groups.push({
        $inputs: $(this).find('input'),
        active: [],
        tracker: false });

    });

    self.bindHandlers();
  },

  // The "bindHandlers" method will listen for whenever a form value changes. 

  bindHandlers: function () {
    var self = this;

    self.$filters.on('change', function () {
      self.parseFilters();
    });

    self.$reset.on('click', function (e) {
      e.preventDefault();
      self.$filters[0].reset();
      self.parseFilters();
    });
  },

  // The parseFilters method checks which filters are active in each group:

  parseFilters: function () {
    var self = this;

    // loop through each filter group and add active filters to arrays

    for (var i = 0, group; group = self.groups[i]; i++) {if (window.CP.shouldStopExecution(0)) break;
      group.active = []; // reset arrays
      group.$inputs.each(function () {
        $(this).is(':checked') && group.active.push(this.value);
      });
      group.active.length && (group.tracker = 0);
    }window.CP.exitedLoop(0);

    self.concatenate();
  },

  // The "concatenate" method will crawl through each group, concatenating filters as desired:

  concatenate: function () {
    var self = this,
    cache = '',
    crawled = false,
    checkTrackers = function () {
      var done = 0;

      for (var i = 0, group; group = self.groups[i]; i++) {if (window.CP.shouldStopExecution(1)) break;
        group.tracker === false && done++;
      }window.CP.exitedLoop(1);

      return done < self.groups.length;
    },
    crawl = function () {
      for (var i = 0, group; group = self.groups[i]; i++) {if (window.CP.shouldStopExecution(2)) break;
        group.active[group.tracker] && (cache += group.active[group.tracker]);

        if (i === self.groups.length - 1) {
          self.outputArray.push(cache);
          cache = '';
          updateTrackers();
        }
      }window.CP.exitedLoop(2);
    },
    updateTrackers = function () {
      for (var i = self.groups.length - 1; i > -1; i--) {if (window.CP.shouldStopExecution(3)) break;
        var group = self.groups[i];

        if (group.active[group.tracker + 1]) {
          group.tracker++;
          break;
        } else if (i > 0) {
          group.tracker && (group.tracker = 0);
        } else {
          crawled = true;
        }
      }window.CP.exitedLoop(3);
    };

    self.outputArray = []; // reset output array

    do {if (window.CP.shouldStopExecution(4)) break;
      crawl();
    } while (
    !crawled && checkTrackers());window.CP.exitedLoop(4);

    self.outputString = self.outputArray.join();

    // If the output string is empty, show all rather than none:

    !self.outputString.length && (self.outputString = 'all');

    //console.log(self.outputString); 

    // ^ we can check the console here to take a look at the filter string that is produced

    // Send the output string to MixItUp via the 'filter' method:

    if (self.$container.mixItUp('isLoaded')) {
      self.$container.mixItUp('filter', self.outputString);
    }
  } };


// On document ready, initialise our code.

$(function () {

  // Initialize checkboxFilter code

  checkboxFilter.init();

  // Instantiate MixItUp

  $('#Container').mixItUp({
    controls: {
      enable: false // we won't be needing these
    },
    animation: {
      easing: 'cubic-bezier(0.86, 0, 0.07, 1)',
      duration: 600 } });


});
//# sourceURL=pen.js
</script>



<?php get_footer(); ?>