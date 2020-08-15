jQuery(document).ready(function (e) {
  var i = function () {
      e(".burger").click(function (i) {
          e(this).toggleClass("open"), 
          e(".header-overlay__content").toggleClass("is-active");
          e(".footer-overlay__content").toggleClass("is-active");

      });
  };
  i();
}),


$('.carousel.carousel-slider').carousel({
        fullWidth: true,

}
);
setInterval(function() {
  $('.carousel.carousel-slider').carousel('next');
}, 6000); // every 6 seconds


$(document).ready(function(){
  $('.modal').modal();
});


// blog carousel
// document.addEventListener('DOMContentLoaded', function() {
//   var elems = document.querySelectorAll('.carousel');
//   var instances = M.Carousel.init(elems, options);
// });
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 5,
  spaceBetween: 20,
  freeMode: true,
  loop: true,
  breakpoints: {
    1750: {
      slidesPerView: 6,
      spaceBetween: 40
    },
    998: {
      slidesPerView: 5,
      spaceBetween: 30
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    568: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }
});

var swiper = new Swiper('.swiper-blog',  {
  pagination: {
    el: '.swiper-pagination',
  },
  loop: true,
  autoplay: {
    delay: 4000,
  }, 
});
var swiper = new Swiper('.swiper-blog-companies', {
  slidesPerView: 6,
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  breakpoints: {
    998: {
      slidesPerView: 5,
      spaceBetween: 30
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    568: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }
});




