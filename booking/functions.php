<?php

// includes
include_once('includes/admin/gutenberg.php');
include_once('includes/admin/customize.php');
include_once('includes/utilities/get-user-role.php');
include_once('includes/utilities/get-queued-scripts-styles.php');
include_once('includes/posts/hero.php');
include_once('includes/misc/handle-plugins.php');

// disable admin bar
add_filter('show_admin_bar', '__return_false');

// enqueue font end bundles
function booking_enqueue() {
  if (!is_admin()) {
    wp_enqueue_style('bundle-css', get_theme_file_uri('/bundles/frontend.css'));
    wp_enqueue_script('bundle-js', get_theme_file_uri('/bundles/frontend.js'), array(), false, true);

    wp_enqueue_style('parent-css', get_template_directory_uri() . '/style.css');
  }

  // enqueue admin bundles
  if (is_admin()) {
    wp_enqueue_style('admin-css', get_theme_file_uri('/bundles/admin.css'));
    wp_enqueue_script('admin-js', get_theme_file_uri('/bundles/admin.js'), array('wp-blocks', 'wp-block-editor', 'wp-components', 'wp-element'), false, true);
  }
}
add_action('wp_enqueue_scripts', 'booking_enqueue');

// enqueue fonts
function booking_add_fonts() {
  // wp_enqueue_style( 'nunito', 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,500;0,1000;1,500;1,1000&display=swap', false );
  // wp_enqueue_style( 'poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'booking_add_fonts' );

// meta info
function booking_add_meta_tags() {
  echo '<meta name="author" content="Hasani Rogers">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
  echo '<base href="/">';
  echo '<link rel="icon" href="'. get_theme_file_uri('/images/favicon.ico') .'">';
  echo '<meta name="theme-color" content="#2557a7"/>';
  echo '<meta name="mobile-web-app-capable" content="yes">';
  echo '<meta name="application-name" content="Booking Demo">';
  echo '<meta name="apple-mobile-web-app-capable" content="yes">';
  echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">';
  echo '<meta name="apple-mobile-web-app-title" content="Booking Demo">';
  echo '<link rel="apple-touch-icon" href="'. get_theme_file_uri('/images/manifest/icon-48x48.png') .'">';
  echo '<link rel="apple-touch-icon" sizes="72x72" href="'. get_theme_file_uri('/images/manifest/icon-72x72.png') .'">';
  echo '<link rel="apple-touch-icon" sizes="96x96" href="'. get_theme_file_uri('/images/manifest/icon-96x96.png') .'">';
  echo '<link rel="apple-touch-icon" sizes="144x144" href="'. get_theme_file_uri('/images/manifest/icon-144x144.png') .'">';
  echo '<link rel="apple-touch-icon" sizes="192x192" href="'. get_theme_file_uri('/images/manifest/icon-192x192.png') .'">';
}
add_action('wp_head', 'booking_add_meta_tags', '1');

function booking_add_theme_colors() {
  $pageWidth = get_theme_mod('site-page-width') ? get_theme_mod('site-page-width') : '1280px';
  $colorFooter = get_theme_mod('site-color-footer') ? get_theme_mod('site-color-footer') : '#333333';
  $colorBackground = get_theme_mod('site-color-background') ? get_theme_mod('site-color-background') : '#ffffff';
  $colorPrimary = get_theme_mod('site-color-primary') ? get_theme_mod('site-color-primary') : '#0c4a6e';
  $colorSecondary = get_theme_mod('site-color-Secondary') ? get_theme_mod('site-color-secondary') : '#292929';
  $colorTertiary = get_theme_mod('site-color-tertiary') ? get_theme_mod('site-color-tertiary') : '#f47421';

  echo '
    <style>
      :root {
        --page-width: '. $pageWidth .';
        --color-footer: '. $colorFooter .';
        --color-background: '. $colorBackground .';
        --color-primary: '. $colorPrimary .';
        --color-secondary: '. $colorSecondary .';
        --color-tertiary: '. $colorTertiary .';
      }
    </style>
  ';
}
add_action('wp_head', 'booking_add_theme_colors', '1');

// body class
function booking_body_classes($classes) {
  global $post;

  $slug = $post->post_name;
  $classes[] = 'booking';
  $classes[] = 'booking--' . $slug;

  return $classes;
}
add_filter('body_class', 'booking_body_classes');

// menu
register_nav_menu('header', 'Header');
register_nav_menu('footer-social-media', 'Footer Social Media');

// title tag
add_theme_support('title-tag');

// thumbnail
add_theme_support('post-thumbnails');

// align
add_theme_support('align-wide');

// excerpt
add_post_type_support('page', 'excerpt');

// ??
// add_theme_support('wp-block-styles');
// add_theme_support('editor-styles');


// upload types
function enable_svg_upload( $upload_mimes ) {
  $upload_mimes['svg'] = 'image/svg+xml';
  $upload_mimes['svgz'] = 'image/svg+xml';
  return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );

