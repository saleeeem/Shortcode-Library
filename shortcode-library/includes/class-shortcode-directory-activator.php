<?php

/**
 * Fired during plugin activation
 *
 * @link       def.com
 * @since      1.0.0
 *
 * @package    Shortcode_Directory
 * @subpackage Shortcode_Directory/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Shortcode_Directory
 * @subpackage Shortcode_Directory/includes
 * @author     wpminds <wpminds@gmail.com>
 */
class Shortcode_Directory_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		//create table for shortcode directory on activation of plugin
		global $wpdb;
        $table_name = $wpdb->prefix . 'shortcode_directory_table';
        $charset_collate = $wpdb->get_charset_collate();
		$query = $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table_name ) );
		if ( ! $wpdb->get_var( $query ) == $table_name ) {
			$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			name text NOT NULL,
			shortcode text NOT NULL,
			PRIMARY KEY  (id)
			) $charset_collate;";
			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
			}
	}

}
