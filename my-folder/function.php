<?php

// Register menus
function digital_shop_register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => esc_html__( 'Primary Menu', 'digital-shop' ),
      'footer-menu' => esc_html__( 'Footer Menu', 'digital-shop' )
    )
  );
}
add_action( 'init', 'digital_shop_register_menus' );

// Add post thumbnail support
function digital_shop_add_thumbnail_support() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'digital_shop_add_thumbnail_support' );

// Register widget areas
function digital_shop_register_widget_areas() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'digital-shop' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here to appear in the sidebar.', 'digital-shop' ),
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'digital_shop_register_widget_areas' );

// Enqueue scripts and styles
function digital_shop_enqueue_scripts_and_styles() {
  wp_enqueue_style( 'digital-shop-style', get_stylesheet_uri() );
  wp_enqueue_script( 'digital-shop-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'digital_shop_enqueue_scripts_and_styles' );

?>
