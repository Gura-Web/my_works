window.onload = function() {
    document.getElementsByClassName("main-visual__ttl")[0].classList.add("scroll_view1");
    document.getElementsByClassName("main-visual__catch")[0].classList.add("scroll_view1");
    document.getElementsByClassName("main-visual__logo")[0].classList.add("scroll_view1_slow");
    document.getElementsByClassName("main-visual__text")[0].classList.add("scroll_view1_to_slow");
    document.getElementsByClassName("main-visual__scroll")[0].classList.add("scale_view");
}
document.onscroll = function () {
    var scrollTop = document.documentElement.scrollTop;
    console.log(scrollTop);
    if (scrollTop >=350) {
        document.getElementsByClassName("about__ttl")[0].classList.add("scroll_view1");
        document.getElementsByClassName("about__desc")[0].classList.add("scroll_view1_slow");
    } 
    if (scrollTop >= 750) {
        document.getElementsByClassName("concept__hdn")[0].classList.add("scroll_view1");  
    } 
    if (scrollTop >= 1130) {
        document.getElementsByClassName("meaning")[0].classList.add("scroll_view2");
    } 
    if (scrollTop >= 1500) {
        document.getElementsByClassName("reason")[0].classList.add("scroll_view3");
        document.getElementsByClassName("sdgs")[0].classList.add("scroll_view2");
    } 
    if (scrollTop >= 2258) {
        document.getElementsByClassName("purpose__wrap")[0].classList.add("scroll_view3");
        document.getElementsByClassName("purpose__image")[0].classList.add("scroll_view2");
        document.getElementsByClassName("about-checkBtn")[0].classList.add("scroll_view1_slow");
    } 
    if (scrollTop >= 2766) {
        document.getElementsByClassName("merit__hdn")[0].classList.add("scroll_view1");
    } 
    if (scrollTop >= 3246) {
        document.getElementsByClassName("point-one")[0].classList.add("scroll_view2");
    } 
    if (scrollTop >= 3800) {
        document.getElementsByClassName("point-two")[0].classList.add("scroll_view3");
    } 
    if (scrollTop >= 4357) {
        document.getElementsByClassName("point-three")[0].classList.add("scroll_view2");
    } 
    if (scrollTop >= 4800) {
        document.getElementsByClassName("go-page__container")[0].classList.add("scroll_view1");
    } 
    if (scrollTop >= 5000) {
        document.getElementsByClassName("features__hdn")[0].classList.add("scroll_view1");
    } 
    if (scrollTop >= 5600) {
        document.getElementsByClassName("farmer-favorite")[0].classList.add("scroll_view1");
        document.getElementsByClassName("regularly")[0].classList.add("scroll_view1_slow");
        document.getElementsByClassName("sale-news")[0].classList.add("scroll_view1_to_slow");
    } 
    if (scrollTop >= 6200) {
        document.getElementsByClassName("about-symbol__ttl")[0].classList.add("scroll_view1");
        document.getElementsByClassName("about-symbol__image")[0].classList.add("scroll_view1_slow");
        document.getElementsByClassName("about-symbol__heading")[0].classList.add("scroll_view1_to_slow");
        document.getElementsByClassName("about-symbol__desc")[0].classList.add("scroll_view1_to_slow");
    } 
    if (scrollTop >= 6400) {
        document.getElementsByClassName("about-checkBtn")[2].classList.add("scroll_view1_to_slow");
    } 
    if (scrollTop >= 7300) {
        document.getElementsByClassName("about-event__ttl")[0].classList.add("scroll_view1");
    } 
    if (scrollTop >= 7500) {
        document.getElementsByClassName("about-event__wrapper")[0].classList.add("scroll_view1");
    } 
}

$(function() {
    $('.slider').slick({
        dots: true,
        arrows: true,
        autoplay:true,
    });
});
