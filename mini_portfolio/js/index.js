
// // loader //
// var loader = document.getElementById("loaderBg") 

// function deep() { // 文字が選択できるようにloaderを一番後ろに持って行く関数
//     loader.style.zIndex = "-100";
// }
// function close() { // opacityを０にして消す　opacityならCSSのtransitionが効くのでなめらかに消える
//     loader.style.opacity = "0"; // 今HTMLのloaderをコメントアウトしてるからブラウザでエラー出るけどコメントアウト解除したら治るよ
//     setTimeout(deep, 6000); // ６秒後にz-inedxの関数を実行
// }
// setTimeout(close, 6000); // ６秒後に上記の全てを実行



// カウント
// var loader = document.getElementById("scroll");
// var num = 0;
// var target = 100;
// var speed = 100;
// setInterval(function() {
//     if(num <= target) {
//         loader.innerHTML = num;
//         num++;
//     }
// },speed);



// スムーススクロール //
$(function() {
    // #で始まるアンカーをクリックしたら実行
    $("a[href^='#'").click(function() {
        // スクロール速度
        var speed = 1500;
        // 移動先を取得
        var href  = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top;
        $("html,body").animate({scrollTop:position}, speed, "swing");
        
        return false;
    });
});





// ハンバーガーメニュー //
function spToggle() {
    var navToggle = document.getElementById("navToggle");
    var navToggleClass = navToggle.getAttribute("class");
    var spMenuList = document.getElementById("spMenuList");  
    
    if(navToggleClass == "nav-toggle-btn close") {
        navToggle.classList.remove("close");
        spMenuList.classList.remove("close");
        navToggle.classList.add("open");
        spMenuList.classList.add("open");
        
    } else {
        navToggle.classList.remove("open");
        spMenuList.classList.remove("open");
        navToggle.classList.add("close");
        spMenuList.classList.add("close");
        
    }
}
document.getElementById("navToggle").onclick = spToggle;







// ロゴを一定間隔で回転 //
var logoId = document.getElementById("logo");
function kaiten() {
    if(logoId.className !== "rotate-logo") {
        logoId.classList.add("rotate-logo");
    } else {
        logoId.classList.remove("rotate-logo");
    }
}
window.addEventListener("load", function() {
    setInterval("kaiten()", 2500);
})
// setTimeoutを使った繰り返しの場合
// var logoId = document.getElementById("logo");
// function kaiten() {
//     if(logoId.className !== "rotate-logo") {
//         logoId.classList.add("rotate-logo");
//     } else {
//         logoId.classList.remove("rotate-logo");
//     }
// }
// function loop() {
//     kaiten();
//     setTimeout(loop,5000);   
// }
// loop();


// スクロールしたら表示 //

$(window).scroll(function() {
    var top = $(window).scrollTop();
    console.log(top);
    if($(window).scrollTop() > 400) {
        $("#oguraTtl").addClass("slideL_0s");
        $("#oguraTxt").addClass("slideL_1s");
        $("#profile").addClass("slideL_2s");
    }
    if($(window).scrollTop() > 1200) {
        $("#fromTtl").addClass("slideR_0s");
        $("#mapText").addClass("slideR_1s");
        $("#japan").addClass("slideR_2s");
        $("#japanSp").addClass("slideR_2s");
    }
    if($(window).scrollTop() > 1900) {
        $("#policyTtl").addClass("slideL_0s");
        $("#grow").addClass("slideL_1s");
        $("#both").addClass("slideL_2s");
        $("#cycle").addClass("slideR_3s");
    }
    if($(window).scrollTop() > 2800) {
        $("#skillTtl").addClass("slideL_0s");
        $("#html").addClass("slideL_1s");
        $("#design").addClass("slideL_2s");
        $("#javascript").addClass("slideL_3s");
        // meter
        $("#meter_blue_in").addClass("meter60");
        $("#meter_orange_in").addClass("meter45");
        $("#meter_red_in").addClass("meter20");
    }
    if($(window).scrollTop() > 3900) {
        $("#contactTtl").addClass("diagonal_0s");
        $("#love > span:eq(0)").addClass("diagonal_1s");
        $("#love > span:eq(1)").addClass("diagonal_2s");
        $("#love > span:eq(2)").addClass("diagonal_3s");
        $("#send").addClass("fadeIn");
        $("#arrow").addClass("fadeIn");
        $("address").addClass("fadeIn");
        $("#friend").addClass("fadeIn");
    }
});














