<?php
add_action('wp_enqueue_scripts', function () {

  // Parent theme stylesheet
  wp_enqueue_style(
    'parent-style',
    get_template_directory_uri() . '/style.css'
  );

  // SlimHuisTech custom stylesheet
  wp_enqueue_style(
    'sht-custom',
    get_stylesheet_directory_uri() . '/assets/css/sht-custom.css',
    array('parent-style'),
    '1.0.0'
  );

}, 20);