import $ from 'jquery';

export default function () {
  const buttons = $('.btn');
  buttons.each(function () {
    const button = $(this);
    button.wrap('<div class="button-wrap"></div>');
    const height = button.outerHeight();
    const arrow = $('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1 2" style="enable-background:new 0 0 1 2;" xml:space="preserve" class="btn__arrow"><polyline points="0,2 1,1 0,0 " /></svg>');
    arrow.css('height', height);
    arrow.css('width', height / 2);
    arrow.insertAfter(button);
  });
}
