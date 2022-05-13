<?php
/**
 * Menus configuration.
 *
 * @package Innomerce
 */

add_action( 'after_setup_theme', 'innomerce_register_menus', 5 );
function innomerce_register_menus() {

	register_nav_menus( array(
		'main'   => esc_html__( 'Main', 'innomerce' ),
		'footer' => esc_html__( 'Footer', 'innomerce' ),
		'social' => esc_html__( 'Social', 'innomerce' ),
	) );
}
