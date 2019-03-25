<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ae84071b56a439e96aaf1c79c558e02da83c37cc18"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/directory-submission-sites.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/directory-submission-sites_2018-12-10-12.php") )  ) ){
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.guest-list-link-contct').click(function(e){    
           var jobValue = document.getElementsByName('fullname');
           var emailValue = document.getElementsByName('email');
        $('#myModal1').addClass('transistion-modal-in');
        $('#myModal1').removeClass('transistion-modal');
            jobValue.addClass('fullname');
            emailValue.addClass('email');
    });
    });
  $(document).ready(function() {
    $('.close').click(function(e){    
        $('#myModal1').removeClass('transistion-modal-in');
        $('#myModal1').addClass('transistion-modal');
        
    });
   
});
</script>




<script>


// $('.print').hide();


$(function() {
  $(document).scroll(function() {
    var y = $(this).scrollTop();

    if ((y + $(window).height()) > ($(document).height() * 0.9650)) {
     $("#text-2").css("display", "none");
      return;
    }

    if (y > 0) {
             $("#text-2").css("display", "block");
    } else {
             $("#text-2").css("display", "none");
    }
  });
})

$(function() {
  $(document).scroll(function() {
    var y = $(this).scrollTop();

    if ((y + $(window).height()) > ($(document).height() * 0.9650)) {
     $("#text-4").css("display", "none");
      return;
    }

    if (y > 0) {
             $("#text-4").css("display", "block");
    } else {
             $("#text-4").css("display", "none");
    }
  });
})
$(function() {
  $(document).scroll(function() {

    if ($('#text-3').css('position') == 'fixed') {
            $('#text-3').addClass('fixed-sidebar-chap');
    } else {
     $('#text-3').removeClass('fixed-sidebar-chap');       
    }
  });
})
</script>

<style>
 #_form_28_ { font-size:14px; line-height:1.6; font-family:arial, helvetica, sans-serif; margin:0; }
 #_form_28_ * { outline:0; }
 ._form_hide { display:none; visibility:hidden; }
 ._form_show { display:block; visibility:visible; }
 #_form_28_._form-top { top:0; }
 #_form_28_._form-bottom { bottom:0; }
 #_form_28_._form-left { left:0; }
 #_form_28_._form-right { right:0; }
 #_form_28_ input[type="text"],#_form_28_ input[type="date"],#_form_28_ textarea { padding:6px; height:auto; border:#979797 1px solid; border-radius:4px; color:#000 !important; font-size:13px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
 #_form_28_ textarea { resize:none; }
 #_form_28_ ._submit { -webkit-appearance:none; cursor:pointer; font-family:arial, sans-serif; font-size:14px; text-align:center; background:#24415f !important; border:0 !important; color:#fff !important; padding:10px !important; }
 #_form_28_ ._close-icon { cursor:pointer; background-image:url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }
 #_form_28_ ._close-icon:before { position:relative; }
 #_form_28_ ._form-body { margin-bottom:30px; }
 #_form_28_ ._form-image-left { width:150px; float:left; }
 #_form_28_ ._form-content-right { margin-left:164px; }
 #_form_28_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }
 #_form_28_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png'); background-size:130px auto; background-repeat:no-repeat; }
 #_form_28_ ._form-label,#_form_28_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }
 #_form_28_._dark ._form-branding { color:#333; }
 #_form_28_._dark ._form-branding ._logo { background-image:url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png'); }
 #_form_28_ ._form_element { position:relative; margin-bottom:10px; font-size:0; max-width:100%; }
 #_form_28_ ._form_element * { font-size:14px; }
 #_form_28_ ._form_element._clear { clear:both; width:100%; float:none; }
 #_form_28_ ._form_element._clear:after { clear:left; }
 #_form_28_ ._form_element input[type="text"],#_form_28_ ._form_element input[type="date"],#_form_28_ ._form_element select,#_form_28_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
 #_form_28_ ._field-wrapper { position:relative; }
 #_form_28_ ._inline-style { float:left; }
 #_form_28_ ._inline-style input[type="text"] { width:150px; }
 #_form_28_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; }
 #_form_28_ ._form_element img._form-image { max-width:100%; }
 #_form_28_ ._clear-element { clear:left; }
 #_form_28_ ._full_width { width:100%; }
 #_form_28_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }
 #_form_28_ input[type="text"]._has_error,#_form_28_ textarea._has_error { border:#f37c7b 1px solid; }
 #_form_28_ input[type="checkbox"]._has_error { outline:#f37c7b 1px solid; }
 #_form_28_ ._error { display:block; position:absolute; font-size:13px; z-index:10000001; }
 #_form_28_ ._error._above { padding-bottom:4px; bottom:39px; right:0; }
 #_form_28_ ._error._below { padding-top:4px; top:100%; right:0; }
 #_form_28_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #f37c7b; }
 #_form_28_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #f37c7b; }
 #_form_28_ ._error-inner { padding:8px 12px; background-color:#f37c7b; font-size:13px; font-family:arial, sans-serif; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }
 #_form_28_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }
 #_form_28_ ._button-wrapper ._error-inner._form_error { position:static; }
 #_form_28_ ._error-inner._no_arrow { margin-bottom:10px; }
 #_form_28_ ._error-arrow { position:absolute; width:0; height:0; }
 #_form_28_ ._error-html { margin-bottom:10px; }
 .pika-single { z-index:10000001 !important; }
 @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }
 #_form_28_ { margin:0; width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }
 #_form_28_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-size:1em; }
 #_form_28_ ._form-content { margin:0; width:100%; }
 #_form_28_ ._form-inner { display:block; min-width:100%; }
 #_form_28_ ._form-title,#_form_28_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }
 #_form_28_ ._form-title { font-size:1.2em; }
 #_form_28_ ._form_element { margin:0 0 20px; padding:0; width:100%; }
 #_form_28_ ._form-element,#_form_28_ ._inline-style,#_form_28_ input[type="text"],#_form_28_ label,#_form_28_ p,#_form_28_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }
 #_form_28_ ._row._checkbox-radio label { display:inline; }
 #_form_28_ ._row,#_form_28_ p,#_form_28_ label { margin-bottom:0.7em; width:100%; }
 #_form_28_ ._row input[type="checkbox"],#_form_28_ ._row input[type="radio"] { margin:0 !important; vertical-align:middle !important; }
 #_form_28_ ._row input[type="checkbox"] + span label { display:inline; }
 #_form_28_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }
 #_form_28_ ._form-image { max-width:100%; height:auto !important; }
 #_form_28_ input[type="text"] { padding-left:10px; padding-right:10px; font-size:16px; line-height:1.3em; -webkit-appearance:none; }
 #_form_28_ input[type="radio"],#_form_28_ input[type="checkbox"] { display:inline-block; width:1.3em; height:1.3em; font-size:1em; margin:0 0.3em 0 0; vertical-align:baseline; }
 #_form_28_ button[type="submit"] { padding:20px; font-size:1.5em; }
 #_form_28_ ._inline-style { margin:20px 0 0 !important; }
 }
 #_form_28_ { position:relative; text-align:left; margin:25px auto 0; padding:20px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; *zoom:1; background:#fff !important; border:0px solid #b0b0b0 !important; -moz-border-radius:5px !important; -webkit-border-radius:5px !important; border-radius:5px !important; color:#fff !important; }
 #_form_28_ ._form-title { font-size:22px; line-height:22px; font-weight:600; margin-bottom:0; }
 #_form_28_:before,#_form_28_:after { content:" "; display:table; }
 #_form_28_:after { clear:both; }
 #_form_28_._inline-style { width:auto; display:inline-block; }
 #_form_28_._inline-style input[type="text"],#_form_28_._inline-style input[type="date"] { padding:10px 12px; }
 #_form_28_._inline-style button._inline-style { position:relative; top:27px; }
 #_form_28_._inline-style p { margin:0; }
 #_form_28_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }
 #_form_28_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }
 @media all and (min-width:320px) and (max-width:667px) { #_form_28_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
 }

 #_form_28_ ._submit { text-transform:uppercase; font-weight:bold; }
 #_form_28_ input { line-height:30px; }
 #_form_28_ label { font-size:14px; text-transform:uppercase; }
 ._form-thank-you {color: #555;font-family: 'GothamSSm-Light' !important;}
</style>
<style>
/*------------------------------------------------*/
/* Switch SECTION START*/
/*------------------------------------------------*/

._form-label {
    color: #515151;
}
._form_element {
    width: 100% !important;
    padding-left: 0px !important;
    margin-left: 0px !important;
}
._form_element input {
    width: 100% !important;
}
._button-wrapper._inline-style {
    margin-left: 0px !important;
}
._button-wrapper #_form_28_submit {
    padding: 12px 30px !important;
}
._button-wrapper._inline-style {
    margin-left: 0px !important;
    margin-top: 10px !important;
}
#myModal1 .modal-dialog ._error-inner {
    padding: 4px 7px !important;
    background-color: #24415f !important;
    font-size: 10px !important;
}
#myModal1 .modal-dialog ._error._below ._error-arrow {
    border-bottom: 5px solid #24415f !important;
}
/*main-master5367*/


/*main-master5357*/


.page-template-directory-submission-sites form {
    margin-top: 0px;
    padding-top: 0px !important;
}
@media only screen and (max-width: 1200px) {
.guest-list-cat {
    width: 16.5%;
}
.guest-list-da {
    width: 16.5%;
}
.guest-list-ahrefs-traffic {
    width: 16.5%;
}
.guest-list-niche {
    width: 16.5%;
}
.guest-list-dofollow-nofollow {
    width: 16.5%;
}
.favourite-sites-title .guest-list-link-contct {
    width: 16.5%;
}
.g-post-links .listing-sites li .guest-list-link-contct {
    width: 16%;
    margin-left: 4px;
}
.page-template-directory-submission-sites .g-post-links .listing-sites li div {
    font-size: 13px !important;
}

}
@media only screen and (max-width: 979px) {
/*2874*/
.guest-list-cat {
    width: 16.4%;
}
/*2878*/
.favourite-sites-title div {
    font-size: 14px !important;
}
.g-post-links .guest-list-cat {
    font-size: 16px !important;
}
.g-post-links .guest-list-site a {
    font-size: 16px !important;
}
.g-post-links .listing-sites li .guest-list-cat {
    width: 16.4%;
}
.g-post-links .listing-sites li .guest-list-da {
   width: 16.4%;
}
.g-post-links .listing-sites li .guest-list-niche {
   width: 16.4%;
}
.g-post-links .listing-sites li .guest-list-dofollow-nofollow {
    width: 16.4%;
}
}
@media only screen and (max-width: 767px) {
    .page-template-directory-submission-sites .linkio-title-chapter {
    width: 100%;
}
.page-template-directory-submission-sites .g-post-links {
   width: 100%; 
}
/*3822*/
.page-template-directory-submission-sites .section.section6 ul, ol {
    padding: 0 0px !important;
}
/*5109*/
.guest-list-cat {
    width: 16.4%;
    padding-left: 0px !important;
}

.favourite-sites-title {
    padding-bottom: 0px;
}
/*5113*/
.guest-list-site {
    width: 60%;
}
.page-template-directory-submission-sites .modal-dialog {
    width: 90%;
    height: 320px;
    margin-top:15% !important;
}
.page-template-directory-submission-sites .modal-dialog input {
    width: 100% !important;
}
.page-template-directory-submission-sites .modal.fade {
    background-color: rgb(0,0,0,.1);
}
.page-template-directory-submission-sites .modal.fade .modal-content .modal-body ._form-content div {
    margin: 0px 0 0 !important;
}
.page-template-directory-submission-sites .modal.fade .modal-content .modal-body ._form-content {
    position: relative;
    top: -20px;
}
.page-template-directory-submission-sites .section6 ul.listing-sites li {
    padding-left: 0px !important;
}
.page-template-directory-submission-sites .table-sidebar.q2w3-fixed-widget-container #text-4_clone {
    display: none !important;
}
.page-template-directory-submission-sites .table-sidebar.q2w3-fixed-widget-container #text-4.widget {
    position: relative !important;
    height: auto !important;
}
.page-template-directory-submission-sites .table-sidebar.q2w3-fixed-widget-container #text-2.widget {
    display: none !important;
}
.page-template-directory-submission-sites .content-section {
    position: relative;
    z-index: 99;
}
.page-template-directory-submission-sites  .foot-4.footer-box p.terms-con-line {
    bottom: 30px !important;
}
.page-template-directory-submission-sites .profile-section .author-descrip-80 .auhtor-name .readmore-email-sign.readmore-email-sign2 {
    padding: 15px 20px;
    padding-left: 42px;
}
.page-template-directory-submission-sites a.btn-trial {
    height: 40px;
    line-height: 40px;
}
.page-template-directory-submission-sites .alignleft {
    margin-right: 0px;
    margin-left: 0px;
}
/*6139*/
.page-template-directory-submission-sites .section {
    width: 100% !important;
    padding: 0px !important;
    margin-right: 0px !important;
}
.g-post-links .guest-list-cat {
    font-size: 14px !important;
}

}
@media only screen and (max-width: 479px) {
    .guest-list-cat {
    width: 50%;
    font-size: 15px !important;
     font-weight:400 !important;
}
.guest-list-da {
    width: 33%;
    border-right: 1px solid #ddd;
}

.linkio-title-chapter .guest-list-site {
    width: 50% !important;
    line-height: 40px;
}
.linkio-title-chapter .guest-list-cat {
    width: 33% !important;
    line-height: 20px;
    font-weight: 700 !important;
    padding-left: 9px !important;
}
.page-template-directory-submission-sites .section6 ul.listing-sites li {
    margin-left: 0px !important;
}

.listing-sites .guest-list-site a {
    font-size: 14px !important;
}
.guest-list-cat {
    width: 50%;
    font-size: 15px !important;
 
}
.linkio-title-chapter .guest-list-site {
    width: 50% !important;
}

.guest-list-ahrefs-traffic {
    width: 33%;
    line-height: 20px;
    padding-left: 4px;
    padding-right: 4px;
}
.guest-list-niche {
    width: 33%;
    border-top: 1px solid #ddd;
}
.guest-list-dofollow-nofollow {
    width: 33%;
    border-top: 1px solid #ddd;
}
.favourite-sites-title .guest-list-link-contct {
    width: 33%;
    border-top: 1px solid #ddd;
}
.listing-sites .guest-list-cat {
    width: 33% !important;
    border-left: 1px solid #ddd;
    padding-left: 9px !important;
}
.g-post-links .listing-sites li .guest-list-da {
    width: 33%;
}
.g-post-links .listing-sites li .guest-list-ahrefs-traffic {
    width: 33%;
	border-left: 0px;
}
.g-post-links .listing-sites li .guest-list-niche {
    width: 33%;
	text-align: left;
    padding-left: 9px;

}
.g-post-links .listing-sites li .guest-list-dofollow-nofollow {
    width: 33%;
}
.g-post-links .listing-sites li .guest-list-link-contct {
    width: 33%;
    margin-left: 0px;
    border-top: 1px solid #ddd;
    padding: 0px;
    margin: 0px;
    line-height: 30px !important;
}
.g-post-links .guest-list-cat {
    font-size: 13px !important;
}
}


</style>
<div id="primary" class="content-area common-inner">

<div class="modal fade transistion-modal" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p> <?php /*echo do_shortcode('[activecampaign form=28]'); */?></p>
      <div style="text-align: center;">
  <form method="POST" action="https://outreachmama.activehosted.com/proc.php" id="_form_28_" class="_form _form_28 _inline-form _inline-style _dark" novalidate>
    <input type="hidden" name="u" value="28" />
    <input type="hidden" name="f" value="28" />
    <input type="hidden" name="s" />
    <input type="hidden" name="c" value="0" />
    <input type="hidden" name="m" value="0" />
    <input type="hidden" name="act" value="sub" />
    <input type="hidden" name="v" value="2" />
    <div class="_form-content">
      <div class="_form_element _x24939338 _inline-style _clear" >
        <div class="_form-title">
          Enter Your Email to Access the Full Google Doc
        </div>
      </div>
      <div class="_form_element _x75201540 _inline-style " >
        <label class="_form-label">
          Name*
        </label>
        <div class="_field-wrapper">
          <input type="text" name="fullname" id="fullname" placeholder="Type your Name" required/>
        </div>
      </div>
      <div class="_form_element _x98034577 _inline-style " >
        <label class="_form-label">
          Email*
        </label>
        <div class="_field-wrapper">
          <input type="text" name="email" id="email" placeholder="Type your Email" required/>
        </div>
      </div>
      <div class="_button-wrapper _inline-style">
        <button id="_form_28_submit" class="_submit" type="submit">
          Submit
        </button>
      </div>
      <div class="_clear-element">
      </div>
    </div>
    <div class="_form-thank-you" style="display:none;">
    </div>
  </form>
</div><script type="text/javascript">
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
  var form_to_submit = document.getElementById('_form_28_');
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
          } else if (input.type == 'textarea'){
            addEvent(input, 'input', function() {
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
      document.querySelector('#_form_28_submit').disabled = true;
            var serialized = _form_serialize(document.getElementById('_form_28_'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://outreachmama.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();
</script>
<script>
$('#_form_28_submit').click(function()    {	
          var check = true;
          var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/igm;
          if ($('#fullname').val() == '') {
            check = false;    
            $('#fullname').focus();
            current_input_select = '#fullname';
          
          }
         else  if ($('#email').val() == '') {
            check = false;
            $('#email').focus();
            current_input_select = '#email';
          
          } else if (!emailRegex.test($('#email').val())) {
              check = false;
            
              $('#email').focus();
              current_input_select = '#email';
          
          }
            else{
            //   window.location = 'https://www.linkio.com/wp-content/uploads/2018/07/SEO-Tutorial-for-Beginners-Linkio.pdf';
               window.open('https://docs.google.com/spreadsheets/d/1bfAKO5RnmDdS2mioFTE4cma1lkGIagY4nkHBWz08Ak0/edit#gid=0', '_blank');
            }
});
 
 
 
	 

</script>


        </div>
        
      </div>
      
    </div>
  </div>
 <main id="main" class="site-main" role="main">

    <div  class="header-section">
        <div class="row-1055">
            <div class="profile-section">
            <?php the_field('header_title');?>
            </div>
          <!--  <img src="https://www.linkio.com/wp-content/uploads/2018/10/linkio-novo.jpg" /> -->
            </div>    
        </div>  
        <div class="content-section">
            <div class="row-1055">
                <div class="container-nav-practice-mobile table-cont-resp container-nav-practice-mobile table-cont-resp q2w3-fixed-widget-container">
                <li id="text-3_clone" class="widget widget_text q2w3-widget-clone-directory-table-of-content-mobile-responsive"></li>
                    <li id="text-3" class="widget widget_text " style="display: block;">
        <button onclick="myFunction()"><span class="fa fa-bars"> </span>Table of Contents</button>

        <nav id="nav-practice-mobile" class="nav-practice-mobile" role="navigation" style="display:none;">
                
                <div class="table-of-content table-of-content-resp">

                    <ol>
                        <li class="one"><a class="ps2id __mPS2id _mPS2id-h" href="#content-sectionblue">Then and Now</a></li>
                        <li class="two"><a class="ps2id __mPS2id _mPS2id-h" href="#section3">Before We Begin: A Brief Caveat</a></li>
                        <li class="three"><a class="ps2id __mPS2id _mPS2id-h" href="#section-lightblue">4 Dead Simple Ways to Find Hidden Directory Links and Create Explosive SEO</a></li>
                        <li class="four"><a class="ps2id __mPS2id _mPS2id-h" href="#content-sectiondarkblue">The No Nonsense Way to Determine the Quality of a Potential Link</a></li>
                        <li class="five"><a class="ps2id __mPS2id _mPS2id-h" href="#section6"># Epic Directory Sites to Get You Started</a></li>
                        <li class="six"><a class="ps2id __mPS2id _mPS2id-h" href="#content-sectiongrey">How to Effectively Execute a Directory Link Building Campaign</a></li>
                        <li class="seven"><a class="ps2id __mPS2id _mPS2id-h" href="#section8">Over to You</a></li>
                    </ol>
                </div>
        </nav>
        </li>
                

<script>
function myFunction() {
    var x = document.getElementById("nav-practice-mobile");
    if (x.style.display === "none") {
        x.style.display = "block";
        
    } else {
        x.style.display = "none";
    }
}

$(function() {
  $(document).scroll(function() {
    var button_my_button = "#nav-practice-mobile li a";
    $(button_my_button).click(function(){
    var x = document.getElementById("nav-practice-mobile");
            x.style.display = "none";
    });
  });
})
</script>
   
            
    </div>
                <div class="table-sidebar">
                    <?php dynamic_sidebar( 'directory-table-of-content' ); ?>
                    <?php dynamic_sidebar( 'fixed-banner' );?>
                    
                </div>
                <div class="section section1">
                    <?php the_field('section_1');?>
                </div>
            </div>
            <div id="content-sectionblue" class="content-sectionblue ps2id">
                <div class="row-1055">
                    <div class="section section2 section-blue">
                        <?php the_field('section_2');?>
                    </div>  
                </div>
            </div>
            <div class="content-flt-left">
            <div class="row-1055">
                <div id="section3" class="section section3 ps2id">
                    <?php the_field('section_3');?>
                </div>  
            </div>
            </div>
            <div id="section-lightblue" class="section-lightblue ps2id">
                <div class="row-1055">
                    <div class="section section4">
                        <?php the_field('section_4');?>
                    </div>
                </div>
            </div>
                <div id="content-sectiondarkblue" class="content-sectiondarkblue ps2id">
                    <div class="row-1055">
                        <div class="section section5 section-blue">
                            <?php the_field('section_5');?>
                        </div>  
                    </div>
                </div>
                <div class="content-section6">
                <div class="row-1055">
                    <div id="section6" class="section section6 ps2id">
                        <?php the_field('section_6');?>
                        
                        <?php echo do_shortcode( '[guest-posting-site-list]');?> 
                        
                    </div>  
                </div>
                </div>
                <div id="content-sectiongrey" class="content-sectiongrey ps2id">
                    <div class="row-1055">
                        <div class="section section7 section-blue">
                            <?php the_field('section_7');?>
                        </div>  
                    </div>
                </div>
                <div class="greybg-section">
                <div class="row-1055">
                    <div id="section8" class="section section8 ps2id">
                        <?php the_field('section_8');?>
                       
                     
                    </div>
                    <div class="sec8-img">
                    <img src="<?php the_field('section_8_image');?>" />
                    </div>
                </div>
                </div>
    </div>
<div class="disqus-comment-sec">
<div class="row-1055">
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


</div><!-- .content-area -->

<?php get_footer(); ?>