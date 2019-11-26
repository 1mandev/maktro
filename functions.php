<?php
add_action( 'wp_enqueue_scripts', 'maktro_enqueue_styles' );
function maktro_enqueue_styles() {
 
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'maktro-foundation', '//cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css', null,
    wp_get_theme()->get('Version')
);

wp_enqueue_script( 'maktro-jquery', '//code.jquery.com/jquery-3.4.1.min.js', array(), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'maktro-foundation', '//cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js', array('maktro-jquery'), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'maktro-scripts', get_stylesheet_directory_uri() . '/maktro-scripts.js', array('maktro-jquery', 'maktro-foundation'), wp_get_theme()->get('Version'), true );

    wp_enqueue_script( 'maktro-fontawesome', '//kit.fontawesome.com/554d3e6589.js', array(), wp_get_theme()->get('Version'), true );
    
    
}


function bootstrap_load(){
   

}
function register_bootstrap() {
	add_action( 'wp_enqueue_scripts',  'boostrap_load');
}


function bootstrap_unload(){
   wp_deregister_style( 'maktro-bootstrap' );
}

function deregister_bootstrap() {
	add_action( 'wp_enqueue_scripts',  'boostrap_unload');
}
