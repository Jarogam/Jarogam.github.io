// var instance = M.Carousel.init({
//     fullWidth: true
//   });

  // Or with jQuery

//   $('.carousel.carousel-slider').carousel({
//     fullWidth: true,
//     autoplay: true
//   });
// autoplay();
// function autoplay() {
//     $('.carousel.carousel-slider').carousel('next');
//     setTimeout(autoplay, 4500);
// }

$('.carousel.carousel-slider').carousel({
        fullWidth: true
}
);
setInterval(function() {
  $('.carousel.carousel-slider').carousel('next');
}, 3500); // every 5 seconds


$(document).ready(function(){
  $('.modal').modal();
});