// タブメニューボタン
const teacherListTab = document.getElementById('teacherListTab');
const teacherNowTab = document.getElementById('teacherNowTab');

// 先生の現在 先生の一覧
const teacherList = document.getElementById('teacherList');
const nowLesson = document.getElementById('nowLesson');

// コンテンツ表示切り替え(先生の状況クリック時)
teacherNowTab.onclick = function() {
    teacherNowTab.classList.add('tab-nav__item--current');
    teacherListTab.classList.remove('tab-nav__item--current');

    teacherList.classList.remove("content-toggle--view");
    teacherList.classList.add("content-toggle--hide");
    if(nowLesson.classList.contains('content-toggle--hide') === true) {
        setTimeout(function() {
            teacherList.classList.add('none');
        }, 500);
    }
    setTimeout(function() {
        nowLesson.classList.remove('content-toggle--hide');
        nowLesson.classList.remove('none');
        nowLesson.classList.add('content-toggle--view1');
    }, 500);
}
// コンテンツ表示切り替え(先生一覧クリック時)
teacherListTab.onclick = function() {
    teacherListTab.classList.add('tab-nav__item--current');
    teacherNowTab.classList.remove('tab-nav__item--current');

    nowLesson.classList.remove("content-toggle--view");
    nowLesson.classList.add("content-toggle--hide");
    if(nowLesson.classList.contains('content-toggle--hide') === true) {
        setTimeout(function() {
            nowLesson.classList.add('none');
        }, 500);
    }
    teacherList.classList.remove("content-toggle--hide");
    teacherList.classList.remove("none");
    teacherList.classList.add("content-toggle--view");
}

// teacherNowTab.onclick = function() {
//     teacherNowTab.classList.add('tab-nav__item--current');
//     teacherListTab.classList.remove('tab-nav__item--current');
//     teacherList.style.display = "none";
//     nowLesson.style.display = "block";
// }
// teacherListTab.onclick = function() {
//     teacherListTab.classList.add('tab-nav__item--current');
//     teacherNowTab.classList.remove('tab-nav__item--current');
//     nowLesson.style.display = "none";
//     teacherList.style.display = "block";
// }
// 時間機能起動
setInterval(nowSchoolTime, 1000);
setInterval(takimotoNow, 1000);
setInterval(sakakuraNow, 1000);
setInterval(tanakaNow, 1000);
setInterval(momoiNow, 1000);
setInterval(takedaNow, 1000);
setInterval(miyazakiNow, 1000);
setInterval(tujiNow, 1000);
// nowSchoolTime();
// takimotoNow();
// sakakuraNow();
// tanakaNow();
// momoiNow();
// takedaNow();
// miyazakiNow();
// tujiNow();