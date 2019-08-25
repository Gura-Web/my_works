


// スケジュール系ボタン
const scheduleCon = document.getElementById('scheduleContent');
const scheduleBtn = document.getElementById('scheduleBtn');
const scheduleCloseBtn = document.getElementById('scheduleCloseBtn');



// スケジュールトグル
scheduleBtn.onclick = function() {
    this.classList.toggle('schedule-btn--hide');
    this.classList.toggle('schedule-btn--view');
    // コンテンツの表示切り替え
    if(scheduleCon.classList.contains('schedule--view') === true) {
        scheduleCon.classList.remove('schedule--view');
        scheduleCon.classList.add('schedule--hide');
        setTimeout(function() {
            scheduleCon.classList.add('none');
        }, 800);
    } else {
        scheduleCon.classList.remove('none');
        scheduleCon.classList.remove('schedule--hide');
        scheduleCon.classList.add('schedule--view');
    }
}

// スケジュール - スマホの閉じるボタン
scheduleCloseBtn.onclick = function() {
    scheduleCon.classList.toggle('schedule--hide');
    scheduleCon.classList.toggle('schedule--view');
    setTimeout(function() {
        scheduleCon.classList.add('none');
    }, 800);
    if(scheduleBtn.classList.contains('schedule-btn--hide') === true) {
        scheduleBtn.classList.add('schedule-btn--view');
        scheduleBtn.classList.remove('schedule-btn--hide');
    }
}

