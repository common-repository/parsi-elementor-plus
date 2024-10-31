<?php
/**
 * Parsi ElementorPlus font.
 *
 *
 * @since 1.0
 */
// Enqueue Editor
	add_action('elementor/editor/before_enqueue_scripts', function() {
		wp_enqueue_style( 'parsi-elementor-plus',plugins_url( 'assets/css/editor-rtl.min.css', __FILE__ ) );
});
// Enqueue Preview
	add_action('elementor/preview/enqueue_styles', function() {
		wp_enqueue_style( 'parsi-elementor-plus-preview',plugins_url( 'assets/css/preview-rtl.css', __FILE__ ) );
});
// Enqueue Common
	add_action('admin_enqueue_scripts', function() {
		wp_enqueue_style( 'parsi-elementor-plus-common',plugins_url( 'assets/css/common-rtl.css', __FILE__ ) );
	});
// Enqueue Front End
	add_action('elementor/frontend/before_enqueue_styles', function() {
		wp_enqueue_style( 'parsi-elementor-plus-font',plugins_url( 'assets/css/font.css', __FILE__ ) );
});