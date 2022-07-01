"use strict";

$(".works-slider").slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [{
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }, {
    breakpoint: 769,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  } // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});
$(".plans-slider").slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [{
    breakpoint: 2000,
    settings: "unslick"
  }, {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }, {
    breakpoint: 769,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  } // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});