<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://planitappy.com
 * @since      1.0.0
 *
 * @package    Pia_OnlineStore
 * @subpackage Pia_OnlineStore/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pia_OnlineStore
 * @subpackage Pia_OnlineStore/includes
 * @author     PlanItAppy <info@planitappy.com>
 */
class Pia_OnlineStore_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pia-online-store',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
