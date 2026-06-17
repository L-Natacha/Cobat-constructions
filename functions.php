<?php
/**
 * Cobat Astra Child - functions.php
 */

// Charger le CSS parent Astra + CSS enfant
add_action( 'wp_enqueue_scripts', 'cobat_child_enqueue_styles' );
function cobat_child_enqueue_styles() {
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cobat-child-style', get_stylesheet_uri(), array('astra-parent-style') );
    // Police Inter depuis Google Fonts
    wp_enqueue_style( 'cobat-inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );
}

// Désactiver le header/footer Astra natif pour utiliser les nôtres
add_filter( 'astra_header_enabled', '__return_false' );
add_filter( 'astra_footer_enabled', '__return_false' );

// Enregistrer les menus
add_action( 'after_setup_theme', 'cobat_register_menus' );
function cobat_register_menus() {
    register_nav_menus( array(
        'cobat-main-menu' => __( 'Menu principal Cobat', 'cobat-astra-child' ),
    ) );
}

// Support des images à la une
add_theme_support( 'post-thumbnails' );

// Titre dans le <head>
add_theme_support( 'title-tag' );
