const img_icon = "img/teachers-icon/";
// プロフィール表示切り替え
const profileImg = document.getElementById("profileImg");
const profileNameJP = document.getElementById("profileNameJP");
const profileNameEN = document.getElementById("profileNameEN");
const profileSkill = document.getElementById("profileSkill");
const profileTxt = document.getElementById("profileTxt");

if (location.search.slice(2) == "takimoto") {
    profileImg.src = img_icon + "takimoto.png";
    profileNameJP.innerHTML = "瀧本先生";
    profileNameEN.innerHTML = "Ryuji Takimoto";
    profileSkill.innerHTML = "得意スキル：<span>なんでも</span>";
    profileTxt.innerHTML = "意外にもデザインコースの先生の中で最年少です。先生の高齢化が進んでいますが平均年齢を下げようとなんとか頑張っています。<br>サイトの構成から企画・その他なんでも聞いて下さい。広く浅くやってます。<br>茶色い食べ物には悪いやつはいない。"
}
if (location.search.slice(2) == "sakakura") {
    profileImg.src = img_icon + "sakakura.png";
    profileNameJP.innerHTML = "坂倉先生";
    profileNameEN.innerHTML = "Masaki Sakakura";
    profileSkill.innerHTML = "得意スキル：<span>PHP</span><span>JavaScript</span>";
    profileTxt.innerHTML = "人間大好き坂倉です。普通じゃないといわれるけど自分ではいたって普通だと思ってます。"
}
if (location.search.slice(2) == "tanaka") {
    profileImg.src = img_icon + "tanaka.png";
    profileNameJP.innerHTML = "田中先生";
    profileNameEN.innerHTML = "Akio Tanaka";
    profileSkill.innerHTML = "得意スキル：<span>グラフィック</span><span>レイアウト</span>";
    profileTxt.innerHTML = "パソコンとミニチュアとあんこに目がない男です。今年の目標はあと5キロやせることです。"
}
if (location.search.slice(2) == "momoi") {
    profileImg.src = img_icon + "momoi.png";
    profileNameJP.innerHTML = "桃井先生";
    profileNameEN.innerHTML = "Keiko Momoi";
    profileSkill.innerHTML = "得意スキル：<span>Illustrator</span>";
    profileTxt.innerHTML = "京都から参りました桃井と申します。よろしくお願いします。血液型はよくO型と言われますがA型です。でも雑です。<br>なぜか生徒からは「将軍」と呼ばれています。"
}
if (location.search.slice(2) == "takeda") {
    profileImg.src = img_icon + "takeda.png";
    profileNameJP.innerHTML = "武田先生";
    profileNameEN.innerHTML = "Takeda";
    profileSkill.innerHTML = "得意スキル：<span>Photoshop</span>";
    profileTxt.innerHTML = "フィギュアスケートが大好きです。次の冬は自分で滑りに行きたいです！";
}
if (location.search.slice(2) == "miyazaki") {
    profileImg.src = img_icon + "miyazaki.png";
    profileNameJP.innerHTML = "宮崎先生";
    profileNameEN.innerHTML = "Miyazaki";
    profileSkill.innerHTML = "得意スキル：<span>Illustrator</span><span>お絵かき</span>";
    profileTxt.innerHTML = "こんにちは、クソ眼鏡です。節約生活頑張ってます。<br>いらない服があるなら食べるから教えてね。";
}
if (location.search.slice(2) == "tuji") {
    profileImg.src = img_icon + "tuji.png";
    profileNameJP.innerHTML = "辻先生";
    profileNameEN.innerHTML = "tuji";
    profileSkill.innerHTML = "得意スキル：<span>マーケティング</span>";
    profileTxt.innerHTML = "テニスとアウトドアを楽しむ40代男子。今年の目標はテニスの大会で１勝することです。";
}
