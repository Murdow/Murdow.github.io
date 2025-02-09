$(document).ready(function() { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   });

    var isActive = false;
    $("#mobileMenuIcon").click(function(){
    		if(!isActive) {
    			$("#mobileMenu").animate({"width":'100%', "left":'0%'},350);
    			isActive = true;
    		}
    		else {
    			$("#mobileMenu").animate({"width":'184px', "left":'-184px'},350);
    			isActive = false;
    		}
    });
    if($(document).width() <= 990)
    	$("#homeHeader #logo").attr("src","images/logo.png");
});