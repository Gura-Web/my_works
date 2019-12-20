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
        }
 })
 // mixitup
 var containerEl = document.querySelector('.container');
 var mixer = mixitup(containerEl);
 
 // カテゴリー
 var web = $('#workWeb');
 var gra = $('#workGra');
 var other = $('#workOther');

 var single = $('#workSingle');
 var group = $('#workGroupe');
 var good = $('#workGood');
 var idea = $('#workIdea');
 var private = $('#workPrivate');
 var school = $('#workSchool');

 var CateClass = 'border--on';
 $('.work-category__item').click(function() {
     $(this).addClass(CateClass);
});
web.click(function() {
     gra.removeClass(CateClass);
     other.removeClass(CateClass);
     single.removeClass(CateClass);
     group.removeClass(CateClass);
     good.removeClass(CateClass);
     idea.removeClass(CateClass);
     private.removeClass(CateClass);
     school.removeClass(CateClass);
});
gra.click(function() {
     web.removeClass(CateClass);
     other.removeClass(CateClass);
     single.removeClass(CateClass);
     group.removeClass(CateClass);
     good.removeClass(CateClass);
     idea.removeClass(CateClass);
     private.removeClass(CateClass);
     school.removeClass(CateClass);
});
other.click(function() {
     gra.removeClass(CateClass);
     web.removeClass(CateClass);
     single.removeClass(CateClass);
     group.removeClass(CateClass);
     good.removeClass(CateClass);
     idea.removeClass(CateClass);
     private.removeClass(CateClass);
     school.removeClass(CateClass);
});


$('.work-category--more__item').click(function() {
     $(this).addClass(CateClass);
});
single.click(function() {
     gra.removeClass(CateClass);
     web.removeClass(CateClass);
     other.removeClass(CateClass);
     group.removeClass(CateClass);
     good.removeClass(CateClass);
     idea.removeClass(CateClass);
     private.removeClass(CateClass);
     school.removeClass(CateClass);
});
group.click(function() {
     gra.removeClass(CateClass);
     web.removeClass(CateClass);
     other.removeClass(CateClass);
     single.removeClass(CateClass);
     good.removeClass(CateClass);
     idea.removeClass(CateClass);
     private.removeClass(CateClass);
     school.removeClass(CateClass);
});
good.click(function() {
     gra.removeClass(CateClass);
     web.removeClass(CateClass);
     other.removeClass(CateClass);
     single.removeClass(CateClass);
     group.removeClass(CateClass);
     idea.removeClass(CateClass);
     private.removeClass(CateClass);
     school.removeClass(CateClass);
});
idea.click(function() {
     gra.removeClass(CateClass);
     web.removeClass(CateClass);
     other.removeClass(CateClass);
     single.removeClass(CateClass);
     group.removeClass(CateClass);
     good.removeClass(CateClass);
     private.removeClass(CateClass);
     school.removeClass(CateClass);
});
private.click(function() {
     gra.removeClass(CateClass);
     web.removeClass(CateClass);
     other.removeClass(CateClass);
     single.removeClass(CateClass);
     group.removeClass(CateClass);
     good.removeClass(CateClass);
     idea.removeClass(CateClass);
     school.removeClass(CateClass);
});
school.click(function() {
     gra.removeClass(CateClass);
     web.removeClass(CateClass);
     other.removeClass(CateClass);
     single.removeClass(CateClass);
     group.removeClass(CateClass);
     good.removeClass(CateClass);
     idea.removeClass(CateClass);
     private.removeClass(CateClass);
});