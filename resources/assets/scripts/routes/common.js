import createArrow from '../custom/createArrow';
import autoExpand from '../custom/autoExpand';
import testimonialCarousel from '../custom/testimonialCarousel';
import mobileMenu from '../custom/mobileMenu';

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

    document.addEventListener('click', function (event) {
      console.log(event);
      let imgUrlHome = false;
      if (event.target.tagName.toLowerCase() == 'img') {
        const imgUrl = event.target.baseURI;
        if (imgUrl.search('#home')) {
          imgUrlHome = true;
        }
      }
      if (event.target.tagName.toLowerCase() == 'a' || imgUrlHome) {
        const link = event.target.hash;
        if (link == '#about' || link == '#contact' || link == '#book') {
          event.preventDefault();
          document.querySelector(link).scrollIntoView({ behavior: 'smooth' });
        }
        else if (link == '#home' || imgUrlHome) {
          event.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      }
    });
    testimonialCarousel();

    mobileMenu();

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(window).load(function () {
      createArrow();
      testimonialCarousel();
    });
    $(document).ready(function () {
      $('#loading').hide();
    });
  },
};
