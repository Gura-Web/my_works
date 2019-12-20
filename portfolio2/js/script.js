// ヘッダーとトップへ戻るボタンを表示
var header = document.getElementById("header");
var goTop = document.getElementById("goTop");
window.onload = function() {
    header.classList.add("fade_in_up");
    goTop.classList.add("fade_in_up_slow");
}


// メニューボタン　
var menuBtn = document.getElementById('menu');
var menuList = document.getElementById('menuList');
var closeBtn = document.getElementById('toggleBtn');
menuBtn.onclick = function() { // 表示
    menuList.classList.add("show");
    menuList.classList.remove("hide");
    menuList.classList.remove("none");

    menuBtn.classList.add("none");

    closeBtn.classList.remove("none");
} 
var none = function() {
    menuList.classList.add("none");
}
closeBtn.onclick = function() { // 閉じる
    menuList.classList.remove("show");
    menuList.classList.add("hide");
    setTimeout(none, 1000);

    menuBtn.classList.remove("none");

    closeBtn.classList.add("none");
}



// footerコンタクトボタン
var mail_view = document.getElementsByClassName("mail-view");
var mailBtn_footer = document.getElementsByClassName("mail")[1];

var mailBtn_profile = document.getElementsByClassName("mail")[0];
mail_view[0].style.display = "none";
mailBtn_profile.onclick = function() {
    if(mail_view[0].style.display == "block") {
        mail_view[0].style.display = "none";
    } else {
        mail_view[0].style.display = "block";
    }
}

