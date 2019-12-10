<div class="usp__red-container">
  <div class="usp__red-content">
    <h2 class="heading-md usp__testimonial-heading">Testimonials</h2>

    <div class="js-testimonial-carousel">
      @foreach($testimonials as $testimonial)
        <div class="js-testimonial-carousel__slide">
          <div class="usp__testimonial-testimony">
            <img class="usp__testimonial-image" src="{{ $testimonial['image']['url'] }}" alt="">
            <p class="usp__testimonial-p body-font--color-second">{{ $testimonial['text'] }}</p>
          </div>
          <p class="usp__testimonial-author heading-sm">{{ $testimonial['name'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
  <div class="usp__arrow-red"></div>
</div>