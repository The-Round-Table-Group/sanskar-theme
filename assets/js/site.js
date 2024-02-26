(function($) {
    $(document).ready(function() {

        /**
         * Countdown timer for launch date
        */
        const launchCountdown = new countdown({
            target: '.countdown',
            dayWord: ' DAYS',
            hourWord: ' HOURS',
            minWord: ' MINUTES',
            secWord: ' SECONDS'
        });

        setTimeout( function() {
            $('.overflow').removeClass('overflow');
        }, 700);

        /**
         * Set active menu item based on URL path
        */

        // var path = location.pathname.split('/'); // url path array
        // var url = window.location.pathname; // full url
        // if (path[1] !== '') {
        //     $('.nav-menu--link[href^="/' + path[1] + '"]').addClass('active');
        // } else {
        //     $('.home').addClass('active');
        // }

        /**
         * Smooth scroll to anchor links
        */
        // $('a[href*="#"]')
		// .not('[href="#"]')
		// .not('[href="#0"]')
        // .not('[href^="#tab"]')
		// .click(function(event) {
		// 	if (
		// 		location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
		// 		&&
		// 		location.hostname == this.hostname
		// 	) {
		// 		var target = $(this.hash);
		// 		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

		// 		if (target.length) {
		// 			event.preventDefault();

		// 			$('html, body').animate({
		// 				scrollTop: target.offset().top
		// 			}, 1000, function() {

		// 				var $target = $(target);
		// 				$target.focus();

		// 				if ($target.is(":focus")) { // Checking if the target was focused
		// 					return false;
		// 				} else {
		// 					$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		// 					$target.focus(); // Set focus again
		// 				}
		// 			});
		// 		}
		// 	}
		// });
        /** End Smooth Scroll **/

    });
})(jQuery);
