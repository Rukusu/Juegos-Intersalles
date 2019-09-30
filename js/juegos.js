$(document).ready(function(){
	if($('.flexslider').length > 0){
		$('.flexslider.banner').flexslider({
			animation: "fade",
			controlNav: false,
			slideshowSpeed: 5000
		});
		$('.flexslider.news').flexslider({
			animation: "slide"
		});
	}
	if($('.fancybox').length > 0){
		$(".fancybox").fancybox({
			width : '100%'
		});
	}
	width = $(window).width();
	$(window).resize(function(){
		width = $(window).width();
	});
	$('.item').hover(
		function(){
			$('.item').css('background-image','none');
			$(this).children().css('background-color','rgba(255,255,255,.5)');
			$(this).children().css('color','#001863');
			$('#items').css('background-image','url(images/'+$(this).attr('data-bg')+'.jpg)')
		},
		function(){
			$(this).children().css('background-color','rgba(23,48,106,.8)');
			$(this).children().css('color','#fff');
			$('.item').each(function(){
				$(this).css('background-image','url(images/'+$(this).attr('data-bg')+'.jpg)');
			});
			$('#items').css('background-image','none')
		}
	);
	$('.torneo').click(function(){
		$('.torneo').removeClass('selected');
		$(this).addClass('selected');
		if(width >= 960){
			detalle = $(this).children('label').attr('for');
			height = parseInt($('#'+detalle+' + .torneoDetalle').height());
			height += 100;
			$('section').css('min-height',height+'px');
		}
	});
});