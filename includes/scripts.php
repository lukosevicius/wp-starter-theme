<?php

/*  
*   Define Assets URL
*/
define('ASSETS_URL', get_template_directory_uri() . '/assets/');

/*
*   Adding CSS
*/
function adding_theme_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'adding_theme_styles');


/*
*   Adding JavaScript
*/
function adding_theme_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'plugins.js', ASSETS_URL.'js/main.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'adding_theme_scripts');
