<?php
/**
 * Image gallery / carousel section: 6-8 property photos.
 */

$gallery_ids = array( 16, 19, 18, 20, 14, 13, 15, 17 );
?>
<section class="gallery">

	<div class="gallery__main">
		<?php
		echo wp_get_attachment_image(
			$gallery_ids[0],
			'large',
			false,
			array( 'class' => 'gallery__main-image' )
		);
		?>

		<div class="gallery__nav">
			<button class="gallery__arrow gallery__arrow--prev" aria-label="Previous photo">&#8249;</button>
			<button class="gallery__arrow gallery__arrow--next" aria-label="Next photo">&#8250;</button>
		</div>
	</div>

	<div class="gallery__thumbs">
		<?php foreach ( $gallery_ids as $index => $attachment_id ) : ?>
			<button
				class="gallery__thumb<?php echo 0 === $index ? ' gallery__thumb--active' : ''; ?>"
				data-index="<?php echo esc_attr( $index ); ?>"
			>
				<?php
				echo wp_get_attachment_image(
					$attachment_id,
					'thumbnail',
					false,
					array( 'class' => 'gallery__thumb-image' )
				);
				?>
			</button>
		<?php endforeach; ?>
	</div>

</section>