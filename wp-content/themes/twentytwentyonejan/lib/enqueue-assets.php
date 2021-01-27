<?php

    function _themename_assets(){
        
        wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri() .  
        '/dist/assets/css/bundle.css', array(), 'all');

        wp_enqueue_script('_themename-scripts', get_template_directory_uri() . 
        '/dist/assets/js/bundle.js', array('jquery'), '', true);

        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . 
        '/dist/assets/bootstrap/js/bootstrap.min.js', array(), '4.5.3', true );

        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() .  
        '/dist/assets/bootstrap/css/bootstrap.min.css', array(), 'all');
    }

add_action('wp_enqueue_scripts', '_themename_assets');


function _themename_customize_preview_js(){
    wp_enqueue_script('_themename-customize-preview', get_template_directory_uri() . 
    '/dist/assets/js/customize-preview.js', array('customize-preview', 'jquery'), '1.0.0', true);
}

add_action('customize_preview_init', '_themename_customize_preview_js');
