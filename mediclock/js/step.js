/* nextボタンを押したらiframe2を表示 */
var next = document.getElementById("next");
var iframe2 = document.getElementById("iframe2");
next.addEventListener("click", function() {
    iframe2.style.display = "block";
    methodSave();
});




// function methodRead(o) {   // WEBストレージに保存した値を呼び出し
//     var name = localStorage.getItem('nagasawa');  // keyのnagasawaで値を呼び出す 
// }
// methodRead(); 
var val = document.myForm.name.value;



function methodSave() {  // Webのストレージに保存 
    var key = 'name'; // keyで呼び出し
    var val = document.myForm.name.value;
    localStorage.setItem(key, val); //これを保存

    var key2 = 'gender';
    var val2 = document.myForm.gender.value;
    localStorage.setItem(key2,val2);

    var key3 = 'year';
    var val3 = document.myForm.year.value;
    localStorage.setItem(key3,val3);

    var key4 = 'month';
    var val4 = document.myForm.month.value;
    localStorage.setItem(key4,val4);

    var key5 = 'day';
    var val5 = document.myForm.day.value;
    localStorage.setItem(key5,val5);

    var key6 = 'careLevel';
    var val6 = document.myForm.careLevel.value;
    localStorage.setItem(key6,val6);

    var key7 = 'comment';
    var val7 = document.myForm.comment.value;
    localStorage.setItem(key7,val7);


}
  // 実行して保存





