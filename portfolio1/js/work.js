
/* ------------ global -----------*/
// image_path
const IMG_SVG = "img/svg/";
const IMG_PHOTO = "img/photo/";

// work-list (web graphic practice other)
var web = document.getElementsByClassName("works-list__wrapper")[0];
var graphic = document.getElementsByClassName("works-list__wrapper")[1];
var practice = document.getElementsByClassName("works-list__wrapper")[2];






/* ------------ works -----------*/
//
// グループ制作の時だけ背景色を青色、padding-leftを17pxに
//
var tag = document.getElementsByClassName("work-item__tag");
for(var i = 0; i < tag.length; i++) {
    if(tag[i].innerHTML == "グループ制作") {
        tag[i].style.backgroundColor = "#77B6FF";
        tag[i].style.paddingLeft = "17px";
    }
}



//
// カテゴリーを選択した時に表示切り替え
//
var web_btn = document.getElementsByClassName("category__web")[0];
var graphic_btn = document.getElementsByClassName("category__graphic")[0];
var practice_btn = document.getElementsByClassName("category__practice")[0];
var other_btn = document.getElementsByClassName("category__other")[0];
// グラフィックとプラクティスは初期状態では非表示 
    graphic.style.display = "none";
    practice.style.display = "none";
// クリックした際に切り替え
web_btn.onclick = function () {
    
    graphic.style.display = "none";
    web.style.display = "flex";
    practice.style.display = "none";
    
    web_btn.classList.add("opacity1");
    graphic_btn.classList.remove("opacity1");
    practice_btn.classList.remove("opacity1");
    other_btn.classList.remove("opacity1");
    if (web_btn.className.indexOf("opacity1")) {
        web_btn.classList.remove("opacity_hover");
        graphic_btn.classList.add("opacity_hover");
        practice_btn.classList.add("opacity_hover");
        other_btn.classList.add("opacity_hover");
    }
}
graphic_btn.onclick = function() {
    graphic.style.display = "flex";
    web.style.display = "none";
    practice.style.display = "none";
    
    web_btn.classList.remove("opacity1");
    graphic_btn.classList.add("opacity1");
    practice_btn.classList.remove("opacity1");
    other_btn.classList.remove("opacity1");
    
    if (graphic_btn.className.indexOf("opacity1")) { // ホバーしたさいにopacityが薄くなるが、選択中の濃い色まで薄くなるのを阻止
        web_btn.classList.add("opacity_hover");
        graphic_btn.classList.remove("opacity_hover");
        practice_btn.classList.add("opacity_hover");
        other_btn.classList.add("opacity_hover");
    }
}
practice_btn.onclick = function () {
    graphic.style.display = "none";
    web.style.display = "none";
    practice.style.display = "flex";
    
    web_btn.classList.remove("opacity1");
    graphic_btn.classList.remove("opacity1");
    practice_btn.classList.add("opacity1");
    other_btn.classList.remove("opacity1");
    if (graphic_btn.className.indexOf("opacity1")) {
        web_btn.classList.add("opacity_hover");
        graphic_btn.classList.add("opacity_hover");
        practice_btn.classList.remove("opacity_hover");
        other_btn.classList.add("opacity_hover");
    }
}
other_btn.onclick = function() {
    this.classList.add("opacity1");

    web_btn.classList.remove("opacity1");
    graphic_btn.classList.remove("opacity1");
    practice_btn.classList.remove("opacity1");
    other_btn.classList.add("opacity1");
    if (graphic_btn.className.indexOf("opacity1")) { 
        web_btn.classList.add("opacity_hover");
        graphic_btn.classList.add("opacity_hover");
        practice_btn.classList.add("opacity_hover");
        other_btn.classList.remove("opacity_hover");
    }
}

//
// 初期状態で選択されてるカテゴリー
//
if (web.style.display == "") {
    web_btn.classList.add("opacity1");  
    if (graphic_btn.className.indexOf("opacity1")) {
        web_btn.classList.remove("opacity_hover");
    }
} 

// else if (practice.style.display = "flex") {
//     practice_btn.style.opacity = "1";
// }

//
// 作品をクリックした時に作品ごとの詳細情報を挿入
//

// 使用する変数
// work-item 
var work_web = document.getElementsByClassName("work-web");
var work_graphic = document.getElementsByClassName("work-graphic");
var work_practice = document.getElementsByClassName("work-practice");
// product
var product = document.getElementsByClassName("product");
// product-info(html)
var product_name = document.getElementsByClassName("product__name")[0];
var product_info = document.getElementsByClassName("info__data");
var product_type = product_info[0];
var product_date = product_info[1];
var product_time = product_info[2];
var product_job = product_info[3];
var product_intention = product_info[4];
var product_text = document.getElementsByClassName("product__text")[0];
var product_img = document.getElementsByClassName("product__image")[0];
var product_skill = document.getElementsByClassName("product__skill")[0];
var product_skillWrap = document.getElementsByClassName("product-skill__wrap")[0];
var product_btn = document.getElementsByClassName("product__btn")[0];
// typeとjobのpタグ　graphicとpracticeでは非表示にする用
var product_type_wrap = document.getElementsByClassName("product-info__type")[0];
var product_job_wrap = document.getElementsByClassName("product-info__job")[0];

//
// 固定ワード
//
// type
var type1 = "PCサイト";
var type2 = "SPサイト";
var type3 = "PC/SPサイト" 
var type4 = "PC/TB/SPサイト";
var type5 = "PCデザイン"
var type6 = "SPデザイン"
var type7 = "PC/SPデザイン"
var type8 = "PC/TB/SPデザイン"
// date 
var date1 = "1年前期";
var date2 = "夏休み";
var date3 = "1年後期";
// job 
var job1 = "全て";
// intention
var intention1 = "個人的に"
var intention2 = "学校課題"


// window close
var product_close = document.getElementsByClassName("product__close")[0];
product_close.onclick = function() {
    product[0].classList.add("none");
    
    // モーダルウィンドウ時の背景をスクロールさせなくしたものを解除
    document.documentElement.style.overflowY = "auto";
    document.body.style.overflowY = "visible";
    
}

// 作品の詳細情報ウィンドウ
function product_window(name, type, date, time, job, intention,text,img,skill,link) {
    product[0].classList.toggle("none");
    product_name.innerHTML = name;
    product_type.innerHTML = type;
    product_date.innerHTML = date;
    product_time.innerHTML = time;
    product_job.innerHTML = job;
    product_intention.innerHTML = intention;
    product_text.innerHTML = text;
    product_img.childNodes[0].src = IMG_PHOTO + img + ".png";
    product_img.childNodes[0].alt = name;
    product_skill.innerHTML = skill;
    product_btn.childNodes[0].href = link;
    
    // モーダルウィンドウ時の背景をスクロールさせなくする
    document.documentElement.style.overflowY = "hidden";
    document.body.style.overflowY = "hidden";
}


/* ------------ click-events(web) -----------*/
for(var i = 0;i < work_web.length; i++) {
    work_web[i].onclick = function() {
        product_type_wrap.classList.remove("none");
        product_job_wrap.classList.remove("none");
        product_btn.children[0].innerHTML = "サイトを見る";
        switch (this) {
            case work_web[0]: // すてないやさい
                var work_text = "「食品ロスを減らす」を目的に、農家とレストランを繋いで規格外野菜を販売するサイト。<br>SDGsを意識した廃棄問題について取り上げた企画としました。デザインからコーディングまで全てのタスクが以前と比べ早くなったことを実感しました。";
                var work_skill = "Photoshop / Illustrator / HTML / SCSS / JavaScript / PHP / Git / Gulp"
                product_window("すてないやさい", type5, date3
                    , "x時間", job1, intention2, work_text
                    , "product_sutenaiyasai", work_skill,"https://gura-web.com/sutenai_yasai/index.php");
                break;
            case work_web[1]: // 訳あり野菜フェス
                var work_text = "訳あり野菜だけを使った野菜フェスを開催し、「一般の人に廃棄問題について関心を持ってもらう」「訳あり野菜の美味しさを知ってもらう」ことを目的とした企画です。<br>サイトでは「フェスに参加してもらう」を第一目標としている為、一般参加者やレストランに向けてフェスの魅力を全面的に伝えています。";
                var work_skill = "Photoshop / Illustrator / HTML / SCSS / JavaScript / PHP / Git / Gulp"
                product_window("訳あり野菜フェス", type1, date3
                    , "x時間", job1, intention2, work_text
                    , "product_fes", work_skill,"my_works/sutenai_yasai/festival.php");
                break;
            case work_web[2]: // ジュニア農業体験
                var work_text = "都会に住んでいる子供達に農業の楽しさをしってもらう、野菜を好きになってもらうことを目的とした企画。<br>「楽しいイベント」「子供」といったコンセプトからデザインはポップで笑顔の画像を多用したデザインにしています。親御さんから見ても子供が参加してほしいと思ってもらえるような楽しいデザインとしました。";
                var work_skill = "Photoshop / Illustrator / HTML / SCSS / JavaScript / PHP / Git / Gulp"
                product_window("ジュニア農業体験", type1, date3
                    , "x時間", job1, intention2, work_text
                    , "product_junior", work_skill, "my_works/sutenai_yasai/junior_farming.php");
                break;
            case work_web[3]: // 就農応援プログラム
                var work_text = "「農業に興味があるけれど踏み出せない」「都会暮らしに疲れた」といった社会人の方をターゲットにした就農応援サイトです。<br>農林水産省が実地する「農業次世代人材投資資金」という就農支援制度を利用して農業に興味がある方の後押しをします。<br>「農家の魅力」や「就農の不安を解消する」内容を記載してから「就農の流れ」を紹介するといった一連の流れを意識しました";
                var work_skill = "Photoshop / Illustrator / HTML / SCSS / JavaScript / PHP / Git / Gulp"
                product_window("就農応援プログラム", type1, date3
                    , "x時間", job1, intention2, work_text
                    , "product_farm_program", work_skill, "my_works/sutenai_yasai/farmer_support.php");
            break;
            case work_web[4]: // +E展
                var work_text = "後期展示会をブランディングさせるため有志が集まって制作したサイトです。ティザーサイトと本サイトを作ることになり、自分は本サイトのデザインを任せていただきました。<br>「学生」らしさを出したポップでビビットなデザインと「コンピュータ学校」なので、電気をモチーフとしたデザインを少し取り入れています。";
                var work_skill = "Adobe XD / Photoshop / Illustrator / Git"
                product_window("+E展", type5, date3
                    , "x時間", "デザイン", intention1, work_text
                    , "product_eten", work_skill,"img/works_img/event_work_main.png");
                break;
            case work_web[5]: // HelloIdea
                var work_text = "後期のグループ制作で先輩と一緒に制作しています。<br>主婦層をターゲットに生活に関する便利な知恵をユーザー同士で共有しあえるサービスです。自分はデザインと一部コーディングを担当させて頂きました。<br>初めてのアプリデザインでUIに関して難しい部分もありましたが、先輩とも仲良く制作できてとてもいい経験になりました。";
                var work_skill = "Adobe XD / Photoshop / Illustrator / HTML / SCSS / Git / Gulp"
                product_window("HelloIdea", type2, date3
                    , "x時間", "デザイン<br>コーディング", intention2, work_text
                    , "product_helloidea", work_skill, "my_works/helloidea");
                break;
            case work_web[6]: // corgi
                var work_text = "夏休みにデザイン力を上げたいと思い、自分はコーギーを飼っているのでコーギーの紹介サイトを作ろうと思いました。<br>コーギーを飼いたいと思ってもらえるように、可愛らしいコーギーの画像を多用したデザインにしています。";
                var work_skill = "Photoshop / Illustrator"
                product_window("CORGI", type5, date2
                    , "x時間", job1, intention1, work_text
                    , "product_corgi", work_skill, "img/works_img/corgi_main.png");
                break;
            case work_web[7]: // づっち
                var work_text = "Yahoo株式会社が主催するハッカソン「Hack U」に参加した際に制作した作品です。自分が同級生と先輩に声をかけ、６人でのチームを結成しました。<br>自分はチームリーダー/コーディング/プログラムを担当しました。始めてのハッカソン・初めてのチーム制作で夏休みは大変内容の濃い期間でした。";
                var work_skill = "JavaScript / HTML / CSS"
                product_window("づっち", type4, date2
                    , "x時間", "ディレクション<br>プログラム<br>コーディング", intention1, work_text
                    , "product_dutti", work_skill,"https://gura-web.com/dutti/");
                break;
            case work_web[8]: // ミニポートフォリオ
                var work_text = "夏休みに先輩のポートフォリオを見て急に作りたくなったので制作しました。当時はなぜかとにかくふざけた感じのサイトを作りたいと思っていたので、内容は結構ふざけてます。<br>キャッチコピーの「MY WISDOM TEETH ARE GROWING AND IT HURTS」の意味は「私の親知らずが成長していて痛い」です。";
                var work_skill = "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / Jquery"
                product_window("ミニポートフォリオ", type4, date2
                    , "x時間", job1, intention1, work_text
                    , "product_mini_portfolio", work_skill,"my_works/mini_portfolio");
                break;
            case work_web[9]: // 面接予想
                var work_text = "「面接を受けたけど受かってるか不安、何％くらい俺受かってると思う？」といった就活生によくある不安を抑えるサイト、夏休みになぜかふざけた感じのサイトを作りたいと思っていたので制作しました。<br>レスポンシブデザインのデザイン力を上げることを目的としていたのでコーディングはしていません。";
                var work_skill = "Adobe XD / Illustrator"
                product_window("面接予想", type5, date2
                    , "x時間", job1, intention1, work_text
                    , "product_mensetu", work_skill, "img/works_img/mensetu.xd");
                break;
            case work_web[10]: // MediClock          
                var work_text = "夏休みに２週間、集中してグループ制作を行う課題「SIC」で作った作品です。介護で働いていた経験から誤薬(薬の渡し忘れ.渡し間違い)を防ぐサービスがあれば介護士の負担を減らせるのではないかと提案し、制作しました。<br>利用者の情報を登録して登録した服薬時間にアラートがなるサービスです。";
                var work_skill = "Photoshop / Illustrator / HTML / CSS / JavaScript"
                product_window("MediClock", type1, date2
                    , "x時間", "ほぼ全て", intention2, work_text
                    , "product_mediclock", work_skill,"http://click.ecc.ac.jp/ecc/hogura/MediClock/web/");
                break;  
            case work_web[11]: // Suu(PC)
                var work_text = "入学してから初めて作った作品です。<br>元々入学前にHTMLやCSS / SCSS、Photoshopを勉強していたのでコーディング等で悩む時間が少なく短い時間で念入りに作り込むことができました。初めて作る作品だったので気合を入れて作りました。";
                var work_skill = "Photoshop / Illustrator / HTML / CSS / SCSS";
                product_window("Suu (PC)", type1, date1
                    , "x間", job1, intention2, work_text
                    , "product_suu_pc", work_skill, "my_works/suu_html");
                break;
            case work_web[12]: // Suu(SP)
                var work_text = "入学してから初めて作った作品です。<br>元々入学前にHTMLやCSS / SCSS、Photoshopを勉強していたのでコーディング等で悩む時間が少なく短い時間で念入りに作り込むことができました。初めて作る作品だったので気合を入れて作りました。";
                var work_skill = "Photoshop / Illustrator / HTML / CSS / SCSS";
                product_window("Suu (SP)", type2, date1
                    , "x時間", job1, intention2, work_text
                    , "product_suu_sp", work_skill, "my_works/suu_mobile/index_mobile.html");
                break;
        }
    }
}
/* ------------ click-events(graphic) -----------*/
for (var i = 0; i < work_graphic.length; i++) {
    work_graphic[i].onclick = function () {
        product_type_wrap.classList.add("none");
        product_job_wrap.classList.add("none");
        product_btn.children[0].innerHTML = "作品を見る";
        switch (this) {        
            case work_graphic[0]: // キャンドルナイトチラシ
                var work_text = "中崎町第9回キャンドルナイト・ポスターコンテストの応募作品です。";
                var work_skill = "Illustrator"
                product_window("キャンドルナイトチラシ", type5, date3
                    , "x時間", job1, intention2, work_text
                    , "product_candle_night", work_skill,"img/works_img/candle_night_main.png");
                break;
            case work_graphic[1]: // 旅行の広告
                var work_text = "インド旅行の広告を制作しました。<br>バナーや広告物のデザインも上手くなりたいので、この作品を作ったあたりからバナートレースをやるようになりました。";
                var work_skill = "Photoshop"
                product_window("旅行の広告", type5, date3
                    , "x時間", job1, intention2, work_text
                    , "product_travel", work_skill, "img/works_img/travel_main.png");
                break;
            case work_graphic[2]: // 本のカバー
                var work_text = "本のカバーをデザインしました。";
                var work_skill = "Illustrator"
                product_window("本のカバー", type5, date3
                    , "x時間", job1, intention2, work_text
                    , "product_book", work_skill, "img/works_img/book_main.png");
                break;
            case work_graphic[3]: // タンブラーデザイン
                var work_text = "大阪府産業廃棄物協会が実地した「不法投棄を阻止する」ことをテーマにしたタンブラーのデザインコンテストです。<br>入賞し、「佳作」を頂きました！";
                var work_skill = "Illustrator"
                product_window("タンブラーデザイン", type5, date2
                    , "x時間", job1, intention2, work_text
                    , "product_tumbler", work_skill,"img/works_img/tumbler_main.png");
                break;
            case work_graphic[4]: // ラーメンのチラシ
                var work_text = "架空のラーメン屋のチラシを制作しました。";
                var work_skill = "Illustrator"
                product_window("ラーメンのチラシ", type5, date1
                    , "x時間", job1, intention2, work_text
                    , "product_ramen", work_skill, "img/works_img/ramen_main.png");
                break;
            case work_graphic[5]: // Suu印刷物もろもろ
                var work_text = "1年前期に制作した化粧水サイト「Suu」の印刷物です。パッケージラベル・三つ折り・コンセプトシートなどを制作しました。";
                var work_skill = "Illustrator"
                product_window("Suu印刷物もろもろ", type5, date1
                    , "x時間", job1, intention2, work_text
                    , "product_mituori", work_skill, "img/works_img/suu_graphic.png");
                break;
        }
    }
}
/* ------------ click-events(practice) -----------*/
for (var i = 0; i < work_practice.length; i++) {
    work_practice[i].onclick = function () {
        product_type_wrap.classList.add("none");
        product_job_wrap.classList.add("none");
        product_btn.children[0].innerHTML = "作品を見る";
        switch (this) {        
            case work_practice[0]: // バナートレース集１
                var work_text = "バナートレース集です。トレース方法はPhotoshopで見本を横に置き、そのまま模写をしました。<br>サイトのデザインはよく行いますが、こういったバナーデザインなどは学校ではほとんど行わないので個人的に練習することにしました。";
                var work_skill = "Photoshop"
                product_window("バナートレース集１", type5, "2018/12月"
                    , "x時間", job1, intention1, work_text
                    , "product_banner", work_skill, "img/works_img/banner_part1");
                break;
            case work_practice[1]: // ロゴデザイン集１
                var work_text = "ロゴデザイン集です。";
                var work_skill = "Illustrator"
                product_window("ロゴデザイン集１", type5, date3
                    , "x時間", job1, intention2, work_text
                    , "product_logo", work_skill, "img/works_img/logo_part1");
                break;
            case work_practice[2]: // 名刺デザイン集１
                var work_text = "名刺デザイン集です。割と自分の名刺を作るのは好きなので頻繁に名刺のデザインが変わります。<br>名刺を制作するごとにクオリティが上がっていくので、成長が感じれてアウトプットにとても良いです。";
                var work_skill = "Illustrator"
                product_window("名刺デザイン集１", type5, date3
                    , "x時間", job1, intention1, work_text
                    , "product_card", work_skill,"img/works_img/card_part1");
                break;
            case work_practice[3]: // ザクトーレス
                var work_text = "illustratorでザクをトレースしました。前期はillustratorを初めて使ったのでのツールの練習に行いました。";
                var work_skill = "Illustrator"
                product_window("ザクトーレス", type5, date3
                    , "x時間", job1, intention1, work_text
                    , "zaku", work_skill, "img/works_img/zaku_main.png");
                break;
        }
    }
}