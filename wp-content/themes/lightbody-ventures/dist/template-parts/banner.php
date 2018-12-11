<?php $background_image = get_field('background_image'); ?>

<div class="hero"
<?php if( get_field('background_image') ): ?> style="background-image: url(<?php echo $background_image['url']; ?>);" <?php endif;?> >
	<div class="wrapper wrapper--hero">
		<h1 class="hero__title"><?php the_field('banner_title'); ?></h1>
		<p class="hero__desc"><?php the_field('banner_description'); ?></p>
	</div>


	<?php if( have_rows('carousel_images') ): ?>
	<ul id="logos" class="owl-carousel owl-theme logos-carousel">

		<?php while( have_rows('carousel_images') ): the_row(); ?>

		<?php $image = get_sub_field('image'); ?>

		<li style="background-image: url(<?php echo $image['url']; ?>);"></li>

		<?php endwhile; ?>

	</ul>
	<?php endif; ?>

	<a href="#" class="scroll-down"></a>
			
</div>
