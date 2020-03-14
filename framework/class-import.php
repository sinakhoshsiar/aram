<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Initial OneClick import for this theme
 */
if ( ! class_exists( 'Businext_Import' ) ) {
	class Businext_Import {

		public function __construct() {
			add_filter( 'insight_core_import_demos', array( $this, 'import_demos' ) );
			add_filter( 'insight_core_import_generate_thumb', array( $this, 'import_generate_thumb' ) );
		}

		public function import_demos() {
			return array(
				'01' => array(
					'screenshot' => BUSINEXT_THEME_URI . '/screenshot.jpg',
					'name'       => BUSINEXT_THEME_NAME,
					'url'        => 'https://drive.google.com/a/insightstud.io/uc?authuser=2&id=1-ctjmhHKVa_5w60-Iyc-JEB7ilsLjOMG&export=download',
				),
			);
		}

		/**
		 * Generate thumbnail while importing
		 */
		function import_generate_thumb() {
			return false;
		}
	}

	new Businext_Import();
}
