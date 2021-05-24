<?php

define('ML_DEV_MODE', true);

/*  
*   INCLUDES
*/
include(locate_template('includes/enqueue.php'));
include(locate_template('includes/setup.php'));
include(locate_template('includes/helpers.php'));
include(locate_template('includes/other/admin.php'));

// include(locate_template('includes/other/widgets.php'));
// include(locate_template('includes/other/post-types.php'));


/*  
*   HOOKS
*/
add_action("wp_enqueue_scripts", "ml_enqueue");
add_action("after_setup_theme", "ml_setup_theme");
add_action('init', 'adding_theme_image_sizes');


/*
**  Removed unused menu options from admin
*/
// add_action('admin_menu', 'unused_menus_remove');

/*
**  init widgets
*/
// add_action("widgets_init", "ml_widgets"); 

/*
**  Allow svg uplaods
*/
// add_filter('upload_mimes', 'allow_svg_uploads');