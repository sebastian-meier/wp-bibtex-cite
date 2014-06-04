<?php
/**
 * The WordPress Plugin wp-bibtext-cite.
 *
 * @package   wp-bibtex-cite
 * @author    Sebastian Meier <contact@sebastianmeier.eu>
 * @license   GPL-2.0+
 * @link      http://www.sebastianmeier.eu/there_needs_to_be_a_page
 * @copyright 2014 Sebastian Meier
 *
 * @wordpress-plugin
 * Plugin Name:       BibTeX-Cite
 * Plugin URI:        http://www.sebastianmeier.eu/there_needs_to_be_a_page
 * Description:       Upload BibTeX files and embed citations in your post as well as a bibliography including all cited material with links to each article.
 * Version:           0.0.1
 * Author:            Sebastian Meier
 * Author URI:        http://www.sebastianmeier.eu
 * Text Domain:       wp-bibtex-cite
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/sebastian-meier/wp-bibtex-cite
 * WordPress-Plugin-Boilerplate: v2.6.1
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
 * - replace `class-plugin-name.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-wp-bibtex-cite.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'WP_Bibtex_Cite', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WP_Bibtex_Cite', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'WP_Bibtex_Cite', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
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

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-wp-bibtex-cite-admin.php' );
	add_action( 'plugins_loaded', array( 'WP_Bibtex_Cite_Admin', 'get_instance' ) );

}
