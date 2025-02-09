$(".curso header").click(function(){
	if($(this).hasClass("activeCourse")) 
		$(this).removeClass("activeCourse");
	else $(this).addClass("activeCourse");
	$(this).siblings().slideToggle("fast");
});