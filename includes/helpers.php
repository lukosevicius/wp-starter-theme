<?php

/*
*   Print uppercase text from custom field
*/

function upper($name, $id = false){

    echo strtoupper(get_field($name, $id));
}

/*
*   Print image src and alt attributs
*/
function img_att($id, $size =null, $tmp_alt = null)
{   
    $img_url = (wp_get_attachment_image_src($id, $size))[0];
    $img_alt = get_post_meta($id, '_wp_attachment_image_alt', true);

    if($img_alt == ''){
        if($tmp_alt == null){
            $tmp_alt = 'Image';
        }
        $img_alt = $tmp_alt;
    }

    printf('src="%s" alt="%s"', $img_url, $img_alt);
}

/*
*   Print background image
*/

function img_bg($id, $size = null)
{
    $src = (wp_get_attachment_image_src($id, $size))[0];
    printf( "background-image: url('%s')", $src );
}

/*
*   Print image src
*/
function img_src($id, $size = null)
{
    echo (wp_get_attachment_image_src($id, $size))[0];
}


/*
*   Lazy load image
*/

function img_data($id, $size = null, $tmp_alt = null)
{
    $src = (wp_get_attachment_image_src($id, $size))[0];
    $img_alt = get_post_meta($id, '_wp_attachment_image_alt', true);

    if($img_alt == ''){
        if($tmp_alt == null){
            $tmp_alt = 'Image';
        }
        $img_alt = $tmp_alt;
    }

    printf( 'src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="%s" alt="%s"', $src, $img_alt);
}

/*
*   Lazy load background image
*/

function bg_data($id, $size = null)
{
    $src = (wp_get_attachment_image_src($id, $size))[0];
    printf( 'data-src="%s" ', $src);
}
