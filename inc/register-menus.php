<?php
function morse_register_menus()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Header Navigation'),
        'secondary' => __('Footer Navigation'),
        'home-cats' => __('Home Category Bar'),
        'sections-1' => __('Sections Dropdown 1'),
        'sections-2' => __('Sections Dropdown 2'),
        'sections-3' => __('Sections Dropdown 3'),
        'sections-4' => __('Sections Dropdown 4')
    ));
}

add_action('init', 'morse_register_menus');