<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package school_education
 */

?>
<div class="blog-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php $school_education_archive_layout = school_education_get_option( 'school_education_archive_layout' ); ?>
		<div class="blog-img">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php
				$school_education_archive_image           = school_education_get_option( 'school_education_archive_image' );
				$school_education_archive_image_alignment = school_education_get_option( 'school_education_archive_image_alignment' );
				?>
				<?php if ( 'disable' !== $school_education_archive_image ) : ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( esc_attr( $school_education_archive_image ), array( 'class' => 'align'. esc_attr( $school_education_archive_image_alignment ) ) ); ?></a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="entry-content-wrapper">
			<?php school_education_entry_meta_date(); ?>
			<?php $school_education_show_post_heading = school_education_get_option( 'school_education_show_post_heading_setting' );
			if ( true === $school_education_show_post_heading ) { ?>
				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</header>
			<?php } ?>
			<footer class="entry-footer">
				<?php school_education_entry_footer(); ?>
			</footer>
		</div>
		<?php $school_education_show_post_content = school_education_get_option( 'school_education_show_post_content_setting' );
		if ( true === $school_education_show_post_content ) { ?>
			<div class="text-content">
				<?php if ( 'full' === $school_education_archive_layout ) : ?>
					<?php
					the_content( sprintf(
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'school-education' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'school-education' ),
							'after'  => '</div>',
						) );
					?>
			    <?php else : ?>
					<?php the_excerpt(); ?>
			    <?php endif; ?>
			</div>
		<?php } ?>
	</article>
</div>

