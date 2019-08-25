var hour = document.getElementById("hour");
var minute = document.getElementById("minute");
var time = new Date;

var alarm_hour = 0;
var alarm_minute = 0;
var dialog = document.getElementById("alert");





var register = document.getElementById("registerBtn");
register.addEventListener("click",function() {
    alarm_hour = Number(hour.value);
    alarm_minute = Number(minute.value);
    console.log(alarm_hour,alarm_minute);
});
console.log(alarm_hour,alarm_minute);


/* jsファイルは共有してるけど、上のregisterのクリックイベントはhome.htmlでは
    registerは存在しないので実行できない。 phpでalarm_hourとalarm_minuteのデータをhome.htmlに渡せないか？ */

function main() {
    var time = new Date;
    if(alarm_hour === time.getHours() && alarm_minute === time.getMinutes()) {
        dialog.style.display = "block";
    }
}
main();


// var ok = document.getElementById("button");
// ok.addEventListener("click", function() {

// });