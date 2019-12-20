window.onload = function() {
    document.getElementsByClassName("main-visual__desc")[0].classList.add("scroll_view1");
    document.getElementsByClassName("main-visual__logo")[0].classList.add("scroll_view1_slow");
    document.getElementsByClassName("main-visual__time")[0].classList.add("scroll_view1_to_slow");
    document.getElementsByClassName("main-visual__place")[0].classList.add("scroll_view1_to_slow");
    document.getElementsByClassName("main-visual__btn-wrap")[0].classList.add("scroll_view3_to_slow");
    
}
document.onscroll = function () {
    var scrollTop = document.documentElement.scrollTop;
    console.log(scrollTop);
    if (scrollTop >=300) {
        document.getElementsByClassName("about__ttl")[0].classList.add("scroll_view1");
        
    } 
    if (scrollTop >= 340) { document.getElementsByClassName("about__illust")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 430) { document.getElementsByClassName("about__desc")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 900) { document.getElementsByClassName("meaning")[0].classList.add("scroll_view2"); }
    if (scrollTop >= 1200) { document.getElementsByClassName("thought")[0].classList.add("scroll_view3"); }
    if (scrollTop >= 1300) { document.getElementsByClassName("fes-checkBtn")[0].classList.add("scroll_view1"); }
    // charm
    if (scrollTop >= 1700) { document.getElementsByClassName("charm__ttl")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 1850) { document.getElementsByClassName("charm__desc")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 2200) { document.getElementsByClassName("charm-item")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 2200) { document.getElementsByClassName("charm-item")[1].classList.add("scroll_view1_slow"); }
    if (scrollTop >= 2200) { document.getElementsByClassName("charm-item")[2].classList.add("scroll_view1_to_slow"); }

    if (scrollTop >= 2800) { document.getElementsByClassName("restaurant-list")[0].classList.add("scroll_view2"); }
    if (scrollTop >= 3200) { document.getElementsByClassName("event__ttl")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 3470) { document.getElementsByClassName("event-item")[0].classList.add("scroll_view2"); }
    if (scrollTop >= 3800) { document.getElementsByClassName("event-item-junior")[0].classList.add("scroll_view3"); }

    if (scrollTop >= 4400) { document.getElementsByClassName("store-merit__ttl")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 4800) { document.getElementsByClassName("merit-item")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 4800) { document.getElementsByClassName("merit-item")[1].classList.add("scroll_view1_slow"); } 
    if (scrollTop >= 4800) { document.getElementsByClassName("merit-item")[2].classList.add("scroll_view1_to_slow"); }
    if (scrollTop >= 4900) { document.getElementsByClassName("fes-checkBtn")[1].classList.add("scroll_view1"); }
    

}