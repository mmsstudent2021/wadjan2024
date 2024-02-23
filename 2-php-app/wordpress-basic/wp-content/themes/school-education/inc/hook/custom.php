<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package school_education
 */

if ( ! function_exists( 'school_education_skip_to_content' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function school_education_skip_to_content() {
	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'school-education' ); ?></a><?php
	}
endif;

add_action( 'school_education_action_before', 'school_education_skip_to_content', 15 );

// Middle Header

if ( ! function_exists( 'school_education_site_branding' ) ) :

	/**
	 * Site branding.
	 *
	 * @since 1.0.0
	 */
	function school_education_site_branding() {
		$school_education_header_top_text = school_education_get_option( 'school_education_header_top_text' );
		$school_education_header_top_button_text = school_education_get_option( 'school_education_header_top_button_text' );
		$school_education_header_top_button_link = school_education_get_option( 'school_education_header_top_button_link' );

		$school_education_header_top_myacount_btn_link = school_education_get_option( 'school_education_header_top_myacount_btn_link' );
	
		$school_education_data_sticky = school_education_get_option( 'school_education_show_data_sticky_setting' );

		?>

		<div class="topheader">
			<div class="container">
				<?php if( !empty($school_education_header_top_text) || !empty($school_education_header_top_button_text) || !empty($school_education_header_top_button_text) ):?>
					<p class="mb-0"><?php echo esc_html($school_education_header_top_text);?><a href="<?php echo esc_url($school_education_header_top_button_link);?>"><?php echo esc_html($school_education_header_top_button_text);?></a></p>
				<?php endif; ?>
			</div>
		</div>

		<div id="middle-header" data-sticky= "<?php echo esc_attr($school_education_data_sticky); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 align-self-center">
					    <div class="site-branding mb-3 mb-lg-0">
							<?php school_education_the_custom_logo(); ?>
							<?php $school_education_show_title = school_education_get_option( 'school_education_show_title' ); ?>
							<?php $school_education_show_tagline = school_education_get_option( 'school_education_show_tagline' ); ?>
							<?php if ( true === $school_education_show_title || true === $school_education_show_tagline ) :  ?>
								<div id="site-identity" class="text-center text-md-center text-lg-start">
									<?php if ( true === $school_education_show_title ) :  ?>
										<?php if ( is_front_page() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php endif; ?>
									<?php endif; ?>
									<?php if ( true === $school_education_show_tagline ) :  ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
					    </div>
					</div>
					<div class="col-lg-8 col-md-8 col-3 align-self-center">
						<?php if(has_nav_menu('primary-menu')){?>
							<div class="toggle-menu gb_menu text-md-start">
								<button onclick="school_education_gb_Menu_open()" class="gb_toggle"><?php esc_html_e('Menu','school-education'); ?></button>
							</div>
						<?php }?>
						<div id="gb_responsive" class="nav side_gb_nav">
							<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'school-education' ); ?>">
								<?php 
								    wp_nav_menu( array( 
										'theme_location' => 'primary-menu',
										'container_class' => 'gb_navigation clearfix' ,
										'menu_class' => 'clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
								    ) ); 
								?>
								<a href="javascript:void(0)" class="closebtn gb_menu" onclick="school_education_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','school-education'); ?></span></a>
							</nav>
						</div>
					</div>
					<div class="col-lg-1 col-md-1 col-9 align-self-center">
						<div class="nav-btn text-end">
							<?php if( !empty($school_education_header_top_myacount_btn_link) ):?>
								<a href="<?php echo esc_url($school_education_header_top_myacount_btn_link);?>"><span class="dashicons dashicons-admin-users"></span></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <?php
	}

endif;

add_action( 'school_education_action_header', 'school_education_site_branding' );


/////////////////////////////////// copyright start /////////////////////////////

if ( ! function_exists( 'school_education_footer_copyright' ) ) :

	/**
	 * Footer copyright
	 *
	 * @since 1.0.0
	 */
	function school_education_footer_copyright() {

		// Check if footer is disabled.
		$school_education_footer_status = apply_filters( 'school_education_filter_footer_status', true );
		if ( true !== $school_education_footer_status ) {
			return;
		}

		// Copyright content.
		$school_education_copyright_text = school_education_get_option( 'school_education_copyright_text' );
		$school_education_copyright_text = apply_filters( 'school_education_filter_copyright_text', $school_education_copyright_text );
		if ( ! empty( $school_education_copyright_text ) ) {
			$school_education_copyright_text = wp_kses_data( $school_education_copyright_text );
		}

		// Powered by content.
		$school_education_powered_by_text = sprintf( __( 'School Education by %s', 'school-education' ), '<span>' . __( 'Mizan Themes', 'school-education' ) . '</span>' );
		?>

		<div class="colophon-inner">
		    <?php if ( ! empty( $school_education_copyright_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="copyright">
			    		<?php echo $school_education_copyright_text; ?>
			    	</div><!-- .copyright -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		    <?php if ( ! empty( $school_education_powered_by_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="site-info">
			    		<?php echo $school_education_powered_by_text; ?>
			    	</div><!-- .site-info -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		</div><!-- .colophon-inner -->
		
	    <?php
	}

endif;

add_action( 'school_education_action_footer', 'school_education_footer_copyright', 10 );

// /////////////////////////////////sidebar//////////////////


if ( ! function_exists( 'school_education_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function school_education_add_sidebar() {

		global $post;

		$school_education_global_layout = school_education_get_option( 'school_education_global_layout' );
		$school_education_global_layout = apply_filters( 'school_education_filter_theme_global_layout', $school_education_global_layout );

		// Check if single.
		if ( $post && is_singular() ) {
			$school_education_post_options = get_post_meta( $post->ID, 'school_education_theme_settings', true );
			if ( isset( $school_education_post_options['post_layout'] ) && ! empty( $school_education_post_options['school_education_post_layout'] ) ) {
				$school_education_global_layout = $school_education_post_options['school_education_post_layout'];
			}
		}

		// Include primary sidebar.
		if ( 'no-sidebar' !== $school_education_global_layout ) {
			get_sidebar();
		}
		// Include Secondary sidebar.
		switch ( $school_education_global_layout ) {
			case 'three-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

		// Include Secondary sidebar 1.
		switch ( $school_education_global_layout ) {
			case 'four-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

	}

endif;

add_action( 'school_education_action_sidebar', 'school_education_add_sidebar' );

//////////////////////////////////////// single page


if ( ! function_exists( 'school_education_add_image_in_single_display' ) ) :

	/**
	 * Add image in single post.
	 *
	 * @since 1.0.0
	 */
	function school_education_add_image_in_single_display() {

		global $post;

		if ( has_post_thumbnail() ) {

			$values = get_post_meta( $post->ID, 'school_education_theme_settings', true );
			$school_education_theme_settings_single_image = isset( $values['school_education_single_image'] ) ? esc_attr( $values['school_education_single_image'] ) : '';

			if ( ! $school_education_theme_settings_single_image ) {
				$school_education_theme_settings_single_image = school_education_get_option( 'school_education_single_image' );
			}

			if ( 'disable' !== $school_education_theme_settings_single_image ) {
				$args = array(
					'class' => 'aligncenter',
				);
				the_post_thumbnail( esc_attr( $school_education_theme_settings_single_image ), $args );
			}
		}

	}

endif;

add_action( 'school_education_single_image', 'school_education_add_image_in_single_display' );

if ( ! function_exists( 'school_education_footer_goto_top' ) ) :

	/**
	 * Go to top.
	 *
	 * @since 1.0.0
	 */
	function school_education_footer_goto_top() {
        
        $school_education_show_scroll_to_top = school_education_get_option( 'school_education_show_scroll_to_top' );
        if ( true === $school_education_show_scroll_to_top ) :
		echo '<a href="#page" class="scrollup" id="btn-scrollup"><i class="fa fa-angle-up"><span class="screen-reader-text">' . esc_html__( 'Scroll Up', 'school-education' ) . '</span></i></a>';
		endif;

	}

endif;

add_action( 'school_education_action_after', 'school_education_footer_goto_top', 20 );