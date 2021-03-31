<?php

/*  
*   INCLUDES
*/
include(locate_template('includes/enqueue.php'));
include(locate_template('includes/setup.php'));
include(locate_template('includes/helpers.php'));

// include(locate_template('includes/other/widgets.php'));
// include(locate_template('includes/other/post-types.php'));


/*  
*   HOOKS
*/
add_action("wp_enqueue_scripts", "ml_enqueue");
add_action("after_setup_theme", "ml_setup_theme");
add_action('init', 'adding_theme_image_sizes');

// add_action("widgets_init", "ml_widgets"); 