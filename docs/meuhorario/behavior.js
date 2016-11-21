$(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
        $(".scroll").removeClass("activeLink");
        $(this).addClass("activeLink");
   });


    $(window).scroll(function() {
    	var scrollPosition = $(window).scrollTop();
    	if($(window).width() > 960) {			   		
	   		if(scrollPosition > 150) {
	    		$('#topScreenMenu').slideDown();
	   		}
	   		else {
	   			$('#topScreenMenu').slideUp();
	   		}
   		}
   		if(scrollPosition > 120) {
				$("#topScreenMenuLogo").removeClass("hidden");
			}
			else {
				$("#topScreenMenuLogo").addClass("hidden");
			}
	});	

	var isVisible = false;
	$("#mobileMenuIcon").click(function(){
		if(!isVisible) {
			$("#topScreenMenu ul").slideDown();
			$("#mobileMenuIcon").attr("src","imagens/icones/menu-close-icon.png");
			isVisible = true;
		}
		else {
			$("#topScreenMenu ul").slideUp();
			$("#mobileMenuIcon").attr("src","imagens/icones/menu-icon.png");
			isVisible = false;
		}
		
	});	    
});