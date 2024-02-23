<?php

if (!defined('ABSPATH')) {
die('No direct access.');
}

/**
 * Flex Slider specific markup, javascript, css and settings.
 */
class MetaFlexSlider extends MetaSlider
{
    protected $js_function = 'flexslider';
    protected $js_path = 'sliders/flexslider/jquery.flexslider.min.js';
    protected $css_path = 'sliders/flexslider/flexslider.css';

    /**
     * Constructor
     *
     * @param integer $id slideshow ID
     */
    /**
     * Constructor
     *
     * @param int   $id                 ID
     * @param array $shortcode_settings Short code settings
     */
    public function __construct($id, $shortcode_settings)
    {
        parent::__construct($id, $shortcode_settings);

        add_filter('metaslider_flex_slider_parameters', array( $this, 'enable_carousel_mode' ), 10, 2);
        add_filter('metaslider_flex_slider_parameters', array( $this, 'manage_easing' ), 10, 2);

        if(metaslider_pro_is_active() == false) {
            add_filter('metaslider_flex_slider_parameters', array( $this, 'metaslider_flex_loop'), 99, 3);
        }

        if( metaslider_pro_is_active() ) {
            add_filter( 'metaslider_flex_slider_parameters', array( $this, 'custom_delay_per_slide' ), 10, 3 );
        }
        
        add_filter('metaslider_css', array( $this, 'get_carousel_css' ), 11, 3);
        add_filter('metaslider_css', array( $this, 'hide_for_mobile' ), 11, 3);
        add_filter('metaslider_css_classes', array( $this, 'remove_bottom_margin' ), 11, 3);

        $global_settings = get_option( 'metaslider_global_settings' );
        if (
            !isset($global_settings['mobileSettings']) ||
            (isset($global_settings['mobileSettings']) && true == $global_settings['mobileSettings'])
        ) {
            if($this->check_mobile_settings() == true) {
                add_filter("metaslider_flex_slider_javascript_before", array( $this, 'manage_responsive' ), 10, 3);
            }
        }
        
    }

    /**
     * Adjust the slider parameters so they're comparible with the carousel mode
     *
     * @param array   $options   Slider options
     * @param integer $slider_id Slider ID
     * @return array $options
     */
    public function enable_carousel_mode($options, $slider_id)
    {
        if (isset($options["carouselMode"])) {
            if ($options["carouselMode"] == "true") {
                $options["itemWidth"] = $this->get_setting('width');
                $options["animation"] = "'slide'";
                $options["direction"] = "'horizontal'";
                $options["minItems"] = 1;
                $options["itemMargin"] = apply_filters('metaslider_carousel_margin', $this->get_setting('carouselMargin'), $slider_id);
            }

            unset($options["carouselMode"]);
        }

        // we don't want this filter hanging around if there's more than one slideshow on the page
        remove_filter('metaslider_flex_slider_parameters', array( $this, 'enable_carousel_mode' ), 10, 2);

        return $options;
    }

    /**
     * Ensure CSS transitions are disabled when easing is enabled.
     *
     * @param array   $options   Slider options
     * @param integer $slider_id Slider ID
     * @return array $options
     */
    public function manage_easing($options, $slider_id)
    {

        if ($options["animation"] == '"fade"') {
            unset($options['easing']);
        }

        if (isset($options["easing"]) && $options["easing"] != '"linear"') {
            $options['useCSS'] = 'false';
        }


        // we don't want this filter hanging around if there's more than one slideshow on the page
        remove_filter('metaslider_flex_slider_parameters', array( $this, 'manage_easing' ), 10, 2);

        return $options;
    }

    /**
     * Add optional custom delay per slide
     * 
     * @since 3.61
     */
    public function custom_delay_per_slide( $options, $slider_id, $settings )
    {
        if ( class_exists( 'MetaSliderAdvancedSettings' ) ) {
            $get_slides = $this->get_slides();
            $advancedSettings = new MetaSliderAdvancedSettings;

            $options = $advancedSettings->build_custom_delay_js(
                $options,
                $settings,
                $get_slides->posts
            );
        }

        return $options;
    }

     /**
     * Add JavaScript to stop slideshow
     *
     * @param array $options SLide options
     * @param integer $slider_id Slider ID
     * @param array $settings Slide settings
     * @return array
     */
    public function metaslider_flex_loop($options, $slider_id, $settings)
    {
        if (isset($settings['loop']) && 'stopOnFirst' === $settings['loop']) {
            $options['after'] = isset($options['after']) ? $options['after'] : array();
            $options['after'] = array_merge(
                $options['after'],
                array("if (slider.currentSlide == 0) { slider.pause(); }")
            );
        }

        if (isset($settings['loop']) && 'stopOnLast' === $settings['loop']) {
            $options['animationLoop'] = "false";
        }

        return $options;
    }

    /**
     * Add a 'nav-hidden' class to slideshows where the navigation is hidde
     *
     * @param  string $class    Slider class
     * @param  int    $id       Slider ID
     * @param  array  $settings Slider Settings
     * @return string
     */
    public function remove_bottom_margin($class, $id, $settings)
    {
        if (isset($settings["navigation"]) && 'false' == $settings['navigation']) {
            return $class .= " nav-hidden";
        }

        // We don't want this filter hanging around if there's more than one slideshow on the page
        remove_filter('metaslider_css_classes', array($this, 'remove_bottom_margin' ), 12);
        return $class;
    }

    /**
     * Return css to ensure our slides are rendered correctly in the carousel
     *
     * @param string  $css       Css
     * @param array   $settings  Css settings
     * @param integer $slider_id SliderID
     * @return string $css
     */
    public function get_carousel_css($css, $settings, $slider_id)
    {
        if (isset($settings["carouselMode"]) && $settings['carouselMode'] == 'true') {
            $margin = apply_filters('metaslider_carousel_margin', $this->get_setting('carouselMargin'), $slider_id);
            $css .= "\n        #metaslider_{$slider_id}.flexslider .slides li {margin-right: {$margin}px !important;}";
        }

        // we don't want this filter hanging around if there's more than one slideshow on the page
        remove_filter('metaslider_css', array( $this, 'get_carousel_css' ), 11, 3);

        return $css;
    }

    /**
     * Hide slideshow with mobile settings on first load
     */
    public function hide_for_mobile($css, $settings, $slider_id)
    {
        $global_settings = get_option( 'metaslider_global_settings' );
        if ( isset($global_settings['mobileSettings']) && true == $global_settings['mobileSettings']
        ){
            if($this->check_mobile_settings() == true) {
                $css .= "\n        #metaslider_{$slider_id}.flexslider {display: none;}";
            }
        }
        remove_filter('metaslider_css', array( $this, 'hide_for_mobile' ), 11, 3);
        return $css;
    }

    /**
     * Enable the parameters that are accepted by the slider
     *
     * @param  string $param Parameters
     * @return array|boolean enabled parameters (false if parameter doesn't exist)
     */
    protected function get_param($param)
    {
        $params = array(
            'effect' => 'animation',
            'direction' => 'direction',
            'prevText' => 'prevText',
            'nextText' => 'nextText',
            'delay' => 'slideshowSpeed',
            'animationSpeed' => 'animationSpeed',
            'hoverPause' => 'pauseOnHover',
            'reverse' => 'reverse',
            'keyboard' => 'keyboard',
            'touch' => 'touch',
            'navigation' => 'controlNav',
            'links' => 'directionNav',
            'carouselMode' => 'carouselMode',
            'easing' => 'easing',
            'autoPlay' => 'slideshow',
            'firstSlideFadeIn' => 'fadeFirstSlide',
            'smoothHeight' => 'smoothHeight'
        );
        return isset($params[$param]) ? $params[$param] : false;
    }

    /**
     * Include slider assets
     */
    public function enqueue_scripts()
    {
        parent::enqueue_scripts();

        if ($this->get_setting('printJs') == 'true' && ( $this->get_setting('effect') == 'slide' || $this->get_setting('carouselMode') == 'true' )) {
            wp_enqueue_script('metaslider-easing', METASLIDER_ASSETS_URL . 'easing/jQuery.easing.min.js', array( 'jquery' ), METASLIDER_ASSETS_VERSION);
        }
    }

    /**
     * Build the HTML for a slider.
     *
     * @return string slider markup.
     */
    protected function get_html()
    {
        $class = $this->get_setting('noConflict') == 'true' ? "" : ' class="flexslider"';
        $return_value = '';
        if($this->check_mobile_settings() == true) {
            $return_value .= '<div id="temp_' . $this->get_identifier() . '" class="flexslider">';
            $return_value .= "<ul aria-live=\"polite\" class=\"slides\"></ul></div>";
        }
        $return_value .= '<div id="' . $this->get_identifier() . '"' . $class . '>';
        $return_value .= "\n            <ul aria-live=\"polite\" class=\"slides\">";

        foreach ($this->slides as $slide) {
            // backwards compatibility with older versions of MetaSlider Pro (< v2.0)
            // MS Pro < 2.0 does not include the <li>
            // MS Pro 2.0+ returns the <li>
            if (strpos($slide, '<li') === 0) {
                $return_value .= "\n                " . $slide;
            } else {
                $return_value .= "\n                <li style=\"display: none;\" >" . $slide . "</li>";
            }
        }

        $return_value .= "\n            </ul>";
        $return_value .= "\n        </div>";

        // show the first slide
        if ($this->get_setting('carouselMode') != 'true') {
            $return_value =  preg_replace('/none/', 'block', $return_value, 1);
        }

        return apply_filters('metaslider_flex_slider_get_html', $return_value, $this->id, $this->settings);
    }


    private function print_flex_js($device){
        $js = '';
        $identifier = $this->get_identifier();
        $js .= "\n liHTML.forEach((slideHTML, index) => {
            $('#temp_" . $identifier . " .slides').append(slideHTML);
        })";
        return $js;
    }

    /**
     * Function to show/hide slides per device on FlexSlider
     */
    public function manage_responsive($javascript)
    {
        $js = $javascript;
        $identifier = $this->get_identifier();
        $global_settings = get_option( 'metaslider_global_settings' );
        if (
            !isset($global_settings['mobileSettings']) ||
            (isset($global_settings['mobileSettings']) && true == $global_settings['mobileSettings'])
        ) {
            if($this->check_mobile_settings() == true) {
                $js .= "\n jQuery(document).ready(function($){";
                $js .= "\n     var newBreakpoint = window.getComputedStyle(document.body, ':after').getPropertyValue('content');";
                $js .= '         newBreakpoint = newBreakpoint.replace(/"/g, "");';
                $js .= "\n       if (newBreakpoint == 'smartphone') {";
                $js .= "\n     var liHTML = $('#" . $identifier . " .slides li:not(.clone, .hidden_smartphone)').removeAttr('style').toArray();";
                $js .= $this->print_flex_js('smartphone');
                $js .= "\n       }";
                $js .= "\n       if (newBreakpoint == 'tablet') {";
                $js .= "\n     var liHTML = $('#" . $identifier . " .slides li:not(.clone, .hidden_tablet)').removeAttr('style').toArray();";
                $js .= $this->print_flex_js('tablet');
                $js .= "\n       }";
                $js .= "\n       if (newBreakpoint == 'laptop') {";
                $js .= "\n     var liHTML = $('#" . $identifier . " .slides li:not(.clone, .hidden_laptop)').removeAttr('style').toArray();";
                $js .= $this->print_flex_js('laptop');
                $js .= "\n       }";
                $js .= "\n       if (newBreakpoint == 'desktop') {";
                $js .= "\n     var liHTML = $('#" . $identifier . " .slides li:not(.clone, .hidden_desktop)').removeAttr('style').toArray();";
                $js .= $this->print_flex_js('desktop');
                $js .= "\n       }";
                $js .= "\n     $('#" . $identifier . "').remove();";
                $js .= "\n     $('#temp_" . $identifier . "')." . $this->js_function . "({ ";
                $js .= "\n        " . $this->_get_javascript_parameters();
                $js .= "\n     });";
                $js .= "\n     $('#temp_" . $identifier . "').attr('id', '" . $identifier . "');";
                $js .= "\n     $(document).trigger('metaslider/initialized', '#" . $identifier . "');";
                $js .= "\n     $('#" . $identifier . "').show();";
                $js .= "\n });";
            }
        }

        return $js;
    }
}
