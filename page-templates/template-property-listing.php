<?php
/**
 * Template Name: Property Listing
 * Single property real estate landing page.
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/section-hero' ); ?>

		<?php get_template_part( 'template-parts/section-gallery' ); ?>

        <?php get_template_part( 'template-parts/section-description' ); ?>

        <?php get_template_part( 'template-parts/section-calculator' ); ?>

        <?php get_template_part( 'template-parts/section-map' ); ?>

        <?php get_template_part( 'template-parts/section-contact' ); ?>

        <?php get_template_part( 'template-parts/section-footer' ); ?>

	</main>
</div>

<?php get_footer(); ?>