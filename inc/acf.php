<?php 

/*
**  Don't break if ACF plugin not active.
*/

if ( ! class_exists('ACF') ){
    function get_field(){
        return null;
    }
  
    function the_field(){
      return null;
  }
};

/**********************************
******          ACTIONS 
**********************************/

/*
**  Add ACF options page
*/
add_action('acf/init', 'ml_add_acf_option_page');  


/**********************************
******          FUNCTIONS 
**********************************/


function ml_add_acf_option_page() {

    if( function_exists('acf_add_options_sub_page') ) {

        $parent = acf_add_options_page(array(
            'position' => '2.1',
            'page_title'  => __('Temos bendri nustatymai'),
            'menu_title'  => __('Temos nustatymai'),
            'redirect'    => false,
        ));
    }
}