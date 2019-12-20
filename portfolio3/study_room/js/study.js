// $('.study-banner1').on('click',function() {
//     $('#study-info__ttl').text('楽天証券バナートレース');
//     // $('#study__aboutDesc').text('');
//     // $('#study__desc').text('');
//     $('#study-info__season').text('2年前期');
//     $('#study-info__time').text('35分');
//     $('#study-info__type').text('バナー');
//     $('#study-info__img').attr('src','img/banner1_main.png');
// });
$('.work-item').on('click',function() {
    console.log($(this).find('.study-season').text());
    $('#study-info__ttl').text($(this).find('.work-item__ttl').text());
    $('#study-info__season').text($(this).find('.work-item__season').text());
    $('#study-info__time').text($(this).find('.work-item__time').text().slice(5));
    // $('#study-info__type').text($(this).find('.work-item__ttl').text());
    // console.log($('this').find('.work-item__img'));
    // $('#study-info__img').attr('src',$(this).find('.work-item__img').find('img').attr('src'));
    $('#study-info__img').attr('src',$(this).find('.hidden').text());
});

// 勉強詳細
$('.work-item').click(function() {
    $('.study-info').fadeIn();
});
$('.study-info__close').click(function() {
    $('.study-info').fadeOut();
});