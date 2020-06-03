(function ($, root, undefined) {

	$(function () {

		'use strict';

		// handle nav button
		var $hamburger = $(".hamburger");
		var $navigation = $("nav");
		$hamburger.on("click", function (e) {
			$hamburger.toggleClass("is-active");
			$navigation.toggleClass('is-active');
		});

		// handle nav class
		var header = $(".header");
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 10) {
				header.addClass("scroll");
			} else {
				header.removeClass("scroll");
			}
		});

		// add testimonials to the post if post height is more than 400px
		var postWrapper = $('.post__right');

		if (postWrapper.height() > 500) {
			console.log('more than 500');
		}

		$('a[href*="#"]')
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.click(function (event) {
				// On-page links
				if (location.hostname == this.hostname) {
					// Figure out element to scroll to
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

					// Does a scroll target exist?
					if (target.length) {
						// Only prevent default if animation is actually gonna happen
						event.preventDefault();
						$('html, body').animate({
							scrollTop: target.offset().top - 80
						}, 1000, function () {
							// Callback after animation
							// Must change focus!
							var $target = $(target);
						});
					}
				}
			});

	});

})(jQuery, this);
