<?php
add_action( 'init', 'innomerce_data_importer_config', 9 );

/**
 * Register Jet Data Importer config
 * @return void
 */
function innomerce_data_importer_config() {

	if ( ! is_admin() ) {
		return;
	}

	if ( ! function_exists( 'jet_data_importer_register_config' ) ) {
		return;
	}

	jet_data_importer_register_config( array(
		'xml' => false,
		'advanced_import' => array(
					'default' => array(
					'label'    => esc_html__( 'Innomerce', 'innomerce' ),
					'full'     => get_template_directory() . '/assets/demo-content/default/default-full.xml',
					'lite'     => false,
					'thumb'    => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.jpg',
					'demo_url' => 'http://ld-wp.template-help.com/wordpress_prod-24024/v1',
					),
		),
		'slider' => array(
			'path' => 'https://raw.githubusercontent.com/JetImpex/wizard-slides/master/slides.json',
		),
		'success-links' => array(
			'home' => array(
				'label'  => esc_html__( 'View your site', 'innomerce' ),
				'type'   => 'primary',
				'target' => '_self',
				'icon'   => 'dashicons-welcome-view-site',
				'desc'   => esc_html__( 'Take a look at your site', 'innomerce' ),
				'url'    => home_url( '/' ),
			),
			'edit' => array(
				'label'  => esc_html__( 'Start editing', 'innomerce' ),
				'type'   => 'primary',
				'target' => '_self',
				'icon'   => 'dashicons-welcome-write-blog',
				'desc'   => esc_html__( 'Proceed to editing pages', 'innomerce' ),
				'url'    => admin_url( 'edit.php?post_type=page' ),
			),
			'documentation' => array(
				'label'  => esc_html__( 'Check documentation', 'innomerce' ),
				'type'   => 'primary',
				'target' => '_blank',
				'icon'   => 'dashicons-welcome-learn-more',
				'desc'   => esc_html__( 'Get more info from documentation', 'innomerce' ),
				'url'    => 'http://documentation.zemez.io/wordpress/index.php?project=innomerce',
			),
			'knowledge-base' => array(
				'label'  => esc_html__( 'Knowledge Base', 'innomerce' ),
				'type'   => 'primary',
				'target' => '_blank',
				'icon'   => 'dashicons-sos',
				'desc'   => esc_html__( 'Access the vast knowledge base', 'innomerce' ),
				'url'    => 'https://zemez.io/wordpress/support/knowledge-base-category/innomerce/',
			),
			'community' => array(
				'label'  => esc_html__( 'Community', 'innomerce' ),
				'type'   => 'primary',
				'target' => '_blank',
				'icon'   => 'dashicons-facebook',
				'desc'   => esc_html__( 'Join community to stay tuned to the latest news', 'innomerce' ),
				'url'    => 'https://www.facebook.com/groups/ZemezJetCommunity/',
			),
		),
		'export' => array(
			'options' => array(
				'techguide_catalog_image_size',
				'techguide_single_image_size',
				'techguide_thumbnail_image_size',
				'site_icon',
				'jet-elements-settings',
				'jet_menu_options',
				'highlight-and-share',
				'stockticker_defaults',
				'wsl_settings_social_icon_set',
			),
		),
	) );
}