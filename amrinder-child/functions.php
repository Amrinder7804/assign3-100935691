<?php
function child_logged_in_styles() {
    if ( is_user_logged_in() ) {
        wp_enqueue_style(
            'child-logged-in-style',
            get_stylesheet_directory_uri() . '/logged-in.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}
add_action( 'wp_enqueue_scripts', 'child_logged_in_styles' );
