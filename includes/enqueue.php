<?php 

function ml_enqueue() {

    /*  
    *   Define Assets URL
    */
    define('ASSETS_URL', get_template_directory_uri() . '/assets/');
    define('JS', get_template_directory_uri() . '/assets/js/');
    define('CSS', get_template_directory_uri() . '/assets/css/');

    //CSS
    wp_register_style("ml_main_css", CSS.'main.css');

    wp_enqueue_style("ml_main_css");

    // JS
    wp_enqueue_script( 'jquery.lazy.min.js', JS.'jquery.lazy.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'main.js', JS.'main.js', array('jquery'), false, true);

    wp_enqueue_script("jquery");
    wp_enqueue_script("ml_jquery_lazy");
}