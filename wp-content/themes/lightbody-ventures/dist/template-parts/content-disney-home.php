<?php get_template_part('template-parts/banner'); ?>

<?php
	$args = array(
		'post_type' => 'page', 
		'meta_key' => '_wp_page_template', 
		'meta_value' => 'disney-homepage-template.php'
	);

	$query = new WP_Query( $args );

	if ( have_rows('disney_kitchen_pages') ) : ?> 


	<section class="work">
	<div class="wrapper">
		<div class="work__container">

	<?php while ( have_rows('disney_kitchen_pages') ): the_row(); ?>	

			<a class="work-item hover-expand" href="<?php echo get_sub_field('disney_kitchen_page_link'); ?>" style="background-image: url(<?php echo get_sub_field('disney_kitchen_page_link_image')['url']; ?>);">
				<div class="work-item__container hover-expand__container">
				<h3 class="work-item__title hover-expand__title"><?php echo get_sub_field('page_link_title'); ?></h3>
					<p class="work-item__desc">Item Description</p>
					<span class="find-out-more">Find Out More &rarr;</span>
				</div>
			</a>

	<?php endwhile; ?>

		</div>
	</div>
	</section>


<?php endif; ?>

