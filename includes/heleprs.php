<?php 

function get_current_archive_slug(){

    if ( ! is_archive() ){
        return false;
    };

    return get_queried_object()->slug;
}

function get_current_archive_top_slug(){

    if ( ! is_archive() ){
        return false;
    };

    $parent = get_queried_object()->parent;

    if ( $parent ){
        while ( $parent !== 0 ){
            $parent_obj = get_term($parent);
            $parent = get_term($parent)->parent;
        };

        return $parent_obj->slug;

    } else {

        return get_queried_object()->slug;

    }
}