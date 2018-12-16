<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lightbody-ventures
 */

get_header();
?>

		<main id="main" class="site-main">

			<div class="wrapper">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lightbody-ventures' ); ?></h1>
					<a class="button" href="<?php echo get_site_url(); ?>">Back Home</a>
				</header><!-- .page-header -->
			</section><!-- .error-404 -->

			</div>
		</main><!-- #main -->


<?php
get_footer();
