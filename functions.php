<?php

function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'page-apropos.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/about_style.css' );
    }
    if( is_page_template( 'page-autres-activite.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/other_style.css' );
    }
    if( is_page_template( 'page-la-naturopathie.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/la-naturopathie_style.css' );
    }
    if( is_page_template( 'page-consultation.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/consultation_style.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );
function wpm_enqueue_styles(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
register_nav_menus( array('menu-principal' => 'Menu principal') );