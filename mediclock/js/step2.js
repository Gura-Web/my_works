/* ボタンを押したら背景色を変える */
var dayBox = document.getElementsByClassName("daybox");
var inputDay = document.getElementsByClassName("inputDay");
var day = document.getElementsByClassName("Day")
for(var i = 0; i <= day.length - 1; i++){
    day[i].addEventListener("click", function() {
        this.classList.toggle("blue");
    }); 
}
 
window.addEventListener("onload", function() {

}); 

/* next2ボタンを押したらifram3を表示 */
var next2 = document.getElementById("next2");
var iframe3 = document.getElementById("iframe3");

next2.addEventListener("click", function(e) {
    iframe3.style.display = "block";   
    methodRead(); 
    e.preventDefault();
    var form = $("form").serialize();
    $.post('php/upload.php', form)
    .done(function(){
        console.log("aaa");
    });
});





// function methodSave() {  // Webのストレージに保存 
//     var key = "nagasawa"; // keyで呼び出し
//     var val = next2.addEventListener("click", function() {   // valが値　functionなどの動作をいれることができる
        
//     });
//     localStorage.setItem(key, val); //これを保存
// }
// methodSave();  // 実行して保存







function methodRead() {   // WEBストレージに保存した値を呼び出し
    var fm = document.getElementById("myForm2");
    
    var i = localStorage.getItem("name");
    var g = localStorage.getItem("gender");
    var y = localStorage.getItem("year");
    var m = localStorage.getItem("month");
    var d = localStorage.getItem("day");
    var c = localStorage.getItem("careLevel");
    var co = localStorage.getItem("comment");
    
    var user_name = document.createElement("input");
    user_name.setAttribute("type", "hidden");
    user_name.setAttribute("name", "name");
    user_name.setAttribute("value", i);
    fm.appendChild(user_name);

    var gender = document.createElement("input");
    gender.setAttribute("type", "hidden");
    gender.setAttribute("name", "gender");
    gender.setAttribute("value", g);
    fm.appendChild(gender);

    var year = document.createElement("input");
    year.setAttribute("type", "hidden");
    year.setAttribute("name", "year");
    year.setAttribute("value", y);
    fm.appendChild(year);

    var month = document.createElement("input");
    month.setAttribute("type", "hidden");
    month.setAttribute("name", "month");
    month.setAttribute("value", m);
    fm.appendChild(month);    
    
    var day = document.createElement("input");
    day.setAttribute("type", "hidden");
    day.setAttribute("name", "day");
    day.setAttribute("value", d);
    fm.appendChild(day);   

    var careLevel = document.createElement("input");
    careLevel.setAttribute("type", "hidden");
    careLevel.setAttribute("name", "careLevel");
    careLevel.setAttribute("value", c);
    fm.appendChild(careLevel);   

    var comment = document.createElement("input");
    comment.setAttribute("type", "hidden");
    comment.setAttribute("name", "comment");
    comment.setAttribute("value", co);
    fm.appendChild(comment);   

    // var medicine = document.createElement("input");
    // medicine.setAttribute("type", "hidden");
    // medicine.setAttribute("name", "medicine");
    // medicine.setAttribute("value", me);
    // fm.appendChild(medicine);   

    
    
    // fm.submit();

  
    


}









// function submitFnc(){
//     //formオブジェクトを取得する
//     var fm = document.getElementById("myForm2");
//    console.log(fm);
//     //Submit値を操作したい場合はこんな感じでできます。
//     fm.name1.value = localStorage.getItem("name");  // 例）name="hid1"の値を"hoge"にする
//    console.log(fm.name.value);
//     //Submit形式指定する（post/get）
//     fm.method = "post";  // 例）POSTに指定する
   
//     //targetを指定する
//     fm.target = "_blank";  // 例）新しいウィンドウに表示
   
//     //action先を指定する
//     fm.action = "/php/sample.php";  // 例）"/php/sample.php"に指定する
   
//     //Submit実行
//     fm.submit();
//   }



// function methodRead(o) {   // WEBストレージに保存した値を呼び出し
//     var name = localStorage.getItem("nagasawa");  // keyのnagasawaで値を呼び出す 
// }
// methodRead(); 



// next2.addEventListener("click", function() {
    
//     // alert(document.myForm.name.value);

//     // document.myForm.name.submit();
// })