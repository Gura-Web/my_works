<?php
	require_once "include_php/main.php"; // 定数・コンテンツデータ
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."meta.php"; ?> 
	<title><?= SITE_NAME ?> | PROFILE</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>profile_style.css" rel="stylesheet">
</head>
<body>
    <?php require "include_php/header.html" ?>
    

    <div>
        <p class="sidebar-toggle none">目次</p>
    </div>
    <div class="sidebar">
        <ul class="sidebar__wrapper">
            <li id="about-me_link"class="sidebar__item"><a href="#about-me"><span class="sidebar__text">私について</span></a></li>
            <li id="career_link" class="sidebar__item"><a href="#career"><span class="sidebar__text">経歴</span></a></li>
            <li id="now_link" class="sidebar__item"><a href="#now"><span class="sidebar__text">現在</span></a></li>
        </ul>
    </div>

	<main class="main">
		<div class="main__container">
            <h1 class="global-ttl">PROFILE<span class="global-ttl__jp">プロフィール</span></h1>

            <section class="my-data">
                <h2 class="my-data__name">小倉 弘暉</h2>
                <dl class="my-data-list">
                    <div class="my-data-list__wrap">
                        <dt class="my-data-list__dt">学校</dt>
                        <dd class="my-data-list__dd">ECCコンピュータ専門学校</dd>
                    </div>
                    <div class="my-data-list__wrap">
                        <dt class="my-data-list__dt">学年・コース</dt>
                        <dd class="my-data-list__dd">WEBデザインコース / 1年</dd>
                    </div>
                    <div class="my-data-list__wrap">
                        <dt class="my-data-list__dt">卒業年度</dt>
                        <dd class="my-data-list__dd">2021年卒業予定</dd>
                    </div>
                    <div class="my-data-list__wrap">
                        <dt class="my-data-list__dt">出身・居住地</dt>
                        <dd class="my-data-list__dd">京都府出身<br>
                        → 滋賀県<br>
                        → 兵庫県
                    </div>
                    </dd>
                </dl>
            </section>

            <section id="about-me" class="about-me">
                <h2 class="g-heading">私について</h2>
                <p class="about-me__text">大阪でWEBデザインについて学んでいる専門学生です。<br>小学５年生からパソコンを触り出して、インターネット大好きで育ちました。<br>WEBとデザインするのが好きです。</p>
                <section class="advantages">
                    <h3 class="box-heading">私の長所</h3>
                    <p class="advantages__text">真面目 / 責任感が強い / 積極的 / 計画立てて物事を進められる / Slackの返事が早い</p>
                </section>
                <section class="disadvantage">
                    <h3 class="box-heading">私の短所</h3>
                    <p class="disadvantage__text">心配性 / 考えすぎ</p>
                </section>
                <section class="about-me-comment">
                    <h3 class="box-heading">意識してること</h3>
                    <p class="about-me-comment__text">自分は前倒しで計画を進めるのが得意です。<br>
                    同時進行で制作物や課題を進めていますが「できるうちにできることをやる」をモットーに締め切りにしっかり間に合うようにしています。<br>
                    また、グループ制作においては報告・連絡・相談を意識して積極的に行い、グループ全体に自分の作業範囲を把握してもらうように心がけています。

                    <span>ちなみにSlackの返事が早い理由は、ほとんどPCの前にいるからです。</span></p>
                </section>
            </section>

            <section id="career" class="career">
                <h2 class="g-heading">経歴</h2>
                <p class="career__toggle">OPEN</p>
                <div id="history_list" class="history">
                    <section class="history-item primary-school">
                        <h3 class="history-item__ttl primary-school__ttl">小学・中学</h3>
                        <p class="history-item__text primary-school__text">小学５年生からパソコンを触りだし、インターネットを触れてそこからどハマり。<br>
                        中学の頃にフリーのレンタルサーバーを使ってHTMLをメモ帳で書いて公開していました。<br>
                        当時はCSSすら存在をしらなくて、文字と画像だけのサイトで、サイトといっていいのかというクオリティでしたが、
                        自分でWEBページを作ったということがうれしくて友達に見せたりしていました。</p>
                    </section>
                    <section class="history-item high-school">
                        <h3 class="history-item__ttl high-school__ttl">高校・高校卒業</h3>
                        <p class="history-item__text high-school__text">高校在学時は３年間アルバイトを経験。<br>
                        高校卒業時はECCコンピュータに進学するか就職するか非常に悩み、<br>
                        高校で介護資格をとっていたことと自立したいという気持ちもあり介護職を選択、しかし自分の性格と仕事内容がまったく合わず１ヶ月で退社。<br>
                        その後、製造業を２ヶ月ほどしていましたが、進学しなかった後悔が当時非常に残っていました。 (進学しないのに学校のホームページを見漁る毎日・・・。)<br>
                        元々WEBが大好きだったことと、ずっと後悔していたことから本当に自分のしたい仕事をやりたいと思い、諦めきれずにECCコンピュータに改めて入学しました。
                        </p>
                    </section>
                    <section class="history-item vocational-school">
                        <h3 class="history-item__ttl vocational-school__ttl">専門学校に入学</h3>
                        <p class="history-item__text vocational-school__text">満を持してECCコンピュータ専門学校へ入学。<br>
                        入学直後はWEBの勉強ができる嬉しさで平日土日問わずデザインと制作に没頭しました。<br>
                        そのお陰もあって前期の展示会ではインターンのお声を２社、１年生なのにもらうことができて、とても嬉しかったです。

                        挫折も経験しましたが、あの時挫折をしたから進学という選択をして好きなことを勉強できているので結果的によかったと自分では思っています。
                        </p>
                    </section>
                    <section class="summer-vacation summer-vacation">
                        <h3 class="history__ttl  summer-vacation__ttl">夏休み</h3>
                        <p class="history__text  summer-vacation__text">夏休みはインターンに１週間ほど行かせていただきました。<br>
                        <span class="summer-vacation__edit">また、株式会社Yahoo主催のハッカソン、「Hack U」に参加しました。<br>
                        自分が同級生と先輩に声をかけ、１年生５人と３年生１人の６人でチームを結成しました。<br>
                        当時はまだハッカソン自体初めてで、1年生は誰もプログラムを触っていない状況だったので、自分がチームリーダーをしてハッカソンが始まるまでにJavaScriptを独学していました。</span>
                        製作時は、初めてプログラムを触るので先輩に頼る場面も多かったですが、本当に優しい先輩だったので夏休みは大変勉強させて頂きました。
                        入賞は出来なかったですが、初めてのハッカソン・初めてのチーム制作で本当に内容の濃い夏休みでした。
                        </p>
                    </section>
                </div>
            </section>

            <section id="now" class="now">
                <h2 class="g-heading">現在</h2>
                <p class="now__text"><span class="now__edit">元々高卒で就職していたこともあり、自分がデザイン関係の勉強をしてWEBに関係する仕事を目指せると思っていなかったので、<br>
                今はとても楽しい学生生活を送らせていただいています。</span>

                来年は２年生になるので後輩に沢山教えれるように頑張ります。</p>
            </section>

		</div> <!-- main__container -->
	</main>
    <div class="bottom-frame"></div>
    <script src="js/script.js"></script>
    <script>
            var career_link = document.getElementById("career_link");
            var about_me_link = document.getElementById("about-me_link");
            var now_link = document.getElementById("now_link");
            var now = document.getElementById("now");
            document.onscroll = function() {
                // console.dir(now.getBoundingClientRect().top); // 指定の要素がどのくらいhtmlから離れているか 近くほど数値が低くなる
                // console.log(document.documentElement.scrollTop)
                if(document.documentElement.scrollTop >= 765 )  {
                    career_link.classList.remove("sidebar_colorChange");
                    about_me_link.classList.add("sidebar_colorChange");
                    now_link.classList.remove("sidebar_colorChange");
                }
                if (document.documentElement.scrollTop >= 1723) {
                    career_link.classList.add("sidebar_colorChange");
                    about_me_link.classList.remove("sidebar_colorChange");
                    now_link.classList.remove("sidebar_colorChange");
                }
                if (now.getBoundingClientRect().top <= 220) {
                    career_link.classList.remove("sidebar_colorChange");
                    about_me_link.classList.remove("sidebar_colorChange");
                    now_link.classList.add("sidebar_colorChange");
                }
            }
            // 3082

          var history_list = document.getElementById("history_list");
          var career_toggle = document.getElementsByClassName("career__toggle")[0];
          career_toggle.onclick = function() {
              if(this.classList.contains("career__toggle__blue")) {
                this.innerHTML = "OPEN";
                this.classList.remove("career__toggle__blue");
                history_list.classList.remove("open_anime");
              } 
              else {
                history_list.classList.add("open_anime");
                this.innerHTML = "CLOSE";
                this.classList.add("career__toggle__blue");
                console.log("g");
              }
              
          }
    </script>
</body>
</html>