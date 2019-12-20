// sp-menu 
var sp_navBtn = document.getElementsByClassName("sp-nav-btn__wrap")[0];
var sp_nav = document.getElementsByClassName("sp-nav")[0];
var sp_navClose = document.getElementsByClassName("sp-nav__close")[0];
sp_navBtn.onclick = function() {
    sp_nav.style.visibility = "visible";
    this.classList.add("none");
    sp_navClose.style.display = "block";
}
sp_navClose.onclick = function() {
    sp_nav.style.visibility = "hidden";
    this.classList.add("none");
    sp_navBtn.classList.remove("none");
}