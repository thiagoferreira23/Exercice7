<?php
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    function add_google_fonts() {
        wp_enqueue_style( 'google_web_fonts', "https://fonts.googleapis.com/css?family=Roboto&display=swap");
    }

    add_action('wp_enqueue_style', 'add_google_fonts')
?>