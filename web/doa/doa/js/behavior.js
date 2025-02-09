$(document).ready(function($) { 
    var headerHeight = 100;
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top - headerHeight}, 800);
   });    
});