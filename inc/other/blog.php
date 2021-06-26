<?php 

add_action("after_setup_theme", "ml_add_post_thumbnails");


function ml_add_post_thumbnails(){
    
    add_theme_support('post-thumbnails');

}
