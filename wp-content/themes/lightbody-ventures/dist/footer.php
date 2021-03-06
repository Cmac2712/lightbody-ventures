<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lightbody-ventures
 */

?>

	</div><!-- #panel -->

<?php display_custom_footer(); ?>

<?php wp_footer(); ?>

<script>

(function($) {

	function onSelectChange (ev, ui) {
		var el = ui.item.element[0].click();
	}

	if ($('select').length) {
		$('select').selectmenu();
	}

	// We need to register a 'Click' event on the native enquiry dropdown to allow the wpcf7 conditional fields to work properly.
	if ($('[name=enquiry]').length) {
		$('[name=enquiry]').on("selectmenuchange", onSelectChange);
	}

	if ( $('#logos').length ) {

		var logoCarousel = $('#logos');
		var owlOptions = {
			margin: 50,
			dots: true, 
			loop:true, 
			responsive:{
				0:{
					items:1
				},
				600:{
					nav: false, 
					dots: false, 
					items:4
				},
				1000:{
					items:4, 
					nav: false, 
					dots: false 
				}
			}
		}

		logoCarousel.owlCarousel(owlOptions)

		$('.carousel-nav__left').on('click', function(e) {
			e.preventDefault();
			$('#logos').trigger('prev.owl.carousel');
		});

		$('.carousel-nav__right').on('click', function(e) {
			e.preventDefault();
			$('#logos').trigger('next.owl.carousel');
		});
	}

	// Scroll to next section
	if ($('.scroll-down').length) {
		$('.scroll-down').on('click', function(e) {
			e.preventDefault();
			var target = $(this).parent().next().offset().top;
			console.log(target);

			$('html, body').animate({
				scrollTop: target 
			}, 1000);
		});
	}

	if ( $('.accordion__link').length ) {
		 $('.accordion__link').on('click', function() {
				$(this).toggleClass('active');
		 });
	}

	/* if ( $('.product__description').length ) { */
	/* 	var height = $('.product__image').height(); */

	/* 	$('.product__description').height( height ); */
	/* } */	

})(jQuery);


conditionizr.add('safari', function () {
  return /constructor/i.test(window.HTMLElement);
});

conditionizr.add('ios', /iP(ad|hone|od)/i.test(navigator.userAgent));

conditionizr.add('ie11', /(?:\sTrident\/7\.0;.*\srv:11\.0)/i.test(navigator.userAgent));

conditionizr.add('chrome', /google/i.test(navigator.vendor));

conditionizr.config({
	tests: {
		'chrome': ['class'], 
		'ios': ['class'], 
		'ie11': ['class']
	}
});

</script>

</body>
</html>
