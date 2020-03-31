<?php
function morse_customize_colors($wp_customize)
{
    $wp_customize->add_section('plip-ad-sec', array(
        'title' => 'Advertisements'
    ));
    $wp_customize->add_setting('plip-ad-homewide');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'plip-ad-homewide-control', array(
        'label' => 'Home Wide Ad',
        'section' => 'plip-ad-sec',
        'settings' => 'plip-ad-homewide',
        'width' => 1200,
        'height' => 200,
        'flex-width' => true,
        'flex-height' => true
    )));
}

add_action('customize_register', 'morse_customize_colors');