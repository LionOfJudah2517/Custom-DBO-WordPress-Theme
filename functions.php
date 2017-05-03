<?php
function dbo_theme_styles() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'header_css', get_template_directory_uri() . '/css/header.css');

}

add_action('wp_enqueue_scripts','dbo_theme_styles');

 ?>
