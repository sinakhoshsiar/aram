<?php

class WPBakeryShortCode_TM_Book extends WPBakeryShortCode {

	public function get_inline_css( $selector = '', $atts ) {
		Businext_VC::get_vc_spacing_css( $selector, $atts );
	}
}

$content_tab = esc_html__( 'Content', 'businext' );

vc_map( array(
	'name'                      => esc_html__( 'Book', 'businext' ),
	'base'                      => 'tm_book',
	'category'                  => BUSINEXT_VC_SHORTCODE_CATEGORY,
	'icon'                      => 'insight-i insight-i-icons',
	'allowed_container_element' => 'vc_row',
	'params'                    => array_merge( array(
		array(
			'heading'     => esc_html__( 'Style', 'businext' ),
			'type'        => 'dropdown',
			'param_name'  => 'style',
			'value'       => array(
				esc_html__( 'Style 01', 'businext' ) => '01',
			),
			'admin_label' => true,
			'std'         => '01',
		),
		array(
			'group'      => esc_html__( 'Items', 'businext' ),
			'heading'    => esc_html__( 'Items', 'businext' ),
			'type'       => 'param_group',
			'param_name' => 'items',
			'params'     => array(
				array(
					'heading'    => esc_html__( 'Background Image', 'businext' ),
					'type'       => 'attach_image',
					'param_name' => 'background_image',
				),
				array(
					'heading'    => esc_html__( 'Image', 'businext' ),
					'type'       => 'attach_image',
					'param_name' => 'image',
				),
				array(
					'heading'     => esc_html__( 'Heading', 'businext' ),
					'type'        => 'textfield',
					'param_name'  => 'heading',
					'admin_label' => true,
				),
				array(
					'heading'    => esc_html__( 'Text', 'businext' ),
					'type'       => 'textarea',
					'param_name' => 'text',
				),
				array(
					'heading'    => esc_html__( 'Button', 'businext' ),
					'type'       => 'vc_link',
					'param_name' => 'button',
				),
			),
		),
		Businext_VC::get_animation_field(),
		Businext_VC::extra_class_field(),
	), Businext_VC::get_vc_spacing_tab(), Businext_VC::get_custom_style_tab() ),

) );
