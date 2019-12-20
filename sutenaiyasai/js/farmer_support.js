window.onload = function() {
    document.getElementsByClassName("main-visual__wrapper")[0].classList.add("scale_view_fast");
}
document.onscroll = function () {
    var scrollTop = document.documentElement.scrollTop;
    console.log(scrollTop);
    if (scrollTop >=200) {
        document.getElementsByClassName("about__ttl")[0].classList.add("scroll_view1");
        document.getElementsByClassName("about__desc")[0].classList.add("scroll_view1_slow");
        document.getElementsByClassName("about__desc")[1].classList.add("scroll_view1_to_slow");
    } 
    if (scrollTop >= 900) { document.getElementsByClassName("farmer-life__ttl")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 1200) { document.getElementsByClassName("private")[0].classList.add("scroll_view2"); } 
    if (scrollTop >= 1600) { document.getElementsByClassName("hobby")[0].classList.add("scroll_view3"); } 
    if (scrollTop >= 2000) { document.getElementsByClassName("healthy-life")[0].classList.add("scroll_view2"); } 
    if (scrollTop >= 2500) { document.getElementsByClassName("family__ttl")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 2600) { 
        document.getElementsByClassName("family__text")[0].classList.add("scroll_view1"); 
        document.getElementsByClassName("family__note")[0].classList.add("scroll_view1"); 
    } 
    if (scrollTop >= 3000) { document.getElementsByClassName("example")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 3450) { 
        document.getElementsByClassName("problem__ttl")[0].classList.add("scroll_view2"); 
        document.getElementsByClassName("problem__text")[0].classList.add("scroll_view3");
    }
    if (scrollTop >= 3600) { document.getElementsByClassName("problem-list")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 4000) { document.getElementsByClassName("no-cost__ttl")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 4350) { 
        document.getElementsByClassName("cost-support__wrapper")[0].classList.add("scroll_view2"); 
        document.getElementsByClassName("cost-support__image")[0].classList.add("scroll_view2"); 
    } 
    if (scrollTop >= 4950) {
        document.getElementsByClassName("merit-list__item")[0].classList.add("scroll_view1");
        document.getElementsByClassName("merit-list__item")[1].classList.add("scroll_view1_slow");
        document.getElementsByClassName("merit-list__item")[2].classList.add("scroll_view1_to_slow");
    } 
    if (scrollTop >= 5180) { document.getElementsByClassName("to-farmer__ttl")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 5540) { document.getElementsByClassName("fail")[0].classList.add("scroll_view2"); } 
    if (scrollTop >= 5900) { document.getElementsByClassName("study-support")[0].classList.add("scroll_view3"); } 
    if (scrollTop >= 6310) { document.getElementsByClassName("process__ttl")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 6520) { document.getElementsByClassName("step-one")[0].classList.add("scroll_view3"); } 
    if (scrollTop >= 6880) { document.getElementsByClassName("step-two")[0].classList.add("scroll_view2"); } 
    if (scrollTop >= 7120) { document.getElementsByClassName("step-three")[0].classList.add("scroll_view3"); } 
    if (scrollTop >= 7450) { document.getElementsByClassName("step-four")[0].classList.add("scroll_view2"); } 
    
    if (scrollTop >= 8100) { document.getElementsByClassName("target__ttl")[0].classList.add("scroll_view1"); } 
    if (scrollTop >= 8450) { 
        document.getElementsByClassName("target__list")[0].classList.add("scroll_view3"); 
        document.getElementsByClassName("target__image")[0].classList.add("scroll_view2");
    } 
    if (scrollTop >= 8560) { document.getElementsByClassName("farmer-checkBtn")[1].classList.add("scroll_view1"); } 
    if (scrollTop >= 8900) { document.getElementsByClassName("guide__ttl")[0].classList.add("scroll_view1"); }
    if (scrollTop >= 9200) { 
        document.getElementsByClassName("guide__logo")[0].classList.add("scroll_view3"); 
        document.getElementsByClassName("guide__wrapper")[0].classList.add("scroll_view2"); 
        
    }
    

    
}