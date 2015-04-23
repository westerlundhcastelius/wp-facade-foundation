<?php

// Enqueue style sheets
function init_style_enqueue()
{
  if(is_admin())
    return;

  wp_enqueue_style(
    // Name
    'bootstrap',
    // Url
    get_template_directory_uri().'/css/bootstrap.min.css',
    // Dependencies
    array(),
    // Version
    '3.3.4',
    // Media
    'all');

  wp_enqueue_style(
    'master',
    get_template_directory_uri().'/css/master.css',
    array('bootstrap'),
    '1.0.0',
    'all');
}
add_action('init', 'init_style_enqueue');