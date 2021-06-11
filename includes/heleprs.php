<?php 

function get_current_archive_slug(){

    if ( ! is_archive() ){
        return false;
    };

    return get_queried_object()->slug;
}