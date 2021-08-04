var $burger = $('#burger');
var dropdownMenu = $('#nav__right');


$burger.click(function() {
    dropdownMenu.toggleClass( "active");
});


const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    mousewheel: {
        eventsTarget: 'container',
      },
});


