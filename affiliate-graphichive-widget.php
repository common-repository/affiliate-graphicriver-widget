<?php
/*
Plugin Name: Affiliate GraphicRiver Widget
Plugin URI: https://pluginsbay.com/plugin/graphicriver-widget
Description: Display GraphicRiver items as a WordPress widget with your affiliate links.
Author: StefanPejcic
Version: 1.0.0
Author URI: https://pluginsbay.com
Text Domain: affiliate-graphicriver-widget
Domain Path: /languages
License: GPL3
*/

define( 'STEFAN_GR_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'STEFAN_GR_PLUGIN_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'STEFAN_GR_WIDGET_VER', '1.0.0' );

/* Initialize Widget */
if ( !function_exists( 'stefan_gr_widget_init' ) ):
    function stefan_gr_widget_init() {
        require_once STEFAN_GR_PLUGIN_DIR.'inc/class-graphicriver-widget.php';
        register_widget( 'STEFAN_GraphicRiver_Widget' );
    }
endif;

add_action( 'widgets_init', 'stefan_gr_widget_init' );

/* Load text domain */
function stefan_load_gr_widget_text_domain() {
    load_plugin_textdomain( 'affiliate-graphicriver-widget', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'stefan_load_gr_widget_text_domain' );

?>