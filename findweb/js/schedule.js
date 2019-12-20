// //---------- 時間割設定 ----------//
// // １時間目
// const oneHourMonInner = "英会話";
// const oneHourTueInner = "HTML1<br>瀧本・田中<br>2404";
// const oneHourWedInner = "写真技術<br>渡辺<br>3201";
// const oneHourThuInner = "オフィスアプリケーション<br>桃井・宮崎<br>2203";
// const oneHourFriInner = "クリエイティブワーク1<br>瀧本<br>2405";
// // ２時間目
// const twoHourMonInner = "クリエイティブワーク1<br>田中<br>1203";
// const twoHourTueInner = "HTML1<br>瀧本・田中<br>2404";
// const twoHourWedInner = "写真技術<br>渡辺<br>3201";
// const twoHourThuInner = "llustrator演習1<br>桃井・宮崎<br>1205";
// const twoHourFriInner = "クリエイティブワーク1<br>瀧本<br>2405";
// // ３時間目
// const threeHourMonInner = "Photoshop演習1<br>武田・桃井<br>2404";
// const threeHourTueInner = "DTP技術演習1<br>桃井・宮崎<br>2403";
// const threeHourWedInner = "デザインアートワーク<br>宮崎<br>3402";
// const threeHourThuInner = "";
// const threeHourFriInner = "";

const classLessons = {
    "wd1a" : {
        "name" : "wd1a",
        "lesson": [
            [ // 1時間目
                "none",
                "英会話",
                "HTML1<br>瀧本・田中<br>2404",
                "写真技術<br>渡辺<br>3201",
                "オフィスアプリケーション<br>桃井・宮崎<br>2203",
                "クリエイティブワーク1<br>瀧本<br>2405",
            ],
            [ // 2時間目
                "none",
                "クリエイティブワーク1<br>田中<br>1203",
                "HTML1<br>瀧本・田中<br>2404",
                "写真技術<br>渡辺<br>3201",
                "llustrator演習1<br>桃井・宮崎<br>1205",
                "クリエイティブワーク1<br>瀧本<br>2405",
            ],
            [ // 3時間目
                "none",
                "Photoshop演習1<br>武田・桃井<br>2404",
                "DTP技術演習1<br>桃井・宮崎<br>2403",
                "デザインアートワーク<br>宮崎<br>3402",
                "",
                "",
            ],
            [ // 4時間目
                "none",
                "Photoshop演習1<br>武田・桃井<br>2404",
                "DTP技術演習1<br>桃井・宮崎<br>2403",
                "色彩構成1<br>宮崎<br>3402",
                "",
                "",
            ],
            [ // 5時間目
                "none",
                "",
                "",
                "SHR<br>3402",
                "",
                "",
            ]
        ]
    },
    "wd2a" : {
        "name" : "wd2a",
        "lesson": [
            [
                "none",
                "",
                "javaScript演習1<br>坂倉<br>2505",
                "Photoshop演習3<br>武田<br>2404",
                "キャリアデザイン<br>坂倉<br>1205",
                "クリエイティブワーク3<br>田中<br>3703",
            ],
            [
                "none",
                "",
                "デザイングループ制作2<br>桃井<br>2403",
                "Webトレーニング1<br>瀧本<br>2405",
                "コンセプトワーク2<br>田中<br>1206",
                "クリエイティブワーク3<br>田中<br>3703",
            ],
            [
                "none",
                "UIデザイン2<br>瀧本<br>3703",
                "英会話",
                "デザイングループ制作2<br>田中<br>2403",
                "クリエイティブワーク3<br>武田<br>1205",
                "HTML3<br>瀧本<br>2404",
            ],
            [
                "none",
                "UIデザイン2<br>瀧本<br>3703",
                "SHR<br>1308",
                "デザイングループ制作2<br>田中<br>2403",
                "",
                "",
            ],
        ]
    },
    "we2a" : {
        "name" : "we2a",
        "lesson": [
            [
                "none",
                "javaScript演習2<br>坂倉<br>3401",
                "",
                "",
                "キャリアデザイン<br>坂倉1<br>205",
                "クリエイティブワーク3<br>田中<br>3703",
            ],
            [
                "none",
                "javaScript演習2<br>坂倉<br>3401",
                "デザイングループ制作2<br>桃井<br>2403",
                "Webトレーニング1<br>瀧本<br>2405",
                "コンセプトワーク2<br>田中<br>1206",
                "クリエイティブワーク3<br>田中<br>3703",
            ],
            [
                "none",
                "サーバーサイド演習2<br>坂倉<br>3401",
                "英会話",
                "デザイングループ制作2<br>田中<br>2403",
                "クリエイティブワーク3<br>武田<br>1205",
                "HTML3<br>瀧本<br>2404",
            ],
            [
                "none",
                "サーバーサイド演習2<br>坂倉<br>3401",
                "SHR<br>1308",
                "デザイングループ制作2<br>田中<br>2403",
                "",
                "",
            ],
        ]
    },
    "cd2a" : {
        "name" : "cd2a",
        "lesson": [
            [
                "none",
                "グラフィックトレーニング1<br>武田<br>1303",
                "パッケージデザイン2<br>宮崎<br>2403",
                "Photoshop演習3<br>武田<br>2404",
                "キャリアデザイン<br>辻<br>1206",
                "",
            ],
            [
                "none",
                "クリエイティブワーク3<br>武田<br>1303",
                "デザイングループ制作2<br>桃井<br>2403",
                "広告デザイン2<br>武田<br>2403",
                "コンセプトワーク2<br>田中<br>1206",
                "",
            ],
            [
                "none",
                "",
                "英会話",
                "デザイングループ制作2<br>田中<br>2403",
                "クリエイティブワーク3<br>桃井<br>1205",
                "DTP演習3<br>桃井<br>2403",
            ],
            [
                "none",
                "",
                "",
                "デザイングループ制作2<br>田中<br>2403",
                "クリエイティブワーク3<br>桃井<br>1206",
                "カタログ冊子デザイン1<br>桃井<br>2403",
            ],
            [
                "none",
                "",
                "",
                "SHR<br>2403",
                "",
                "",
            ],
        ]
    },
    "wd3a" : {
        "name" : "wd3a",
        "lesson": [
            [
                "none",
                "メディアプロジェクト演習1<br>瀧本<br>2404",
                "就職対策2<br>黒川<br>2405",
                "",
                "",
                "",
            ],
            [
                "none",
                "メディアプロジェクト演習1<br>瀧本<br>2404",
                "WordPress演習<br>辻<br>2405",
                "",
                "",
                "",
            ],
            [
                "none",
                "",
                "コンセプトワーク4<br>田中<br>2404",
                "",
                "",
                "",
            ],
            [
                "none",
                "",
                "WoT演習<br>瀧本<br>2404",
                "",
                "",
                "",
            ],
            [
                "none",
                "",
                "",
                "SHR<br>2403",
                "",
                "",
            ],
        ]
    },
    "we3a" : {
        "name" : "we3a",
        "lesson": [
            [
                "none",
                "",
                "就職対策2<br>黒川<br>2405",
                "",
                "",
                "メディアプロジェクト演習1<br>瀧本<br>2404",
            ],
            [
                "none",
                "",
                "WordPress演習<br>辻<br>2405",
                "",
                "",
                "メディアプロジェクト演習1<br>瀧本<br>2404",
            ],
            [
                "none",
                "",
                "",
                "",
                "コンセプトワーク4<br>田中<br>2404",
                "",
            ],
            [
                "none",
                "",
                "WoT演習<br>瀧本<br>2404",
                "",
                "",
                "",
            ],
            [
                "none",
                "",
                "",
                "SHR<br>2403",
                "",
                "",
            ],
        ]
    },
    "cd3a" : {
        "name" : "cd3a",
        "lesson": [
            [
                "none",
                "メディアプロジェクト演習1<br>瀧本<br>2404",
                "",
                "就職対策2<br>黒川<br>2405",
                "就職対策2<br>黒川<br>2405",
                "",
            ],
            [
                "none",
                "メディアプロジェクト演習1<br>瀧本<br>2404",
                "",
                "",
                "",
                "WordPress演習<br>辻<br>2405",
            ],
            [
                "none",
                "",
                "",
                "",
                "",
                "コンセプトワーク4<br>田中<br>2404",
            ],
            [
                "none",
                "",
                "WoT演習<br>瀧本<br>2404",
                "",
                "",
                "",
            ],
            [
                "none",
                "",
                "",
                "SHR<br>2403",
                "",
                "",
            ],
        ]
    },
}

// テーブル取得
const scheduleTable = document.getElementById("scheduleTable");
const scheduleTr = scheduleTable.getElementsByTagName('tr');

// ボタン取得
const wd1aLessonBtn = document.getElementById("wd1aLesson");
const wd2aLessonBtn = document.getElementById("wd2aLesson");
const we2aLessonBtn = document.getElementById("wd2aLesson");
const cd2aLessonBtn = document.getElementById("wd2aLesson");
const wd3aLessonBtn = document.getElementById("wd2aLesson");
const we3aLessonBtn = document.getElementById("wd2aLesson");
const cd3aLessonBtn = document.getElementById("wd2aLesson");

// 時間割を挿入
class classSchedule {
    constructor(classId,classLesson) {
        this.classId = classId;
        this.classLesson = classLesson;
    }
    ifClassBtn(){
        if(this.classId.classList.contains("schedule-cate__item--currect")) {
            for( let i = 1; i <= 5; i++) {
                for( let j = 1; j <= 5; j++) {
                    //---------- 時間割取得 ----------//
                    let scheduleTd = scheduleTr[i].children[j];
                    switch(i) {
                        case 1:
                            scheduleTd.innerHTML = this.classLesson.lesson[0][j];
                        break;
                        case 2:
                            scheduleTd.innerHTML = this.classLesson.lesson[1][j];
                        break;
                        case 3:
                            scheduleTd.innerHTML = this.classLesson.lesson[2][j];
                        break;
                        case 4:
                            scheduleTd.innerHTML = this.classLesson.lesson[3][j];
                        break;
                    }
                }
            }
            }
    }
};
// ボタンを押したら、そのボタンに合わせて時間割を挿入するクラスを起動
// ボタンを押したらアイコンを白色に変更
const cateItems = document.getElementsByClassName("schedule-cate__item");
// 初期ボタンのアイコンを白色にしておく
const cateCurrent = document.getElementsByClassName("schedule-cate__item--currect")[0];
const cateCurrentId = cateCurrent.getAttribute("id").slice(0,4);
cateCurrent.getElementsByTagName("img")[0].src = "img/icon-"+ cateCurrentId +"_white.svg";
for(let i = 0; i < cateItems.length; i++) {
    cateItems[i].onclick = function() {
        let className = this.getAttribute("id").slice(0,4); // 押したボタンのID名
        for(let j = 0; j < cateItems.length; j++) {
            let allIds = cateItems[j].getAttribute("id").slice(0,4);
            cateItems[j].classList.remove("schedule-cate__item--currect");
            cateItems[j].getElementsByTagName("img")[0].src = "img/icon-"+ allIds +".svg";
        }
        this.classList.add("schedule-cate__item--currect");
        this.getElementsByTagName("img")[0].src = "img/icon-"+ className +"_white.svg";
        cateItemsIf();
    }
}
function cateItemsIf() {
    for(let i = 0; i < cateItems.length; i++) {
            if(cateItems[i].classList.contains("schedule-cate__item--currect")) {
                switch(cateItems[i].getAttribute("id")) {
                    case "wd1aLesson":
                        let wd1aBtn = new classSchedule(wd1aLessonBtn,classLessons.wd1a);
                        wd1aBtn.ifClassBtn();
                    break;
                    case "wd2aLesson":
                        let wd2aBtn = new classSchedule(wd2aLessonBtn,classLessons.wd2a);
                        wd2aBtn.ifClassBtn();
                    break;
                    case "we2aLesson":
                        let we2aBtn = new classSchedule(we2aLesson,classLessons.we2a);
                        we2aBtn.ifClassBtn();
                    break;
                    case "cd2aLesson":
                        let cd2aBtn = new classSchedule(cd2aLesson,classLessons.cd2a);
                        cd2aBtn.ifClassBtn();
                    break;
                    case "wd3aLesson":
                        let wd3aBtn = new classSchedule(wd3aLesson,classLessons.wd3a);
                        wd3aBtn.ifClassBtn();
                    break;
                    case "we3aLesson":
                        let we3aBtn = new classSchedule(we3aLesson,classLessons.we3a);
                        we3aBtn.ifClassBtn();
                    break;
                    case "cd3aLesson":
                        let cd3aBtn = new classSchedule(cd3aLesson,classLessons.cd3a);
                        cd3aBtn.ifClassBtn();
                    break;
                }
            }
    }
}
cateItemsIf();

// if(wd1aLesson.classList.contains("schedule-cate__item--currect")) {
    // const wd2aBtn = new classSchedule(wd1aLesson);
    // wd2aBtn.ifClassBtn();
// }
// if(wd2aLesson.classList.contains("schedule-cate__item--currect")) {
//     const wd2aBtn = new classSchedule(wd1aLesson);
//     wd2aBtn.ifClassBtn();
// }

// tdタグ全取得 (period除く)
// if(wd2a.classList.contains("schedule-cate__item--currect")) {
// for( let i = 1; i < 6; i++) {
//     for( let j = 1; j < 6; j++) {
//         let scheduleTd = scheduleTr[i].children[j];
//         switch(i) {
//             case 1:
//                 scheduleTd.innerHTML = wd1a.scheduleOneHour[j];
//             break;
//             case 2:
//                 scheduleTd.innerHTML = wd1a.scheduleTwoHour[j];
//             break;
//         }
//     }
// }
// }



// １時間目
// const scheduleOneHour_Mon = scheduleOneHour[1];
// const scheduleOneHour_Tue = scheduleOneHour[2];
// const scheduleOneHour_Wed = scheduleOneHour[3];
// const scheduleOneHour_Thu = scheduleOneHour[4];
// const scheduleOneHour_Fri = scheduleOneHour[5];

// １時間目代入
// scheduleOneHour_Mon.innerHTML = oneHourMonInner;
// scheduleOneHour_Tue.innerHTML = oneHourTueInner;
// scheduleOneHour_Wed.innerHTML = oneHourWedInner;
// scheduleOneHour_Thu.innerHTML = oneHourThuInner;
// scheduleOneHour_Fri.innerHTML = oneHourFriInner;

