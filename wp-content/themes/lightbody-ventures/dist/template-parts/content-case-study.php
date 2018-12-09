<?php get_template_part('template-parts/banner'); ?>

<?php if( have_rows('case_study_item') ): ?>

	<?php while( have_rows('case_study_item') ): the_row(); 

		$image = get_sub_field('image');

		?>

			<div class="case-study-image">
				<div class="wrapper wrapper--case-study-image">
					<img src="<?php echo $image; ?>" alt="<?php echo 'alt'; ?>" />
				</div>
			</div>


			<?php if( get_sub_field('title') || get_sub_field('description') ): ?>
			<section class="case-study-section">
				<div class="wrapper">
						<article class="case-study-section__article">
							<h3><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('description'); ?></p>
						</article>
				</div>
			</section>
			<?php endif; ?>



	<?php endwhile; ?>


<?php endif; ?>

<?php get_template_part('template-parts/outro'); ?>
