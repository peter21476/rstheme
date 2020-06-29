<?php

class RestaurantCustomizer {
    public function __construct() {
        add_action('customize_register', array($this, 'register_customize_sections'));
    }

    public function register_customize_sections ($wp_customize) {
        //Initialize section
        $this->header_callout_section($wp_customize);
        $this->section1_callout_section($wp_customize);
    }
    //Header Section Settings and Control
    private function header_callout_section($wp_customize) {
        //New Panel
        $wp_customize->add_section('basic-header-callout-section', array(
            'title'=>'Header',
            'priority'=> 2,
            'description'=>__('Update the Header image and Text', 'restaurant-theme')
        ));


        //Add Setting
        $wp_customize->add_setting('basic-header-callout-display', array(
            'default'=> 'No',
            'sanitize_callback' => array($this, 'sanitize_custom_option')
        ));

        //Add Control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-header-callout-display-control', array(
            'label'=>'Display this section',
            'section' => 'basic-header-callout-section',
            'settings'=> 'basic-header-callout-display',
            'type' => 'select',
            'choices'=>array('No'=>'No', 'Yes'=>'Yes')
        )));


        //Display Main Title Text
        $wp_customize->add_setting('basic-header-callout-text', array(
            'default'=>'',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-header-callout-control', array(
            'label'=>'MainTitle Text',
            'section'=>'basic-header-callout-section',
            'settings'=>'basic-header-callout-text',
            'type'=>'textarea'
        )));

        //Display Sub Title Text
        $wp_customize->add_setting('basic-header-callout-subtext', array(
            'default'=>'',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-header-callout-subtext-control', array(
            'label'=>'SubTitle Text',
            'section'=>'basic-header-callout-section',
            'settings'=>'basic-header-callout-subtext',
            'type'=>'textarea'
        )));

        //Add Author Image
        $wp_customize->add_setting('basic-header-callout-image', array(
            'default'=>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'basic-header-callout-image-control', array(
            'label'=>'Image',
            'section'=>'basic-header-callout-section',
            'settings'=>'basic-header-callout-image',
            'width'=> 1600,
            'height'=>1200
        )));
    }


    //SECTION 1
    //Header Section Settings and Control
    private function section1_callout_section($wp_customize) {
        //New Panel
        $wp_customize->add_section('basic-section1-callout-section', array(
            'title'=>'Section 1',
            'priority'=> 2,
            'description'=>__('Update the Content of Section 1', 'restaurant-theme')
        ));


        //Add Setting
        $wp_customize->add_setting('basic-section1-callout-display', array(
            'default'=> 'No',
            'sanitize_callback' => array($this, 'sanitize_custom_option')
        ));

        //Add Control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-section1-callout-display-control', array(
            'label'=>'Display this section',
            'section' => 'basic-section1-callout-section',
            'settings'=> 'basic-section1-callout-display',
            'type' => 'select',
            'choices'=>array('No'=>'No', 'Yes'=>'Yes')
        )));


        //Display Main Title Text
        $wp_customize->add_setting('basic-section1-callout-text', array(
            'default'=>'',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-section1-callout-control', array(
            'label'=>'Header Section One Text',
            'section'=>'basic-section1-callout-section',
            'settings'=>'basic-section1-callout-text',
            'type'=>'text'
        )));

        //Display Content Text
        $wp_customize->add_setting('basic-section1-callout-subtext', array(
            'default'=>'',
            'sanitize_callback' => array($this, 'sanitize_textarea_field')
        ));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-section1-callout-subtext-control', array(
            'label'=>'Content Text',
            'section'=>'basic-section1-callout-section',
            'settings'=>'basic-section1-callout-subtext',
            'type'=>'textarea'
        )));

        //Add Author Image
        $wp_customize->add_setting('basic-section1-callout-image', array(
            'default'=>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'basic-section1-callout-image-control', array(
            'label'=>'Image',
            'section'=>'basic-section1-callout-section',
            'settings'=>'basic-section1-callout-image',
            'width'=> 600,
            'height'=>450
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

    public function sanitize_textarea_field($input) {
        $filtered = _sanitize_text_fields( $input, true );
        return apply_filters( 'sanitize_textarea_field', $filtered, $input );
    }
}

