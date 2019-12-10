import createArrow from '../custom/createArrow';
import autoExpand from '../custom/autoExpand';
import testimonialCarousel from '../custom/testimonialCarousel';

export default {
  init() {

    $('.btn').mouseenter(function () {
      $(this).next().addClass('btn__arrow--hover');
    }).mouseleave(function () {
      $(this).next().removeClass('btn__arrow--hover');
    });

    document.addEventListener('input', function (event) {
      if (event.target.tagName.toLowerCase() !== 'textarea') return;
      autoExpand(event.target);
    }, false);

    testimonialCarousel();

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(window).load(function () {
      createArrow();
    });
  },
};
