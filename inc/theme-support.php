<?php 

add_action( 'after_setup_theme', 'ml_theme_setup');


function ml_theme_setup() {

    add_theme_support( 'title-tag' );  
    add_theme_support( 'html5', [ 'script', 'style' ] );

}