<?php
$post_options = unserialize( get_post_meta( get_the_ID(), 'insight_post_options', true ) );
if ( $post_options !== false && isset( $post_options['post_gallery'] ) ) {
	$gallery = $post_options['post_gallery'];

	$businext_thumbnail_w = 1170;
	$businext_thumbnail_h = 684;
	?>
	<div class="post-feature post-gallery tm-swiper" data-pagination="1" data-loop="1">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach ( $gallery as $image ) { ?>
					<div class="swiper-slide">
						<?php
						$full_image_size = wp_get_attachment_url( $image['id'] );
						Businext_Helper::get_lazy_load_image( array(
							'url'    => $full_image_size,
							'width'  => $businext_thumbnail_w,
							'height' => $businext_thumbnail_h,
							'crop'   => true,
							'echo'   => true,
							'alt'    => get_the_title(),
						) );
						?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>