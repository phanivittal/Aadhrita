var swiper = new Swiper('.blog-slider', {
  spaceBetween: 30,
  effect: 'fade',
  loop: true,
  mousewheel: {
    invert: false,
  },
  pagination: {
    el: '.blog-slider__pagination',
    clickable: true,
  }
});

const header = document.querySelector('.main-header');

window.addEventListener('scroll', () => {
  const scrollPos = window.scrollY;
  if(scrollPos > 10){
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});


jQuery(document).ready(function( $ ) {
  new WOW().init();
;

});

$(function(){

  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if(scroll>50) {
        $("#intro").css("background-size", "130% 130%");
      }
      else {
        $("#intro").css("background-size", "100% 100%");
      }
  });
});
