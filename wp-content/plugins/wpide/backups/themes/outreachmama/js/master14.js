

$(document).ready(function () {
		$(".about-sec .container .about-box:nth-child(3n+2)").addClass("box-right");
			$(".about-sec .container .about-box:nth-child(3n+1)").addClass("box-01");
			$(".about-sec .container .about-box:nth-child(3n+2)").addClass("box-02");
			$(".about-sec .container .about-box:nth-child(3n+3)").addClass("box-03");
			$(".section03 .ind-box:nth-child(3n+1)").addClass("margin-l0");
			$("#jsjobs_registration_form fieldset p:nth-child(3)").addClass("half-field");
			$("#jsjobs_registration_form fieldset p:nth-child(4)").addClass("half-field , margin-l-10");
			$("#jsjobs_registration_form fieldset p:nth-child(5)").addClass("half-field");
			$("#jsjobs_registration_form fieldset p:nth-child(6)").addClass("half-field , margin-l-10");
			
			$("#jsjobs_registration_form fieldset p:nth-child(7)").addClass("display-none");
    			
       $('.more-btn1').on('click',function(e){
    	    var $currentClick = $(this).find('a.readmore');
    	    e.preventDefault();
    	    if($currentClick.html()=='Close') {
    	        $(this).parent().find('.main-con').css('height','115px');
    	        $currentClick.html('Read More');
    	        $(this).parent().find('a.readmore').removeClass('readmore-close');
    	    } else {
    	        $(this).parent().find('.main-con').css('height','auto');
    	        $currentClick.html('Close');  
    	        $(this).parent().find('a.readmore').addClass('readmore-close');
    	    }
      });
      
      
      
/*
* Basic Count Up from Date and Time
* Author: @mrwigster / trulycode.com
*/
window.onload=function() {
  // Month,Day,Year,Hour,Minute,Second
  upTime('feb,2,2018,00:00:00'); // ****** Change this line!
}
function upTime(countTo) {
  now = new Date();
  countTo = new Date(countTo);
  difference = (now-countTo);

  days=Math.floor(difference/(60*60*1000*24)*1);
  hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);
  mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
  secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);

  document.getElementById('days').firstChild.nodeValue = days;
  document.getElementById('hours').firstChild.nodeValue = hours;
  document.getElementById('minutes').firstChild.nodeValue = mins;
  document.getElementById('seconds').firstChild.nodeValue = secs;

  clearTimeout(upTime.to);
  upTime.to=setTimeout(function(){ upTime(countTo); },1000);
}      
      
      
      
      
      
      
       
})
    
        
      

     