<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school_education
 */

?>
<?php
	/**
	 * Hook - school_education_action_doctype.
	 *
	 * @hooked school_education_doctype -  10
	 */
	do_action( 'school_education_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - school_education_action_head.
	 *
	 * @hooked school_education_head -  10
	 */
	do_action( 'school_education_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<?php 
	$school_education_show_preloader = school_education_get_option( 'school_education_show_preloader_setting' );
        if ( true === $school_education_show_preloader ) : ?>
			<div id="preloader" class="loader-head">
				<div class="preloader">
				    <div class="spinner"></div>
				    <div class="spinner-2"></div>
				</div>
			</div>
	<?php endif; ?>

	<?php
	/**
	 * Hook - school_education_action_before.
	 *
	 * @hooked school_education_page_start - 10
	 * @hooked school_education_skip_to_content - 15
	 */
	do_action( 'school_education_action_before' );
	?>

    <?php
	  /**
	   * Hook - school_education_action_before_header.
	   *
	   * @hooked school_education_header_start - 10
	   */
	  do_action( 'school_education_action_before_header' );
	?>
		<?php
		/**
		 * Hook - school_education_action_header.
		 *
		 * @hooked school_education_site_branding - 10
		 */
		do_action( 'school_education_action_header' );
		?>
    <?php
	  /**
	   * Hook - school_education_action_after_header.
	   *
	   * @hooked school_education_header_end - 10
	   */
	  do_action( 'school_education_action_after_header' );
	?>

	<?php
	/**
	 * Hook - school_education_action_before_content.
	 *
	 * @hooked school_education_content_start - 10
	 */
	do_action( 'school_education_action_before_content' );
	?>

	<!-- <?php
	  /**
	   * Hook - school_education_action_content.
	   */
	  do_action( 'school_education_action_content' );
	?> -->