<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       def.com
 * @since      1.0.0
 *
 * @package    Shortcode_Directory
 * @subpackage Shortcode_Directory/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Shortcode_Directory
 * @subpackage Shortcode_Directory/includes
 * @author     wpminds <wpminds@gmail.com>
 */
class Shortcode_Directory_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'shortcode-directory',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
