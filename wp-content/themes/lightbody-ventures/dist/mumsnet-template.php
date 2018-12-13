<?php

/* Template Name: Mumsnet Template */

$_SERVER['body_class'] = 'disney';

?>

<?php  get_header(); ?>


<?php get_template_part('template-parts/banner'); ?>

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<section class="mumsnet">
					<div class="wrapper">
						<div class="mumsnet__logo">
							<img src="<?php echo get_field('mumsnet_logo')['url']; ?>" alt="">
						</div>

						<h1 class="mumsnet__title"><?php echo get_field('mumsnet_title'); ?></h1>
						<p class="mumsnet__description"><?php echo get_field('mumsnet_description'); ?></p>
					</div>
				</section>

		<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

<?php get_footer();
