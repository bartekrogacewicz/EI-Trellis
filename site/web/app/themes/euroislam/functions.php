<?php

include('_polylang.php');
include('_custom_functions.php');

// Rejestracja obslugi zarzadzania menu
function register_menus() {
  register_nav_menus(
    [
      'header-menu' => __( 'Header Menu' ),
      'header-bottom-menu' => __( 'Header Bottom Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    ]
  );
}
add_action( 'init', 'register_menus' );

// Zmiana klas pozycji w menu
function wp_special_nav_class($classes, $item) {
  $classes[] = "nav__item";
  return $classes;
}
add_filter('nav_menu_css_class', 'wp_special_nav_class', 10, 2);

// Zmiana klas linków w menu
function add_class_to_menu_links($atts, $item, $args) {
  $atts['class'] = 'nav__link';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_menu_links', 10, 3 );

// Rejestracja custom post type - News i FAQ
function create_news_posttype() {
  register_post_type('news',
    array(
      'labels' => array(
        'name' => __('Nowości'),
        'singular_name' => __('Nowość')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'news'),
      'show_in_rest' => true,
      'supports' => ['title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats']
    )
  );
}
add_action('init', 'create_news_posttype');
function create_faq_posttype() {
  register_post_type('faq',
    array(
      'labels' => array(
        'name' => __('Pytania i odpowiedzi'),
        'singular_name' => __('Pytanie i odpowiedź')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'faq'),
      'show_in_rest' => true,
      'supports' => ['title', 'editor', 'comments', 'revisions', 'trackbacks', 'page-attributes', 'custom-fields', 'post-formats']
    )
  );
}
add_action('init', 'create_faq_posttype');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
set_post_thumbnail_size(1568, 9999);
