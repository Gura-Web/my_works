jQuery(function($){

$(function() {
  $(".slider-set").slick({
    centerMode: true,
    centerPadding: "30px 160px",
    autoplay: true,
    variableWidth: true,
    appendArrows: $('.popular-arrows'),
    prevArrow:
      '<p class="popular-arrow prev-popular"><img src="'+path+'/img/solid-arrow_white.svg"></p>',
    nextArrow:
      '<p class="popular-arrow next-popular"><img src="'+path+'/img/solid-arrow_white.svg"></p>',
    // prevArrow:
    //   '<p class="popular-arrow prev-popular"><img src="/wordpress/wp-content/themes/egggg_theme/img/solid-arrow_white.svg"></p>',
    // nextArrow:
    //   '<p class="popular-arrow next-popular"><img src="/wordpress/wp-content/themes/egggg_theme/img/solid-arrow_white.svg"></p>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          centerPadding: "30px 140px",
          slidesToShow: 3,
          prevArrow:false,
          nextArrow:false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          prevArrow:false,
          nextArrow:false,
          centerMode: true,
          centerPadding: "30px 0",
          slidesToShow: 1
        }
      }
    ]
  });
});
});