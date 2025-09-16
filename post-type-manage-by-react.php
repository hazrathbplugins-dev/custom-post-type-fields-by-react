<?php
/*
Plugin Name: Post Type Manage by React
Plugin URI: https://example.com/post-type-manage-by-react
Description: Manage custom post types in WordPress using a React-based admin interface.
Version: 1.0.0
Author: Hazrath Ali
Author URI: https://example.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: post-type-manage-by-react
Domain Path: /languages
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


// Plugin code goes here.
define( 'PTM_VERSION', '1.0.0');
define( 'PTM_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PTM_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once PTM_PLUGIN_DIR . 'includes/class-loader.php';
Post_Type_Manage_Loader::init();

register_activation_hook( __FILE__, ['Post_Type_Manage_Activation', 'activate']);
register_activation_hook( __FILE__, ['Post_Type_Manage_Deactivation', 'deactivate']);

