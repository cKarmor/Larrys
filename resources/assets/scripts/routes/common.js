import createArrow from '../custom/createArrow';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(window).load(function () {
      createArrow();
    });
  },
};
