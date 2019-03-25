<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "25c67326c4a0b48238af035723f9ac885b654e5fbe"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-webinars.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-webinars_2019-02-02-07.php") )  ) ){
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
<script src="https://d3js.org/d3.v4.0.0-alpha.40.min.js"></script>
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


<script>

$(function(){
  
  var $container = $('#container'),
      $checkboxes = $('#filters input');
  
  $container.isotope({
    itemSelector: '.item'
  });
  
  $checkboxes.change(function(){
    var filters = [];
    // get checked checkboxes values
    $checkboxes.filter(':checked').each(function(){
      filters.push( this.value );
    });
    // ['.red', '.blue'] -> '.red, .blue'
    filters = filters.join(', ');
    $container.isotope({ filter: filters });
  });
  
});
</script>
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



.item {
  width: 70px;
  height: 70px;
  margin: 3px;
  float: left;
}

.red { background: red; }
.blue { background: blue; }
.green { background: green; }
.yellow { background: yellow; }

/* Start: Recommended Isotope styles */

/**** Isotope Filtering ****/

.isotope-item {
  z-index: 2;
}

.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}

/**** Isotope CSS3 transitions ****/

.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
     -moz-transition-duration: 0.8s;
          transition-duration: 0.8s;
}

.isotope {
  -webkit-transition-property: height, width;
     -moz-transition-property: height, width;
          transition-property: height, width;
}

.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
          transition-property:         transform, opacity;
}

/**** disabling Isotope CSS3 transitions ****/

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
  -webkit-transition-duration: 0s;
     -moz-transition-duration: 0s;
          transition-duration: 0s;
}

/* End: Recommended Isotope styles */
</style>

  <div class="resource-full-width webinars-full-width">    
    
        <div class="row-1100">
        <div class="webinars-content-area">
            <?php the_field('webinars_content_area')?>
        </div>
        
        
      

        
        <input type="checkbox" class="myCheckbox" value="thor"> General SEO
    <input type="checkbox" class="myCheckbox" value="spiderman"> For Beginners
    <input type="checkbox" class="myCheckbox" value="superman"> Onsite Optimization
    <input type="checkbox" class="myCheckbox" value="thor"> Content Marketing
    <input type="checkbox" class="myCheckbox" value="spiderman"> Link Building
    <input type="checkbox" class="myCheckbox" value="superman"> Keyword Research
    <input type="checkbox" class="myCheckbox" value="superman"> Technical SEO

    <div id="content">
    <div id="spiderman" class="spiderman">For Beginners 123456789</div>
    <div id="superman" class="superman">For Beginners 123456789</div>
    
    
    </div>
    <script>    
      data = ["batman","thor","superman","spiderman","ironman"];
      table = d3.select("#content")
          .append("table")
          .property("border","1px");
      d3.selectAll(".myCheckbox").on("change",update);
      update();
      
      
      function update(){
        var choices = [];
        d3.selectAll(".myCheckbox").each(function(d){
          cb = d3.select(this);
          if(cb.property("checked")){
            choices.push(cb.property("value"));
          }
        });
      
        if(choices.length > 0){
          newData = data.filter(function(d,i){return choices.includes(d);});
        } else {
          newData = data;     
        } 
        
        newRows = table.selectAll("tr")
            .data(newData,function(d){return d;});
        newRows.enter()
          .append("tr")
          .append("td")
          .text(function(d){return d;});    
        newRows.exit()
          .remove();      
      }
    </script>
        
        
        
        
      
          
        </div>
    </div>



 </main><!-- .site-main -->





    <script>
    

    </script>	
</div><!-- .content-area -->

<?php get_footer(); ?>