<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
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
        'text' => $testimonial['testimonial_text'],
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

  public function map() {

    $map = get_field('map'); 

    return $map;

  }
}
