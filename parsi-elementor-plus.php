<?php
/**
 * Plugin Name: Parsi Elementor Plus
 * Plugin URI: elementorplus.net
 * Description: فارسی ساز المنتور پلاس (المنتور پلاس فارسی) با امکان فارسی سازی افزونه المنتور و المنتور پرو و اضافه کردن فونت های فارسی به این افزونه
 * Version: 1.4
 * Author: المنتور پلاس
 * Author URI: elementorplus.net
 * Text Domain: parsi-elementor-plus
 * License: GPL2
 */
 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'PARSI_ELEMENTOR_PLUS_VERSION', '1.4' );
define( 'PARSI_ELEMENTOR_PLUS', plugin_dir_path(__FILE__));
require_once(PARSI_ELEMENTOR_PLUS.'includes/class-elementor.php');
require_once(PARSI_ELEMENTOR_PLUS.'includes/class-dashboard.php');
require_once(PARSI_ELEMENTOR_PLUS.'includes/class-translate.php');
//Main features
require_once(PARSI_ELEMENTOR_PLUS.'includes/lib/fonts.php');
require_once(PARSI_ELEMENTOR_PLUS.'includes/lib/icons.php');
// Set our root directory
define( 'PARSI_ELEMENTOR_PLUS_DIRECTORY', plugin_dir_path( __FILE__ ) );
define( 'PARSI_ELEMENTOR_PLUS_URL', plugins_url( '/', __FILE__ ) );