<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  // why use this?? If we ever wanted to get our data from somewhere else, we could.
  // the view templates are like dump components - all they do is display the data we tell them too - we do any logic we need to to get that data here.
  public function mainBanner() {

    return get_fields('main_banner');
  }

  public function testimonials() {
    $testimonial_entries = [];

    $testimonials = get_field('testimonials');

    if( empty($testimonials) ) {
      return;
    }

    foreach( $testimonials as $post ) {
      setup_postdata( $post );

      $testimonial_entries[] = [
        'name' => get_field('name'),
        'testimonial_text' => get_field('testimonial_text'),
        'image' => get_field('image'),
      ];
    }

    return $testimonial_entries;
  }

  public function pageIntro() {
    return get_field('page_intro');
  }
}
