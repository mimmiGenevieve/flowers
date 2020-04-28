<?php

function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

add_filter('woocommerce_add_to_cart_redirect', 'themeprefix_add_to_cart_redirect');
function themeprefix_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = wc_get_checkout_url();
 return $checkout_url;
}

function left_div_about() {

	register_sidebar( array(
		'name'          => 'Left text-box (about-page)',
		'id'            => 'left-text-box-about',
		'before_widget' => '<div class="col-lg-6 left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'left_div_about' );

function right_div_about() {

	register_sidebar( array(
        'name'          => 'Right text-box (about-page)',
        'id'            => 'right-text-box-about',
		'before_widget' => '<div class="col-lg-6 right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'right_div_about' );

function left_div_order(){
register_sidebar( array(
	'name'          => 'Left text-box (order-page)',
	'id'            => 'left-text-box-order',
	'before_widget' => '<div class="col-lg-6 left">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
) );

}
add_action( 'widgets_init', 'left_div_order' );

function quote_start() {
	register_sidebar( array(
        'name'          => 'Quote (start-page)',
        'id'            => 'quote-start',
		'before_widget' => '<div class="quote">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'quote_start' );

function quote_contact() {
	register_sidebar( array(
        'name'          => 'Quote (contact-page)',
        'id'            => 'quote-contact',
		'before_widget' => '<div class="quote">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'quote_contact' );

function navigation_menu() {
	register_nav_menu('header-menu',__( 'Navigation' ));
  }
  add_action( 'init', 'navigation_menu' );