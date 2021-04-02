<?php 

function ml_enqueue() {

    /**********************************
    ******          Setup 
    **********************************/
    
    $ver = ML_DEV_MODE ? time() : false;

    /*  
    *   Define Assets URL
    */
    define('ASSETS_URL', get_template_directory_uri() . '/assets/');
    define('JS', get_template_directory_uri() . '/assets/js/');
    define('CSS', get_template_directory_uri() . '/assets/css/');

    /**********************************
    ******          CSS 
    **********************************/
    /*  
    *   Register
    */
    wp_register_style("ml_main_css", CSS.'main.css', [], $ver);
    /*  
    *   Enqueue
    */
    wp_enqueue_style("ml_main_css");

    /**********************************
    ******          JavaScript 
    **********************************/
    /*  
    *   Register
    */
    // wp_enqueue_script( 'jquery.lazy.min.js', JS.'jquery.lazy.min.js', ['jquery'], $ver, true);
    wp_enqueue_script( 'ml_main', JS.'main.js', [], $ver, true);
    /*  
    *   Enqueue
    */
    // wp_enqueue_script("jquery"); //default WP jquery file
    // wp_enqueue_script("ml_jquery_lazy");
    wp_enqueue_script("ml_main");
}