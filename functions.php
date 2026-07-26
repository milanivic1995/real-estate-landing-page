<?php
/**
 * Theme functions and definitions.
 * Enqueue setup for the property listing landing page.
 */

/**
 * Enqueue styles and scripts for the property listing template only.
 */
function astra_child_property_listing_assets() {

	if ( ! is_page_template( 'page-templates/template-property-listing.php' ) ) {
		return;
	}

	$css_dir = get_stylesheet_directory() . '/assets/css/';
	$css_uri = get_stylesheet_directory_uri() . '/assets/css/';

	wp_enqueue_style(
		'property-variables',
		$css_uri . 'variables.css',
		array(),
		filemtime( $css_dir . 'variables.css' ),
		'all'
	);

	wp_enqueue_style(
		'property-base',
		$css_uri . 'base.css',
		array( 'property-variables' ),
		filemtime( $css_dir . 'base.css' ),
		'all'
	);

	wp_enqueue_style(
		'property-hero',
		$css_uri . 'hero.css',
		array( 'property-base' ),
		filemtime( $css_dir . 'hero.css' ),
		'all'
	);

	wp_enqueue_style(
		'property-gallery',
		$css_uri . 'gallery.css',
		array( 'property-base' ),
		filemtime( $css_dir . 'gallery.css' ),
		'all'
	);

	wp_enqueue_style(
		'property-calculator',
		$css_uri . 'calculator.css',
		array( 'property-base' ),
		filemtime( $css_dir . 'calculator.css' ),
		'all'
	);

	wp_enqueue_style(
		'property-map',
		$css_uri . 'map.css',
		array( 'property-base' ),
		filemtime( $css_dir . 'map.css' ),
		'all'
	);

	wp_enqueue_style(
		'property-contact-form',
		$css_uri . 'contact-form.css',
		array( 'property-base', 'contact-form-7' ),
		filemtime( $css_dir . 'contact-form.css' ),
		'all'
	);

	wp_enqueue_style(
		'property-responsive',
		$css_uri . 'responsive.css',
		array( 'property-base' ),
		filemtime( $css_dir . 'responsive.css' ),
		'all'
	);

	// JS enqueue calls will go here (Step 3).

}
add_action( 'wp_enqueue_scripts', 'astra_child_property_listing_assets' );