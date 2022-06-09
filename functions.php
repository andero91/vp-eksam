<?php
add_theme_support( 'post-thumbnails' );
wp_enqueue_style( 'style', get_stylesheet_uri() );

add_theme_support( 'title-tag' );

function my_function_admin_bar(){ return false; }
    add_filter( 'show_admin_bar' , 'my_function_admin_bar');


function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa&family=Roboto:wght@300&display=swap', [], null );

}
add_action( 'wp_enqueue_scripts', 'google_fonts' );
?>