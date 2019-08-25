// -------------------- 時間割設定 ------------------ //

// -------------------- 月曜日 ------------------ //
// １時間目
const takiMonLesson01 = "3年 メディアプロジェクト演習1";
const takiMonPlace01 = "2404";
// ２時間目
const takiMonLesson02 = "3年 メディアプロジェクト演習1";
const takiMonPlace02 = "2404";
// ３時間目
const takiMonLesson03 = "2年 UIデザイン演習2";
const takiMonPlace03 = "3703";
// ４時間目
const takiMonLesson04 = "2年 UIデザイン演習2";
const takiMonPlace04 = "3703";
// -------------------- 火曜日 ------------------ //
// １時間目
const takiTueLesson01 = "1年 HTML1";
const takiTuePlace01 = "2404";
// ２時間目
const takiTueLesson02 = "1年 HTML1";
const takiTuePlace02 = "2404";
// ３時間目
const takiTueLesson03 = breakTime;
const takiTuePlace03 = teacherRoom;
// ４時間目
const takiTueLesson04 = "2年 Wot演習";
const takiTuePlace04 = "2404";



// 瀧本先生の場所
const takimotoPlace = document.getElementById("takimotoPlace");
const takimotoLesson = document.getElementById("takimotoLesson");

function takimoto() {

    // ------  月曜日  ------ //
    if (day === 1) {
        // １時間目
        let lesson01 = takiMonLesson01;
        let place01 = takiMonPlace01;

        // ２時間目
        let lesson02 = takiMonLesson02;
        let place02 = takiMonPlace02;

        // ３時間目
        let lesson03 = takiMonLesson03;
        let place03 = takiMonPlace03;

        // ４時間目
        let lesson04 = takiMonLesson04;
        let place04 = takiMonPlace04;

        ///////// 授業開始前 ////////
        if(classTime00) {
            takimotoLesson.innerHTML = `次は${lesson01}`;
            takimotoPlace.innerHTML = `次は${place01}`;
        }
        ///////// １時間目 /////////
        if(classTime01_01) {
            takimotoLesson.innerHTML = lesson01;
            takimotoPlace.innerHTML = place01;
        } else if(classTime01_02) {
            takimotoLesson.innerHTML = lesson01;
            takimotoPlace.innerHTML = place01;
        } else if(classTime01_03) {
            takimotoLesson.innerHTML = `次は${lesson02}`;
            takimotoPlace.innerHTML = `次は${place02}`;
        }
        ///////// ２時間目 /////////
        if(classTime02_01) {
            takimotoLesson.innerHTML = lesson02;
            takimotoPlace.innerHTML = place02;
        } else if(classTime02_02) {
            takimotoLesson.innerHTML = lesson02;
            takimotoPlace.innerHTML = place02;
        }
        ///////// 昼休み /////////
        if(classTimeLunch_01) {
            takimotoLesson.innerHTML = breakTime;
            takimotoPlace.innerHTML = teacherRoom;
        } else if(classTimeLunch_02) {
            takimotoLesson.innerHTML = breakTime;
            takimotoPlace.innerHTML = teacherRoom;
        }
        ///////// ３時間目 /////////
        if(classTime03_01) {
            takimotoLesson.innerHTML = lesson03;
            takimotoPlace.innerHTML = place03;
        } else if(classTime03_02) {
            takimotoLesson.innerHTML = lesson03;
            takimotoPlace.innerHTML = place03;
        } else if(classTime03_03) {
            takimotoLesson.innerHTML = `次は${lesson04}`;
            takimotoPlace.innerHTML = `次は${place04}`;
        }
        ///////// ４時間目 /////////
        if(classTime04_01) {
            takimotoLesson.innerHTML = lesson04;
            takimotoPlace.innerHTML = place04;
        } else if(classTime04_02) {
            takimotoLesson.innerHTML = lesson04;
            takimotoPlace.innerHTML = place04;
        }
        ///////// 授業外時間 /////////
        if(classTimeOther) {
            takimotoLesson.innerHTML = noSchool;
            takimotoPlace.innerHTML = noSchool;
        }
    }
    // ------  火曜日  ------ //
    if (day === 2) {
        // -------------------- 時間割設定 ------------------ //
            // １時間目
            let lesson01 = takiTueLesson01;
            let place01 = takiTuePlace01;

            // ２時間目
            let lesson02 = takiTueLesson02;
            let place02 = takiTuePlace02;

            // ３時間目
            let lesson03 = takiTueLesson03;
            let place03 = takiTuePlace03;

            // ４時間目
            let lesson04 = takiTueLesson04;
            let place04 = takiTuePlace04;
        // ------------------------------------------------ //

        ///////// 授業開始前 ////////
        if(classTime00) {
            takimotoLesson.innerHTML = `次は${lesson01}です`;
            takimotoPlace.innerHTML = `次は${place01}です`;
        }
        ///////// １時間目 /////////
        if(classTime01_01) {
            takimotoLesson.innerHTML = lesson01;
            takimotoPlace.innerHTML = place01;
        } else if(classTime01_02) {
            takimotoLesson.innerHTML = lesson01;
            takimotoPlace.innerHTML = place01;
        } else if(classTime01_03) {
            takimotoLesson.innerHTML = `次は${lesson02}です`;
            takimotoPlace.innerHTML = `次は${place02}です`;
        }
        ///////// ２時間目 /////////
        if(classTime02_01) {
            takimotoLesson.innerHTML = lesson02;
            takimotoPlace.innerHTML = place02;
        } else if(classTime02_02) {
            takimotoLesson.innerHTML = lesson02;
            takimotoPlace.innerHTML = place02;
        }
        ///////// 昼休み /////////
        if(classTimeLunch_01) {
            takimotoLesson.innerHTML = breakTime;
            takimotoPlace.innerHTML = teacherRoom;
        } else if(classTimeLunch_02) {
            takimotoLesson.innerHTML = breakTime;
            takimotoPlace.innerHTML = teacherRoom;
        }
        ///////// ３時間目 /////////
        if(classTime03_01) {
            takimotoLesson.innerHTML = lesson03;
            takimotoPlace.innerHTML = place03;
        } else if(classTime03_02) {
            takimotoLesson.innerHTML = lesson03;
            takimotoPlace.innerHTML = place03;
        } else if(classTime03_03) {
            takimotoLesson.innerHTML = `次は${lesson04}です`;
            takimotoPlace.innerHTML = `次は${place04}です`;
        }
        ///////// ４時間目 /////////
        if(classTime04_01) {
            takimotoLesson.innerHTML = lesson04;
            takimotoPlace.innerHTML = place04;
        } else if(classTime04_02) {
            takimotoLesson.innerHTML = lesson04;
            takimotoPlace.innerHTML = place04;
        }
        ///////// 授業外時間 /////////
        if(classTimeOther) {
            takimotoLesson.innerHTML = noSchool;
            takimotoPlace.innerHTML = noSchool;
        }
    }
}

takimoto();
// setInterval("takimoto()", 10000);
