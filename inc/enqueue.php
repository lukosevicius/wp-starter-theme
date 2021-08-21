<?php 

add_action("wp_enqueue_scripts", "ml_enqueue");
add_action('admin_enqueue_scripts', 'ml_enqueue_admin');

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
    wp_register_style("ml_style_css", CSS.'style.css', [], $ver);
    /*  
    *   Enqueue
    */
    wp_enqueue_style("ml_style_css");

    /**********************************
    ******          JavaScript 
    **********************************/
    /*  
    *   Register
    */
    // wp_enqueue_script( 'jquery.lazy.min.js', JS.'vendor/jquery.lazy.min.js', ['jquery'], $ver, true);
    wp_enqueue_script( 'ml_bundle', JS.'dist/main.bundle.js', [], $ver, true);
    /*  
    *   Enqueue
    */
    // wp_enqueue_script("jquery"); //default WP jquery file
    // wp_enqueue_script("ml_jquery_lazy");
    wp_enqueue_script("ml_bundle");
}


/**********************************
******          Admin
**********************************/

function ml_enqueue_admin(){
    define('CSS', get_template_directory_uri() . '/assets/css/');

    wp_register_style("ml_admin-cleanup_css", CSS.'admin-cleanup.css');
    wp_enqueue_style( 'ml_admin-cleanup_css' );
}