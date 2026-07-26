<?php
/**
 * Hero section: exterior photo, price, address, CTA.
 */
?>
<section class="hero">

	<?php
	echo wp_get_attachment_image(
		16,
		'full',
		false,
		array(
			'class'         => 'hero__image',
			'fetchpriority' => 'high',
		)
	);
	?>

	<div class="hero__overlay">
		<p class="hero__price">$385,000</p>
		<p class="hero__address">214 Maple Grove Lane, Springfield</p>
		<a href="#contact" class="hero__cta">Schedule a viewing</a>
	</div>

</section>