App = {};

$(function() {

	/////////////////////////////////////////////////////////////////// Scrolls do Menu Principal

	$(".menu a").click(function(event) {

		event.preventDefault();

		var section = $(this).data('section');

		console.log(section);

		if(section != "")
		{
			$('html, body').animate({
		        scrollTop: $("."+section).offset().top - 100
		    }, 500);
		}
	});

	/////////////////////////////////////////////////////////////////// Slider de Depoimentos

    var slider = $('.slider').unslider({
		speed: 2000,               //  The speed to animate each slide (in milliseconds)
		delay: 7000,              //  The delay between slide animations (in milliseconds)
		complete: function() {},  //  A function that gets called after every slide animation
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true,               //  Display dot navigation
		fluid: false              //  Support responsive design. May break non-responsive designs
	});

	App.slider = slider.data('unslider');

	$("#lista1").als({
		visible_items: 4,
		scrolling_items: 2,
		orientation: "horizontal",
		circular: "yes",
		autoscroll: "no",
		interval: 5000,
		speed: 500,
		easing: "linear",
		direction: "right",
		start_from: 0
	});

});

