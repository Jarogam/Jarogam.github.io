var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 15,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });