let swiper = new Swiper('.reviews-slider', {
    slidesPerView: '3',
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });

  let swiper2 = new Swiper('.cars-gallery', {
    slidesPerView: '1',
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });