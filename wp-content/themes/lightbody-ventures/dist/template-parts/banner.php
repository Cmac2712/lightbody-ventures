<div class="hero">
	<div class="wrapper wrapper--hero">
		<h1 class="hero__title"><?php the_field('banner_title'); ?></h1>
		<p class="hero__desc"><?php the_field('banner_description'); ?></p>
	</div>


<ul id="logos" class="owl-carousel owl-theme logos-carousel">
<?php if( have_rows('carousel_images') ): ?>

	<?php while( have_rows('carousel_images') ): the_row(); ?>

	<?php $image = get_sub_field('image'); ?>

	<li style="background-image: url(<?php echo $image['url']; ?>);"></li>

	<?php endwhile; ?>

<?php endif; ?>
</ul>
			
</div>
