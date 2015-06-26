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
		speed: 2000,               
		delay: 7000,              
		complete: function() {},  
		keys: true,               
		dots: true,               
		fluid: false              
	});

	App.slider = slider.data('unslider');

	/////////////////////////////////////////////////////////////////// Slider de Professores

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

	/////////////////////////////////////////////////////////////////// Mostrar e esconder informações dos professores

	$("div.fotos li.foto").	click(function(){

		var id = $(this).data('professor');

		// Aumentar a div de info dos professores

		$(".dados-professor").animate(
		{
			height : '200px',
			width : '100%'
		},
		200, function(){

			// Ocultar todas as bios

			$("div.dados-professor .professor").css({opacity : '0'});
			$("div.dados-professor .professor").css({display : 'none'});

			// Mostrar apenas a bio selecionada
			
			$('div.dados-professor .professor.' + id).css({ display : 'block' });
			$('div.dados-professor .professor.' + id).css({ opacity : '1' });

		});

	});

});

