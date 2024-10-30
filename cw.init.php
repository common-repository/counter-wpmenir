<?php
/*
Plugin Name: Counter WordPress
Plugin URI: https://wpmen.ir/
Description: Need a counter for your stuff. this is what exactly you want.
Author: Sadegh Mahdilou
Version: 3.2.1.6
ChannelVersion: Developmnet
copyright: 2015 - 2020
Author URI: https://wpmen.ir/
Text Domain: counter-wpmenir
Domain Path: languages
*/

// Define a security Code
define('CWSECURITY',1);

// make some define
define('ChannelVersion', 'Developmnet');
define('Plugin_URI', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugin_dir_url( __FILE__ ) );


// the global variable for information plugin
global $plugin_data_information;
if( ! function_exists('get_plugin_data') ){
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
$plugin_data_information = get_plugin_data( __FILE__ );


/* Initialise the internationalisation domain */
function my_plugin_load_plugin_textdomain() {
    load_plugin_textdomain( 'counter-wpmenir', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'my_plugin_load_plugin_textdomain' );

// Include the core of plugin
include('class/cw.core.php');

// include the old version
include('old.version.php');
