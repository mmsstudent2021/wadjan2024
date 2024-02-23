<?php
/**
 * Start Elementor.
 *
 */
?>
<!-- Start Elementor -->
<div id="start-panel" class="panel-left visible">
    <div id="school-education-importer" class="tabcontent open">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = School_Education_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $school_education_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="school-education-recommended-plugins ">
                    <div class="school-education-action-list">
                        <?php if ($school_education_actions): foreach ($school_education_actions as $key => $school_education_actionValue): ?>
                                <div class="school-education-action" id="<?php echo esc_attr($school_education_actionValue['id']);?>">
                                    <div class="action-inner plugin-activation-redirect">
                                        <h3 class="action-title"><?php echo esc_html($school_education_actionValue['title']); ?></h3>
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
                <h3><?php esc_html_e('Welcome to Mizan Themes', 'school-education'); ?></h3>
                <p class="start-text"><?php esc_html_e('The demo will import after you click the Start Quickly button.', 'school-education'); ?></p>
                <div class="info-link">
                    <a class="button button-primary" href="<?php echo esc_url( admin_url('admin.php?page=mizandemoimporter-wizard') ); ?>"><?php esc_html_e('Start Quickly', 'school-education'); ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
