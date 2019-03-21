<?php

function upper($name, $id = false){

    echo strtoupper(get_field($name, $id));
}

function img_att($id, $size =null, $tmp_alt = null)
{   
    $img_url = (wp_get_attachment_image_src($id, $size))[0];
    $img_alt = get_post_meta($id, '_wp_attachment_image_alt', true);

    if($img_alt == ''){
        if($tmp_alt == null){
            $tmp_alt = 'Nuotrauka';
        }
        $img_alt = $tmp_alt;
    }

    printf('src="%s" alt="%s"', $img_url, $img_alt);
}

function img_src($id, $size = null)
{
    echo (wp_get_attachment_image_src($id, $size))[0];
}