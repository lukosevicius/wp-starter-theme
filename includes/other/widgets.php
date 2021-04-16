<?php 

function ml_widgets(){
    register_sidebar(array(
        'name'              => __('Theme Sidebar', 'mltheme'),
        'id'                => 'ml_sidebar',
        'description'       => __('Sidebar for theme', 'mltheme'),
        'before_widget'     => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h4>',
        'after_title'       => '</h4>'

    ));
}