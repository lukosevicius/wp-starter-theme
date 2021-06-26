<?php

/*
**   Add Menus
*/

add_action("after_setup_theme", "ml_add_menus");


function ml_add_menus(){

  register_nav_menus(array(
    'top-menu' => __('Viršutinis meniu', 'wp-starter-theme'),
    'bottom-menu' => __('Apatinis meniu', 'wp-starter-theme')
  ));
  
}

