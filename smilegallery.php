<?php
/**
 * 
 *
 * Allows you to show before-and-after images in your blog, with an interactive slider.
 *
 * @package   
 * @author    
 * @license   GPL-2.0+
 * @link      
 *
 * @wordpress-plugin
 * Plugin Name:       Smile Gallery Beta
 * Plugin URI:        #
 * Description:       Before and After Gallery Thingy
 * Version:           1.0
 * Author:            Robby
 * Author URI:        
 * Text Domain:       
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: 
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-smilegallery.php' );

register_activation_hook( __FILE__, array( 'smilegallery', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'smilegallery', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'smilegallery', 'get_instance' ) );

/*if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-smilegallery-admin.php' );
	add_action( 'plugins_loaded', array( 'smilegallery_Admin', 'get_instance' ) );

}*/
