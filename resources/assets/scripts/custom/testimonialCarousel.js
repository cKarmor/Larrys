import Flickity from 'flickity';

export default function () {

  const elem = document.querySelector('.js-testimonial-carousel');
  new Flickity( elem, {
    cellAlign: 'left',
    contain: false,
    prevNextButtons: false,
    pageDots: false,
    autoPlay: true,
  });

}
