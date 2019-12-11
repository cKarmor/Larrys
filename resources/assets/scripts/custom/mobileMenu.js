export default function() {
  $('.navbar-toggler').on('click', function () {
    $('body').toggleClass('nav-open');
  });

  /*
  $('.page-header__link--has-children').on('click', function() {
    if( $('body').hasClass('is-navbar-collapse') ) {
      $(this).parent().toggleClass('page-header__item--active');
    }
  });
  */
}
