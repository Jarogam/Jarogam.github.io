// span.dispal none on click burger
// hide logo
// body.sideparmini{
//     span_dispay: none
//     left-section - width: hide to icon(80px)
//     right-section: 80% > 100% - left-section;
// }
// span.dispal none on click burger
// hide logo
// body.sideparmini{
//     span_dispay: none
//     left-section - width: hide to icon(80px)
//     right-section: 80% > 100% - left-section;
// }


// function miniburger() {
//     var x = document.getElementById("myDIV");
//     if (x.style.display === "none") {
//       x.style.display = "block";
//     } else {
//       x.style.display = "none";
//     }
//   }


// let burger = document.getElementsByClassName("body");
function miniburger() {
    var element = document.querySelector("body");
    // element.classList.add("sidebar-mini");
    element.classList.toggle("sidebar-mini");
    if(a){

    }
  }


var swiper = new Swiper('.swiper-tournaments', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-tournaments-button-next",
        prevEl: ".swiper-tournaments-button-prev"
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 40
        },
        // when window width is >= 640px
        576: {
          slidesPerView: 1,
          spaceBetween: 40
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 40
        },
        992: {
          slidesPerView: 1,
          spaceBetween: 40
        },
        1200: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // 1400: {
        //   slidesPerView: 2,
        //   spaceBetween: 20
        // }
        
      }
});
var swiper = new Swiper('.swiper-award', {
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-award-button-next",
        prevEl: ".swiper-award-button-prev"
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 40
        },
        // when window width is >= 640px
        576: {
          slidesPerView: 1,
          spaceBetween: 40
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 40
        },
        992: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        1200: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // 1400: {
        //   slidesPerView: 1,
        //   spaceBetween: 20
        // }
        
      }
});

