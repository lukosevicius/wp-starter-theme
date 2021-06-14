<?php

if (is_admin()) { 

    /**********************************
    ******          ACTIONS 
    **********************************/
    /*
    **  Remove unnecessary widgets from dashboard
    */
    add_action( 'admin_init', 'remove_dashboard_meta' );

    /*
    **  Remove unused menu options from admin
    */
    add_action('admin_menu', 'unused_menus_remove');

    /*
    **  Disable full screen on page editor screen
    */
    add_action( 'enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default' );

    /*
    **  allow store owners to edit privacy policy
    */
    // $user_id = 2;
    // add_action('map_meta_cap', 'custom_manage_privacy_options', $user_id, 4);

    /*
    **  Add ACF options page
    */
    // add_action('acf/init', 'my_acf_op_init');  
    

    /**********************************
    ******          FUNCTIONS 
    **********************************/

    function unused_menus_remove () { 
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    } 

    function jba_disable_editor_fullscreen_by_default() {
        $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
        wp_add_inline_script( 'wp-blocks', $script );
    }

    function remove_dashboard_meta() {
        remove_action( 'welcome_panel', 'wp_welcome_panel' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
    }


    function custom_manage_privacy_options($caps, $cap, $user_id) {
        if (!is_user_logged_in()) return $caps;

        $user_meta = get_userdata($user_id);
        if (array_intersect(['shop_manager'], $user_meta->roles)) {
            if ('manage_privacy_options' === $cap) {
            $manage_name = is_multisite() ? 'manage_network' : 'manage_options';
            $caps = array_diff($caps, [ $manage_name ]);
            }
        }
        return $caps;
    }

    function my_acf_op_init() {

        if( function_exists('acf_add_options_sub_page') ) {
    
            $parent = acf_add_options_page(array(
                'position' => '2.1',
                'page_title'  => __('Temos bendri nustatymai'),
                'menu_title'  => __('Temos nustatymai'),
                'redirect'    => false,
            ));
        }
    }

}