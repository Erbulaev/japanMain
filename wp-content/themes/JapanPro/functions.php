<?php
function japan_custom_logo_setup()
{
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);

    add_theme_support('menus');
}

add_action('after_setup_theme', 'japan_custom_logo_setup');
add_action('wp_enqueue_scripts', 'theme_add_scripts');

function theme_add_scripts()
{
    // подключаем файл стилей темы
    wp_enqueue_style('style-mane', get_template_directory_uri() . '/assets/css/style.css');
//    wp_enqueue_style('style-splide', get_template_directory_uri() . '/assets/css/slick.css');

    // подключаем js файл темы
    wp_enqueue_script('script-splide', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), 'null', true);
}