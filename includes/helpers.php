<?php

/**********************************
******          Functions List 
**********************************/
/*

 ** print images:

 img_src($id, $size = null);;
 img_att($id, $size = null, $tmp_alt = null);
 img_bg($id, $size = null);

 ** print images whith jquery lazyload:

 img_data($id, $size = null, $tmp_alt = null);
 bg_data($id, $size = null);


*/
/**********************************
******          Images - START
**********************************/

/*
*   Print image src
*/
function img_src($id, $size = null)
{
    $img_url = wp_get_attachment_image_src($id, $size);

    if ( $img_url ){
        $img_url = $img_url[0];

        echo $img_url;
    };
}


/*
*   Print image src and alt attributs
*/
function img_att($id, $size =null, $tmp_alt = null)
{   
    $img_url = (wp_get_attachment_image_src($id, $size));

    if ( $img_url ){
        $img_url = $img_url[0];
        $img_alt = get_post_meta($id, '_wp_attachment_image_alt', true);
    
        if($img_alt == ''){
            if($tmp_alt == null){
                $tmp_alt = 'Image';
            }
            $img_alt = $tmp_alt;
        }
    
        printf('src="%s" alt="%s"', $img_url, $img_alt);
    };
}

/*
*   Print background image
*/

function img_bg($id, $size = null)
{
    $img_url = (wp_get_attachment_image_src($id, $size));

    if ( $img_url ){
        $img_url = $img_url[0];

        printf( "background-image: url('%s')", $img_url );
    }
}


/*
*   Lazy load image
*/

function img_data($id, $size = null, $tmp_alt = null)
{
    $img_url = (wp_get_attachment_image_src($id, $size));
    $img_alt = get_post_meta($id, '_wp_attachment_image_alt', true);

    if ( $img_url ){
        $img_url = $img_url[0];

        if($img_alt == ''){
            if($tmp_alt == null){
                $tmp_alt = 'Image';
            }
            $img_alt = $tmp_alt;
        }
    
        printf( 'src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="%s" alt="%s"', $img_url, $img_alt);
    };
}

/*
*   Lazy load background image
*/

function bg_data($id, $size = null)
{
    $img_url = (wp_get_attachment_image_src($id, $size));

    if ( $img_url ){
        $img_url = $img_url[0];

        printf( 'data-src="%s" ', $img_url);
    };
}

/**********************************
******          Images - END
**********************************/