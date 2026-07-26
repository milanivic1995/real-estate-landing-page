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

	// CSS and JS enqueue calls will go here (Step 2 and Step 3).

}
add_action( 'wp_enqueue_scripts', 'astra_child_property_listing_assets' );