<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  // why use this?? If we ever wanted to get our data from somewhere else, we could.
  // the view templates are like dumb components - all they do is display the data we tell them too - we do any logic we need to to get that data here.

  /**
   * Main Hero Image
   */
  public function mainBanner() {

    $banner = get_field('main_banner');

//    $bannerImage = $banner['banner_image'].\

    return [
      'text' => $banner['banner_text'],
      'image' => $banner['banner_image'],
      'heading' => $banner['banner_heading'],
    ];
  }

  /**
   * Testimonials Section
   */
  public function testimonials() {
    $testimonial_entries = [];

    $testimonials = get_field('testimonials');

    if( empty($testimonials) ) {
      return;
    }

    foreach( $testimonials as $testimonial ) {

      $testimonial = get_field('testimonial', $testimonial);

      $testimonial_entries[] = [
        'name' => $testimonial['name'],
        'testimonial_text' => $testimonial['testimonial_text'],
        'image' => $testimonial['photo'],
      ];
    }

    return $testimonial_entries;
  }

  /**
   * Page into - (USP)
   */
  public function pageIntro() {
    return get_field('page_intro');
  }
}
