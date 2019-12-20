$(function(){
    $('.center').slick({
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 3,
        autoplay: true,
        dots: true,
        variableWidth: true,
        responsive: [
          
          {
            breakpoint: 768,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '10px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '10px',
              slidesToShow: 1
            }
          }
        ]
      });
});
