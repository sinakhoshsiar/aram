<?php
$section  = 'footer';
$priority = 1;
$prefix   = 'footer_';

$footers             = array();
$footer_with_default = array();

if ( is_customize_preview() ) {
	$footers = Businext_Footer::get_list_footers();

	$footer_with_default = Businext_Footer::add_default_option_to_list( $footers );
}

Businext_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => $prefix . 'page',
	'label'       => esc_html__( 'Footer', 'businext' ),
	'description' => esc_html__( 'Select a default footer for all pages.', 'businext' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'footer-01',
	'choices'     => $footers,
) );

Businext_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'single_service_footer_page',
	'label'       => esc_html__( 'Single Service', 'businext' ),
	'description' => esc_html__( 'Select default footer that displays on all single service pages.', 'businext' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'footer-03',
	'choices'     => $footer_with_default,
) );

Businext_Kirki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'single_case_study_footer_page',
	'label'       => esc_html__( 'Single Case Study', 'businext' ),
	'description' => esc_html__( 'Select default footer that displays on all single case study pages.', 'businext' ),
	'section'     => $section,
	'priority'    => $priority++,
	'default'     => 'footer-04',
	'choices'     => $footer_with_default,
) );
