<?php

/*  
*   Define Assets URL
*/
define('ASSETS_URL', get_template_directory_uri() . '/assets/');
define('JS', get_template_directory_uri() . '/assets/js/');
define('CSS', get_template_directory_uri() . '/assets/css/');

/*
*   Adding CSS
*/
function adding_theme_styles()
{
    wp_enqueue_style('styles', CSS.'styles.css');
}
add_action('wp_enqueue_scripts', 'adding_theme_styles');


/*
*   Adding JavaScript
*/
function adding_theme_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'jquery.lazy.min.js', JS.'jquery.lazy.min.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'adding_theme_scripts');
