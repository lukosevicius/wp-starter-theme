<?php

/*
**  Remove unused menu options from admin
*/
function unused_menus_remove () 
{ 
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
} 

/*
**  Disable full screen on page editor screen
*/
if (is_admin()) { 
    function jba_disable_editor_fullscreen_by_default() {
    $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
    wp_add_inline_script( 'wp-blocks', $script );
}
add_action( 'enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default' );
}