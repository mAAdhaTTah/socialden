<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           SocialDen
 *
 * @wordpress-plugin
 * Plugin Name:       SocialDen
 * Plugin URI:        http://jamesdigioia.com/socialden/
 * Description:       SocialDen is a WordPress framework plugin that aims to be your new social home, one that gives you full control over your data, your privacy, and your face to the world while providing interoperability with your current social networks in a native, extensible way.
 * Version:           1.0.0
 * Author:            James DiGioia
 * Author URI:        http://jamesdigioia.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       socialden
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Define Constants
 *----------------------------------------------------------------------------*/

// Directory i.e. /home/user/public_html...
define( 'SOCIALDEN_DIR', plugin_dir_path( __FILE__ ) );
// URL i.e. http://www.yoursite.com/wp-content/plugins/wp-gistpen/
define( 'SOCIALDEN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Include the autoloader
 */
require_once 'lib/php/autoload.php';

register_activation_hook( __FILE__, array( 'SocialDen\Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'SocialDen\Deactivator', 'deactivate' ) );

/**
 * Singleton container class
 */
class SocialDen {

	static $app;

	public static function init() {

		if ( null == self::$app ) {
			$app = new SocialDen\App();
			$app->run();
		}

		return $app;
	}
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function socialden() {
	return SocialDen::init();
}
socialden();
