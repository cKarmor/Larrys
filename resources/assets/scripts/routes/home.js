export default {
  init() {
    // JavaScript to be fired on the home page
    
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};

let isOver = false;  

function getMouseY(){
  $(document).mousemove(function(e) {
    if(isOver){
      let mouseY = e.pageY;
      let translateY = 'translateY(' + (mouseY + 13) + 'px)';
      $('#nav-toggle-button').css('transform', translateY);
    }
  })
}

$('#nav-toggle').mousemove(function(){
  $('#nav-toggle').css('cursor', 'none');
  isOver = true;
  getMouseY();
}).mouseleave(function(){
  isOver = false;
  $('#nav-toggle-button').css('transform', translateY);
}).click(function(){
  $('#nav-container').toggleClass('nav-container--toggle');
  $('#nav-toggle-button').css('transform', translateY);
});

let navContainerWidth = $('#nav-container').outerWidth();
console.log(navContainerWidth);
let windowHeight = $(window).height();
console.log(windowHeight, 'window height');
let translateY = 'translateY(' + (windowHeight - 50) + 'px)';
$('#nav-toggle-button').css('transform', translateY);
