<?php

function css_js_assets(){

    wp_enqueue_script('js_composer_front');
    wp_enqueue_style('js_composer_front');
    wp_enqueue_style('js_composer_custom_css');
    wp_enqueue_style('animate-css');

    
    wp_enqueue_style(
        'normalize',
        _URLTHEME . '/assets/css/normalize.css',
        array(),
        '8.0.1',
        'all'
    );

    wp_enqueue_style(
        'contact7-fix',
        _URLTHEME . '/assets/css/contact7-fix.css',
        array(),
        '4.4.1',
        'all'
    );

    wp_enqueue_style(
        'font-awesome',
        _URLTHEME . '/assets/css/font-awesome.css',
        array(),
        '4.7',
        'all'
    );

    wp_enqueue_style(
        'slick',
        _URLTHEME . '/assets/css/slick.css',
        array(),
        '1.8.1',
        'all'
    );

    wp_enqueue_style(
        'slick-theme',
        _URLTHEME . '/assets/css/slick-theme.css',
        array(),
        '1.8.1',
        'all'
    );

    wp_enqueue_style(
        'fonts',
        _URLTHEME . '/assets/css/fonts.css',
        array(),
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'style',
        _URLTHEME . '/assets/css/style.css',
        array(),
        '1.0',
        'all'
    );

    wp_enqueue_script(
        'slick-min',
        _URLTHEME . '/assets/js/slick.min.js',
        array('jquery'),
        '1.8.1',
        true
    );

    wp_enqueue_script(
        'javascript',
        _URLTHEME . '/assets/js/javascript.js',
        array('jquery'),
        '',
        true
    );

}

add_action('wp_enqueue_scripts', 'css_js_assets', 999999);
