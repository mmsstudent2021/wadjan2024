<?php
/**
 * The Primary Sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package school_education
 */

?>
<?php $default_sidebar = apply_filters( 'school_education_filter_default_sidebar_id', 'sidebar-1', 'primary' ); ?>
<div id="sidebar-primary" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $default_sidebar ) ) : ?>
		<?php dynamic_sidebar( $default_sidebar ); ?>
	<?php else : ?>
		<div class="widget custom-archive-widget">
		  <h2 class="widget-title"><?php esc_html_e('Search','school-education'); ?></h2>
		  <?php get_search_form(); ?>
		</div>
		<div class="widget custom-archive-widget">
		  <h2 class="widget-title"><?php esc_html_e('Archive','school-education'); ?></h2>
		  <ul>
		    <?php wp_get_archives(array('type' => 'monthly', 'show_post_count' => true)); ?>
		  </ul>
		</div>
		<div class="widget custom-archive-widget">
		  <h2 class="widget-title"><?php esc_html_e('Recent Posts','school-education'); ?></h2>
		  <ul>
		    <?php
		      $args = array(
		        'post_type'      => 'post',
		        'posts_per_page' => 5, // Number of recent posts to display
		      );

		      $recent_posts = new WP_Query($args);

		      while ($recent_posts->have_posts()) : $recent_posts->the_post();
		    ?>
		      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		    <?php
		      endwhile;
		      wp_reset_postdata(); // Reset the query
		    ?>
		  </ul>
		</div>
		<div class="widget custom-archive-widget">
		  <h2 class="widget-title"><?php esc_html_e('Categories','school-education'); ?></h2>
		  <ul>
		    <?php
		      $args = array(
		        'orderby'    => 'name',
		        'order'      => 'ASC',
		        'hide_empty' => true,
		      );

		      wp_list_categories($args);
		    ?>
		  </ul>
		</div>

	<?php endif ?>
</div>
