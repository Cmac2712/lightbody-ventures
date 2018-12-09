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

<footer class="main-footer">
	<div class="wrapper">
		<div class="main-footer__container">
			<div class="contact-cta">
				<div class="contact-cta__text">
					<p>Interested in working with us?</p>
					<p>Or have a query regarding one of our products?</p>
				</div>
				<button class="button button--light button--large contact-cta__button">Contact Us</button>
			</div>
			<address class="address company-address">
				<p class="address__line address__name">Lightbody Ventures</p>
				<p class="address__line address__street">154 West George St.</p>
				<p class="address__line address__city">Glasgow</p>
				<p class="address__line address__postcode">G2 2HG</p>
				<a href="#" class="address__line address__phone">0141 331 5280</a>
				<a href="mailto:contactus@lbvuk.com">contactus@lbvuk.com</a>
			</address>
			<div class="logo logo--footer">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="Lightbody Ventures">
			</div>
		</div>
	</div>
</footer>

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
			nav: true, 
			dots: true, 
			responsive:{
				0:{
					items:3
				},
				600:{
					nav: false, 
					dots: false, 
					items:3
				},
				1000:{
					items:4, 
					nav: false, 
					dots: false 
				}
			}
		}

		logoCarousel.owlCarousel(owlOptions)
	}

})(jQuery);


</script>

</body>
</html>
