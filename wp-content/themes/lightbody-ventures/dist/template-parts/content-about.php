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

<?php if( have_rows('partner_images') ): ?>
<div class="wrapper">
	<ul class="partner-images">

		<?php while( have_rows('partner_images') ): the_row(); ?>

		<?php $image = get_sub_field('image'); ?>	

		<li style="background-image: url(<?php echo $image['url']; ?>);"></li>

		<?php endwhile; ?>

	</ul>
</div>
<?php endif; ?>

</section>

<section class="team">
<?php if( have_rows('team_members') ): ?>
<div class="wrapper">

	<h3 class="team-title"><?php echo get_field('team_title'); ?></h3>

	<ul class="team-images">

		<?php while( have_rows('team_members') ): the_row(); ?>

		<?php $image = get_sub_field('image'); ?>	

		<li class="team-member">
			<div class="member__image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
			<div class="member__title">
				<?php echo get_sub_field('title'); ?>
			</div>
		</li>

		<?php endwhile; ?>

	</ul>
</div>
<?php endif; ?>

</section>

<?php get_template_part('template-parts/outro'); ?>
