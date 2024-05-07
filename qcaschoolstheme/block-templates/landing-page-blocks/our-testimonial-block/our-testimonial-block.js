jQuery(document).ready(function () {
  var myswiper = new Swiper(".mySwipertestimonial", {
    slidesPerView: 3,
    spaceBetween: 20,
    observer: true,
    observeParents: true,
    pagination: {
      el: ".swiper-pagination-testimonial",
      dynamicBullets: true,
      dynamicMainBullets: 1,
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        pagination: {
          dynamicBullets: true,
          dynamicMainBullets: 1,
        },
      },
      480: {
        slidesPerView: 1,
        pagination: {
          dynamicBullets: true,
          dynamicMainBullets: 1,
        },
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      991: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 40,
      },

      1400: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    }
  });
});