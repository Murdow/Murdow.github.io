$(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
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
        
        //Altera a cor da seção ativa no menu
        if(scrollPosition < 1700) {
            $(".scroll").removeClass("activeLink");
            $("#topScreenMenu ul li:nth-child(1) a").addClass("activeLink");
        }
        else {
            if(scrollPosition >= 1700 && scrollPosition < 3000) {
                $(".scroll").removeClass("activeLink");
                $("#topScreenMenu ul li:nth-child(2) a").addClass("activeLink");
            }
            else {
                $(".scroll").removeClass("activeLink");
                $("#topScreenMenu ul li:nth-child(3) a").addClass("activeLink");
            }
        }
    });	

    //Alterna o icone do menu mobile(aberto/fechado)
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