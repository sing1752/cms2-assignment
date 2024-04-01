<?php

function mytheme_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_enqueue_scripts() {
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// Register navigation menu
add_action( 'after_setup_theme', 'cms2project_setup' );

function cms2project_setup() {
    add_theme_support( 'wp-block-styles' );
    register_theme_menus(); // Call the function to register menus
}

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}

// Function to enqueue scripts and styles
function cms2_project_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'cms2_project_scripts'); // Hook into wp_enqueue_scripts action

// Social media icons task 3
function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

?>