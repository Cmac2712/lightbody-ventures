<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lightbody-ventures
 */

?>

<?php get_template_part('template-parts/banner'); ?>

<section class="partner">
<div class="partner__intro">
	<div class="wrapper">
		<h3 class="partner__title"><?php echo get_field('partner_title'); ?></h3>
		<p class="partner__description"><?php echo get_field('partner_description'); ?></p>
	</div>
</div>

<?php if( have_rows('brand_partner_images') ): ?>
<div class="wrapper">
	<ul class="partner-images">

		<?php while( have_rows('brand_partner_images') ): the_row(); ?>

		<?php $image = get_sub_field('image'); ?>	

		<li style="background-image: url(<?php echo $image['url']; ?>);"></li>

		<?php endwhile; ?>

	</ul>
</div>
<?php endif; ?>

<div class="wrapper">
	<hr>
</div>

<?php if( have_rows('retail_partner_images') ): ?>
<div class="wrapper">
	<ul class="partner-images">

		<?php while( have_rows('retail_partner_images') ): the_row(); ?>

		<?php $image = get_sub_field('image'); ?>	

		<li style="background-image: url(<?php echo $image['url']; ?>);"></li>

		<?php endwhile; ?>

	</ul>
</div>
<?php endif; ?>

</section>

<?php echo display_team_members(); ?>

<?php get_template_part('template-parts/outro'); ?>
