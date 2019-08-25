const showPassCheck = document. getElementById("showPassCheck");
const eyeIcons = document. getElementsByClassName("form-pass__eye");
const passForm = document.getElementsByClassName("form-pass");

// ----- showPass Btn click event ----- //
showPassCheck.onclick = function() {
    if(showPassCheck.checked) {
        for(let i = 0;i<passForm.length;i++) {
            eyeIcons[i].style.backgroundImage = "url(img/svg/icon-eye.svg)";
            passForm[i].setAttribute("type","text");
        }
    } else {
        for(let i = 0;i<passForm.length;i++) {
            eyeIcons[i].style.backgroundImage = "url(img/svg/icon-noEye_gray.svg)";
            passForm[i].setAttribute("type","password");
        }
    }
}

// ----- eye icon click event ----- //
for(let i = 0;i<eyeIcons.length;i++) {
    let flag = true;
    eyeIcons[i].onclick = function() {
        if(flag) {
            for(let i = 0;i<passForm.length;i++) {
                eyeIcons[i].style.backgroundImage = "url(img/svg/icon-eye.svg)";
                passForm[i].setAttribute("type","text");
            }
            flag = false;
        } else {
            for(let i = 0;i<passForm.length;i++) {
                eyeIcons[i].style.backgroundImage = "url(img/svg/icon-noEye_gray.svg)";
                passForm[i].setAttribute("type","password");
            }
            flag = true;
        }
    }
}