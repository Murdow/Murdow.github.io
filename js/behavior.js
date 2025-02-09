$(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   });

    var r = 91,
        g = 200,
        b = 221,
        orange = false,
        oldPos,
        btnFrontEndOpen = false,
        btnGamesOpen = false,
        r1 = 10;
        g1 = 10,
        b1 = 10;

    $(window).scroll(function() {
        did_scroll = true;
    });	

    var did_scroll = false
    setInterval(function () {
        if (did_scroll)
        {
            did_scroll = false;
            var target = $('.sectionBlock');
            var scrollPosition = $(window).scrollTop();

            target.each(function(){
                var itemTop = $(this).offset().top;
                if(scrollPosition >= itemTop) {
                    $(".menuDot").removeClass("activeLink");
                    $("#mainMenu ul li:nth-child(" + ($('.sectionBlock').index($(this).closest('.sectionBlock')) + 1) + ") a div").addClass("activeLink");
                }
            });

            if(scrollPosition > oldPos) {   
                r -= r1;           
                g -= g1;                
                b -= b1;
           }
           else { 
                if(r < 91)
                    r += r1; 
                if(g < 200)                       
                    g += g1;
                if(b < 221)                
                    b += b1;
            }       
            
            $("body").css("background", "rgb(" + r + "," + g + "," + b + ")");
            oldPos = scrollPosition;
        }
    }, 200);

    //Alterna o icone do menu mobile(aberto/fechado)
	var isVisible = false;
	$("#mobileMenuIcon").click(function(){
		if(!isVisible) {
			$("#mainMenu ul").slideDown();
			$("#mobileMenuIcon").attr("src","imagens/icones/menu-close-icon.png");
			isVisible = true;
		}
		else {
			$("#mainMenu ul").slideUp();
			$("#mobileMenuIcon").attr("src","imagens/icones/menu-icon.png");
			isVisible = false;
		}
		
	});	  

    $("#frontEndSeeMoreBtn").click(function(){
        var txt = $("#fontEndHiddenBlock").is(':visible') ? 'Ver Mais!' : 'Ver Menos!';        
        $("#fontEndHiddenBlock").slideToggle("slow");
        $("#frontEndSeeMoreBtn").text(txt);
    });
    $("#gamesSeeMoreBtn").click(function(){
        var txt = $("#gamesHiddenBlock").is(':visible') ? 'Ver Mais!' : 'Ver Menos!';        
        $("#gamesHiddenBlock").slideToggle();
        $("#gamesEndSeeMoreBtn").text(txt);
    });
});