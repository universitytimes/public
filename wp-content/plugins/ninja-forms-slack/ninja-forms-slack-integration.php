<?php
/**
 * Plugin Name: Ninja Forms - Slack Notifications
 * Description: This plugin Sends a Slack notification when a new form is submitted through Ninja Forms.
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI:
 * License: GNU GPLv2+
 */
/**
 * Copyright (c) 2014 Nikhil Vimal
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Loads the Ninja Forms Slack Integration Class file
 *
 * @param $types The Notification Types
 *
 * @return mixed
 */
function load_nf_slack($types) {
	$types[ 'slack' ] = require_once( 'notification-slack.php' );
	return $types;
}
add_filter('nf_notification_types', 'load_nf_slack');

/**
 * Ninja Forms License Setup
 */
function ninja_forms_slack_setup_license() {
	if ( class_exists( 'NF_Extension_Updater' ) ) {
		$NF_Extension_Updater = new NF_Extension_Updater( 'Slack', '1.0', 'Nikhil Vimal', __FILE__);
	}
}

add_action( 'admin_init', 'ninja_forms_slack_setup_license' );

/**
 * Load Ninja Forms Slack Textdomain
 */
function ninja_forms_slack_load_plugin_textdomain() {
	load_plugin_textdomain( 'ninja-forms-slack', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'ninja_forms_slack_load_plugin_textdomain' );