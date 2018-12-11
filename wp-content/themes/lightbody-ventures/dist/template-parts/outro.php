<?php wp_reset_postdata(); ?>

<?php if ( get_field('title') || get_field('description') || get_field('button_text') ): ?>
<section class="crosslink">
	<div class="wrapper">

	<?php if ( get_field('title') ): ?>
		<h3 class="crosslink__title"><?php the_field('title'); ?></h3>
	<?php endif; ?>

	<?php if ( get_field('description') ): ?>
		<p class="crosslink__text"><?php the_field('description'); ?></p>
	<?php endif; ?>

	<?php if ( get_field('button_link') || get_field('button_text') ): ?>
		<a class="button button--large" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
	<?php endif; ?>

	</div>
</section>
<?php endif; ?>
