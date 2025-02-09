var main = function() {	
	//Carrossel
	var right_index = 5;	
	var left_index = 1;	
	$('#right_arrow').click(function(){				
		$('#carrossel_img_0' + right_index).css('left', '-317px');
		$('.carrossel_imgs').animate({left: '+=317px'}, 500);
		$('#selected_img0' + right_index).css('left', '-215px');
		$('.selected').animate({left: '+=317px'}, 500);		
		left_index = right_index;		
		right_index--;
		if(right_index == 0) {
			right_index = 5;
		}
	});		
	$('#left_arrow').click(function(){					
		$('#carrossel_img_0' + left_index).css('left', '1585px');
		$('.carrossel_imgs').animate({left: '-=317px'}, 500);	
		$('#selected_img0' + right_index).css('left', '1360px');		
		$('.selected').animate({left: '-=317px'}, 500);		
		right_index = left_index;
		left_index++;
		if(left_index == 6) {
			left_index = 1;
		}	
	});		
}
//sldier
window.setInterval(function() {	
	$('#slider_image_01').animate({left: '-=1400px'}, 1500);
	$('#slider_image_02').animate({left: '-=1400px'}, 1500);
	$('#slider_image_03').animate({left: '-=1400px'}, 1500);
	reset();	
}, 4000);

function reset() {
	if($('#slider_image_03').css('left') === '0px') {		
		$('#slider_image_01').animate({left: '+=4200px'}, 1500);
		$('#slider_image_02').animate({left: '+=4200px'}, 1500);
		$('#slider_image_03').animate({left: '+=4200px'}, 1500);
	}	
}

$(document).ready(main);

