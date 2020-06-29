<?php

class Customizer {
    public function __construct() {
        add_action('customize_register', array($this, 'register_customize_sections'));
    }

    public function register_customize_sections ($wp_customize) {
        //Initialize section
        $this->author_callout_section($wp_customize);
    }
    //Author Section Settings and Control
    private function author_callout_section($wp_customize) {
        //New Panel
        $wp_customize->add_section('basic-author-callout-section', array(
            'title'=>'Author',
            'priority'=> 2,
            'description'=>__('The Authir section is only displayed', 'restaurant-theme')
        ));

        //Add Setting
        $wp_customize->add_setting('basic-author-callout-display', array(
            'default'=> 'No',
            'sanitize_callback' => array($this, 'sanitize_custom_option')
        ));

        //Add Control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-display-control', array(
            'label'=>'Display this section',
            'section' => 'basic-author-callout-section',
            'settings'=> 'basic-author-callout-display',
            'type' => 'select',
            'choices'=>array('No'=>'No', 'Yes'=>'Yes')
        )));

        //Display Author Text
        $wp_customize->add_setting('basic-author-callout-text', array(
            'default'=>'',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-author-callout-control', array(
            'label'=>'About Author',
            'section'=>'basic-author-callout-section',
            'settings'=>'basic-author-callout-text',
            'type'=>'textarea'
        )));

        //Add Author Image
        $wp_customize->add_setting('basic-author-callout-image', array(
            'default'=>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'basic-author-callout-image-control', array(
            'label'=>'Image',
            'section'=>'basic-author-callout-section',
            'settings'=>'basic-author-callout-image',
            'width'=> 442,
            'height'=>310
        )));
    }
    //Sanitize Functions
    public function sanitize_custom_option($input) {
        return ($input === 'No') ? 'No' : 'Yes';
    }

    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
}

