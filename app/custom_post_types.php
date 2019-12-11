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
  ));

  register_post_type( 'book',
  array(
    'labels' => array(
      'name' => __( 'Booking Calendars' ),
      'singular_name' => __( 'Booking Calendar' )
    ),
    'show_in_rest' => true,
    'public' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-calendar',
  ));
}
add_action( 'init', __NAMESPACE__.'\\create_post_type' );
