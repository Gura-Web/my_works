<?php
    define("IMG", "img/");
 ?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136495833-4"></script>
    <script>
        if( localStorage['ga_exclude']!='1'){
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-136495833-4');
        }
    </script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="カロリー消費に必要な運動量を計算するサイトです。">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@Gura_web">
	<meta property="og:site_name" content="CaloCalc | カロリー消費に必要な運動量を計算するサイト">
	<meta property="og:title" content="CaloCalc | カロリー消費に必要な運動量を計算するサイト">
	<meta property="og:description" content="カロリー消費に必要な運動量を計算するサイトです。">
	<meta property="og:url" content="https://calocalc.gura-web.com/">
	<!-- <meta property="og:image" content="https://hoge.ecc.com/ogp.png"> -->
	<meta property="og:type" content="website">
    <link rel="canonical" href="https://calocalc.gura-web.com/">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
	<title>CaloCalc | カロリー消費に必要な運動量を計算するサイト</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__container">
            <h1 class="header__logo"><img src="<?= IMG ?>logo.svg" alt="calocalc"></h1>
        </div>
    </header>
    <main class="main">
        <div class="main__container">
            <div class="main__wrapper">
                <div class="main-visual">
                    <div class="main-visual__wrapper">
                        <h2 class="main-ttl">カロリー消費に<br>必要な運動量を計算!</h2>
                        <div class="calc-form">
                            <p class="calc-form__desc">必要な運動量を計算する</p>
                            <p class="calc-form__input">
                                <input id="weight" type="text" placeholder="あなたの体重"><span class="calc-form__kg">kg</span>
                            </p>
                            <p class="calc-form__input">
                                <input id="cal" type="text" placeholder="消費したいカロリー"><span class="calc-form__kg">kg</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="result">
                    <h3 class="result__ttl">消費に必要な運動時間</h3>
                    <div class="result__wrapper">
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>walking.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">ウォーキング</p>
                                <p id="resultWalk" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>run.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">ランニング</p>
                                <p id="resultRun" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>mountain.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">登山</p>
                                <p id="resultMountain" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>bike.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">サイクリング</p>
                                <p id="resultCycling" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>weight.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">ウェイトトレーニング</p>
                                <p id="resultTraining" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>baseball.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">野球</p>
                                <p id="resultBaseball" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>soccer.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">サッカー</p>
                                <p id="resultSoccer" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>tennis.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">テニス</p>
                                <p id="resultTennis" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>swim.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">クロール(ゆっくり)</p>
                                <p id="resultCrawl" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>stretch.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">ストレッチ</p>
                                <p id="resultStretch" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                        <div class="result-item">
                            <p class="result-item__icon"><img src="<?= IMG ?>boxing.svg" alt=""></p>
                            <div class="result-item__wrap">
                                <p class="result-item__name">キックボクシング</p>
                                <p id="resultKick" class="result-item__time"><span>xx</span>時間</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer class="footer">
        <div class="footer__container">&copy; 2019 calocalc</div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>