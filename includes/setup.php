<?php

function delete_admin_bar(){
  show_admin_bar(false);
}

/*
*   Add image sizes
*/
function adding_theme_image_sizes()
{
  add_image_size('logo_img', 190, 50, array('center', 'center'));
}

/*
*   Add theme support
*/

add_theme_support('custom-logo');

/*
*   Registering menu
*/

function register_menu()
{
  register_nav_menus(array(
    'top-menu' => __('Viršutinis meniu', 'thetheme'),
    'bottom-menu' => __('Apatinis meniu', 'thetheme')
  ));
}

/*
*   Allow to add page title dynamicly
*/

add_theme_support('title-tag');


/*
*   ACTIONS
*/
add_action('init', 'delete_admin_bar');
add_action('init', 'adding_theme_image_sizes');
add_action('init', 'register_menu');

