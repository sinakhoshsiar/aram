<?php

class WPBakeryShortCode_TM_Pricing extends WPBakeryShortCode {

	public function get_inline_css( $selector = '', $atts ) {
		Businext_VC::get_vc_spacing_css( $selector, $atts );
	}
}

vc_map( array(
	'name'                      => esc_html__( 'Pricing Table', 'businext' ),
	'base'                      => 'tm_pricing',
	'category'                  => BUSINEXT_VC_SHORTCODE_CATEGORY,
	'icon'                      => 'insight-i insight-i-pricing',
	'allowed_container_element' => 'vc_row',
	'params'                    => array_merge( array(
		array(
			'heading'     => esc_html__( 'Style', 'businext' ),
			'type'        => 'dropdown',
			'param_name'  => 'style',
			'admin_label' => true,
			'value'       => array(
				esc_html__( '01', 'businext' ) => '1',
				esc_html__( '02', 'businext' ) => '2',
				esc_html__( '03', 'businext' ) => '3',
				esc_html__( '04', 'businext' ) => '4',
			),
			'std'         => '1',
		),
		array(
			'heading'     => esc_html__( 'Featured', 'businext' ),
			'description' => esc_html__( 'Checked the box if you want make this item featured', 'businext' ),
			'type'        => 'checkbox',
			'param_name'  => 'featured',
			'value'       => array( esc_html__( 'Yes', 'businext' ) => '1' ),
		),
		array(
			'heading'    => esc_html__( 'Image', 'businext' ),
			'type'       => 'attach_image',
			'param_name' => 'image',
		),
		array(
			'heading'     => esc_html__( 'Title', 'businext' ),
			'type'        => 'textfield',
			'admin_label' => true,
			'param_name'  => 'title',
		),
		array(
			'heading'     => esc_html__( 'Description', 'businext' ),
			'description' => esc_html__( 'Controls the text that display under price', 'businext' ),
			'type'        => 'textarea',
			'param_name'  => 'desc',
		),
		array(
			'heading'          => esc_html__( 'Currency', 'businext' ),
			'type'             => 'textfield',
			'param_name'       => 'currency',
			'value'            => '$',
			'edit_field_class' => 'vc_col-sm-4',
		),
		array(
			'heading'          => esc_html__( 'Price', 'businext' ),
			'type'             => 'textfield',
			'param_name'       => 'price',
			'edit_field_class' => 'vc_col-sm-4',
		),
		array(
			'heading'          => esc_html__( 'Period', 'businext' ),
			'type'             => 'textfield',
			'param_name'       => 'period',
			'value'            => 'per monthly',
			'edit_field_class' => 'vc_col-sm-4',
		),
		array(
			'type'       => 'vc_link',
			'heading'    => esc_html__( 'Button', 'businext' ),
			'param_name' => 'button',
		),
		Businext_VC::get_animation_field(),
		Businext_VC::extra_class_field(),
		array(
			'group'      => esc_html__( 'Items', 'businext' ),
			'heading'    => esc_html__( 'Items', 'businext' ),
			'type'       => 'param_group',
			'param_name' => 'items',
			'params'     => array(
				array(
					'heading'    => esc_html__( 'Icon', 'businext' ),
					'type'       => 'iconpicker',
					'param_name' => 'icon',
					'settings'   => array(
						'emptyIcon'    => true,
						'type'         => 'ion',
						'iconsPerPage' => 400,
					),
					'value'      => '',
				),
				array(
					'heading'     => esc_html__( 'Text', 'businext' ),
					'type'        => 'textfield',
					'param_name'  => 'text',
					'admin_label' => true,
				),
			),
		),
	), Businext_VC::icon_libraries( array(
		'allow_none' => true,
	) ), Businext_VC::get_vc_spacing_tab() ),
) );
