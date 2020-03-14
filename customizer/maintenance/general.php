<?php
$section  = 'general';
$priority = 1;
$prefix   = 'general_';

$pages = array();

if ( is_customize_preview() ) {
	$pages = Businext_Maintenance::get_maintenance_pages();
}

Businext_Kirki::add_field( 'theme', array(
	'type'     => 'select',
	'settings' => 'maintenance_page',
	'label'    => esc_html__( 'Page', 'businext' ),
	'section'  => $section,
	'priority' => $priority++,
	'default'  => '',
	'choices'  => $pages,
) );
