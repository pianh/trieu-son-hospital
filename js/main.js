



var swiper = new Swiper('.swiper-container.slide-bner', {

  navigation: {

    nextEl: '.swiper-button-next',

    prevEl: '.swiper-button-prev',

  },

  loop: true,

  autoplay: true,

});



var swiper = new Swiper('.swiper-container.slide-news', {

  loop: true,

  spaceBetween: 20,

  autoPlay: true,

  slidesPerView: 3,

  navigation: {

    nextEl: '.swiper-button-next',

    prevEl: '.swiper-button-prev',

  },

  pagination: {

    el: '.swiper-pagination',

  },

  breakpoints: {

    1024: {

      slidesPerView: 4,

      spaceBetween: 40,

    },

    768: {

      slidesPerView: 3,

      spaceBetween: 10,

    },

    640: {

      slidesPerView: 1.5,

      spaceBetween: 10,

    },

    320: {

      slidesPerView: 1.5,

      spaceBetween: 10,

    }

  }

});



var swiper = new Swiper('.swiper-container.slide-doctor', {

  loop: true,

  spaceBetween: 25,

  autoPlay: true,

  slidesPerView: 5,

  navigation: {

    nextEl: '.swiper-button-next',

    prevEl: '.swiper-button-prev',

  },

  pagination: {

    el: '.swiper-pagination',

  },

  breakpoints: {

    1024: {

      slidesPerView: 4,

      spaceBetween: 40,

    },

    768: {

      slidesPerView: 3,

      spaceBetween: 10,

    },

    640: {

      slidesPerView: 1.5,

      spaceBetween: 10,

    },

    320: {

      slidesPerView: 1.5,

      spaceBetween: 10,

    }

  }

});





$(document).ready(function () {



  $('ul.tabs li a').click(function () {

    var tab_id = $(this).attr('data-tab');



    $('ul.tabs li a').removeClass('active');

    $('.content-tabs').removeClass('active');



    $(this).addClass('active');

    $("#" + tab_id).addClass('active');

  })



})





$(document).ready(function () {

  $('.pagination ul li a').click(function () {

    $('.pagination ul li a').removeClass("active");

    $(this).addClass("active");

  });

});





$(document).ready(function () {

  $('.btn-menu a').click(function () {

    $('.header-menu').toggleClass("active");

    $('body').toggleClass("active");

    $('.btn-menu a i').toggleClass("fa-bars");

  });

});


$(document).ready(function () {

  $('.search-menu').click(function (e) {
    e.preventDefault();
    $('.form-search').toggleClass('show-box');
  });
});