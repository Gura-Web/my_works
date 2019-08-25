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


// --------------  教師インスタンス  -------------- //
// ------  瀧本先生インスタンス  ------ //
function takimotoNow() {
    let thisTeacher = teacherLessons.takimoto;
    for(let i = 0; i < 7; i++) {
        let takimotoNowLesson = new teacherSchedule(
            i,
            takimotoLesson,
            takimotoPlace,
            teacherLessonPlaceLoop(i,thisTeacher)[0][0],teacherLessonPlaceLoop(i,thisTeacher)[1][0],teacherLessonPlaceLoop(i,thisTeacher)[0][1],teacherLessonPlaceLoop(i,thisTeacher)[1][1],
            teacherLessonPlaceLoop(i,thisTeacher)[0][2],teacherLessonPlaceLoop(i,thisTeacher)[1][2],teacherLessonPlaceLoop(i,thisTeacher)[0][3],teacherLessonPlaceLoop(i,thisTeacher)[1][3],
        );
        takimotoNowLesson.teacherLessonPlace();
    }
}
// ------  坂倉先生インスタンス  ------ //
function sakakuraNow() {
    let thisTeacher = teacherLessons.sakakura;
    for(let i = 0; i < 7; i++) {
        let sakakuraNowLesson = new teacherSchedule(
            i,
            sakakuraLesson,
            sakakuraPlace,
            teacherLessonPlaceLoop(i,thisTeacher)[0][0],teacherLessonPlaceLoop(i,thisTeacher)[1][0],teacherLessonPlaceLoop(i,thisTeacher)[0][1],teacherLessonPlaceLoop(i,thisTeacher)[1][1],
            teacherLessonPlaceLoop(i,thisTeacher)[0][2],teacherLessonPlaceLoop(i,thisTeacher)[1][2],teacherLessonPlaceLoop(i,thisTeacher)[0][3],teacherLessonPlaceLoop(i,thisTeacher)[1][3],
        );
        sakakuraNowLesson.teacherLessonPlace();
    }
}
// ------  田中先生インスタンス  ------ //
function tanakaNow() {
    let thisTeacher = teacherLessons.tanaka;
    for(let i = 0; i < 7; i++) {
        let tanakaNowLesson = new teacherSchedule(
            i,
            tanakaLesson,
            tanakaPlace,
            teacherLessonPlaceLoop(i,thisTeacher)[0][0],teacherLessonPlaceLoop(i,thisTeacher)[1][0],teacherLessonPlaceLoop(i,thisTeacher)[0][1],teacherLessonPlaceLoop(i,thisTeacher)[1][1],
            teacherLessonPlaceLoop(i,thisTeacher)[0][2],teacherLessonPlaceLoop(i,thisTeacher)[1][2],teacherLessonPlaceLoop(i,thisTeacher)[0][3],teacherLessonPlaceLoop(i,thisTeacher)[1][3],

        );
        tanakaNowLesson.teacherLessonPlace();
    }
}
// ------  桃井先生インスタンス  ------ //
function momoiNow() {
    let thisTeacher = teacherLessons.momoi;
    for(let i = 0; i < 7; i++) {
        let momoiNowLesson = new teacherSchedule(
            i,
            momoiLesson,
            momoiPlace,
            teacherLessonPlaceLoop(i,thisTeacher)[0][0],teacherLessonPlaceLoop(i,thisTeacher)[1][0],teacherLessonPlaceLoop(i,thisTeacher)[0][1],teacherLessonPlaceLoop(i,thisTeacher)[1][1],
            teacherLessonPlaceLoop(i,thisTeacher)[0][2],teacherLessonPlaceLoop(i,thisTeacher)[1][2],teacherLessonPlaceLoop(i,thisTeacher)[0][3],teacherLessonPlaceLoop(i,thisTeacher)[1][3],
        );
        momoiNowLesson.teacherLessonPlace();
    }
}
// ------  武田先生インスタンス  ------ //
function takedaNow() {
    let thisTeacher = teacherLessons.takeda;
    for(let i = 0; i < 7; i++) {
        let takedaNowLesson = new teacherSchedule(
            i,
            takedaLesson,
            takedaPlace,
            teacherLessonPlaceLoop(i,thisTeacher)[0][0],teacherLessonPlaceLoop(i,thisTeacher)[1][0],teacherLessonPlaceLoop(i,thisTeacher)[0][1],teacherLessonPlaceLoop(i,thisTeacher)[1][1],
            teacherLessonPlaceLoop(i,thisTeacher)[0][2],teacherLessonPlaceLoop(i,thisTeacher)[1][2],teacherLessonPlaceLoop(i,thisTeacher)[0][3],teacherLessonPlaceLoop(i,thisTeacher)[1][3],
        );
        takedaNowLesson.teacherLessonPlace();
    }
}
// ------  宮崎先生インスタンス  ------ //
function miyazakiNow() {
    let thisTeacher = teacherLessons.miyazaki;
    for(let i = 0; i < 7; i++) {
        let miyazakiNowLesson = new teacherSchedule(
            i,
            miyazakiLesson,
            miyazakiPlace,
            teacherLessonPlaceLoop(i,thisTeacher)[0][0],teacherLessonPlaceLoop(i,thisTeacher)[1][0],teacherLessonPlaceLoop(i,thisTeacher)[0][1],teacherLessonPlaceLoop(i,thisTeacher)[1][1],
            teacherLessonPlaceLoop(i,thisTeacher)[0][2],teacherLessonPlaceLoop(i,thisTeacher)[1][2],teacherLessonPlaceLoop(i,thisTeacher)[0][3],teacherLessonPlaceLoop(i,thisTeacher)[1][3],
        );
        miyazakiNowLesson.teacherLessonPlace();
    }
}
// ------  辻先生インスタンス  ------ //
function tujiNow() {
    let thisTeacher = teacherLessons.tuji;
    for(let i = 0; i < 7; i++) {
        let tujiNowLesson = new teacherSchedule(
            i,
            tujiLesson,
            tujiPlace,
            teacherLessonPlaceLoop(i,thisTeacher)[0][0],teacherLessonPlaceLoop(i,thisTeacher)[1][0],teacherLessonPlaceLoop(i,thisTeacher)[0][1],teacherLessonPlaceLoop(i,thisTeacher)[1][1],
            teacherLessonPlaceLoop(i,thisTeacher)[0][2],teacherLessonPlaceLoop(i,thisTeacher)[1][2],teacherLessonPlaceLoop(i,thisTeacher)[0][3],teacherLessonPlaceLoop(i,thisTeacher)[1][3],
        );
        tujiNowLesson.teacherLessonPlace();
    }
}

// インスタンス実行時に、教師に合わせた現在の状況を取得
function teacherLessonPlaceLoop(i,teacher) {
    let teacherLessonsCount = [];
    let teacherPlacesCount = [];
    let teacherName = teacher;
    switch(i){
        case 1: {
            for(let j = 0; j <= 3; j++) {
                teacherLessonsCount.push(teacherName.lesson[0][j]);
                teacherPlacesCount.push(teacherName.place[0][j]);
            }
        }
        break;
        case 2: {
            for(let j = 0; j <= 3; j++) {
                teacherLessonsCount.push(teacherName.lesson[1][j]);
                teacherPlacesCount.push(teacherName.place[1][j]);
            }
        }
        break;
        case 3: {
            for(let j = 0; j <= 3; j++) {
                teacherLessonsCount.push(teacherName.lesson[2][j]);
                teacherPlacesCount.push(teacherName.place[2][j]);
            }
        }
        break;
        case 4: {
            for(let j = 0; j <= 3; j++) {
                teacherLessonsCount.push(teacherName.lesson[3][j]);
                teacherPlacesCount.push(teacherName.place[3][j]);
            }
        }
        break;
        case 5: {
            for(let j = 0; j <= 3; j++) {
                teacherLessonsCount.push(teacherName.lesson[4][j]);
                teacherPlacesCount.push(teacherName.place[4][j]);
            }
        }
        break;
        case 6: {
            for(let j = 0; j <= 3; j++) {
                teacherLessonsCount.push(teacherName.lesson[5][j]);
                teacherPlacesCount.push(teacherName.place[5][j]);
            }
        }
        break;
        case 0: {
            for(let j = 0; j <= 3; j++) {
                teacherLessonsCount.push(teacherName.lesson[6][j]);
                teacherPlacesCount.push(teacherName.place[6][j]);
            }
        }
        break;
    }
    return [teacherLessonsCount,teacherPlacesCount];
}
