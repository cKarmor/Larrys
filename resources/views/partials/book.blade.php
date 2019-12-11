<section class="book" id="book">
  <div class="book__container container">
    <div class="row"></div>
      <h2 class="book__heading heading-lg col-12">Book a lesson</h2>
      <h3 class="book__sub-heading heading-md col-12">Ready to hit the road?</h3>
      <h3 class="book__sub-heading heading-md heading--accent col-12">We'll get you driving in no time!</h3>
      <?php
      $related_programs = new WP_Query([
        "post_type" => "book"
      ]);
      while($related_programs->have_posts()){
        $related_programs->the_post(); ?>
        <div class="book__calendar col-12">
          <?php the_content(); ?>
        </div>
      <?php
      };
      ?>
    </div>
  </div>
</section>