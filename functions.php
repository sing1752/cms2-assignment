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
   
    wp_enqueue_script('google-maps', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11201.57048166031!2d-75.6996894395996!3d45.42158625263296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament%20Hill!5e0!3m2!1spt-BR!2sca!4v1710562465460!5m2!1spt-BR!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', array(), null, true);
}
?>
