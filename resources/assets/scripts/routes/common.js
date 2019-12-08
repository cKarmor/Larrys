import arrow from '../custom/arrow';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(window).load(function () {
      arrow();
    });
    $(window).resize(function () {
      if (window.innerWidth < 567) {
        arrow();
      }
      else if (window.innerWidth >= 567) {
        arrow();
      }
      else if (window.innerWidth >= 768) {
        arrow();
      }
      else if (window.innerWidth >= 992) {
        arrow();
      }
      else if (window.innerWidth >= 1200) {
        arrow();
      }
    });
  },
};
