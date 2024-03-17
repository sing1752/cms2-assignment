<?php
// Register navigation menu
add_action( 'after_setup_theme', 'cms2project_setup' );

function cms2project_setup() {
	add_theme_support( 'wp-block-styles' );
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
?>
