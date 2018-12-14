<?php get_template_part('template-parts/banner'); ?>

<?php
$args = array(
	'post_type' => 'page', 
	'meta_key' => '_wp_page_template', 
	'meta_value' => 'disney-kitchen-product.php' 
);

$query = new WP_Query( $args ); ?>

<section class="disney-products">
<div class="wrapper">
	<h1 class="products__title"><?php echo get_field('products_title'); ?></h1>

	<ul class="products">
<?php if ( $query->have_posts() ) : ?>
<?php     while ( $query->have_posts() ) : ?>
<?php        $query->the_post(); ?>
		<li class="products__product">
			<a href="<?php echo get_the_permalink(); ?>">
				<div class="product__image">
					<img src="<?php echo get_field('product_thumbnail')['url']; ?>" alt="">
				</div>
				<h2 class="product__title"><?php echo get_field('product_name'); ?></h2>
				<span class="product__weight"><?php echo get_field('product_weight'); ?></span>
			</a>
		</li>
<?php 	endwhile; ?>
<?php endif; ?>

	</ul>
</div>
</section>

