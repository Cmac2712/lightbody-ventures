<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lightbody-ventures
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<?php get_template_part('./inc/mobile', 'nav'); ?>

	<div id="panel">

			<header class="main-header">
				<div class="wrapper">
					<div class="main-header__container">
						<a href="<?php echo get_site_url(); ?>" class="logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="Lightbody Ventures">
						</a>
						<?php lightbody_ventures_custom_menu('desktop-nav', 'main-nav main-nav--desktop'); ?>
					</div>
				</div>
			</header>

	<div id="content" class="site-content">
