$(document).ready(function () {

	$(".menu-icon").sidr({
        source: ".main-menu",
        displace: false,
    });

    $('body').click(function () {
        $.sidr('close', 'sidr');
    });

	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,

		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			960: {
				items: 3
			}


		}

	})

	$('.play').on('click', function () {
		owl.trigger('play.owl.autoplay', [1000])
	});
	$('.stop').on('click', function () {
		owl.trigger('stop.owl.autoplay')
	});


});