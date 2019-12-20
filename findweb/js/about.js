// プラグイン起動
AOS.init();
Splitting();
ScrollOut({
    targets: '[data-splitting]'
 });

// splitアニメーション
const splitAnime00 = document.querySelectorAll(".splitAnime00");
const splitAnimeSlow = document.querySelectorAll(".splitAnimeSlow");
const splitAnimeToSlow = document.querySelectorAll(".splitAnimeToSlow");
const splitAnimeToLate = document.querySelectorAll(".splitAnimeToLate");
window.onload = function () {
    setTimeout(Anime00,500);
    setTimeout(SlowAnime,1000);
    setTimeout(toSlowAnime,2200);
    setTimeout(toLateAnime,3200);

};
function Anime00() {
    for(let i =0; i < splitAnime00.length; i++) {
        splitAnime00[i].classList.remove("fadeReady");
     }
}
function SlowAnime() {
    for(let i =0; i < splitAnimeSlow.length; i++) {
        splitAnimeSlow[i].classList.remove("fadeReady");
     }
}
function toSlowAnime() {
    for(let i =0; i < splitAnimeToSlow.length; i++) {
        splitAnimeToSlow[i].classList.remove("fadeReady");
     }
}
function toLateAnime() {
    for(let i =0; i < splitAnimeToSlow.length; i++) {
        splitAnimeToLate[i].classList.remove("fadeReady");
     }
}

// safariのみ追記スタイル
const userAgent = window.navigator.userAgent.toLowerCase();
if(userAgent.indexOf('msie') > -1) {
  } else if(userAgent.indexOf('edge') > -1) {
  } else if(userAgent.indexOf('chrome') > -1) {
  } else if(userAgent.indexOf('safari') > -1) {
    // document.getElementsByClassName("main-visual__wrapper")[0].style.marginTop = "60px";
    // document.getElementsByClassName("main-visual__right")[0].style.marginTop = "180px";
  } else if(userAgent.indexOf('firefox') > -1) {
  } else {
  }

// スマホ表示はfooterのボタンのアニメーションを削除
if(window.innerWidth < 630 ) {
    console.log("a");
    document.getElementsByClassName("footer__left")[0].getElementsByClassName("btn")[0].removeAttribute("data-aos");
    
}