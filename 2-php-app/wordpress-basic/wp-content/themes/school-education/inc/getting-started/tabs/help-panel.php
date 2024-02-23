<?php
/**
 * Help Panel.
 *
 */
?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left">
    <div class="panel-aside">
        <h4><?php esc_html_e( 'Theme Customizer', 'school-education' ); ?></h4>
        <p><?php esc_html_e( 'To begin customizing your website, start by clicking "Customize"', 'school-education' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( admin_url('customize.php') ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'school-education' ); ?>" target="_blank">
            <?php esc_html_e( 'Customizing', 'school-education' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Support Ticket', 'school-education' ); ?></h4>
        <p><?php esc_html_e( 'Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme', 'school-education' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( SCHOOL_EDUCATION_SUPPORT ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'school-education' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'school-education' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Reviews & Testimonials', 'school-education' ); ?></h4>
        <p><?php esc_html_e( 'All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'school-education' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( SCHOOL_EDUCATION_REVIEW ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'school-education' ); ?>" target="_blank">
            <?php esc_html_e( 'Review', 'school-education' ); ?>
        </a>
    </div><!-- .panel-aside -->
</div>
