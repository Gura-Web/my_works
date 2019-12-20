// 時間データセット
const time01 = "1時間目";
const time02 = "2時間目";
const time03 = "3時間目";
const time04 = "4時間目";
const time05 = "5時間目";
const time06 = "6時間目";

let now,hour,min,day;
let classTime01_01,classTime01_02,classTime01_03,
      classTime02_01,classTime02_02,
      classTimeLunch_01,classTimeLunch_02,
      classTime03_01,classTime03_02,classTime03_03,
      classTime04_01,classTime04_02,
      classTimeOther,classTime00

setInterval(function() {
    // 時間取得
    now = new Date();
    hour = now.getHours();
    min = now.getMinutes();
    day = now.getDay();
///////  if文時間帯  ///////
// １時間目
classTime01_01 = hour === 9 && min >= 15; // 9:15 ~ 9:59
classTime01_02 = hour === 10 && min < 45; // 10:00 ~ 10:45
classTime01_03 = hour === 10 && min >= 45; // 10:45 ~ 10:59
// ２時間目
classTime02_01 = hour === 11; // 11:00 ~ 11:59
classTime02_02 = hour === 12 && min < 30; // 12:00 ~ 12:29
// 昼休み
classTimeLunch_01 = hour === 12 && min >= 30; // 12:30 ~ 12:59
classTimeLunch_02 = hour === 13 && min < 30; // 13:00 ~ 13:29
// ３時間目
classTime03_01 = hour === 13 && min >= 30; // 13:30 ~ 13:59
classTime03_02 = hour === 14; // 14:00 ~ 14:59
classTime03_03 = hour === 15 && min < 15; // 15:00 ~ 15:15
// ４時間目
classTime04_01 = hour === 15 && min >= 15; // 15:15 ~ 15:59
classTime04_02 = hour === 16 && min < 45; // 16:00 ~ 16:45
// ５時間目 放課後
classTimeOther = hour >= 17 || hour <= 8; // 20:00 ~ 0:00 || 0:00 ~ 8:59 
// １時間目前
classTime00 = hour === 9 && min < 15; // 9:00 ~ 9:15
},1000);


// // 教室データセット
const classPlace01 = "2403";
const classPlace02 = "2404";
const classPlace03 = "2405";
const classPlace04 = "2405";
const classPlace05 = "3703";

// 分を桁ごとにに分割
const minSplit = String(min).split('');
const minTen = minSplit[0];
const minOne = minSplit[1];

// メッセージ
const noSchool = "多分授業なし";
const teacherRoom = "多分職員室";
const breakTime = "多分休憩中";

// 現在の時間
const nowTime = document.getElementById("nowTime");


// -------------------- 現在の時間 ------------------ //
function nowSchoolTime() {
    ///////// 授業開始前 ////////
    if(classTime00) {
        nowTime.innerHTML = `まだ学校は始まっていません。`;
    }
    ///////// １時間目 /////////
    if(classTime01_01) {
        nowTime.innerHTML = `１時間目`;
    } else if(classTime01_02) {
        nowTime.innerHTML = `１時間目`;
    } else if(classTime01_03) {
        nowTime.innerHTML = `１時間目`;
    }
    ///////// ２時間目 /////////
    if(classTime02_01) {
        nowTime.innerHTML = `２時間目`;
    } else if(classTime02_02) {
        nowTime.innerHTML = `２時間目`;
    }
    ///////// 昼休み /////////
    if(classTimeLunch_01) {
        nowTime.innerHTML = `お昼休み`;
    } else if(classTimeLunch_02) {
        nowTime.innerHTML = `お昼休み`;
    }
    ///////// ３時間目 /////////
    if(classTime03_01) {
        nowTime.innerHTML = `３時間目`;
    } else if(classTime03_02) {
        nowTime.innerHTML = `３時間目`;
    } else if(classTime03_03) {
        nowTime.innerHTML = `３時間目`;
    }
    ///////// ４時間目 /////////
    if(classTime04_01) {
        nowTime.innerHTML = `４時間目`;
    } else if(classTime04_02) {
        nowTime.innerHTML = `４時間目`;
    }
    ///////// 授業外時間 /////////
    if(classTimeOther) {
        nowTime.innerHTML = `授業終わり`;
    }
}


console.log()