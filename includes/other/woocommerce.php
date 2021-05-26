<?php 

/**********************************
******          START 
**********************************/

/* Add WooCommerce Support */
add_action( 'after_setup_theme', 'woocommerce_support' );

/* Remove checkout fields */
// add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

/* Dequeue default woocommerce styles */
// add_filter( 'woocommerce_enqueue_styles', 'ml_dequeue_styles' );

/* Remove or Reorder hooks */
// add_action( 'init' , 'ml_remove_and_reorder_hooks' , 10 );

/* Refresh mini-cart with AJAX on add-to-cart*/
// add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

/**********************************
******          Functions
**********************************/

function add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Remove each style one by one
function ml_dequeue_styles( $enqueue_styles ) {
	// unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	// unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

function iconic_cart_count_fragments( $fragments ) {
    $fragments['div.mini-cart__button__count'] = '<div class="mini-cart__button__count">' . WC()->cart->get_cart_contents_count() . '</div>';
    return $fragments;
}

function ml_remove_and_reorder_hooks() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 40 );
 }


function custom_override_checkout_fields( $fields ) {
    // unset($fields['billing']['billing_first_name']);
    // unset($fields['billing']['billing_last_name']);
    // unset($fields['billing']['billing_company']);
    // unset($fields['billing']['billing_address_1']);
    // unset($fields['billing']['billing_address_2']);
    // unset($fields['billing']['billing_city']);
    // unset($fields['billing']['billing_postcode']);
    // unset($fields['billing']['billing_country']);
    // unset($fields['billing']['billing_state']);
    // unset($fields['billing']['billing_phone']);
    // unset($fields['order']['order_comments']);
    // unset($fields['billing']['billing_email']);
    // unset($fields['account']['account_username']);
    // unset($fields['account']['account_password']);
    // unset($fields['account']['account_password-2']);
    return $fields;
}