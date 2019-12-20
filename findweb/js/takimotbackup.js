// -------------------- 時間割設定 ------------------ //
// 上段のLessonには授業名を、
// 下段のPlaceには授業場所をご記入ください。
// breakTimeは"休憩中"と表示され、
// teacherRoomは"職員室"と表示されます。

// 教室名は以下の変数名をご記入ください。
// const classPlace01 = "2403";
// const classPlace02 = "2404";
// const classPlace03 = "2405";
// const classPlace04 = "2405";
// const classPlace05 = "3703";
// 例：const takiMonPlace01 = classPlace02; この場合は(2404)教室となります。

const teacherLessons = {
    "takimoto" : {
        "name" : "takimoto",
        "lesson" : [
            [ // 月曜日
                "3年 メディアプロジェクト演習1",
                "3年 メディアプロジェクト演習1",
                "2年 UIデザイン演習2",
                "2年 UIデザイン演習2",
            ],
            [ // 火曜日
                "1年 HTML1",
                "1年 HTML1",
                "多分休憩中",
                "2年 Wot演習",
            ]
        ]
    }
}

// -------------------- 月曜日 ------------------ //
// １時間目
const takiMonLesson01 = "3年 メディアプロジェクト演習1";
const takiMonPlace01 = classPlace02;
// ２時間目
const takiMonLesson02 = "3年 メディアプロジェクト演習1";
const takiMonPlace02 = classPlace02;
// ３時間目
const takiMonLesson03 = "2年 UIデザイン演習2";
const takiMonPlace03 = classPlace05;
// ４時間目
const takiMonLesson04 = "2年 UIデザイン演習2";
const takiMonPlace04 = classPlace05;
// -------------------- 火曜日 ------------------ //
// １時間目
const takiTueLesson01 = "1年 HTML1";
const takiTuePlace01 = classPlace02;
// ２時間目
const takiTueLesson02 = "1年 HTML1";
const takiTuePlace02 = classPlace02;
// ３時間目
const takiTueLesson03 = breakTime;
const takiTuePlace03 = teacherRoom;
// ４時間目
const takiTueLesson04 = "2年 Wot演習";
const takiTuePlace04 = classPlace02;
// -------------------- 水曜日 ------------------ //
// １時間目
const takiWedLesson01 = breakTime;
const takiWedPlace01 = teacherRoom;
// ２時間目
const takiWedLesson02 = "2年 Webデザイン トレーニング演習1";
const takiWedPlace02 = classPlace04;
// ３時間目
const takiWedLesson03 = breakTime;
const takiWedPlace03 = teacherRoom;
// ４時間目
const takiWedLesson04 = breakTime;
const takiWedPlace04 = teacherRoom;



// 瀧本先生の場所
const takimotoPlace = document.getElementById("takimotoPlace");
const takimotoLesson = document.getElementById("takimotoLesson");

// 先生スケジュール - Class
class teacherSchedule {
    constructor(
        today,
        teacherLesson,
        teaceherPlace,
        lesson01,place01,lesson02,place02,lesson03,place03,lesson04,place04,
        ) {
        this.today = today;
        this.teacherLesson = teacherLesson;
        this.teaceherPlace = teaceherPlace;
        // １時間目
        this.lesson01 = lesson01;
        this.place01 = place01;
        // ２時間目
        this.lesson02 = lesson02;
        this.place02 = place02;
        // ３時間目
        this.lesson03 = lesson03;
        this.place03 = place03;
        // ４時間目
        this.lesson04 = lesson04;
        this.place04 = place04;

    }
    teacherLessonPlace() {
        if (day === this.today) {
            if(classTime00) {
                this.teacherLesson.innerHTML = `次は${this.lesson01}`;
                this.teaceherPlace.innerHTML = `次は${this.place01}`;
            }
            ///////// １時間目 /////////
            if(classTime01_01) {
                this.teacherLesson.innerHTML = this.lesson01;
                this.teaceherPlace.innerHTML = this.place01;
            } else if(classTime01_02) {
                this.teacherLesson.innerHTML = this.lesson01;
                this.teaceherPlace.innerHTML = this.place01;
            } else if(classTime01_03) {
                this.teacherLesson.innerHTML = `次は${this.lesson02}`;
                this.teaceherPlace.innerHTML = `次は${this.place02}`;
            }
            ///////// ２時間目 /////////
            if(classTime02_01) {
                this.teacherLesson.innerHTML = this.lesson02;
                this.teaceherPlace.innerHTML = this.place02;
            } else if(classTime02_02) {
                this.teacherLesson.innerHTML = this.lesson02;
                this.teaceherPlace.innerHTML = this.place02;
            }
            ///////// 昼休み /////////
            if(classTimeLunch_01) {
                this.teacherLesson.innerHTML = breakTime;
                this.teaceherPlace.innerHTML = teacherRoom;
            } else if(classTimeLunch_02) {
                this.teacherLesson.innerHTML = breakTime;
                this.teaceherPlace.innerHTML = teacherRoom;
            }
            ///////// ３時間目 /////////
            if(classTime03_01) {
                this.teacherLesson.innerHTML = this.lesson03;
                this.teaceherPlace.innerHTML = this.place03;
            } else if(classTime03_02) {
                this.teacherLesson.innerHTML = this.lesson03;
                this.teaceherPlace.innerHTML = this.place03;
            } else if(classTime03_03) {
                this.teacherLesson.innerHTML = `次は${this.lesson04}`;
                this.teaceherPlace.innerHTML = `次は${this.place04}`;
            }
            ///////// ４時間目 /////////
            if(classTime04_01) {
                this.teacherLesson.innerHTML = this.lesson04;
                this.teaceherPlace.innerHTML = this.place04;
            } else if(classTime04_02) {
                this.teacherLesson.innerHTML = this.lesson04;
                this.teaceherPlace.innerHTML = this.place04;
            }
            if(classTimeOther) {
                this.teacherLesson.innerHTML = noSchool;
                this.teaceherPlace.innerHTML = noSchool;
            }
        }
    }
};
// --------------  瀧本先生インスタンス  -------------- //
// ------  月曜日  ------ //
function takimotoMon() {
    const takimotoScheduleMon = new teacherSchedule(
        1,
        takimotoLesson,
        takimotoPlace,
        takiMonLesson01,takiMonPlace01,takiMonLesson02,takiMonPlace02,takiMonLesson03,takiMonPlace03,takiMonLesson04,takiMonPlace04,
    );
    takimotoScheduleMon.teacherLessonPlace();
}
// ------  火曜日  ------ //
function takimotoTue() {
    const takimotoScheduleTue = new teacherSchedule(
        2,
        takimotoLesson,
        takimotoPlace,
        takiTueLesson01,takiTuePlace01,takiTueLesson02,takiTuePlace02,takiTueLesson03,takiTuePlace03,takiTueLesson04,takiTuePlace04,
    );
    takimotoScheduleTue.teacherLessonPlace();
}
// ------  水曜日  ------ //
function takimotoWed() {
    const takimotoScheduleWed = new teacherSchedule(
        3,
        takimotoLesson,
        takimotoPlace,
        takiWedLesson01,takiWedPlace01,takiWedLesson02,takiWedPlace02,takiWedLesson03,takiWedPlace03,takiWedLesson04,takiWedPlace04,
    );
    takimotoScheduleWed.teacherLessonPlace();
}
