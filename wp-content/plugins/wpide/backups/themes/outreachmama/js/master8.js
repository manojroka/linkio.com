

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
    	        $('a.readmore').addClass('redtext');
    	    } else {
    	        $(this).parent().find('.main-con').css('height','auto');
    	        $currentClick.html('Close');  
    	         $('a.readmore').removeClass('redtext');
    	    }
      });
      
      
      
       
})
    
        
      

     