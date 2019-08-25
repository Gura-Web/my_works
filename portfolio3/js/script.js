

$(function(){
     // メニュー
    if($('.menu'))
    $('.menu').click(function() {
        $('.menu').find('span').toggleClass('menu--active');
        if($('.navi').className == 'navi-on') {
            $('.navi').removeClass('navi-on').addClass('navi-off');
            console.log("a");
        }
        $('.navi').toggleClass('navi-on');
    })

    $('.inview').after('<br>');
});



// inview
jQuery(function($) {
    $('.inview').on('inview',function(event,isInView) {
         if (isInView) {
              $(this).addClass('slide-text');
              $(this).find('.inview__inner').addClass('slide-text__inner');
         }
    });
    $('.listup').on('inview',function(event,isInView) {
         if (isInView) {
              $(this).find("article").eq(0).addClass('listup-item1')
              $(this).find("article").eq(1).addClass('listup-item2')
              $(this).find("article").eq(2).addClass('listup-item3')
         }
    });
    // スライドアップ
    $('.slideup02').on('inview',function(event,isInView) {
          if (isInView) {
               $(this).addClass('slideup-anime--delay02');
          }
     });
     $('.slideup04').on('inview',function(event,isInView) {
          if (isInView) {
               $(this).addClass('slideup-anime--delay04');
          }
     });
     $('.slideup06').on('inview',function(event,isInView) {
          if (isInView) {
               $(this).addClass('slideup-anime--delay06');
          }
     });
    $('.slideup09').on('inview',function(event,isInView) {
         if (isInView) {
              $(this).addClass('slideup-anime--delay09');
         }
    });
    // スライド右
    $('.slideright02').on('inview',function(event,isInView) {
          if (isInView) {
               $(this).addClass('slideright-anime--delay02');
          }
     });
    $('.slideright09').on('inview',function(event,isInView) {
         if (isInView) {
              $(this).addClass('slideright-anime--delay09');
         }
    });
    $('.slideright13').on('inview',function(event,isInView) {
         if (isInView) {
              $(this).addClass('slideright-anime--delay13');
         }
    });
    $('.slideright18').on('inview',function(event,isInView) {
         if (isInView) {
              $(this).addClass('slideright-anime--delay18');
         }
    });
});


