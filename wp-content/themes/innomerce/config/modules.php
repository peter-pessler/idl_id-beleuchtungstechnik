<?php
/**
 * Modules configuration
 *
 * Allowed to rewrite in child theme.
 *
 * Format:
 * associative array.
 * keys - module name to load,
 * values - array of child modules for this module. If module has no childs - just an empty array
 */

if ( ! function_exists( 'innomerce_get_allowed_modules' ) ) {
	function innomerce_get_allowed_modules() {
		return apply_filters( 'innomerce-theme/allowed-modules', array(
			'blog-layouts'    => array(),
			'crocoblock'      => array(),
			'woo'             => array(
				'woo-breadcrumbs' => array(),
				'woo-page-title'  => array(),
			),
		) );
	}
}