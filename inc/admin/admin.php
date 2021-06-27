<?php

if (is_admin()) { 

    /**********************************
    ******          ACTIONS 
    **********************************/
    /*
    **  Remove unnecessary widgets from dashboard
    */
    add_action( 'admin_init', 'ml_remove_dashboard_widgets' );

    /*
    **  Remove unused menu options from admin
    */
    add_action('admin_menu', 'ml_unused_menus_remove');

    /*
    **  Disable full screen on page editor screen
    */
    add_action( 'enqueue_block_editor_assets', 'ml_disable_editor_fullscreen_by_default' );

    /*
    **  allow store owners to edit privacy policy
    */
    // $user_id = 2;
    // add_action('map_meta_cap', 'ml_custom_manage_privacy_options', $user_id, 4);


    /*
    **  Sets an admin color scheme based on the environment.
    *   
    *   @param string $color_scheme - The current set color scheme.
    *   @return string $color_scheme - The newly set color scheme.
    *
    */
    add_filter('get_user_option_admin_color', 'ml_set_admin_color_scheme_for_env');  


    /*
    **  Allow svg uplaods
    */
    // add_filter('upload_mimes', 'allow_svg_uploads');
    

    /**********************************
    ******          FUNCTIONS 
    **********************************/

    function ml_unused_menus_remove () { 
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    } 

    function ml_disable_editor_fullscreen_by_default() {
        $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
        wp_add_inline_script( 'wp-blocks', $script );
    }

    function ml_remove_dashboard_widgets() {
        remove_action( 'welcome_panel', 'wp_welcome_panel' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
    }


    function ml_custom_manage_privacy_options($caps, $cap, $user_id) {
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

    function ml_set_admin_color_scheme_for_env( $color_scheme ){

        $logged_user_id = wp_get_current_user()->ID;

        if ( $logged_user_id === 1 ){
            
            switch ( wp_get_environment_type() ) {
    
                case 'local':
                case 'development':
                    $color_scheme = 'default';
                    break;
                  
                case 'staging':
                    $color_scheme = 'coffee';
                    break;
                  
                case 'production':
                default:
                    $color_scheme = 'sunrise';
                    break;
                    
            }

        };
        
        return $color_scheme;
    }

    function ml_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
      }


}