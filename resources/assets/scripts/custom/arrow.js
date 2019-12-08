import $ from 'jquery';

export default function () {
  const arrows = $('.arrow');
  arrows.each(function () {
    const arrow = $(this);
    const height = arrow.height();
    arrow.css('width', height / 2);
  });
}
