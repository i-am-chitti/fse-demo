<?php
/**
 * Theme bootstrap file.
 *
 * @package Dev-Talks
 */

namespace Dev_Talks;

use Dev_Talks\Traits\Singleton;
use Dev_Talks\Assets;

/**
 * Class Dev_Talks
 *
 * @since 1.0.0
 */
class Dev_Talks {

	use Singleton;

	/**
	 * Constructor.
	 */
	protected function __construct() {
		// Instantiate classes.
		Assets::get_instance();

		// Setup hooks.
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 *
	 * @since 1.0.0
	 */
	public function setup_hooks() {
		add_action( 'after_setup_theme', [ $this, 'dev_talks_support' ] );
	}

	/**
	 * Add required theme support.
	 *
	 * @since 1.0.0
	 */
	public function dev_talks_support() {
		// Add support for core block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}
}
