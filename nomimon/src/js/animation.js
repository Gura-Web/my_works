export function homeAnimation() {
    //
    // 表示アニメーション
    //
    const header = document.getElementById("js-header");
    const status = document.getElementById("js-status");
    const gNav = document.getElementById("js-g-nav");
    const character = document.getElementById("js-character");
    const middleObj = document.getElementsByClassName("obj-middle__item");
    setTimeout(function () {
        header.style.transform = "translateY(0)";
    }, 100);
    setTimeout(function () {
        gNav.style.transform = "translateY(0)";
    }, 300);
    for (let item of middleObj) {
        setTimeout(function () {
            item.style.opacity = "1";
        }, 600);
    }
    setTimeout(function () {
        character.style.opacity = "1";
    }, 900);
    setTimeout(function () {
        status.style.opacity = "1";
    }, 1200);
}

export function itemPageAnimation() {
    //
    // 表示アニメーション
    //
    const header = document.getElementById("js-header");
    const itemSelectBar = document.getElementById("js-itemContainer");
    const character = document.getElementById("js-character");
    setTimeout(function () {
        header.style.transform = "translateY(0)";
    }, 100);
    setTimeout(function () {
        itemSelectBar.style.transform = "translateY(0)";
    }, 300);
    setTimeout(function () {
        character.style.opacity = "1";
    }, 600);
}

export function getItemAnimation() {
    //
    // アイテム獲得 - 表示アニメーション
    //
    const headerHeading = document.getElementById("js-headerHeading");
    const headerTelop = document.getElementById("js-headerTelop");
    const itemGetBox = document.getElementById("js-itemGetBox");
    const txtBox = document.getElementById("js-txtBox");
    const bgBottom = document.getElementById("js-bgBottom");
    headerHeading.classList.add("bounce");

    setTimeout(function () {
        headerTelop.style.opacity = 1;
        headerTelop.style.transform = "translateY(0%)";
    }, 1400);
    setTimeout(function () {
        itemGetBox.style.opacity = "1";
        itemGetBox.style.transform = "translateY(0%)";
    }, 2000);
    setTimeout(function () {
        txtBox.style.opacity = "1";
        txtBox.style.transform = "translateY(0%)";
    }, 2500);
    setTimeout(function () {
        bgBottom.style.opacity = "1";
        bgBottom.style.transform = "translateY(0%)";
    }, 3000);
}

export function getEvolveAnimation() {
    const headerHeading = document.getElementById("js-headerHeading").getElementsByTagName("img")[0];
    const getEvolve = document.getElementById("js-getEvolve");
    const txtBox = document.getElementById("js-txtBox");
    headerHeading.classList.add("bounce");
    setTimeout(function () {
        getEvolve.style.opacity = 1;
        getEvolve.style.transform = "translateY(-35px)";
    }, 1400);
    setTimeout(function () {
        txtBox.style.opacity = 1;
        txtBox.style.transform = "translateY(0)";
    }, 2000);
}

export function mapAnimation() {
    const header = document.getElementById("js-header");
    header.style.transform = "translateY(0)";
}