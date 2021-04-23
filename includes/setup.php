<?php

/*
**   Add image sizes
*/
function adding_theme_image_sizes()
{
  add_image_size('logo_img', 190, 50, array('center', 'center'));
}

/*
**   Add theme support
*/

function ml_setup_theme(){
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  register_nav_menus(array(
    'top-menu' => __('Viršutinis meniu', 'wp-starter-theme'),
    'bottom-menu' => __('Apatinis meniu', 'wp-starter-theme')
  ));
}

/*
**  Removed unused menu options from admin
*/
function unused_menus_remove () 
{ 
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
} 

/*
**  Allow svg uplaods
*/
function allow_svg_uploads($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
