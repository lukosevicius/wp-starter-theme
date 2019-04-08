<?php 

function mu_widgets(){
    register_sidebar(array(
        'name'              => __('Theme Sidebar', 'udemy'),
        'id'                => 'mu_sidebar',
        'description'       => __('Sidebar for theme', 'udemy'),
        'before_widget'     => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h4>',
        'after_title'       => '</h4>'

    ));
}