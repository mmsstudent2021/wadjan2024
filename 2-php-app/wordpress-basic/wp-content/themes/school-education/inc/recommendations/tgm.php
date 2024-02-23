<?php
	
require get_template_directory() . '/inc/recommendations/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function school_education_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Mizan Demo Importor', 'school-education' ),
			'slug'             => 'mizan-demo-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Royal Elementor Addons and Templates', 'school-education' ),
			'slug'             => 'royal-elementor-addons',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ivory Search – WordPress Search Plugin', 'school-education' ),
			'slug'             => 'add-search-to-menu',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'school-education' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	school_education_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'school_education_register_recommended_plugins' );