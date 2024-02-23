<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school_education
 */

	/**
	 * Hook - school_education_action_after_content.
	 *
	 * @hooked school_education_content_end - 10
	 */
	do_action( 'school_education_action_after_content' );
?>

	<?php
	/**
	 * Hook - school_education_action_before_footer.
	 *
	 * @hooked school_education_add_footer_bottom_widget_area - 5
	 * @hooked school_education_footer_start - 10
	 */
	do_action( 'school_education_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - school_education_action_footer.
	   *
	   * @hooked school_education_footer_copyright - 10
	   */
	  do_action( 'school_education_action_footer' );
	?>
	<?php
	/**
	 * Hook - school_education_action_after_footer.
	 *
	 * @hooked school_education_footer_end - 10
	 */
	do_action( 'school_education_action_after_footer' );
	?>

<?php
	/**
	 * Hook - school_education_action_after.
	 *
	 * @hooked school_education_page_end - 10
	 * @hooked school_education_footer_goto_top - 20
	 */
	do_action( 'school_education_action_after' );
?>

<?php wp_footer(); ?>
</body>
</html>
