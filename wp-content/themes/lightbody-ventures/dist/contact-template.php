<?php

/* Template Name: Contact Us Template */

?>

<?php  get_header(); ?>

<div class="contact">
	<div class="wrapper">

	<div class="contact-intro">
		<h1 class="contact__title"><?php echo get_the_title(); ?></h1>
		<p class="contact__description"><?php echo get_field('intro'); ?></p>
	</div>

	<!-- Visible when the contact form is submmitted -->
	<div id="contact-success" class="contact-success">
		<div class="wrapper">
			<h1 class="contact__title"><?php echo get_field('success_title'); ?></h1>
			<p class="contact__description"><?php echo get_field('success_message'); ?></p>
			<a class="button button--light" href="/">Back To Home</a>
		</div>
	</div>
			

		<div class="contact-form">
			<div class="wrapper">
			<?php

			if ( have_posts() ) :


				/* Start the Loop */
				while ( have_posts() ) : the_post();

					$content = get_field('shortcode');
					$content = apply_filters( 'the_content', $content );
					$content = strip_tags($content, '<input><span><label><option><form><textarea><select><div>');

					echo $content;


				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>
		</div>
	</div>
</div>

<script>
document.addEventListener('wpcf7mailsent', function( e ) {
	document.querySelector('body').classList.add('wpcf7mailsent');
}, false);
</script>

<?php get_footer();
