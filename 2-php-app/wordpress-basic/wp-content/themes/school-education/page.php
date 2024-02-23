<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school_education
 */

get_header(); ?>

<?php if ( true === apply_filters( 'school_education_filter_home_page_content', true ) ) : ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
				?>
			<?php endwhile;?>
		</main>
	</div>
<?php
	do_action( 'school_education_action_sidebar' );
?>
<?php endif;?>
<?php get_footer(); ?>
