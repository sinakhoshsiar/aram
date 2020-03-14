<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$style = $el_class = $image = $text = $button = $animation = '';

$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
$css_id = uniqid( 'tm-book-' );
$this->get_inline_css( '#' . $css_id, $atts );
Businext_VC::get_shortcode_custom_css( "#$css_id", $atts );
extract( $atts );

$items = (array) vc_param_group_parse_atts( $items );

if ( count( $items ) <= 0 ) {
	return;
}

$el_class  = $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'tm-book ' . $el_class, $this->settings['base'], $atts );
$css_class .= " style-$style";

$css_class .= Businext_Helper::get_animation_classes( $animation );
?>
<div class="<?php echo esc_attr( trim( $css_class ) ); ?>" id="<?php echo esc_attr( $css_id ); ?>">

	<div class="book-list">
		<?php foreach ( $items as $item ) { ?>

			<div class="book-item">
				<div class="content-wrap">

					<?php if ( isset( $item['background_image'] ) ) : ?>
						<?php
						$bg_image_url = Businext_Helper::get_attachment_url_by_id( $item['background_image'], '480x590' );
						?>
						<div class="bg-image" style="background-image: url( <?php echo $bg_image_url; ?> );"></div>
					<?php endif; ?>

					<div class="content">
						<?php if ( isset( $item['image'] ) ) : ?>
							<div class="image">
								<?php
								$full_image_size = wp_get_attachment_url( $item['image'] );
								Businext_Helper::get_lazy_load_image( array(
									'url'       => $full_image_size,
									'full_size' => true,
									'echo'      => true,
								) );
								?>
							</div>
						<?php endif; ?>

						<?php if ( $item['heading'] ) : ?>
							<h4 class="heading">
								<?php echo esc_html( $item['heading'] ); ?>
							</h4>
						<?php endif; ?>

						<?php if ( $item['text'] ) : ?>
							<?php echo '<div class="text">' . $item['text'] . '</div>'; ?>
						<?php endif; ?>

						<?php
						// Button.
						if ( $item['button'] && $item['button'] !== '' ) {
							$button = vc_build_link( $item['button'] );
							if ( $button['url'] !== '' ) {
								$button_classes = 'tm-button style-text';
								?>
								<a class="<?php echo esc_attr( $button_classes ); ?>"
								   href="<?php echo esc_url( $button['url'] ) ?>"
									<?php if ( $button['target'] !== '' ) { ?>
										target="<?php echo esc_attr( $button['target'] ); ?>"
									<?php } ?>
								>
									<span class="button-text"><?php echo esc_html( $button['title'] ); ?></span>
									<span class="button-icon ion-arrow-right-c"></span>
								</a>
							<?php }
						} ?>
					</div>
				</div>
			</div>

		<?php } ?>
	</div>

</div>
