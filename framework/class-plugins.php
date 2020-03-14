<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin installation and activation for WordPress themes
 */
if ( ! class_exists( 'Businext_Register_Plugins' ) ) {
	class Businext_Register_Plugins {

		public function __construct() {
			add_filter( 'insight_core_tgm_plugins', array( $this, 'register_required_plugins' ) );
		}

		public function register_required_plugins() {
			/*
			 * Array of plugin arrays. Required keys are name and slug.
			 * If the source is NOT from the .org repo, then source is also required.
			 */
			$plugins = array(
				array(
					'name'     => esc_html__( 'Insight Core', 'businext' ),
					'slug'     => 'insight-core',
					'source'   => 'https://www.dropbox.com/s/31ogukeaencjyme/insight-core-1.5.4.8.zip?dl=1',
					'version'  => '1.5.4.8',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'Revolution Slider', 'businext' ),
					'slug'     => 'revslider',
					'source'   => 'https://www.dropbox.com/s/5ouc9nhvrqjtk1k/revslider-5.4.8.3.zip?dl=1',
					'version'  => '5.4.8.3',
					'required' => true,
				),
				array(
					'name'     => esc_html__( 'WPBakery Page Builder', 'businext' ),
					'slug'     => 'js_composer',
					'source'   => 'https://www.dropbox.com/s/der2didmvoohlxj/js_composer-5.7.zip?dl=1',
					'version'  => '5.7',
					'required' => true,
				),
				array(
					'name'    => esc_html__( 'WPBakery Page Builder (Visual Composer) Clipboard', 'businext' ),
					'slug'    => 'vc_clipboard',
					'source'  => 'https://www.dropbox.com/s/9rewm2ftf01kip4/vc_clipboard-4.5.1.zip?dl=1',
					'version' => '4.5.1',
				),
				array(
					'name'    => esc_html__( 'Essential Grid Gallery WordPress Plugin', 'businext' ),
					'slug'    => 'essential-grid',
					'source'  => 'https://www.dropbox.com/s/kkxiqncasof8wey/essential-grid-2.3.2.zip?dl=1',
					'version' => '2.3.2',
				),
				array(
					'name' => esc_html__( 'Contact Form 7', 'businext' ),
					'slug' => 'contact-form-7',
				),
				array(
					'name' => esc_html__( 'MailChimp for WordPress', 'businext' ),
					'slug' => 'mailchimp-for-wp',
				),
				array(
					'name' => esc_html__( 'WP-PostViews', 'businext' ),
					'slug' => 'wp-postviews',
				),
				array(
					'name' => esc_html__( 'WooCommerce', 'businext' ),
					'slug' => 'woocommerce',
				),
				array(
					'name'     => esc_html__( 'WPC Smart Compare for WooCommerce', 'businext' ),
					'slug'     => 'woo-smart-compare',
					'required' => false,
				),
				array(
					'name'     => esc_html__( 'WPC Smart Wishlist for WooCommerce', 'businext' ),
					'slug'     => 'woo-smart-wishlist',
					'required' => false,
				),
			);

			return $plugins;
		}

	}

	new Businext_Register_Plugins();
}
