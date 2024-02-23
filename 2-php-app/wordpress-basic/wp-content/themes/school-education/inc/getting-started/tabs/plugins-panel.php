<?php
/**
 * Plugin Panel.
 *
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left">
    <div id="Mizan_Demo_Importor_editor" class="tabcontent">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = School_Education_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $school_education_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="school-education-recommended-plugins ">
                    <div class="school-education-action-list">
                        <?php if ($school_education_actions): foreach ($school_education_actions as $key => $school_education_actionValue): ?>
                                <div class="school-education-action" id="<?php echo esc_attr($school_education_actionValue['id']);?>">
                                    <div class="action-inner plugin-activation-redirect">
                                        <h4 class="action-title"><?php echo esc_html($school_education_actionValue['title']); ?></h4>
                                        <div class="action-desc"><?php echo esc_html($school_education_actionValue['desc']); ?></div>
                                        <?php echo wp_kses_post($school_education_actionValue['link']); ?>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
            </div>
        <?php }else{ ?>
            <div class="tab-outer-box">
                <h2><?php esc_html_e( 'Welcome to Mizan Theme!', 'school-education' ); ?></h2>
                <p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'school-education' ); ?></p>
                <p><?php esc_html_e( '1. Install Mizan Demo Importor', 'school-education' ); ?></p>
                <p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'school-education' ); ?></p>
                <p><?php esc_html_e( '2. Activate Mizan Demo Importor ', 'school-education' ); ?></p>
                <p><?php esc_html_e( '>> Click on the start now button', 'school-education' ); ?></p>
                <p><?php esc_html_e( '>> Click install plugins', 'school-education' ); ?></p>
                <p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'school-education' ); ?></p>
            </div>
        <?php } ?>
    </div>
</div><!-- .panel-left -->