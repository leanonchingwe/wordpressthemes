<?php
/**
 * Theme functions and definitions
 */

// Define the theme version
define( 'THEME_VERSION', '1.0.0' );

// Enable theme support for various features
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo', array(
    'height' => 100,
    'width' => 400,
    'flex-width' => true,
) );
add_theme_support( 'html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption',
) );

// Register custom navigation menus
function theme_register_menus() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'theme' ),
        'footer'  => esc_html__( 'Footer Menu', 'theme' ),
    ) );
}
add_action( 'after_setup_theme', 'theme_register_menus' );

// Register custom widget areas
function theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'theme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

// Enqueue theme scripts and styles
function theme_scripts() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), THEME_VERSION );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/theme-script.js', array( 'jquery' ), THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Add custom CSS to the theme
function theme_custom_css() {
    wp_add_inline_style( 'theme-style', '
        body {
            background-color: #f9f9f9;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            color: #333;
        }
    ' );
}
add_action( 'wp_enqueue_scripts', 'theme_custom_css' );
