<?php
/**
 * Theme functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package school_education
 */

if ( ! function_exists( 'school_education_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function school_education_setup() {
		/*
		 * Make theme available for translation.
		 */ 
		load_theme_textdomain( 'school-education', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'school-education-thumb', 400, 300 );

		// Register nav menu locations.
		register_nav_menus( array(
			'primary-menu'  => esc_html__( 'Primary Menu', 'school-education' ),
		) );

		/*
		* This theme styles the visual editor to resemble the theme style,
		* specifically font, colors, icons, and column width.
		*/
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		add_editor_style( array( '/css/editor-style' . $min . '.css', school_education_fonts_url() ) );

		/*
		 * Switch default core markup to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'school_education_custom_background_args', array(
			'default-color' => 'f7fcfe',
		) ) );

		// Enable support for selective refresh of widgets in Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable support for custom logo.
		add_theme_support( 'custom-logo' );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// Load Supports.
		require_once get_template_directory() . '/inc/support.php';

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'school-education' ),
					'shortName' => __( 'S', 'school-education' ),
					'size'      => 13,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'school-education' ),
					'shortName' => __( 'M', 'school-education' ),
					'size'      => 14,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'school-education' ),
					'shortName' => __( 'L', 'school-education' ),
					'size'      => 30,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'school-education' ),
					'shortName' => __( 'XL', 'school-education' ),
					'size'      => 36,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Black', 'school-education' ),
					'slug'  => 'black',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'White', 'school-education' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => __( 'Gray', 'school-education' ),
					'slug'  => 'gray',
					'color' => '#727272',
				),
				array(
					'name'  => __( 'Blue', 'school-education' ),
					'slug'  => 'blue',
					'color' => '#6621ba',
				),
				array(
					'name'  => __( 'Navy Blue', 'school-education' ),
					'slug'  => 'navy-blue',
					'color' => '#6621ba',
				),
				array(
					'name'  => __( 'Light Blue', 'school-education' ),
					'slug'  => 'light-blue',
					'color' => '#f7fcfe',
				),
				array(
					'name'  => __( 'Orange', 'school-education' ),
					'slug'  => 'orange',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'Green', 'school-education' ),
					'slug'  => 'green',
					'color' => '#77a464',
				),
				array(
					'name'  => __( 'Red', 'school-education' ),
					'slug'  => 'red',
					'color' => '#e4572e',
				),
				array(
					'name'  => __( 'Yellow', 'school-education' ),
					'slug'  => 'yellow',
					'color' => '#f4a024',
				),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'school_education_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function school_education_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'school_education_content_width', 771 );
}
add_action( 'after_setup_theme', 'school_education_content_width', 0 );

/**
 * Register widget area.
 */
function school_education_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'school-education' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'school-education' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'school-education' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'school-education' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar 1', 'school-education' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar 1.', 'school-education' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'school_education_widgets_init' );

/**
 * Register custom fonts.
 */
function school_education_fonts_url() {
	$font_family   = array(
		'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
	);
	
	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

/**
 * Enqueue scripts and styles.
 */
function school_education_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'school-education-font-awesome', get_template_directory_uri() . '/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );

	$fonts_url = school_education_fonts_url();
	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'school-education-google-fonts', $fonts_url, array(), null );
	}

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.css');

	// Theme stylesheet.
	wp_enqueue_style( 'school-education-style', get_stylesheet_uri(), null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );

	wp_enqueue_style( 'school-education-style', get_stylesheet_uri() );
	wp_style_add_data( 'school-education-style', 'rtl', 'replace' );

	// Theme block stylesheet.
	wp_enqueue_style( 'school-education-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'school-education-style' ), '20211006' );
	
	wp_enqueue_script( 'school-education-custom-js', get_template_directory_uri(). '/js/custom.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'jquery-superfish', get_theme_file_uri( '/js/jquery.superfish.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'school_education_scripts' );

/**
 * Enqueue styles for the block-based editor.
 *
 * @since School Education
 */
function school_education_block_editor_styles() {
	// Theme block stylesheet.
	wp_enqueue_style( 'school-education-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20101208' );

	$fonts_url = school_education_fonts_url();
	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'school-education-google-fonts', $fonts_url, array(), null );
	}
}
add_action( 'enqueue_block_editor_assets', 'school_education_block_editor_styles' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';

/**
 *  Webfonts 
 */
require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

require_once get_template_directory() . '/inc/recommendations/tgm.php';

require_once get_template_directory() . '/inc/upsell/class-upgrade-pro.php';

require get_template_directory() . '/inc/getting-started/getting-started.php';

require get_template_directory() . '/inc/getting-started/plugin-activation.php';

define('SCHOOL_EDUCATION_SUPPORT',__('https://wordpress.org/support/theme/school-education/','school-education'));
define('SCHOOL_EDUCATION_REVIEW',__('https://wordpress.org/support/theme/school-education/reviews/','school-education'));
define('SCHOOL_EDUCATION_BUY_NOW',__('https://www.mizanthemes.com/elementor/school-wordpress-theme/','school-education'));
define('SCHOOL_EDUCATION_LIVE_DEMO',__('https://www.mizanthemes.com/preview/school-education/','school-education'));
define('SCHOOL_EDUCATION_PRO_DOC',__('https://www.mizanthemes.com/setup-guide/school-education-pro/','school-education'));