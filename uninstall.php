<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   smilegallery
 * @author    RA 
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins
 * @copyright Plugin (c) RA, smilegallery (c) DA
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}