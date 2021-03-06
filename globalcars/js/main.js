// $(window).scroll(function() {    
//   var scroll = $(window).scrollTop();
//    //console.log(scroll);
//   if (scroll >= 50) {
//       //console.log('a');
//       $(".header").addClass("nav-colored");
//   } else {
//       //console.log('a');
//       $(".header").removeClass("nav-colored");
//   }
// });

// 'use strict';

// (function() {
//   var body = document.body;
//   var burgerMenu = document.getElementsByClassName('burger-menu')[0];
//   var burgerContain = document.getElementsByClassName('b-container')[0];
//   var burgerNav = document.getElementsByClassName('b-nav')[0];

//   burgerMenu.addEventListener('click', function toggleClasses() {

//       this.classList.toggle('active');

//   });
// })();

$(document).ready(function () {
  $('.burger-menu').on('click', function () {
      $('.burger-menu__lines').toggleClass('active');
      $('.header-wrapper__layout').toggleClass('active');
  });
});

$(window).on("scroll", function() {
  if($(window).scrollTop() > 50) {
      $(".header").addClass("active");
      console.log('if')
  } else {
      //remove the background property so it comes transparent again (defined in your css)
     $(".header").removeClass("active");
     console.log('else')
  }
});

let swiper = new Swiper('.reviews-slider', {
    slidesPerView: '2.3',
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.reviews-button-next',
        prevEl: '.reviews-button-prev',
      },
      breakpoints: {
      320: {
        slidesPerView: '1',
        spaceBetween: 20,
        centeredSlides: true
      },
      
      460: {
        slidesPerView: '1',
        spaceBetween: 20,
        centeredSlides: true
      },

      768: {
        slidesPerView: '2',
        spaceBetween: 20
      },

      992: {
        slidesPerView: '2.3',
        spaceBetween: 20
      },
    }
  });

  let swiper2 = new Swiper('.cars-gallery', {
    slidesPerView: '1',
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.gallery-button-next',
        prevEl: '.gallery-button-prev',
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },

        992: {
          centeredSlides: true
        }
      }
  });