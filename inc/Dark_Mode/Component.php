<?php
/**
 * WP_Rig\WP_Rig\Dark_Mode\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Dark_Mode;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use function add_action;
use function add_filter;
use function wp_enqueue_script;
use function get_theme_file_uri;
use function get_theme_file_path;
use function wp_script_add_data;
use function wp_localize_script;

/**
 * Dark Mode component.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'dark_mode';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', [ $this, 'action_enqueue_dark_mode' ] );
	}

	/**
	 * Enqueues JavaScript.
	 *
	 * To do: Follow Accessability Component pattern for passing down localization for the button aria labels
	 */
	public function action_enqueue_dark_mode() {
		wp_enqueue_script(
			'wp-rig-dark-mode',
			get_theme_file_uri( '/assets/js/dark-mode.min.js' ),
			[],
			wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/dark-mode.min.js' ) ),
			false
		);
		wp_script_add_data( 'wp-rig-dark-mode', 'async', true );
		wp_script_add_data( 'wp-rig-dark-mode', 'precache', true );
	}
}
