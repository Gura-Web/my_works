<?php 
    define('SITE_NAME', 'Fantastic Memories');
    define('IMG','img/');
?>

<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="">
    <meta name="description" content="大阪府にある忘れられない結婚式場 <?php echo SITE_NAME ?>の公式サイトです。">
    <meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Gura_web">
	<meta property="og:site_name" content="">
	<meta property="og:title" content="Fantastic Memories">
	<meta property="og:description" content="大阪府にある忘れられない結婚式場 <?php echo SITE_NAME ?>の公式サイトです。">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:type" content="website">
	<link rel="canonical" hreflang="">
	<!-- <link rel="alternate" type="" title="" href="http://"> -->
	<link rel="shortcut icon" href="<?= IMG ?>favicon.ico" type="image/vnd.microsoft.icon">
    <!-- <link rel="apple-touch-icon" href="logo.png"> -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:200,300,400,700" rel="stylesheet">
    <title><?php echo SITE_NAME ?></title>
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <style>
        .nav-current a,.nav-current .nav-list__en{
            color: #FF88D2;
        }
    </style>
</head>
<body>

<header class="header">
    <div class="header__container">
        <div class="header__wrapper">
        <h1 class="header-logo">
            <a href="index.php">
            <picture class="haeder-logo__wrapper">
                <source media="(min-width: 480px)" srcset="<?= IMG ?>logo.svg">
                <img class="header-logo__sp" src="<?= IMG ?>logo_sp.svg" alt="<?= SITE_NAME ?>">
            </picture>
            </a>
        </h1>

        <div class="header__pc">
                <p class="header__tel"><img src="<?= IMG ?>tel.svg" alt=""></p>
                <ul class="header__sns">
                        <li class="header__sns-icon"><img src="<?= IMG ?>facebook.svg" alt="facebook"></li>
                        <li class="header__sns-icon"><img src="<?= IMG ?>instagram.svg" alt="instagram"></li>
                </ul>
                <p class="header__other"><a href="#">Access</a> | <a href="#">Contact</a></p>
                <ul class="header__entry">
                    <li class="btn--header1"><a href="#"><span>結婚式を予約</span></a></li>
                    <li class="btn--header2"><a href="#"><span>資料請求</span></a></li>
                </ul>
        </div><!-- header__pc -->

        
        </div><!-- header__wrapper -->
        <nav class="nav-pc">
            <ul class="nav-lists">
                <li class="nav-list nav-current"><a href="#">ホーム<span class="nav-list__en">Home</span></a></li>
                <li class="nav-list"><a href="#">コンセプト<span class="nav-list__en">Consept</span></a></li>
                <li class="nav-list"><a href="#">会場<span class="nav-list__en">Place</span></a></li>
                <li class="nav-list"><a href="#">ドレス<span class="nav-list__en">Dress</span></a></li>
                <li class="nav-list"><a href="#">料理<span class="nav-list__en">Food</span></a></li>
                <li class="nav-list"><a href="#">プラン<span class="nav-list__en">Plan</span></a></li>
            </ul>
        </nav>
    </div><!-- header__container -->
    <label class="spMenu-btn" for="spNavToggle"></label>
        <input id="spNavToggle" type="checkbox">
        <nav class="nav-sp">
            <div class="nav-sp__sns">
                <ul class="nav-sp__icons">
                    <li class="nav-sp__icon"><img src="<?= IMG ?>facebook.svg" alt="facebook"></li>
                    <li class="nav-sp__icon"><img src="<?= IMG ?>instagram.svg" alt="instagram"></li>
                </ul>
            </div>
            <ul class="nav-sp__wrapper">
                <li class="nav-sp__item--current"><a href="#">Home</a></li>
                <li class="nav-sp__item"><a href="#">Cosept</a></li>
                <li class="nav-sp__item"><a href="#">Place</a></li>
                <li class="nav-sp__item"><a href="#">Dress</a></li>
                <li class="nav-sp__item"><a href="#">Food</a></li>
                <li class="nav-sp__item"><a href="#">Plan</a></li>
            </ul>
            <div class="nav-sp__wrap">
                <p class="nav-sp__other"><a href="#">Access</a> / <a href="#">Contact</a></p>
                <ul class="nav-sp__btn-wrap">
                    <li class="btn--important1"><a href="#"><span>結婚式を予約</span></a></li>
                    <li class="btn--important2"><a href="#"><span>資料請求</span></a></li>
                </ul>
            </div>
            <label class="spMenu-close" for="spNavToggle"><img src="<?= IMG ?>close.svg" alt=""></label>
        </nav>
</header>

<main class="main">
    <div class="main-visual">
        <div class="main-visual__container">
            <p class="main-visual__logo"><img src="<?= IMG ?>logo_mainvisual.svg" alt=""></p>
            <p class="main-visual__phrase">心に残る最高のウエディングを</p>
            <p class="scrollDown"><a href="#consept">Scroll</a></p>
        </div>
    </div>
    <div class="main__container">
        <div id="consept" class="inner--consept">
            <h2 class="heading--consept">この場所<span class="heading__small">から</span>始まる、<br>二人<span class="heading__small">の</span>物語</h2>
            <p class="text">二人のお好みに合わせたウエディングで、<br>一生の思い出になってもらえるようなおもてなしを行います。</p>
            <p class="btn--normal"><a href="#">コンセプトを見る</a></p>
        </div><!-- inner -->
        <div class="inner--place">
            <h2 class="heading--place">最高<span class="heading__small">の</span>場所で、<br>最高<span class="heading__small">の</span>人と</h2>
            <p class="text">花嫁憧れの会場をご用意しております。<br>お好みの演出も多数ご用意。</p>
            <ul class="center">
                <li>
                    <a href="#">
                    <p class="slide__place-image"><img src="<?= IMG ?>casual_wedding.png" alt=""></p>
                    <p class="slide__jp">カジュアル・ウェディング</p>
                    <p class="slide__en">Casual Wedding</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p class="slide__place-image"><img src="<?= IMG ?>nature_wedding.png" alt=""></p>
                    <p class="slide__jp">ネイチャー・ウェディング</p>
                    <p class="slide__en">Casual Wedding</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p class="slide__place-image"><img src="<?= IMG ?>casual_wedding.png" alt=""></p>
                    <p class="slide__jp">カジュアル・ウェディング</p>
                    <p class="slide__en">Nature Wedding</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p class="slide__place-image"><img src="<?= IMG ?>gorgeous_wedding.png" alt=""></p>
                    <p class="slide__jp">ゴージャス・ウエディング</p>
                    <p class="slide__en">Gorgeous Wedding</p>
                    </a>
                </li>
            </ul>
            <p class="btn--normal"><a href="#">会場を見る</a></p>
        </div><!-- inner -->
        <div class="inner--dress">
            <h2 class="heading--dress">美しさ<span class="heading__small">を</span>引き出す<br>上質<span class="heading__small">の</span>ドレス</h2>
            <p class="text">高品質の素材を使用し、お客様に満足して頂けるドレスを多数取り揃えております</p>

            
                <div class="one-column one-column--left">
                    <div class="one-column__wrapper">
                        <h3 class="one-column__heading">白<span class="inner-heading__small">の</span>ウェディングドレス</h3>
                        <p class="one-column__en">White Wedding Dress</p>
                        <p class="one-column__desc">真っ白に包まれたドレスで清潔な結婚式を演出できます。</p>
                        <ul class="one-column__lists">
                            <li class="one-column__list"><img src="<?= IMG ?>white_dress_mini1.png" alt="白いウェディングドレスを着た女性"></li>
                            <li class="one-column__list"><img src="<?= IMG ?>white_dress_mini2.png" alt="手を繋ぐ新郎新婦"></li>
                            <li class="one-column__list"><img src="<?= IMG ?>white_dress_mini3.png" alt="ウェディングドレスを着たマネキン"></li>
                        </ul>
                    </div>
                </div>
                <div class="one-column one-column--right">
                    <div class="one-column__wrapper">
                        <h3 class="one-column__heading">赤<span class="inner-heading__small">の</span>ウェディングドレス</h3>
                        <p class="one-column__en">Red Wedding Dress</p>
                        <p class="one-column__desc">赤く包まれたドレスは、<br>情熱的な結婚式を演出できます。</p>
                        <ul class="one-column__lists">
                            <li class="one-column__list"><img src="<?= IMG ?>red_dress_mini1.png" alt="白いウェディングドレスを着た女性"></li>
                            <li class="one-column__list"><img src="<?= IMG ?>red_dress_mini2.png" alt="手を繋ぐ新郎新婦"></li>
                            <li class="one-column__list"><img src="<?= IMG ?>red_dress_mini3.png" alt="ウェディングドレスを着たマネキン"></li>
                        </ul>
                    </div>
                </div>
            
            <p class="btn--normal"><a href="#">衣装を見る</a></p>
        </div><!-- inner -->
        <div class="inner--food">
            <h2 class="heading--food">思い<span class="heading__small">を</span>込めた<br>忘れられない食事<span class="heading__small">を</span></h2>
            <p class="text">こだわり抜いた一品一品のお料理で、<br>笑顔こぼれる食事のひと時を感じて頂けます。</p>
            <ul class="grid">
                <li class="grid__item"><img src="<?= IMG ?>dessert1.png" alt=""></li>
                <li class="grid__item"><img src="<?= IMG ?>dessert2.png" alt=""></li>
                <li class="grid__item"><img src="<?= IMG ?>dessert3.png" alt=""></li>
                <li class="grid__item"><img src="<?= IMG ?>dessert4.png" alt=""></li>
                <li class="grid__item"><img src="<?= IMG ?>dessert5.png" alt=""></li>
                <li class="grid__item"><img src="<?= IMG ?>dessert6.png" alt=""></li>
                <li class="grid__item"><img src="<?= IMG ?>dessert7.png" alt=""></li>
                <li class="grid__item"><img src="<?= IMG ?>dessert8.png" alt=""></li>
            </ul>
            <p class="btn--normal"><a href="#">料理を見る</a></p>
        </div><!-- inner -->
        <div class="inner--plan">
            <h2 class="heading--plan">種類豊富<span class="heading__small">な</span><br>ウェディングプラン</h2>
            <ul class="center">
                <li class="plan-item">
                <a href="#">
                    <p class="plan-item__image"><img src="<?= IMG ?>summer_wedding.png" alt=""></p>
                    <div class="plan-item__wrap">
                        <p class="plan-item__name">サマーウェディングプラン</p>
                        <p class="plan-item__date">2019/07/20 ~ 2019/09/30</p>
                    </div>
                </a>
                </li>
                <li class="plan-item">
                    <a href="#">
                    <p class="plan-item__image"><img src="<?= IMG ?>surprise_wedding.png" alt=""></p>
                    <div class="plan-item__wrap">
                        <p class="plan-item__name">サプライズウェディングプラン</p>
                        <p class="plan-item__date">2019/07/20 ~ 2019/09/30</p>
                    </div>
                    </a>
                </li>
                <li class="plan-item">
                    <a href="#">
                    <p class="plan-item__image"><img src="<?= IMG ?>summer_wedding.png" alt=""></p>
                    <div class="plan-item__wrap">
                        <p class="plan-item__name">サマーウェディングプラン</p>
                        <p class="plan-item__date">2019/07/20 ~ 2019/09/30</p>
                    </div>
                    </a>
                </li>
                <li class="plan-item">
                    <a href="#">
                    <p class="plan-item__image"><img src="<?= IMG ?>resort_wedding.png" alt=""></p>
                    <div class="plan-item__wrap">
                        <p class="plan-item__name">リゾートウェディングプラン</p>
                        <p class="plan-item__date">2019/07/20 ~ 2019/09/30</p>
                    </div>
                    </a>
                </li>
                
            </ul>
            <p class="btn--normal"><a href="#">プランを見る</a></p>
        </div><!-- inner -->
        <div class="inner--news">
            <h2 class="heading--news">新着情報</h2>
            <ul class="news">
                <li class="news__item"><a href="#">
                    <div class="news__wrap">
                        <p class="category--news">News</p>
                        <p class="news__date"><time datetime="2018-03-21">2018/03/21</time></p>
                    </div>
                    <h3 class="news__ttl">建物の一部改修のお知らせ</h3>
                </a></li>
                <li class="news__item"><a href="#">
                    <div class="news__wrap">
                        <p class="category--dress">Dress</p>
                        <p class="news__date"><time datetime="2018-02-10">2018/02/10</time></p>
                    </div>
                    <h3 class="news__ttl">新作ドレス「英国スレンダーラインドレス」を追加</h3>
                </a></li>
                <li class="news__item"><a href="#">
                    <div class="news__wrap">
                        <p class="category--place">Place</p>
                        <p class="news__date"><time datetime="2018-01-15">2018/01/15</time></p>
                    </div>
                    <h3 class="news__ttl">新しい会場「サファイアガーデン」を追加</h3>
                </a></li>
                <li class="news__item"><a href="#">
                    <div class="news__wrap">
                        <p class="category--news">News</p>
                        <p class="news__date"><time datetime="2018-01-01">2018/01/01</time></p>
                    </div>
                    <h3 class="news__ttl">新年のご挨拶</h3>
                </a></li>
            </ul>
            <p class="btn--normal news-link"><a href="#">一覧を見る</a></p>
        </div><!-- inner -->
        <div class="inner--access">
            <div class="leftBox">
                <h2 class="heading--access">アクセス</h2>
                <p class="map"><img src="<?= IMG ?>map.svg" alt=""></p>
            
                <div class="leftBox__wrapper">
                    <dl class="define">
                        <dt class="define__ttl">Address</dt>
                        <dd class="define__text"><address><span class="italic">〒530-0001</span> 大阪府大阪市北区梅田１丁目１−３</address></dd>
                        <dd class="define__text">JR大阪駅から徒歩7分</dd>
                    </dl>
                    <dl class="define">
                        <dt class="define__ttl">Tel</dt>
                        <dd class="define__number bold italic">0120-4930-0912</dd>
                    </dl>
                </div>
            </div>
            <p class="btn--normal"><a href="#">Google Mapを見る</a></p>
        </div><!-- inner -->
        <div class="inner--contact contact">
            <h2 class="heading--contact">お問い合わせ</h2>
            <ul class="nav-sp__entry">
                <li class="btn--important1"><a href="#"><span>結婚式を予約</span></a></li>
                <li class="btn--important2"><a href="#"><span>資料請求</span></a></li>
            </ul>
            <p class="tel">TEL<span class="tel__number bold italic"> 0120-4930-0912</span></p>
            <div class="contact-info">
                <p class="contact-info__holiday">毎週水曜日定休</p>
                <p class="contact-info__time">営業時間：<span class="italic">10:00 ~ 19:00</span></p>
                <p class="contact-info__note">※年末年始のみお休みとさせて頂いております</p>
            </div>
        </div><!-- inner -->
    </div><!-- main__container -->
</main>

<footer class="footer">
    <div class="footer__container">
        <p class="copy"><small>&copy; 2019- FantaticMemories Inc.</small></p>
    </div><!-- footer__container -->
</footer>

<script>
    alert("勉強目的のWEBサイトです。実在する結婚式場ではありません");
</script>
</body>
</html>
