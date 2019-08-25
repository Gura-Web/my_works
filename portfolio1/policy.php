<?php
	require_once "include_php/main.php"; // 定数・コンテンツデータ
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."meta.php"; ?> 
	<title><?= SITE_NAME ?> | POLICY</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>policy_style.css" rel="stylesheet">
</head>
<body>
    <?php require "include_php/header.html" ?>
    

    <div>
        <p class="sidebar-toggle none">目次</p>
    </div>
    <div class="sidebar">
        <ul class="sidebar__wrapper">
            <li id="future_link" class="sidebar__item"><a href="#future"><span class="sidebar__text">なりたいもの</span></a></li>
            <li id="goal_link" class="sidebar__item"><a href="#goal"><span class="sidebar__text">目標</span></a></li>
            <li id="would-like_link" class="sidebar__item"><a href="#would-like"><span class="sidebar__text">やりたいこと</span></a></li>
            <li id="future-own_link" class="sidebar__item"><a href="#future-own"><span class="sidebar__text">今後の自分</span></a></li>
        </ul>
    </div>

	<main class="main">
		<div class="main__container">
            <h1 class="global-ttl">POLICY<span class="global-ttl__jp">私の思い</span></h1>
            <section id="future" class="future">
                <h2 class="g-heading">将来なりたいもの</h2>
                <p class="future__text">WEBデザイナー</p>
            </section>

            <section id="goal" class="goal">
                <h2 class="g-heading">目標</h2>
                <ul class="goal__list">
                    <li class="goal__item">プログラムを勉強してエンジニアの気持ちを理解したデザインができるデザイナーになること。</li>
                    <li class="goal__item">綺麗なデザインをするだけでなく、目標を達成できるデザインが作れるようになるデザイナーになること。</li>
                </ul>
            </section>

            <section id="would-like" class="would-like">
                <h2 class="g-heading">将来やりたいこと</h2>
                <ul class="would-like__list">
                    <li class="would-like__item">一からサービスを作り上げてヒットさせるまでを関わりたい。</li>
                    <li class="would-like__item">培ったスキルを使って自分の作ったサービスでお金を稼いでみたい。</li>
                </ul>
            </section>

            <section id="future-own" class="future-own">
                <h2 class="g-heading">今後の自分</h2>
                <ul class="future-own__list">
                    <li class="future-own__item">自分の持てる力でチーム、会社、クライアント、社会の役に立つデザイナーになる。</li>
                    <li class="future-own__item">培った技術を教えたり発信して、参考にしてもらえるほどのデザイナーになる。</li>
                </ul>
            </section>
            
		</div> <!-- main__container -->
    </main>
    <div class="bottom-frame"></div>
    <script src="js/script.js"></script>
    <script>
        var future_link = document.getElementById("future_link");
        var goal_link = document.getElementById("goal_link");
        var would_like_link = document.getElementById("would-like_link");
        var future_own_link = document.getElementById("future-own_link");
        document.onscroll = function() {
            if(document.documentElement.scrollTop >= 275 )  {
                future_link.classList.add("sidebar_colorChange");
                goal_link.classList.remove("sidebar_colorChange");
                would_like_link.classList.remove("sidebar_colorChange");
                future_own_link.classList.remove("sidebar_colorChange");
            }
            if (document.documentElement.scrollTop >= 546) {
                future_link.classList.remove("sidebar_colorChange");
                goal_link.classList.add("sidebar_colorChange");
                would_like_link.classList.remove("sidebar_colorChange");
                future_own_link.classList.remove("sidebar_colorChange");
            }
            if (document.documentElement.scrollTop >= 1006) {
                future_link.classList.remove("sidebar_colorChange");
                goal_link.classList.remove("sidebar_colorChange");
                would_like_link.classList.add("sidebar_colorChange");
                future_own_link.classList.remove("sidebar_colorChange");
            }
            if (document.documentElement.scrollTop >= 1300) {
                future_link.classList.remove("sidebar_colorChange");
                goal_link.classList.remove("sidebar_colorChange");
                would_like_link.classList.remove("sidebar_colorChange");
                future_own_link.classList.add("sidebar_colorChange");
            }
        }
    </script>
</body>
</html>