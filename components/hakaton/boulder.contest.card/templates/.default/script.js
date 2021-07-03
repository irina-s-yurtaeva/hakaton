jQuery( document ).ready(function( $ ) {

	$('.slick').slick({
		dots: false,
		arrows: true,
		autoplay: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		cssEase: 'linear',
		speed: 400,
		infinite: true,
		prevArrow:'<div class="container"><div class="arrow prev"></div></div>',
		nextArrow:'<div class="container"><div class="arrow next"></div></div>'
	});

});