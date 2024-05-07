// QCA Girls Site Our Gallery Slider

jQuery(document).ready(function () {
  var myswiper = new Swiper(".qcaschoolgallery", {
    slidesPerView: 5,
    spaceBetween: 20,
    observer: true,
    observeParents: true,
    navigation: {
      nextEl: ".gallery-swiper-navigations .swiper-button-next",
      prevEl: ".gallery-swiper-navigations .swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      480: {
        slidesPerView: 1,
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


jQuery(document).ready(function () {
  var myswiper = new Swiper(".colorcodeslider", {
    slidesPerView: 6,
    spaceBetween: 20,
    observer: true,
    observeParents: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      480: {
        slidesPerView: 1,
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
        slidesPerView: 6,
        spaceBetween: 20,
      },
    }
  });
});



/**
 * Mobile nav toggle
 */
jQuery(document).ready(function ($) {
  $(".btn-toggler").on("click", function () {
    $("#header-boys").toggleClass('mob-menu-active');
  });
});

jQuery(document).ready(function ($) {
  $(".btn-toggler").on("click", function () {
    $("#main-header").toggleClass('mob-menu-active');
  });
});

jQuery(document).ready(function ($) {
  $(".btn-toggler").on("click", function () {
    $("#header-girls").toggleClass('mob-menu-active');
  });
});

$(window).scroll(function(){
  var sticky = $('header'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('sticky');
  else sticky.removeClass('sticky');
});

