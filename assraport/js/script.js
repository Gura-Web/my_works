AOS.init();

const about = document.getElementById("about");
const sideEntryBtn = document.getElementById("sideEntryBtn"); // エントリーボタン
const goTopBtn = document.getElementById("goTopBtn");
document.onscroll = function () {
    const scrollTop = document.documentElement.scrollTop;
    if(scrollTop > about.offsetTop) {
        if(window.innerWidth > 980 ) {
            sideEntryBtn.style.transform = "translateX(0)";
            goTopBtn.children[0].style.transform = "translateY(0)";
        }
    } else if(scrollTop < about.offsetTop) {
        if(window.innerWidth > 980 ) {
            sideEntryBtn.style.transform = "translateX(70px)";
            goTopBtn.children[0].style.transform = "translateY(48px)";
        }
    }
}

// 仕事の流れアコーディオン
const flowBtn = document.getElementsByClassName("job-flow__head");
const flowContent = document.getElementsByClassName("job-flow-list");
const flowIcon = document.getElementsByClassName("job-flow__toggle-icon");

for(let i = 0; i < flowBtn.length; i++) {
    flowIcon[i].innerHTML = "+";
    flowBtn[i].onclick = function() {
        flowContent[i].classList.toggle("job-flow-list--none");
        flowContent[i].classList.toggle("job-flow-list--block");
        flowIcon[i].innerHTML = "+";
        if(flowContent[i].classList.contains("job-flow-list--block")) {
            flowIcon[i].innerHTML = "-";
        }
    }
}