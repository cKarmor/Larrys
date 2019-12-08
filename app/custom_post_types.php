<?php

namespace App;

function create_post_type() {

  register_post_type( 'contact',
  array(
    'labels' => array(
      'name' => __( 'Testimonials' ),
      'singular_name' => __( 'Testimonial' )
    ),
    'show_in_rest' => true,
    'public' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-admin-site',
  )
);
}
add_action( 'init', __NAMESPACE__.'\\create_post_type' );
