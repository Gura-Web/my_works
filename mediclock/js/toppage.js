
/* 新規登録を押したら　登録画面を表示 */
var signup = document.getElementById("signup");
var member = document.getElementById("memberContent");
signup.addEventListener("click", function() {
    if(member.className === "none" || member.className === "fadeOut") {
        member.className = "fadeIn";
    } else {
        member.className = "fadeOut";   
    }
});

/* キャンセルボタンを押したら登録画面を非表示 */
var cansel = document.getElementById("cansle");
cansel.addEventListener("click", function() {
    member.className = "fadeOut";
});



/* 登録ボタンを押したら登録完了ポップアップを表示 */
var registerBtn = document.getElementById("registration");
var register = document.getElementById("register");
registerBtn.addEventListener("click",function() {
    register.classList.remove("fadeOut");
    register.style.display = "block";
    member.className = "none";
});

/* 閉じるボタンを押したら非表示 */
var close = document.getElementById("next");
close.addEventListener("click", function() {
    register.classList.add("fadeOut");
});


/* ログインボタンをおしたらログインフォームを表示 */
var loginBtn = document.getElementById("login");
var login = document.getElementById("loginContainer");
loginBtn.addEventListener("click", function() {
    if(login.className === "none" || login.className === "fadeOut") {
        login.className = "fadeIn";
    } else {
        login.className = "fadeOut";   
    }
});

/* ログインフォームのキャンセルをおしたらフォームを非表示 */
var canselLogin = document.getElementById("cansleLogin");
canselLogin.addEventListener("click", function() {
    login.className = "fadeOut";
});

/* MediClockの説明ポップアップを表示 */
var aboutBtn = document.getElementById("aboutMC");
var aboutPop = document.getElementById("about");

aboutBtn.addEventListener("click", function() {
    if(aboutPop.className === "none" || aboutPop.className === "fadeOut") {
        aboutPop.className = "fadeIn";
    } else {
        aboutPop.className = "fadeOut";   
    }
});

var closeBtn = document.getElementById("closeBtn");
closeBtn.addEventListener("click", function() {
    about.className = "fadeOut";
});