// 右側ドット
$(window).scroll(function() {
     if ($(this).scrollTop() > $('#section01').offset().top && $(this).scrollTop() < $('#section02').offset().top){
          $('#dot01').css({ backgroundColor: '#00D000' });
          $('#dot01').find('span').css({ opacity: '1' });
          $('#dot02').css({ backgroundColor: '#fff' });
          $('#dot02').find('span').css({ opacity: '0' })
     } else if($(this).scrollTop() > $('#section02').offset().top && $(this).scrollTop() < $('#section03').offset().top) {
          $('#dot01').css({ backgroundColor: '#fff' });
          $('#dot01').find('span').css({ opacity: '0' })
          $('#dot02').css({ backgroundColor: '#00D000' })
          $('#dot02').find('span').css({ opacity: '1' });
          $('#dot03').css({ backgroundColor: '#fff' });
          $('#dot03').find('span').css({ opacity: '0' })
     } else if($(this).scrollTop() > $('#section03').offset().top && $(this).scrollTop() < $('#section04').offset().top) {
          $('#dot02').css({ backgroundColor: '#fff' });
          $('#dot02').find('span').css({ opacity: '0' })
          $('#dot03').css({ backgroundColor: '#00D000' })
          $('#dot03').find('span').css({ opacity: '1' });
          $('#dot04').css({ backgroundColor: '#fff' });
          $('#dot04').find('span').css({ opacity: '0' })
     } else if($(this).scrollTop() > $('#section04').offset().top && $(this).scrollTop() < $('#section05').offset().top) {
          $('#dot03').css({ backgroundColor: '#fff' });
          $('#dot03').find('span').css({ opacity: '0' })
          $('#dot04').css({ backgroundColor: '#00D000' })
          $('#dot04').find('span').css({ opacity: '1' });
          $('#dot05').css({ backgroundColor: '#fff' });
          $('#dot05').find('span').css({ opacity: '0' })
     }
     if($(this).scrollTop() > $('#section05').offset().top - 500){
          $('#dot04').css({ backgroundColor: '#fff' })
          $('#dot04').find('span').css({ opacity: '0' });
          $('#dot05').css({ backgroundColor: '#00D000' });
          $('#dot05').find('span').css({ opacity: '1' })
     }
})

// メールアドレス
$('#mailBtn').click(function() {
     $('.mail-address').slideDown();
});
$('.mail-address__cross').click(function() {
     $('.mail-address').slideUp();
});