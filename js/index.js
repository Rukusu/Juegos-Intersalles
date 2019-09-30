$(document).ready(function(){
	/*var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();
	$(window).scroll(function(event){
		didScroll = true;
	});
	setInterval(function(){
		if (didScroll){
			hasScrolled();
			didScroll = false;
		}
	}, 250);
	function hasScrolled(){
		var st = $(this).scrollTop();
		// Make sure they scroll more than delta
		if(Math.abs(lastScrollTop - st) <= delta)
			return;
		// If they scrolled down and are past the navbar, add class .nav-up.
		// This is necessary so you never see what is "behind" the navbar.
		if (st > lastScrollTop && st > navbarHeight){
			$('header').css('height','0px');
		}else{
			if(st + $(window).height() < $(document).height()){
				$('header').css('height','90px');
			}
		}
		
		lastScrollTop = st;
	}*/
	$('body').on('mousemove', function (event){
		if(width >= 960){
			$('#chkMenu').prop('checked',false);
			if(event.clientY < 90){
				$('header').css('min-height','90px');
			}else{
				$('header').css('min-height','0px');
			}
		}else if(width >= 768){
			$('#chkMenu').prop('checked',false);
			if(event.clientY < 70){
				$('header').css('min-height','70px');
			}else{
				$('header').css('min-height','0px');
			}
		}else{
			$('header').css('min-height','0px');
		}
	});
});