<?php

/**
 * Plugin Name: Silver Language Switcher
 * Plugin URI:
 * GitHub Plugin URI: https://github.com/DigitalEntryPoint/language-shift
 * Description: A multi language switcher helper. this is going to be oop.
 * Version:  1.0
 * Author: Mojtaba Mehrara
 * Author URI: Mojtaba.Mehrara@gmail.com
 * Text Domain: silver-language-switcher
 * Domain Path: /languages
 */

//namespace SilverUmbrella;

/* Enter the domain Scenario */
//1.Check for preferences or Cookies or LocalStorage
//2.if(not 1)then Default language
//feature(v2): Browser's Language Setting
//feature(v2): Based on IP

/* Navigation within the domain Scenario */
//continues by chosen language
//switch language while wandering

return;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include( self_sustain_path_normalizer( 'include/lang_swr.php' ) );
include( self_sustain_path_normalizer( 'same-namespace.php' ) );

define( 'SLS_VERSION', '1.0.0' );

/* fix inconsistency between Windows and Unix-based systems paths */
function self_sustain_path_normalizer( $path ) {
	$plugin_path = trailingslashit( plugin_dir_path( __FILE__ ) );

	return wp_normalize_path( $plugin_path . $path );
}

/* out text in frontend page*/
function debug_output_for_everyone( $value, $description = ">_" ) {
	if ( WP_DEBUG ) {
		print_r( "<h3 dir='ltr'>" . $description . " " . $value . "</h3>" );
	}
}

if ( is_admin() ) {
	return;
}
//$instance = new SilverUmbrella\language_worker();
$instance = new SilverUmbrella\language_worker();
//$htf      = new SilverUmbrella\Haftan();
//$sls      = new SilverUmbrella\plugin_sls();

//debug_output_for_everyone(SLS_URL);


