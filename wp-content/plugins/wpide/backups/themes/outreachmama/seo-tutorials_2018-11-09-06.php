<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ae84071b56a439e96aaf1c79c558e02d2d04446c2d"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/seo-tutorials.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/seo-tutorials_2018-11-09-06.php") )  ) ){
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
.chapter-full {
    overflow: hidden;
}
.page-template-seo-tutorials .black-font p {
    color: #272625;
}
.page-template-seo-tutorials .left.content-area p {
    font-family: 'Nunito', sans-serif;
    font-size: 18px;
    font-weight: 600;
    line-height: 28px;
    margin: 0 0 0.75em;
}
.page-template-seo-tutorials .beginners.black-font{
        font-family: 'Nunito', sans-serif;
    font-size: 18px;
    font-weight: 600;
    line-height: 28px;
    margin: 0 0 0.75em;
    color:#272625
}
.page-template-seo-tutorials .chapter p {
    font-weight: 300;
    font-size: 18px;
    font-weight: 600;
    line-height: 28px;
    margin: 0 0 0.75em;
    font-family: 'Nunito', sans-serif;
}
.page-template-seo-tutorials .chapter li{
    font-weight: 300;
    font-size: 18px;
    font-weight: 600;
    line-height: 28px;
    margin: 0 0 0.75em;
    font-family: 'Nunito', sans-serif;
}
.page-template-seo-tutorials .beginners {
    margin-bottom: 0px !important;
}
.page-template-seo-tutorials .chapter h2,.page-template-seo-tutorials .chapter.chapter3.beginners h2 {
    font-weight: 400;
}
.disqus-comment-sec{
    padding: 60px 0px !important;
    float: left;
    width: 100%;
}
.author-box-right p {
    color: #fff !important;
    margin-bottom: 16px !important;
    font-size: 19px;
    font-family: 'Muli', sans-serif;
    line-height: 22px;
    line-height: 1.8;
    font-family: 'Nunito Sans', sans-serif;
    font-family: 'GothamSSm-Book';
    font-style: italic;
}
.author-box {
    float: left;
    width: 100%;
	padding-top: 30px;
}
.author-box-left {
    float: left;
    width: 20%;
}
.author-box-right {
    float: left;
    width: 80%;
    padding: 20px;
}
.author-box-right h4 {
    font-family: 'GothamSSm-Book';
    color: #fff;
    font-size: 15px;
    font-weight: normal;
    margin-bottom: 0px;
}
.author-box-left img {
    border-radius: 50%;
    width: 130px;
    height: 130px;
}
.readmore-email-sign {
    background-image: url('https://www.outreachmama.com/wp-content/uploads/2018/03/facebook-logo.png') !important;
    background-size: 12px;
    font-size: 10px !important;
    color: #fff !important;
    font-family: 'GothamSSm-Book';
    text-transform: uppercase;
    border: 1px solid #fff;
    text-align: right;
    width: 175px;
    display: block;
    border-radius: 6px;
    background-repeat: no-repeat;
    background-position: 10px center;
    line-height: 20px;
    padding-right: 10px;
    padding-left: 10px;
    margin-top: 10px;
    font-style: normal !important;
}
.author-box-left {

    border-right: 1px solid #ffff;

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
            <li class="facebook"><a href="https://www.facebook.com/sharer.php?u=https://www.linkio.com/seo-tutorial/" target="_blank"><img src="https://www.linkio.com/wp-content/uploads/2018/05/facebook.png"/></a></li>
            <li class="linkdin"><a href="https://www.linkedin.com/shareArticle?url=https://www.linkio.com/seo-tutorial/" target="_blank"><img src="https://www.linkio.com/wp-content/uploads/2018/05/linkedin.png"/></a></li>
            <li class="twitter"><a href="https://twitter.com/intent/tweet?url=https://www.linkio.com/seo-tutorial/"target="_blank"><img src="https://www.linkio.com/wp-content/uploads/2018/05/twitter1.png"/></a></li>
            </ul>
        </div>
        <div class="left content-area"><?php the_field('content_area'); ?></div>
        <div class="right image"><img class="overlay-icon" src="<?php the_field('add_right_image'); ?>"/></div>
        <div class="author-box unique-author-box">
            <div class="author-box-left">
               <img src="<?php the_field('author_image'); ?>">
            </div>
            <div class="author-box-right">
                <?php the_field('author_name'); ?>
                <div class="author-link">
                    <a class="readmore-email-sign" href="<?php the_field('author_button_url'); ?>" target="_blank"><?php the_field('author_button_text'); ?></a>            
                </div>
            
            </div>
        </div>
    </div>
 </div>
 
 <div class="chapter chapter-download-pdf">
    <div class="row-1100">
        <div class="full-width">
        
            <div class="content-left-40">
                <img src="<?php the_field('seo_tutorial_icon');?>">
            </div>
            <div class="content-right-60">
                <?php the_field('seo_tutorial_download_title');?>
                <p><?php the_field('seo_tutorial_download_subcontent');?></p>
                <button href="<?php the_field('seo_tutorial_download_button_text');?>" class="download-button-icon" data-toggle="modal" data-target="#myModal"><?php the_field('seo_tutorial_download_button_title');?></button>
            </div>
        </div>
    </div>
 </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
            
            <div class="cont-right">    
            <h2>Get A Free PDF Version Of This Guide</h2>
            <p>Contains all the tips, resources and case studies found here</p>
                <?php /* echo do_shortcode( '[contact-form-7 id="7592" title="Seo Tutorial Subscription"]' ); */?>
         <style>
 ._button-wrapper._full_width {
    width: 100%;
    margin-top: 20px;
}
#_form_26_submit {
    width: 100%;
    background-color: #1096ab;
}
</style>
<form method="POST" action="https://outreachmama.activehosted.com/proc.php" id="_form_26_" class="_form _form_26 _inline-form  _dark" novalidate>
  <input type="hidden" name="u" value="26" />
  <input type="hidden" name="f" value="26" />
  <input type="hidden" name="s" />
  <input type="hidden" name="c" value="0" />
  <input type="hidden" name="m" value="0" />
  <input type="hidden" name="act" value="sub" />
  <input type="hidden" name="v" value="2" />
  <div class="_form-content">
    <div class="_form_element _x99693242 _full_width _clear" >
    
    </div>
    <div class="_form_element _x41164820 _full_width _clear" >
      <div class="_html-code">
 
      </div>
    </div>
    <div class="_form_element _x24068554 _full_width " >

      <div class="_field-wrapper">
        <input type="text" name="email" placeholder="Enter Email Address" id="email" required/>
      </div>
    </div>
    <div class="_button-wrapper _full_width">
      <button id="_form_26_submit" class="_submit" type="submit">
        Download PDF
      </button>
    </div>
    <div class="_clear-element">
    </div>
  </div>
  <div class="_form-thank-you" style="display:none;">
  </div>
 
</form><script type="text/javascript">
window.cfields = [];
window._show_thank_you = function(id, message, trackcmp_url) {
  var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';
  if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }
  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
  var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};
window._load_script = function(url, callback) {
    var head = document.querySelector('head'), script = document.createElement('script'), r = false;
    script.type = 'text/javascript';
    script.charset = 'utf-8';
    script.src = url;
    if (callback) {
      script.onload = script.onreadystatechange = function() {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
        }
      };
    }
    head.appendChild(script);
};
(function() {
  if (window.location.search.search("excludeform") !== -1) return false;
  var getCookie = function(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  var setCookie = function(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
  }
      var addEvent = function(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];
      element['on' + event] = function() {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  }
  var _removed = false;
  var form_to_submit = document.getElementById('_form_26_');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

  var getUrlParam = function(name) {
    var regexStr = '[\?&]' + name + '=([^&#]*)';
    var results = new RegExp(regexStr, 'i').exec(window.location.href);
    return results != undefined ? decodeURIComponent(results[1]) : false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);
    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }
    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }
      tooltips = [];
  };
  var remove_tooltip = function(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };
  var create_tooltip = function(elem, text) {
    var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }
    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };
  var resize_tooltip = function(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };
  var resize_tooltips = function() {
    if (_removed) return;
    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };
  var validate_field = function(elem, remove) {
    var tooltip = null, value = elem.value, no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
        var elems = form_to_submit.elements[elem.name];
        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        }
        else {
          no_error = false;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (elem.type =='checkbox') {
        var elems = form_to_submit.elements[elem.name], found = false, err = [];
        no_error = true;
        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Checking %s is required".replace("%s", elems[i].value));
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;
        if (elem.multiple) {
          selected = false;
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && !elem.options[i].value) {
              selected = false;
            }
          }
        }
        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "This field is required.");
      }
    }
    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid email address.");
      }
    }
    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid date.");
      }
    }
    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };
  var needs_validate = function(el) {
    return el.name == 'email' || el.getAttribute('required') !== null;
  };
  var validate_form = function(e) {
    var err = form_to_submit.querySelector('._form_error'), no_error = true;
    if (!submitted) {
      submitted = true;
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];
        if (needs_validate(input)) {
          if (input.type == 'text') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function(el) {
              var radios = form_to_submit.elements[el.name];
              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function() {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function() {
              validate_field(this, true);
            });
          }
        }
      }
    }
    remove_tooltips();
    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];
      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }
        validate_field(elem) ? true : no_error = false;
      }
    }
    if (!no_error && e) {
      e.preventDefault();
    }
    resize_tooltips();
    return no_error;
  };
  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);
  window._old_serialize = null;
  if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
  _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
    window._form_serialize = window.serialize;
    if (window._old_serialize) window.serialize = window._old_serialize;
  });
  var form_submit = function(e) {
    e.preventDefault();
    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('[id^="_form"][id$="_submit"]').disabled = true;
            var serialized = _form_serialize(document.getElementById('_form_26_'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://outreachmama.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();

</script>
            </div>
            <div class="image-left">
                <img src="https://www.linkio.com/wp-content/uploads/2018/07/seo-tutorial-download.png">
            </div>
            </div>
            
          </div>
        </div>
      </div>
 

 <div class="chapter chapter1 beginners black-font" >
 <div class="row-1100">
 
    <div class="chapter-content">
    <div class="scroll-div-capter"></div>
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
        <div class="scroll-div-capter"></div>
        <?php the_field('chapter_2_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_2_visble_content');?>
        </div>
        <div class="chapter-full" id="chapter2">
            <?php the_field('chapter_2_hidden_content');?>
        </div>
        <div class="read-more-chapter">
            <a href="#" class="open-chapter chapter-button" id="chp2">CLOSE CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter3 beginners black-font">
 <div class="row-1100">
    <div class="chapter-content">
    <div class="scroll-div-capter"></div>
        <?php the_field('chapter_3_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_3_visible_content');?>
        </div>
        <div class="chapter-full" id="chapter3">
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
            <a href="#" id="chp3" class="open-chapter chapter-button">CLOSE CHAPTER</a>
        </div>
    </div>
</div>
 </div>
 <div class="chapter chapter4 beginners">
 <div class="row-1100">
    <div class="chapter-content">
     <div class="scroll-div-capter"></div>
        <?php the_field('chapter_4_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_4_visible_content');?>
        </div>
        
        <div class="chapter-full black-font" id="chapter4">
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
            <a href="#"id="chp4" class="open-chapter chapter-button">CLOSE CHAPTER</a>
        </div>
    </div>
</div>
 </div>
  <div class="chapter chapter5 beginners" >
 <div class="row-1100">
    <div class="chapter-content">
     <div class="scroll-div-capter"></div>
        <?php the_field('chapter_5_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_5_visible_content');?>
        </div>
        <div class="chapter-full " id="chapter5">
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
            <a href="#" id="chp5" class="open-chapter chapter-button">CLOSE CHAPTER</a>
        </div>
        
    </div>
</div>
 </div>
  <div class="chapter chapter6 beginners">
 <div class="row-1100">
    <div class="chapter-content">
     <div class="scroll-div-capter"></div>
        <?php the_field('chapter_6_title');?>
        <div class="video-chapter">
            <?php the_field('chapter_6_visible_content');?>
        </div>
        <div class="chapter-full"  id="chapter6">
            <?php the_field('chapter_6_read_more_content');?>
            <div class="google-bot white-color-bot black-font">
                <?php The_field('chapter_6_read_more_bottom');?>
            </div>
        </div>
        <div class="read-more-chapter">
            <a href="#" id="chp6" class="open-chapter chapter-button">CLOSE CHAPTER</a>
        </div>
    </div>
</div>
 </div>
  <div class="chapter chapter7 beginners">
 <div class="row-1100">
    <div class="chapter-content">
     <div class="scroll-div-capter"></div>
        <div class="left content-area black-font">
            <?php the_field('chapter_7_title');?>
            <?php the_field('chapter_7_visible_content');?>
        </div>
        <div class="right image">
            <img class="cp1-icon" src="https://www.linkio.com/wp-content/uploads/2018/07/chptitle.png">
        </div>
        <div class="chapter-full"  id="chapter7">
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
            <a href="#" id="chp7" class="open-chapter chapter-button">CLOSE CHAPTER</a>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
( function( $ ) {
	$( document ).ready( function() {
       $('.read-more-chapter').on('click',function(e){
    	    var $currentClick = $(this).find('a.chapter-button');
    	    e.preventDefault();
    	    if($currentClick.html()=='CLOSE CHAPTER') {
                $currentClick.html('EXPAND CHAPTER');
                $(this).parent().find('.chapter-full').css('height','0px');
    	        $('html, body').animate({
                    scrollTop:  $(this).parent().find('.scroll-div-capter').offset().top
                 }, 1000)
                
    	    } else {
    	        $(this).parent().find('.chapter-full').css('height','auto');
    	        $(this).parent().find('.chapter-full').slideDown("slow");
    	        $currentClick.html('CLOSE CHAPTER');
    	    }
      });
    } );
} )( jQuery );
</script>
<div class="disqus-comment-sec">
<div class="row-1100">
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
<script>

$('#_form_26_submit').click(function()    {	
          var check = true;
          var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/igm;
          if ($('#email').val() == '') {
            check = false;
            alert('Enter your email information');
            $('#email').focus();
            current_input_select = '#email';
            return false;
          } else if (!emailRegex.test($('#email').val())) {
              check = false;
              alert('Email field is not valid');
              $('#email').focus();
              current_input_select = '#email';
              return false;
          }
            else{
            //   window.location = 'https://www.linkio.com/wp-content/uploads/2018/07/SEO-Tutorial-for-Beginners-Linkio.pdf';
               window.open('https://www.linkio.com/wp-content/uploads/2018/07/SEO-Tutorial-for-Beginners-Linkio.pdf', '_blank');
            }
});
 
 
 
	 

</script>





<?php get_footer(); ?>


