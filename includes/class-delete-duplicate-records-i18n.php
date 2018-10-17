<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/peterson-umoke
 * @since      1.0.0
 *
 * @package    Delete_Duplicate_Records
 * @subpackage Delete_Duplicate_Records/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Delete_Duplicate_Records
 * @subpackage Delete_Duplicate_Records/includes
 * @author     Peterson Umoke <umoke10@hotmail.com>
 */
class Delete_Duplicate_Records_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'delete-duplicate-records',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
