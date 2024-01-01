<?php

add_filter('add_to_cart_redirect', 'lw_add_to_cart_redirect');
function lw_add_to_cart_redirect() {
 global $woocommerce;
 $lw_redirect_checkout = $woocommerce->cart->get_checkout_url();
 return $lw_redirect_checkout;
}

Add this code to change add to cart button text:

add_filter( 'woocommerce_product_single_add_to_cart_text', 'lw_cart_btn_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'lw_cart_btn_text' );
function lw_cart_btn_text() {
 return __( 'Buy Now!', 'woocommerce' );
}


?>
