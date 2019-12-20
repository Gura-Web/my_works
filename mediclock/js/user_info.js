// user_info.html

/* 編集モード */
var edit = document.getElementById("edit");
edit.addEventListener("click", function() {
    var input = document.getElementsByTagName("input");
    var select = document.getElementsByTagName("select");
    var comment = document.getElementById("commentTxt");
    for(var i = 0; i < input.length; i++) {
        input[i].removeAttribute("readonly");
        input[i].style.border = "1px solid #6f6f6f";
        input[i].style.borderRadius = "2px";
        input[i].style.paddingLeft = "3px";
        
    }
    for(var i = 0; i < select.length; i++) {
        select[i].removeAttribute("disabled");
        select[i].style.border = "1px solid #6f6f6f";
        select[i].style.padding = "0 12px 0 6px";
        select[i].style.webkitAppearance = "menulist";
        select[i].style.appearance = "menulist";
    }    
    comment.removeAttribute("disabled");
});

/* 写真を選択をクリックしたらフォルダを参照する */
var selectBtn =  document.getElementById("selectBtn");
var upFile =  document.getElementById("upFile");
selectBtn.addEventListener("click", function(){
    upFile.click(); /* selectBtnを押したらupFile(input[file])も押されたことにする */
});










/* 登録をクリックしたら次の項目へ */
var register = document.getElementById("registerBtn");
var user_info4 = document.getElementById("user_info4");

register.addEventListener("click", function() {
    user_info4.style.display = "block";
    // user_info4.classList.add("fadeIn"); // アニメーション追加したかったらで
});