<?php

require('inc/register-menus.php');

require('inc/customize-colors.php');

require('inc/helper-functions.php');

function plip_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/master.scss', array(), null, 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/section-dropdown.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'plip_script_enqueue');
