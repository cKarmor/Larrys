<section class="map">
  <?php 
    while(have_posts()){
      the_post(); 
      $map_location = get_field('map');
      ?>
      <iframe
      class="acf-map"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDMr7c6wCInRsYEoWHZZWHTk7IS0_AT0wU&q=<?php echo $map_location["address"];?>" allowfullscreen>
      </iframe>
    <?php } ?>
</section>
