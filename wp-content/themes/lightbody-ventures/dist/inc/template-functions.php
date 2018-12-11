<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package lightbody-ventures
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lightbody_ventures_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'lightbody_ventures_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function lightbody_ventures_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'lightbody_ventures_pingback_header' );

/**
 * Create some custom post types
 */

function footer_post () {
	register_post_type( 'main_footer', 
		array(
			'labels' => array(
				'name' => __('Footer'), 
				'singular_name' => __('Product')
			), 
			'public' => true, 
			'has_archive' => true, 
		)
   	);
}

add_action( 'init', 'footer_post' );

function display_custom_footer () {

$args = array(
	'post_type'=> 'main_footer',
	'order'    => 'ASC', 
	'posts_per_page' => 1
    );              

$string = "";

$the_query = new WP_Query( $args );


if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

$link = get_field('footer_link');

$string .= '<footer class="main-footer">';
$string .= '	<div class="wrapper">';
$string .= '		<div class="main-footer__container">';
$string .= '			<div class="contact-cta">';
$string .= '				<div class="contact-cta__text">';
$string .= 					'<p>' . get_field('footer_info') . '</p>';
$string .= '				</div>';
$string .= '				<a href="'. $link . '" class="button button--light button--large contact-cta__button">' . trim( get_field('footer_link_text') ) . '</a>';
$string .= '			</div>';
$string .= '			<address class="address company-address">';
$string .= 				get_field('address');
$string .= '			</address>';
$string .= '			<div class="logo logo--footer">';
$string .= '			<img src="' . get_field('footer_logo')['url'] . '" alt="Lightbody Ventures">';
$string .= '			</div>';
$string .= '		</div>';
$string .= '	</div>';
$string .= '</footer>';

endwhile;
endif;

echo $string;

}

function display_button ($atts, $content)
{
	$a = shortcode_atts( array(
		'class' => 'default', 
		'text' => 'Click'
	), $atts );

	return '<button class="button ' . $a['class'] . '">' . $a['text'] . '</button>';
}

add_shortcode('button', 'display_button');

function display_service_items()
{
	$args = array(
		'post_type' => 'page', 
		'meta_key' => '_wp_page_template', 
		'meta_value' => 'services-template.php'
	);

	$string = '';
	$i = 0;

	$query = new WP_Query( $args );

	 if( have_rows('service_item') ):

		$string .= '<div class="services">';
		$string .= '    <div class="wrapper">';

		while( have_rows('service_item') ): the_row(); 

			$image = get_sub_field('image');


			if ($i % 2 === 0): 	
			
			$string .= '<section class="service-item service-item--left">';
			$string .= '    <div class="service-item__block">';
			$string .= '        <div class="service-item__description">' . get_sub_field('description') . '</div>';
			$string .= '    </div>';
			$string .= '    <div class="service-item__block" style="background-image: url( ' . $image['url'] . ')"></div>';
			$string .= '</section>';

			else: 

			$string .= '<section class="service-item service-item--right">';
			$string .= '    <div class="service-item__block" style="background-image: url( ' . $image['url'] . ')"></div>';
			$string .= '    <div class="service-item__block">';
			$string .= '        <div class="service-item__description">' . get_sub_field('description') . '</div>';
			$string .= '    </div>';
			$string .= '</section>';

			endif;
			
			
			$i++;
		endwhile;

		$string .= '    </div>';
		$string .= '</div>';

	 endif;

	wp_reset_postdata();

	return $string;

}

function display_work_posts ($title = '')
{

	$args = array(
		'post_type' => 'page', 
		'meta_key' => '_wp_page_template', 
		'meta_value' => 'case-study-template.php'
	);

	$string = '';
	$title = isset($title) ? $title : '';

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {

		$string .= '<section class="work">';
		$string .= '	<div class="wrapper">';
		$string .= '		<h2 class="work__title">'. $title .'</h2>';
		$string .= '		<div class="work__container">';

		while ( $query->have_posts() ) {
			$query->the_post();

			$string .= '			<a href="' . get_the_permalink() . '" class="work-item hover-expand" style="background-image: url(' . get_the_post_thumbnail_url() . ')";>';
			$string .= '				<div class="work-item__container hover-expand__container">';
			$string .= '					<h3 class="work-item__title hover-expand__title">' . get_the_title() . '</h3>';
			$string .= '				    <p class="work-item__desc">' . get_field('short_text') . '</p>';
			$string .= '					<span class="find-out-more">Find Out More &rarr;</span> ';
			$string .= '				</div>';
			$string .= '			</a>';

		}

		$string .= '		</div>';
		$string .= '	</div>';
		$string .= '</section>';
	
	}

	wp_reset_postdata();

	return $string;
}

function display_team_members()
{

$args = array(
	'post_type' => 'page', 
	'meta_key' => '_wp_page_template', 
	'meta_value' => 'team-template.php'
);

$string = '';
	
$query = new WP_Query( $args );

if ( $query->have_posts() ) :


$string .= '<section id="team" class="team">';
$string .= '<div class="wrapper">';
$string .= '	<h3 class="team-title">' . get_field("team_title") . '</h3>';
$string .= '	<ul class="team-images">';

	while ( $query->have_posts() ) :
		$query->the_post();
		$image = get_field("image");

		$string .= '		<li class="team-member">';
		$string .= '			<a href="' . get_the_permalink() . '" >';
		$string .= '			    <div class="member__image" style="background-image: url(' . $image['url'] . '"></div>';
		$string .= '			    <div class="member__title">';
		$string .=				    get_field("name") . ',<br/>' . get_field("job_title");
		$string .= '			    </div>';
		$string .= '			</a>';
		$string .= '		</li>';
	endwhile;

$string .= '	</ul>';
$string .= '</div>';

endif;

$string .= '</section>';

return $string; 

}
