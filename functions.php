<?php
add_action( 'wp_enqueue_scripts', 'marianne_child_enqueue_styles' );

function marianne_child_enqueue_styles() {
 
    $parent_style = 'marianne-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'marianne-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
