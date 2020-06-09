<?php
function morse_wp_template_customizer($wp_customize)
{
    $wp_customize->add_section('morse-wp-template-section', array(
        'title' => "Theme Custom Settings"
    ));
    $wp_customize->add_setting('morse-wp-template-image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'morse-wp-template-image-control', array(
        "label" => "image field",
        "section" => "morse-wp-template-section",
        "settings" => "morse-wp-template-image",
        "width" => 900,
        "height" => 600,
        "flex-width" => true,
        "flex-height" => true
    )));
    $wp_customize->add_setting('morse-wp-template-text');
    $wp_customize->add_control('morse-wp-template-text-control', array(
        'label' => 'text field',
        'type' => 'string',
        'section' => 'morse-wp-template-section',
        'settings' => 'morse-wp-template-home-text'
    ));
}

add_action('customize_register', 'morse_wp_template_customizer');