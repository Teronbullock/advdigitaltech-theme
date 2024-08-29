<?php
// Theme Setup
add_action('after_setup_theme', 'adt_theme_setup');
function adt_theme_setup() {
  define( 'ADT_THEME_NAME', 'adv-digital-tech-theme' );
  define( 'ADT_THEME_VERSION', '0.0.1' );
  define( 'ADT_TEXT_DOMAIN', 'adt-theme' );
}

// enqueue CSS & JS for both editor and front-end.
add_action('enqueue_block_assets', 'adt_theme_styles');
function adt_theme_styles() {
  wp_enqueue_style(
    'main-theme-style',
    get_template_directory_uri() . '/assets/css/main-style.css'
  );
}

// enqueue CSS & JS on the frontend only.
add_action('wp_enqueue_scripts', 'adt_theme_scripts');
function adt_theme_scripts() {
  wp_enqueue_script(
    'theme-main-script',
    get_template_directory_uri() . '/assets/js/theme-main-scripts.js',
    array('jquery', 'wp-blocks', 'wp-element', 'wp-editor') 
  );
}


// Includes php files from lib folder.
foreach (glob( dirname(__FILE__) . '/inc/*.php' ) as $file ){
	include $file;
}