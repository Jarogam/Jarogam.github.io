jQuery(document).ready(function (e) {
  var i = function () {
      e(".burger").click(function (i) {
          e(this).toggleClass("open"), 
          e(".header-overlay__content").toggleClass("is-active");
      });
  };
  i();
}),

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