<?php
add_filter( 'elementor/icons_manager/native', 'add_eplusicons_to_icon_manager');
function add_eplusicons_to_icon_manager( $settings ) {
		$json_url = plugin_dir_url( __FILE__ ) . '/icons/eplus-icons/selection.json';

		$settings['eplusicons'] = [
			'name'          => 'آیکون های ایرانی پلاس',
			'label'         => esc_html__( 'آیکون های ایرانی پلاس', 'text-domain' ),
			'url'           => false,
			'enqueue'       => false,
			'prefix'        => 'eplus-',
			'displayPrefix' => '',
			'labelIcon'     => 'eplus-EPLUS',
			'ver'           => '2.4',
			'fetchJson'     => $json_url,
			'native'        => true,
		];

		return $settings;
	}
	
/**
 * Elementorplus icons.
 *
 *
 * @since 1.1.0
 */
// enqueue css file into editor
function pep_new_icon(){
    wp_enqueue_style( 'new-icon', plugins_url( 'icons\eplus-icons\style.css',  __FILE__ )  );
}
add_action( 'elementor/editor/after_enqueue_styles', 'pep_new_icon' );
//enqueue css file for front-end
function pep_core_assets() {
    wp_enqueue_style( 'new-icon', plugins_url( 'icons\eplus-icons\style.css',  __FILE__ )  );
}
add_action( 'wp_enqueue_scripts', 'pep_core_assets' );