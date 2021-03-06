
<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   WP Field Marshal
 * @author    Keith Hooks <khooks@gmail.com>
 * @license   GPL-2.0+
 * @link      http://geeklythings.net
 * @copyright 2015 Keith Hooks
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Army List Plugin
 * Plugin URI:        http://geeklythings.net
 * Description:       Add Warmachine army lists to your WordPress blog using shortcodes
 * Version:           0.2.0
 * Author:            Keith Hooks
 * Author URI:        http://geeklythings.net
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/Geekly/wp-fieldmarshal
 * GitHub Branch:     master
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `Wp-Army.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-wp-fieldmarshal.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/class-wp-fieldmarshal-list.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/xml-utils.php');


/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `Wp-Fieldmarshal.php`
 */
register_activation_hook( __FILE__, array( 'Wp_Fieldmarshal', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Wp_Fieldmarshal', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-wp-fieldmarshal.php`
 */
add_action( 'plugins_loaded', array( 'Wp_Fieldmarshal', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name-admin.php` with the name of the plugin's admin file
 * - replace Wp-Army_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/wp-fieldmarshal-admin.php' );
	add_action( 'plugins_loaded', array( 'Wp_Fieldmarshal_Admin', 'get_instance' ) );

}
