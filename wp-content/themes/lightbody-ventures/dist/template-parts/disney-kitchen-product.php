<?php get_template_part('template-parts/banner'); ?>

	<section class="product product--disney">
	
	<div class="wrapper wrapper--product">

	<h2 class="product__title"><?php echo get_field('product_name'); ?></h2>
	<span class="product__weight"><?php echo get_field('product_weight'); ?></span>

	<div class="product__main">
		<div class="product__column column-first">
			<div class="product__usps">
				<img src="<?php echo get_field('product_usps')['url']; ?>" alt="">
			</div>
		</div>
		<div class="product__column column-second">
			<div class="product__image">
				<img src="<?php echo get_field('product_image')['url']; ?>" alt="">
			</div>
		</div>
		<div class="product__column column-third">
			<div class="product__description">
				<p>
					<?php echo get_field('product_description'); ?>
				</p>
			</div>
		</div>
	</div>

	<div class="product__main product-main--second">
		<div class="product-main column-first">
			<div class="product__details">
				<div class="accordion nutritional">
					<div class="accordion__link">
					</div>
					<div class="accordion__content">
						<?php echo get_field('nutritional_information'); ?>
					</div>
				</div>
				<div class="accordion ingredients">
					<div class="accordion__link">
					</div>
					<div class="accordion__content">
						<?php echo get_field('ingredients'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="product-main column-second">
			<div class="product__advice">
				<img src="<?php echo get_field('product_advice')['url']; ?>" alt="">
			</div>
		</div>
	</div>

	</div>

	</section>


<?php get_template_part('template-parts/outro'); ?>
