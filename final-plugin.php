<?php

/*
 * Plugin Name:       Final Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.3
 * Author:            Shiam Chowdhury
 * Author URI:        https://shiamch.com/
 */

use ShiamNamespace\Controllers\ShortcodeController;

// Define the plugin path
define('MY_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Include the autoloader
require_once MY_PLUGIN_DIR . 'includes/functions.php';
require_once plugin_dir_path(__FILE__) . 'autoload.php';

include_once(plugin_dir_path(__FILE__) . 'enq-scripts-styles.php');

// Initialize the plugin
function my_plugin_init() {
    // You can add your plugin initialization code here
}

// Hook into WordPress to initialize the plugin
add_action('init', 'my_plugin_init');

$my_instance = new MyFunction();
$my_instance->addMenuPage();
$my_instance->sayHello();

$shortcodeController = new ShortcodeController();
$shortcodeController->createShortcode();
