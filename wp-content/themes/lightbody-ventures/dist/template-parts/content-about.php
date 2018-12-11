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

<?php $i = 0; ?>
<?php if( have_rows('partner_images') ): ?>
<div class="wrapper">
	<ul class="partner-images">

		<?php while( have_rows('partner_images') ): the_row(); ?>

		<?php $image = get_sub_field('image'); ?>	

		<li style="background-image: url(<?php echo $image['url']; ?>);"></li>

		<?php if($i===7): ?>

			</ul>
				<hr>
			<ul class="partner-images">

		<?php endif; ?>	


		<?php $i++; ?>

		<?php endwhile; ?>

	</ul>
</div>
<?php endif; ?>

</section>

<?php echo display_team_members(); ?>

<?php get_template_part('template-parts/outro'); ?>
