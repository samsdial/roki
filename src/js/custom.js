var $ = jQuery;
$(document).ready(function () {
    $('.js-slider-parner').slick({
    	dots: false,
		arrows: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: true,
		variableWidth: true,
		autoplay: true,
  		autoplaySpeed: 2000,
		responsive: [{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				dots: true,
				arrows: false,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,

			}
		}
		]
	});

	$('.js-prod-slider').slick({
    	infinite: true,
    	slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				dots: true,
				arrows: false,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,

			}
		}
		]
	});
	//result
	$('.box-result-slider').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});
	//js-slider
	$('.js-hotels-slider').slick({
		infinite: true,
		vertical: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});
	$('.js-slider-gallery').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		centerPadding: '40px'
	});
	$('.js-benefist-min-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		centerPadding: '40px'
	});
	$('.js-slider').slick();
	$('.js-home-slider').slick({
		dots: true,
		arrows: false,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 20000,
		infinite: true,
	});
	//js-slider-offer
	$('.js-slider-offer').slick({
		dots: false,
		arrows: true,
		fade: true,
		cssEase: 'linear'
	});
	$('.js-slider-').slick({
		dots: false,
		arrows: false,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 20000,
		infinite: true,
	});
	$('#js-modal-mensaje').click(function() {
		$('#js-mesaje').removeClass('d-none');
	})
});
