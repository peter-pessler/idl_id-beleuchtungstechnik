<?php
/**
 * WooCommerce customizer options
 *
 * @package Innomerce
 */

if ( ! function_exists( 'innomerce_set_wc_dynamic_css_options' ) ) {

	/**
	 * Add dynamic WooCommerce styles
	 *
	 * @param $options
	 *
	 * @return mixed
	 */
	function innomerce_set_wc_dynamic_css_options( $options ) {

		array_push( $options['css_files'], get_theme_file_path( 'inc/modules/woo/assets/css/dynamic/woo-module-dynamic.css' ) );

		return $options;

	}

}
add_filter( 'innomerce-theme/dynamic_css/options', 'innomerce_set_wc_dynamic_css_options' );