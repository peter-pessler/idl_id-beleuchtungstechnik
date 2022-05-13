<?php

add_action( 'init', 'innomerce_plugins_wizard_config', 9 );

/**
 * Register Jet Plugins Wizards config
 * @return void
 */
function innomerce_plugins_wizard_config() {

	if ( ! is_admin() ) {
		return;
	}

	if ( ! function_exists( 'jet_plugins_wizard_register_config' ) ) {
		return;
	}

	jet_plugins_wizard_register_config( array(

		'license' => array(
			'enabled' => false,

		),

		'plugins' => array(
			'jet-data-importer' => array(
				'name'   => esc_html__( 'Jet Data Importer', 'innomerce' ),
				'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
				'path'   => 'https://github.com/ZemezLab/jet-data-importer/archive/master.zip',
				'access' => 'base',
			),
			'elementor' => array(
				'name'   => esc_html__( 'Elementor Page Builder', 'innomerce' ),
				'access' => 'base',
			),
			'jet-blog' => array(
				'name'   => esc_html__( 'Jet Blog For Elementor', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-blog.zip' ),
				'access' => 'base',
			),
			'jet-blocks' => array(
				'name'   => esc_html__( 'Jet Blocks For Elementor', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-blocks.zip' ),
				'access' => 'base',
			),
			'jet-elements' => array(
				'name'   => esc_html__( 'Jet Elements For Elementor', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-elements.zip' ),
				'access' => 'base',
			),
			'jet-tabs' => array(
				'name'   => esc_html__( 'Jet Tabs For Elementor', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-tabs.zip' ),
				'access' => 'base',
			),
			'jet-theme-core' => array(
				'name'   => esc_html__( 'Jet Theme Core', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-theme-core.zip' ),
				'access' => 'base',
			),
			'jet-tricks' => array(
				'name'   => esc_html__( 'Jet Tricks', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-tricks.zip' ),
				'access' => 'base',
			),
			'jet-menu' => array(
				'name'   => esc_html__( 'Jet Menu', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-menu.zip' ),
				'access' => 'base',
			),
			'jet-popup' => array(
				'name'   => esc_html__( 'Jet Popup', 'innomerce' ),
				'source' => 'local',
				'path'   => get_parent_theme_file_path( 'assets/includes/plugins/jet-popup.zip' ),
				'access' => 'base',
			),
			'contact-form-7' => array(
				'name'   => esc_html__( 'Contact Form 7', 'innomerce' ),
				'access' => 'skins',
			),

		),

		'skins'   => array(
				'base' => array(
					'jet-data-importer',
					'elementor',
					'jet-blog',
					'jet-blocks',
					'jet-elements',
					'jet-tabs',
					'jet-theme-core',
					'jet-tricks',
					'jet-menu',
					'jet-popup',
				),

			'advanced' => array(
					'default' => array(
						'full'  => array(
						 'contact-form-7',
				),

				'lite'  => false,
				'demo'  => 'http://ld-wp.template-help.com/wordpress_prod-24024/v1',
				'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.jpg',
				'name'  => esc_html__( 'Innomerce', 'innomerce' ),

				),

			),

		),
	'texts'   => array(
			'theme-name' => esc_html__( 'Innomerce', 'innomerce' ),
		),
	) );
}
