<div class="hero hero--about" style="background-image: url(<?php echo $background_image['url']; ?>);">
	<div class="wrapper wrapper--hero">
		<div class="hero__page-title">Our Team</div>
		<h1 class="hero__title">
			<?php the_field('name'); ?><br/>
			<?php the_field('job_title'); ?>
		</h1>
	</div>
</div>

	<?php $image = get_field('image'); ?>

		<section class="team-member-profile">
			<div class="wrapper">
				<div class="team-member__image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
				<div class="team-member__description">
					<?php the_field('description'); ?>
				</div>
			</div>
			<a class="button" href="<?php echo get_site_url() . '/about-us#team'; ?>">Back to Team</a>
		</section>

<?php ## get_template_part('template-parts/outro'); ?>
