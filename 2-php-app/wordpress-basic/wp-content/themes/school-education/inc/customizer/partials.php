<?php
/**
 * Customizer partials.
 *
 * @package school_education
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function school_education_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function school_education_customize_partial_blogdescription() {

	bloginfo( 'description' );

}

/**
 * Partial for copyright text.
 *
 * @since 1.0.0
 *
 * @return void
 */
function school_education_render_partial_copyright_text() {

	$school_education_copyright_text = school_education_get_option( 'school_education_copyright_text' );
	$school_education_copyright_text = apply_filters( 'school_education_filter_copyright_text', $school_education_copyright_text );
	if ( ! empty( $school_education_copyright_text ) ) {
		$school_education_copyright_text = wp_kses_data( $school_education_copyright_text );
	}
	echo $school_education_copyright_text;

}
