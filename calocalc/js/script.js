walk = document.getElementById("resultWalk").getElementsByTagName("span")[0],
run = document.getElementById("resultRun").getElementsByTagName("span")[0],
mountain = document.getElementById("resultMountain").getElementsByTagName("span")[0],
cycling = document.getElementById("resultCycling").getElementsByTagName("span")[0],
training = document.getElementById("resultTraining").getElementsByTagName("span")[0],
baseball = document.getElementById("resultBaseball").getElementsByTagName("span")[0],
soccer = document.getElementById("resultSoccer").getElementsByTagName("span")[0],
tennis = document.getElementById("resultTennis").getElementsByTagName("span")[0],
crawl = document.getElementById("resultCrawl").getElementsByTagName("span")[0],
stretch = document.getElementById("resultStretch").getElementsByTagName("span")[0],
kick = document.getElementById("resultKick").getElementsByTagName("span")[0];
const floor = (base, value) => {
    return (base / value / 60).toFixed(1);
}
const weight = document.getElementById("weight");
const cal = document.getElementById("cal");
cal.addEventListener("keyup", function() {
    add();
});
weight.addEventListener("keyup", function() {
    add();
});

function add() {
    const weightValue = document.getElementById("weight").value;
    const calValue = document.getElementById("cal").value;
    if(weightValue >= 1 && weightValue < 45) {
        walk.innerHTML = floor(calValue, 3.78);
        run.innerHTML = floor(calValue, 7.56);
        mountain.innerHTML = floor(calValue, 7.09);
        cycling.innerHTML = floor(calValue, 7.56);
        training.innerHTML = floor(calValue, 2.84);
        baseball.innerHTML = floor(calValue, 4.73);
        soccer.innerHTML = floor(calValue, 6.62);
        tennis.innerHTML = floor(calValue, 6.62);
        crawl.innerHTML = floor(calValue, 7.56);
        stretch.innerHTML = floor(calValue, 2.36);
        kick.innerHTML = floor(calValue, 9.45);
    } else if (weightValue >= 45 && weightValue < 55) {
        walk.innerHTML = floor(calValue, 4.62);
        run.innerHTML = floor(calValue, 4.62);
        mountain.innerHTML = floor(calValue, 7.09);
        cycling.innerHTML = floor(calValue, 7.56);
        training.innerHTML = floor(calValue, 2.84);
        baseball.innerHTML = floor(calValue, 4.73);
        soccer.innerHTML = floor(calValue, 6.62);
        tennis.innerHTML = floor(calValue, 6.62);
        crawl.innerHTML = floor(calValue, 7.56);
        stretch.innerHTML = floor(calValue, 2.36);
        kick.innerHTML = floor(calValue, 9.45);
    } else if (weightValue >= 55 && weightValue < 65) {
        walk.innerHTML = floor(calValue, 5.04);
        run.innerHTML = floor(calValue, 10.08);
        mountain.innerHTML = floor(calValue, 9.45);
        cycling.innerHTML = floor(calValue, 10.08);
        training.innerHTML = floor(calValue, 3.78);
        baseball.innerHTML = floor(calValue, 6.3);
        soccer.innerHTML = floor(calValue, 8.82);
        tennis.innerHTML = floor(calValue, 8.82);
        crawl.innerHTML = floor(calValue, 10.08);
        stretch.innerHTML = floor(calValue, 3.15);
        kick.innerHTML = floor(calValue, 12.6);
    } else {
        walk.innerHTML = floor(calValue, 5.88);
        run.innerHTML = floor(calValue, 11.76);
        mountain.innerHTML = floor(calValue, 11.03);
        cycling.innerHTML = floor(calValue, 11.76);
        training.innerHTML = floor(calValue, 4.41);
        baseball.innerHTML = floor(calValue, 7.35);
        soccer.innerHTML = floor(calValue, 10.29);
        tennis.innerHTML = floor(calValue, 10.29);
        crawl.innerHTML = floor(calValue, 11.76);
        stretch.innerHTML = floor(calValue, 3.68);
        kick.innerHTML = floor(calValue, 14.7);
    }
    
}