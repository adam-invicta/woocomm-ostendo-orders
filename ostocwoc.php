<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/adam-invicta
 * @since             1.0.0
 * @package           Ostocwoc
 *
 * @wordpress-plugin
 * Plugin Name:       Ostendo for WooCommerce
 * Plugin URI:        https://github.com/adam-invicta/woocomm-ostendo-orders
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Adam Butterworth
 * Author URI:        https://github.com/adam-invicta
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ostocwoc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'OSTOCWOC_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ostocwoc-activator.php
 */
function activate_ostocwoc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ostocwoc-activator.php';
	Ostocwoc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ostocwoc-deactivator.php
 */
function deactivate_ostocwoc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ostocwoc-deactivator.php';
	Ostocwoc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ostocwoc' );
register_deactivation_hook( __FILE__, 'deactivate_ostocwoc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ostocwoc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ostocwoc() {

	$plugin = new Ostocwoc();
	$plugin->run();

}
run_ostocwoc();
