<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Businext_VC_Icon_Pe_Stroke_7' ) ) {
	class Businext_VC_Icon_Pe_Stroke_7 {

		public function __construct() {
			/*
			 * Add styles & script file only on add new or edit post type.
			 */
			add_action( 'load-post.php', array( $this, 'enqueue_scripts' ) );
			add_action( 'load-post-new.php', array( $this, 'enqueue_scripts' ) );

			add_filter( 'vc_iconpicker-type-pe7stroke', array( $this, 'add_fonts' ) );

			add_action( 'vc_enqueue_font_icon_element', array( $this, 'vc_element_enqueue' ) );

			add_filter( 'businext_vc_icon_libraries', array( $this, 'add_to_libraries' ) );
		}

		public function add_to_libraries( $libraries ) {
			$libraries[ esc_html__( 'Pe Stroke 7', 'businext' ) ] = 'pe7stroke';

			return $libraries;
		}

		public function vc_element_enqueue( $font ) {
			switch ( $font ) {
				case 'pe7stroke':
					wp_enqueue_style( 'font-pe-stroke-7', BUSINEXT_THEME_URI . '/assets/fonts/pe-stroke-7/font-pe-icon-7-stroke.min.css', null, null );
					break;
			}
		}

		public function enqueue_scripts() {
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		}

		function admin_enqueue_scripts() {
			// Same handle name with Insight Core
			wp_enqueue_style( 'pe-icon-7-stroke', BUSINEXT_THEME_URI . '/assets/fonts/pe-stroke-7/font-pe-icon-7-stroke.min.css', null, null );
		}

		public function add_fonts( $icons ) {
			$new_icons = array(
				array( 'pe-7s-album' => 'album' ),
				array( 'pe-7s-arc' => 'arc' ),
				array( 'pe-7s-back-2' => 'back-2' ),
				array( 'pe-7s-bandaid' => 'bandaid' ),
				array( 'pe-7s-car' => 'car' ),
				array( 'pe-7s-diamond' => 'diamond' ),
				array( 'pe-7s-door-lock' => 'door-lock' ),
				array( 'pe-7s-eyedropper' => 'eyedropper' ),
				array( 'pe-7s-female' => 'female' ),
				array( 'pe-7s-gym' => 'gym' ),
				array( 'pe-7s-hammer' => 'hammer' ),
				array( 'pe-7s-headphones' => 'headphones' ),
				array( 'pe-7s-helm' => 'helm' ),
				array( 'pe-7s-hourglass' => 'hourglass' ),
				array( 'pe-7s-leaf' => 'leaf' ),
				array( 'pe-7s-magic-wand' => 'magic-wand' ),
				array( 'pe-7s-male' => 'male' ),
				array( 'pe-7s-map-2' => 'map-2' ),
				array( 'pe-7s-next-2' => 'next-2' ),
				array( 'pe-7s-paint-bucket' => 'paint-bucket' ),
				array( 'pe-7s-pendrive' => 'pendrive' ),
				array( 'pe-7s-photo' => 'photo' ),
				array( 'pe-7s-piggy' => 'piggy' ),
				array( 'pe-7s-plugin' => 'plugin' ),
				array( 'pe-7s-refresh-2' => 'refresh-2' ),
				array( 'pe-7s-rocket' => 'rocket' ),
				array( 'pe-7s-settings' => 'settings' ),
				array( 'pe-7s-shield' => 'shield' ),
				array( 'pe-7s-smile' => 'smile' ),
				array( 'pe-7s-usb' => 'usb' ),
				array( 'pe-7s-vector' => 'vector' ),
				array( 'pe-7s-wine' => 'wine' ),
				array( 'pe-7s-cloud-upload' => 'cloud-upload' ),
				array( 'pe-7s-cash' => 'cash' ),
				array( 'pe-7s-close' => 'close' ),
				array( 'pe-7s-bluetooth' => 'bluetooth' ),
				array( 'pe-7s-cloud-download' => 'cloud-download' ),
				array( 'pe-7s-way' => 'way' ),
				array( 'pe-7s-close-circle' => 'close-circle' ),
				array( 'pe-7s-id' => 'id' ),
				array( 'pe-7s-angle-up' => 'angle-up' ),
				array( 'pe-7s-wristwatch' => 'wristwatch' ),
				array( 'pe-7s-angle-up-circle' => 'angle-up-circle' ),
				array( 'pe-7s-world' => 'world' ),
				array( 'pe-7s-angle-right' => 'angle-right' ),
				array( 'pe-7s-volume' => 'volume' ),
				array( 'pe-7s-angle-right-circle' => 'angle-right-circle' ),
				array( 'pe-7s-users' => 'users' ),
				array( 'pe-7s-angle-left' => 'angle-left' ),
				array( 'pe-7s-user-female' => 'user-female' ),
				array( 'pe-7s-angle-left-circle' => 'angle-left-circle' ),
				array( 'pe-7s-up-arrow' => 'up-arrow' ),
				array( 'pe-7s-angle-down' => 'angle-down' ),
				array( 'pe-7s-switch' => 'switch' ),
				array( 'pe-7s-angle-down-circle' => 'angle-down-circle' ),
				array( 'pe-7s-scissors' => 'scissors' ),
				array( 'pe-7s-wallet' => 'wallet' ),
				array( 'pe-7s-safe' => 'safe' ),
				array( 'pe-7s-volume2' => 'volume2' ),
				array( 'pe-7s-volume1' => 'volume1' ),
				array( 'pe-7s-voicemail' => 'voicemail' ),
				array( 'pe-7s-video' => 'video' ),
				array( 'pe-7s-user' => 'user' ),
				array( 'pe-7s-upload' => 'upload' ),
				array( 'pe-7s-unlock' => 'unlock' ),
				array( 'pe-7s-umbrella' => 'umbrella' ),
				array( 'pe-7s-trash' => 'trash' ),
				array( 'pe-7s-tools' => 'tools' ),
				array( 'pe-7s-timer' => 'timer' ),
				array( 'pe-7s-ticket' => 'ticket' ),
				array( 'pe-7s-target' => 'target' ),
				array( 'pe-7s-sun' => 'sun' ),
				array( 'pe-7s-study' => 'study' ),
				array( 'pe-7s-stopwatch' => 'stopwatch' ),
				array( 'pe-7s-star' => 'star' ),
				array( 'pe-7s-speaker' => 'speaker' ),
				array( 'pe-7s-signal' => 'signal' ),
				array( 'pe-7s-shuffle' => 'shuffle' ),
				array( 'pe-7s-shopbag' => 'shopbag' ),
				array( 'pe-7s-share' => 'share' ),
				array( 'pe-7s-server' => 'server' ),
				array( 'pe-7s-search' => 'search' ),
				array( 'pe-7s-film' => 'film' ),
				array( 'pe-7s-science' => 'science' ),
				array( 'pe-7s-disk' => 'disk' ),
				array( 'pe-7s-ribbon' => 'ribbon' ),
				array( 'pe-7s-repeat' => 'repeat' ),
				array( 'pe-7s-refresh' => 'refresh' ),
				array( 'pe-7s-add-user' => 'add-user' ),
				array( 'pe-7s-refresh-cloud' => 'refresh-cloud' ),
				array( 'pe-7s-paperclip' => 'paperclip' ),
				array( 'pe-7s-radio' => 'radio' ),
				array( 'pe-7s-note2' => 'note2' ),
				array( 'pe-7s-print' => 'print' ),
				array( 'pe-7s-network' => 'network' ),
				array( 'pe-7s-prev' => 'prev' ),
				array( 'pe-7s-mute' => 'mute' ),
				array( 'pe-7s-power' => 'power' ),
				array( 'pe-7s-medal' => 'medal' ),
				array( 'pe-7s-portfolio' => 'portfolio' ),
				array( 'pe-7s-like2' => 'like2' ),
				array( 'pe-7s-plus' => 'plus' ),
				array( 'pe-7s-left-arrow' => 'left-arrow' ),
				array( 'pe-7s-play' => 'play' ),
				array( 'pe-7s-key' => 'key' ),
				array( 'pe-7s-plane' => 'plane' ),
				array( 'pe-7s-joy' => 'joy' ),
				array( 'pe-7s-photo-gallery' => 'photo-gallery' ),
				array( 'pe-7s-pin' => 'pin' ),
				array( 'pe-7s-phone' => 'phone' ),
				array( 'pe-7s-plug' => 'plug' ),
				array( 'pe-7s-pen' => 'pen' ),
				array( 'pe-7s-right-arrow' => 'right-arrow' ),
				array( 'pe-7s-paper-plane' => 'paper-plane' ),
				array( 'pe-7s-delete-user' => 'delete-user' ),
				array( 'pe-7s-paint' => 'paint' ),
				array( 'pe-7s-bottom-arrow' => 'bottom-arrow' ),
				array( 'pe-7s-notebook' => 'notebook' ),
				array( 'pe-7s-note' => 'note' ),
				array( 'pe-7s-next' => 'next' ),
				array( 'pe-7s-news-paper' => 'news-paper' ),
				array( 'pe-7s-musiclist' => 'musiclist' ),
				array( 'pe-7s-music' => 'music' ),
				array( 'pe-7s-mouse' => 'mouse' ),
				array( 'pe-7s-more' => 'more' ),
				array( 'pe-7s-moon' => 'moon' ),
				array( 'pe-7s-monitor' => 'monitor' ),
				array( 'pe-7s-micro' => 'micro' ),
				array( 'pe-7s-menu' => 'menu' ),
				array( 'pe-7s-map' => 'map' ),
				array( 'pe-7s-map-marker' => 'map-marker' ),
				array( 'pe-7s-mail' => 'mail' ),
				array( 'pe-7s-mail-open' => 'mail-open' ),
				array( 'pe-7s-mail-open-file' => 'mail-open-file' ),
				array( 'pe-7s-magnet' => 'magnet' ),
				array( 'pe-7s-loop' => 'loop' ),
				array( 'pe-7s-look' => 'look' ),
				array( 'pe-7s-lock' => 'lock' ),
				array( 'pe-7s-lintern' => 'lintern' ),
				array( 'pe-7s-link' => 'link' ),
				array( 'pe-7s-like' => 'like' ),
				array( 'pe-7s-light' => 'light' ),
				array( 'pe-7s-less' => 'less' ),
				array( 'pe-7s-keypad' => 'keypad' ),
				array( 'pe-7s-junk' => 'junk' ),
				array( 'pe-7s-info' => 'info' ),
				array( 'pe-7s-home' => 'home' ),
				array( 'pe-7s-help2' => 'help2' ),
				array( 'pe-7s-help1' => 'help1' ),
				array( 'pe-7s-graph3' => 'graph3' ),
				array( 'pe-7s-graph2' => 'graph2' ),
				array( 'pe-7s-graph1' => 'graph1' ),
				array( 'pe-7s-graph' => 'graph' ),
				array( 'pe-7s-global' => 'global' ),
				array( 'pe-7s-gleam' => 'gleam' ),
				array( 'pe-7s-glasses' => 'glasses' ),
				array( 'pe-7s-gift' => 'gift' ),
				array( 'pe-7s-folder' => 'folder' ),
				array( 'pe-7s-flag' => 'flag' ),
				array( 'pe-7s-filter' => 'filter' ),
				array( 'pe-7s-file' => 'file' ),
				array( 'pe-7s-expand1' => 'expand1' ),
				array( 'pe-7s-exapnd2' => 'exapnd2' ),
				array( 'pe-7s-edit' => 'edit' ),
				array( 'pe-7s-drop' => 'drop' ),
				array( 'pe-7s-drawer' => 'drawer' ),
				array( 'pe-7s-download' => 'download' ),
				array( 'pe-7s-display2' => 'display2' ),
				array( 'pe-7s-display1' => 'display1' ),
				array( 'pe-7s-diskette' => 'diskette' ),
				array( 'pe-7s-date' => 'date' ),
				array( 'pe-7s-cup' => 'cup' ),
				array( 'pe-7s-culture' => 'culture' ),
				array( 'pe-7s-crop' => 'crop' ),
				array( 'pe-7s-credit' => 'credit' ),
				array( 'pe-7s-copy-file' => 'copy-file' ),
				array( 'pe-7s-config' => 'config' ),
				array( 'pe-7s-compass' => 'compass' ),
				array( 'pe-7s-comment' => 'comment' ),
				array( 'pe-7s-coffee' => 'coffee' ),
				array( 'pe-7s-cloud' => 'cloud' ),
				array( 'pe-7s-clock' => 'clock' ),
				array( 'pe-7s-check' => 'check' ),
				array( 'pe-7s-chat' => 'chat' ),
				array( 'pe-7s-cart' => 'cart' ),
				array( 'pe-7s-camera' => 'camera' ),
				array( 'pe-7s-call' => 'call' ),
				array( 'pe-7s-calculator' => 'calculator' ),
				array( 'pe-7s-browser' => 'browser' ),
				array( 'pe-7s-box2' => 'box2' ),
				array( 'pe-7s-box1' => 'box1' ),
				array( 'pe-7s-bookmarks' => 'bookmarks' ),
				array( 'pe-7s-bicycle' => 'bicycle' ),
				array( 'pe-7s-bell' => 'bell' ),
				array( 'pe-7s-battery' => 'battery' ),
				array( 'pe-7s-ball' => 'ball' ),
				array( 'pe-7s-back' => 'back' ),
				array( 'pe-7s-attention' => 'attention' ),
				array( 'pe-7s-anchor' => 'anchor' ),
				array( 'pe-7s-albums' => 'albums' ),
				array( 'pe-7s-alarm' => 'alarm' ),
				array( 'pe-7s-airplay' => 'airplay' ),
			);

			return array_merge( $icons, $new_icons );
		}
	}

	new Businext_VC_Icon_Pe_Stroke_7();
}
