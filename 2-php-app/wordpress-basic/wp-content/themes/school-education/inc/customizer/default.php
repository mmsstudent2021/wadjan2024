<?php
/**
 * Default theme options.
 *
 * @package school_education
 */

if ( ! function_exists( 'school_education_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function school_education_get_default_theme_options() {

		$defaults = array();

		//General Option
        $defaults['school_education_show_scroll_to_top']          = true;
        $defaults['school_education_show_preloader_setting']      = false;
        $defaults['school_education_show_data_sticky_setting']    = false;

        //Post Option
        $defaults['school_education_show_post_date_setting']           = true;
        $defaults['school_education_show_post_heading_setting']        = true;
        $defaults['school_education_show_post_content_setting']        = true;

		// Header.
		$defaults['school_education_show_title']            = true;
		$defaults['school_education_show_tagline']          = false;
		$defaults['school_education_show_social_in_header'] = false;
		$defaults['school_education_search_in_header']      = true;

		// Layout.
		$defaults['school_education_global_layout']           = 'right-sidebar';
		$defaults['school_education_archive_layout']          = 'excerpt';
		$defaults['school_education_archive_image']           = 'large';
		$defaults['school_education_archive_image_alignment'] = 'center';
		$defaults['school_education_single_image']            = 'large';

		// Home Page.
		$defaults['school_education_home_content_status'] = true;
		
		// Footer.
		$defaults['school_education_copyright_text']        = esc_html__( 'Copyright &copy; All rights reserved.', 'school-education' );
		
		// Pass through filter.
		$defaults = apply_filters( 'school_education_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
