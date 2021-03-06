<?php $banner_background = get_field('banner_background'); ?>
<?php $background_image_mobile = get_field('background_image_mobile'); ?>
<?php $background_image_lap = get_field('background_image_lap'); ?>
<?php $background_image = get_field('background_image'); ?>

<?php if ( get_field('background_image') ): ?>
<style>
	
	<?php if ( get_field('background_image_mobile') ): ?>
		.hero:after { background-image: url(<?php echo $background_image_mobile['url']; ?>); }
	<?php else: ?>
		.hero:after { background-image: url(<?php echo $background_image['url']; ?>); }
	<?php endif; ?>

@media screen and (min-width: 768px) {

	<?php if ( get_field('background_image_lap') ): ?>
		.hero:after { background-image: url(<?php echo $background_image_lap['url']; ?>); }
	<?php else: ?>
		.hero:after { background-image: url(<?php echo $background_image['url']; ?>); }
	<?php endif; ?>

}

@media screen and (min-width: 1024px) {
	.hero:after { background-image: url(<?php echo $background_image['url']; ?>); }
}

	<?php if ( get_field('banner_background') ): ?>
		.hero {
			background-image: url(<?php echo $banner_background['url']; ?>);
		}
	<?php endif; ?>
	
</style>
<?php endif; ?>

<div class="hero">

	<div class="wrapper wrapper--hero">

		<?php if ( get_field('banner_page_title') ): ?>	
		<h1 class="hero__title--page"><?php the_field('banner_page_title'); ?></h1>
		<?php endif; ?>	
		<h1 class="hero__title"><?php the_field('banner_title'); ?></h1>
		<p class="hero__desc"><?php the_field('banner_description'); ?></p>
	</div>

	<!-- BUTTONS -->
	<?php if( have_rows('banner_buttons') ): ?>

		<div class="hero-home__ctas">

		<?php while( have_rows('banner_buttons') ): the_row(); ?>

			<a class="button button--large button--light" href="<?php echo get_sub_field('button_link'); ?>">
				<?php echo get_sub_field('button_title'); ?>
			</a>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>

	<!-- LOGOS CAROUSEL -->
	<?php if( have_rows('carousel_images') ): ?>
	<div class="wrapper wrapper--hero">
	<ul id="logos" class="owl-carousel owl-theme logos-carousel">

		<?php while( have_rows('carousel_images') ): the_row(); ?>

		<?php $image = get_sub_field('image'); ?>

		<li style="background-image: url(<?php echo $image['url']; ?>);"></li>

		<?php endwhile; ?>

	</ul>

		<div class="carousel-nav">
			<a class="carousel-nav__left" href="">left</a>
			<a class="carousel-nav__right" href="">right</a>
		</div>
	</div>
	<?php endif; ?>


	<a href="#" class="scroll-down"></a>
			
</div>
