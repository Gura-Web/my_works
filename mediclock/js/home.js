

/* help popup */
var help = document.getElementById("help");
var helpPop = document.getElementById("helpPop")

help.addEventListener("click",function() {
    if(helpPop.className === "none" || helpPop.className === "fadeOut") {
        helpPop.className = "fadeIn";
    } else {
        helpPop.className = "fadeOut";   
    }
});



var closeBtn = document.getElementById("closeBtn");
closeBtn.addEventListener("click", function() {
    helpPop.className = ("fadeOut");
});



/* iframe change */
var list = document.getElementById("list");
var userList = document.getElementById("user_list");
li = list.children;


li[0].addEventListener("click",function() {
    userList.src = "list/list1.html";
});
li[1].addEventListener("click",function() {
    userList.src = "list/list2.html";
});
li[2].addEventListener("click",function() {
    userList.src = "list/list3.html";
});
li[3].addEventListener("click",function() {
    userList.src = "list/list4.html";
});
li[4].addEventListener("click",function() {
    userList.src = "list/list5.html";
});
li[5].addEventListener("click",function() {
    userList.src = "list/list6.html";
});



/* アラート表示 */
var alarm_dialog = document.getElementById("alert");

setInterval(function(){
    var time = new Date();
    var seconds = time.getSeconds();
    console.log(seconds);
    // if(seconds == 20) {
    if (seconds == 2) {
        main();
    }
}, 1000);



// var sound = new Audio("sounds.mp3");


function main(){
    var time = new Date();
    var alarm_hour = 0;
    var alarm_minute = 0;

    // console.log(time.getHours());
    // console.log(time.getMinutes());   

    var user = document.getElementsByClassName("user");
    /* 利用者の名前 */
    var user_nameList = document.getElementsByClassName("userName");
    var user_name = document.getElementById("name");
    /* 薬名 */
    var medicine = document.getElementsByClassName("medicine");
    var drag = document.getElementById("drag");
    /* 時間の表記 */
    var timeList = document.getElementsByClassName("timeList");
    var timeView = document.getElementById("timeView");
    /* コメントの表示 */
    var commentList = document.getElementsByClassName("commentList");
    var comment = document.getElementById("comment");

    var user_nameListArray = [];
    var medicine_Array = [];
    var timeList_Array = [];
    var commentList_Array = [];
    for(let i = 0; i<user_nameList.length; i++){
        user_nameListArray[i] = user_nameList[i].innerHTML;
        medicine_Array[i] = medicine[i].innerHTML;
        timeList_Array[i] = timeList[i].innerHTML;
        commentList_Array[i] = commentList[i].innerHTML;
        
    }

    
    for(let i = 0; i < user.length; i++){
        alarm_hour = Number(user[i].getAttribute("data-hour"));
        alarm_minute = Number(user[i].getAttribute("data-minute"));
        if(alarm_hour == time.getHours() && alarm_minute == time.getMinutes()){
            console.log("yes");
            alarm_dialog.style.display = "block";
            new Audio("sounds.mp3").play();
            user_name.innerHTML = user_nameListArray[i];
            drag.innerHTML = medicine_Array[i];
            timeView.innerHTML = timeList_Array[i];
            comment.innerHTML = commentList_Array[i];
        } else {
            console.log("no");
        } 
    }

}
// function inter() {
//     setInterval(main, 60000);
// }




// javascriptでの書き方 = .getAttribute        jqueryでの書き方 === .attr


/* アラートを止める */
function alarm_stop() {
    alarm_dialog.style.display = "none";
}
