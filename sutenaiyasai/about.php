<?php

	require_once "include_php/main.php"; 
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="keywords" content="すてないやさい,訳あり野菜,レストラン,農家">
	<meta name="description" content="レストラン向けの訳あり野菜通販サイト">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@twitteraccount">
	<meta property="og:site_name" content="すてないやさい">
	<meta property="og:title" content="すてないやさい | トップページ">
	<meta property="og:description" content="レストラン向けの訳あり野菜通販サイト">
	<meta property="og:url" content="https://hoge.ecc.com/">
	<meta property="og:image" content="https://hoge.ecc.com/ogp.png">
	<meta property="og:type" content="website">
	<link rel="canonical" href="http://">
	<!-- <link rel="alternate" type="" title="" href="http://"> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="shortcut icon" href="<?= IMG_FAVICON ?>sutenaiyasai_favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="<?= IMG_FAVICON ?>sutenaiyasai_favicon.ico">
	<title><?= SITE_NAME ?> | トップページ</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.0.0/dist/css/yakuhanjp.min.css">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>about/about_style.css" rel="stylesheet">
	
</head>
<body>
	<header class="header">
		<div class="header__container">
			<h1 class="logo"><a href="index.php"><img src="<?= IMG_GLOBAL ?>logo_side.svg" alt="すてないやさい"></a></h1>
			<nav class="header-nav">
				<ul class="header-nav__wrapper">
					<li class="header-nav__list"><a class="header-nav__link accentColor" href="#about">すてないやさいとは？<span class="header-nav__en">About</span></a></li>
					<li class="header-nav__list"><a class="header-nav__link assortColor" href="#concept">コンセプト<span class="header-nav__en">Concept</span></a></li>
					<li class="header-nav__list"><a class="header-nav__link mainColorDark" href="#merit">メリット<span class="header-nav__en">Merit</span></a></li>
					<li class="header-nav__list"><a class="header-nav__link separationColor2" href="#features">便利な機能<span class="header-nav__en">Feature</span></a></li>
                    <li class="header-nav__list"><a class="header-nav__link mainColor" href="#about-event">イベント<span class="header-nav__en">Event</span></a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<main class="main">
		<div class="main__container">

            <div class="main-visual">
                <div class="main-visual__wrapper">
					<h2 class="main-visual__ttl scroll_hide1"><span class="mainColorDark">訳あり野菜</span><img class="main-visual__link-icon" src="<?= IMG_GLOBAL ?>link_i.svg" alt="">レストラン</h2>
					<p class="main-visual__catch scroll_hide1">訳あり野菜とレストランを繋ぐ</p>
					<p class="main-visual__logo scroll_hide1"><img src="<?= IMG_GLOBAL ?>yasai_logo.svg" alt="すてないやさい"></p>
					<p class="main-visual__text scroll_hide1">“美味しい訳あり野菜をあなたのお店にお届け”</p>
                </div>
				<p class="main-visual__scroll scale_hide"><a href="#about">SCROLL</a></p>
				
            </div>

			<section id="about" class="about">
				<div class="about__container">
					<h2 class="about__ttl scroll_hide1">About<span class="about__sub-ttl">すてないやさいとは？</span></h2>
					<p class="about__desc scroll_hide1">すてないやさいとは、本来なら捨てられてしまう訳あり野菜をお店にお届けすることを目的とした通販サイトです。<br>
					捨てるのではなく訳あり野菜を飲食店に活用してもらうことで廃棄問題解消に貢献します。</p>
				</div>
			</section>

			<section id="concept" class="concept">
				<div class="concept__container">
					<div class="concept__ttl">
						<h2 class="concept__hdn scroll_hide1">Concept<span class="concept__sub-ttl">サイトの目的</span></h2>
					</div>
					<div class="concept__wrapper">
						<section class="meaning scroll_hide2">
							<div class="meaning__wrapper">
								<h3 class="meaning__ttl">訳あり野菜とは</h3>
								<p class="meaning__desc">
									訳あり野菜とは味は普通の野菜と変わりがないのに、見た目が悪いなどで出荷の基準に達せなかった野菜のことです。
								</p>
								<p class="meaning__desc">
									見た目が悪いだけで中身は普通の野菜と変わりがないので、本来おいしく食べられる野菜なのです。
								</p>
							</div>
							<figure class="meaning__image"><img src="<?= IMG_ABOUT ?>green_pepper.jpg" alt="大量のピーマン"></figure>
						</section>
						<section class="reason scroll_hide3">
							<div class="reason__wrapper">
								<h3 class="reason__ttl">なぜ必要か？</h3>
								<p class="reason__desc">
									形が悪いという理由だけで捨てられてしまうので、無駄に生ゴミを増やす原因となっています。
								</p>
								<p class="reason__desc">
									近年は台風が多く、訳あり野菜が増えるため市場には回らず野菜高騰の原因となっています。<br>
									結果、農家の利益にならずレストランも野菜高騰で困っている現状なのです。
								</p>
							</div>
							<figure class="reason__image"><img src="<?= IMG_ABOUT ?>rotten_eggplant.jpg" alt="腐ったナス"></figure>
						</section>
						<div class="sdgs scroll_hide2">
							<p class="sdgs__sdgs13"><img src="<?= IMG_GLOBAL ?>sdgs13.svg" alt="気候変動に具体的な対策を"></p>
							<p class="sdgs__sdgs12"><img src="<?= IMG_GLOBAL ?>sdgs12.svg" alt="つくる責任、使う責任"></p>
							<p class="sdgs__text">SDGsとの関連</p>
						</div>
					</div>
					<section class="purpose">
						<div class="purpose__wrapper">
							<div class="purpose__wrap scroll_hide3">
								<h2 class="purpose__ttl">サイトの目的</h2>
								<p class="purpose__desc">食品ロスを減らすためにすてないやさいは出来ました。
									すてないやさいは農家とレストランを繋ぎ、訳あり野菜を活用して廃棄される野菜を減らすことを目的としたサイトです。
								</p>
							</div>
							<figure class="purpose__image scroll_hide2"><img src="<?= IMG_GLOBAL ?>yasai_logo.svg" alt="すてないやさい"></figure>
						</div>
						<p class="about-checkBtn scroll_hide1"><a class="about-checkBtn__link" href="index.php">すてないやさいへ</a></p>
					</section>
				</div>
			</section>

			<section id="merit" class="merit">
				<div class="merit__container">
					<div class="merit__ttl">
						<h2 class="merit__hdn scroll_hide1">Merit<span class="concept__sub-ttl">利用するメリット</span></h2>	
					</div>
					<section class="point-one scroll_hide2">
						<div class="point-one__wrapper">
							<h3 class="point-one__ttl"><span class="point-one__point">Point<span class="point-one__point__number">1</span></span>低価格で野菜を購入</h3>
							<p class="point-one__desc">
								通常の野菜と形が違うため普通の野菜より安く購入することができます。<br>
								味は普通の野菜とまったく変わらないので、美味しく頂けます。
							</p>
						</div>
						<p class="point-one__image"><img src="<?= IMG_ABOUT ?>vegetables_white.jpg" alt="新鮮な野菜たち"></p>
					</section>
					<section class="point-two scroll_hide3">
						<div class="point-two__wrapper">
							<h3 class="point-two__ttl"><span class="point-two__point">Point<span class="point-two__point__number">2</span></span>希望の農家が見つかる</h3>
							<p class="point-two__desc">
								地域から検索できるので近くの農家を見つけることができます。自分の店と相性のいい農家を見つけられる可能性大！
							</p>
						</div>
						<p class="point-two__image"><img src="<?= IMG_ABOUT ?>older_farmer.jpg" alt="新鮮な野菜たち"></p>
					</section>
					<section class="point-three scroll_hide2">
						<div class="point-three__wrapper">
							<h3 class="point-three__ttl"><span class="point-three__point">Point<span class="point-three__point__number">3</span></span>お得な野菜情報が分かる</h3>
							<p class="point-three__desc">
								季節に合わせたお得な野菜の情報を発信しています。普段よりさらに安く野菜を仕入れるチャンスです。
							</p>
						</div>
						<p class="point-three__image"><img src="<?= IMG_ABOUT ?>wood_vege.jpg" alt="新鮮な野菜たち"></p>
					</section>
				</div>
			</section>

			<section class="go-page">
				<div class="go-page__container scroll_hide1">
					<div class="go-page__wrap">
						<h2 class="go-page__ttl">種類<span class="accentColor">豊</span><span class="mainColor">富</span>な野菜が沢山！<br>レストランで使う食材探しへ！</h2>
						<p class="go-page__sub-ttl"><span class="accentColor">U</span>se <span class="mainColor">Sutenai Yasai Service</span></p>
						<p class="about-checkBtn"><a class="about-checkBtn__link" href="index.php">すてないやさいへ</a></p>
					</div>
					<p class="go-page__image"><img src="<?= IMG_ABOUT ?>basket_vegetables.jpg" alt="カゴに入った新鮮な野菜たち"></p>
				</div>
			</section>

			<section id="features" class="features">
				<div class="features__container">
					<div class="features__ttl">
						<h2 class="features__hdn scroll_hide1">Useful Features<span class="features__sub-ttl">便利な機能</span></h2>
					</div>
					<div class="features__wrapper">
						<section class="farmer-favorite scroll_hide1">
							<h3 class="farmer-favorite__ttl">農家のお気に入り機能</h3>
							<p class="farmer-favorite__desc">お気に入り農家機能で気に入った農家がいれば簡単にアクセスすることができます。</p>
						</section>	
						<section class="regularly scroll_hide1">
							<h3 class="regularly__ttl">定期購入が可能</h3>
							<p class="regularly__desc">頻繁に仕入れる場合は定期購入機能で、自分の設定した周期で野菜を購入できます。</p>
						</section>	
						<section class="sale-news scroll_hide1">
							<h3 class="sale-news__ttl">お得な野菜をご提案</h3>
							<p class="sale-news__desc">新メニューに困った時、季節に合わせた野菜のご提案を致します。</p>
						</section>	
					</div>
					<section class="about-symbol">
						<h2 class="about-symbol__ttl scroll_hide1">独自の取り組み</h2>
						<p class="about-symbol__image scroll_hide1"><img src="<?= IMG_GLOBAL ?>symbol.svg" alt="地元貢献シンボル"></p>
						<h3 class="about-symbol__heading scroll_hide1">地域貢献シンボル</h3>
						<p class="about-symbol__desc scroll_hide1">貢献シンボルを取得することで、地元産を使っていることの証明ができます。また、地元に貢献している優良店であることをシンボルでアピールできます。</p>
						<p class="about-checkBtn scroll_hide1"><a class="about-checkBtn__link" href="symbol.php">地元貢献シンボルとは？</a></p>
					</section>
				</div>
			</section>

			<section id="about-event" class="about-event">
				<div class="about-event__container">
					<h2 class="about-event__ttl scroll_hide1">Event<span class="about-event__sub-ttl">独自のイベント</span></h2>
					<div class="about-event__wrapper scroll_hide1">
						<div class="about-event__btn">
							<div class="about-event__right-btn"></div>
							<div class="about-event__left-btn"></div>
						</div>
						<ul class="slider">
							<li>
							<article class="about-farmer-support">
								<a class="about-farmer-support__link" href="farmer_support.php">
									<div class="about-farmer-support__wrapper">
										<h3 class="about-farmer-support__ttl">就農応援プログラム</h3>
										<p class="about-farmer-support__desc">農業に興味がある社会人を対象とした就農を支援するプログラムの説明会です。</p>
										<p class="about-farmer-support__date">2019/09/08 (日)</p>
										<p class="about-farmer-support__address">東京都千代田区大手町２丁目６−１</p>
									</div>
									<figure class="about-farmer-support__image"><img src="<?= IMG_ABOUT ?>be_farmer_thumbnail.jpg" alt="土の上にあるさつまいも"></figure>
								</a>
							</article>
							</li>
							<li>
							<article class="about-junior">
								<a class="about-junior__link" href="junior_farming.php">
									<div class="about-junior__wrapper">
										<h3 class="about-junior__ttl">ジュニア農業体験</h3>
										<p class="about-junior__desc">子供達が季節に合わせた野菜を農家の元で、収穫したり調理をしたりして楽しめる体験です。</p>
										<p class="about-junior__date">2019/09/28 (土)〜2019/09/29 (日)</p>
										<p class="about-junior__address">東京都中野区中野４丁目１３中野四季の森公園</p>
									</div>
									<figure class="about-junior__image"><img src="<?= IMG_ABOUT ?>junior_thumbnail.jpg" alt="土の上にあるさつまいも"></figure>
								</a>
							</article>
							</li>
							<li>
							<article class="about-festival">
								<a class="about-festival__link" href="festival.php">
									<div class="about-festival__wrapper">
										<h3 class="about-festival__ttl">訳あり野菜フェス</h3>
										<p class="about-festival__desc">訳あり野菜だけを使った食フェスを開催し、レストランがそこでしか食べられない料理を振る舞います。</p>
										<p class="about-festival__date">2019/09/28 (土)〜2019/09/29 (日)</p>
										<p class="about-festival__address">東京都中野区中野４丁目１３中野四季の森公園</p>
									</div>
									<figure class="about-festival__image"><img src="<?= IMG_ABOUT ?>festival_thumbnail.jpg" alt="土の上にあるさつまいも"></figure>
								</a>
							</article>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="go-page-footer">
				<div class="go-page-footer__container">
					<h2 class="go-page-footer__ttl">すてないやさいを<span class="separationColor">利</span>用する。</h2>
					<p class="go-page-footer__sub-ttl"><span class="separationColor">U</span>se Sutenai Yasai Service</p>
				</div>
				<p class="about-checkBtn"><a class="about-checkBtn__link" href="index.php"><span>すてないやさいへ</span></a></p>
			</section>

		</div><!-- main-container -->
	</main><!-- main -->

	<?php include_once "include_php/lp_footer.php"; ?>

<script type="text/javascript" src="slick/jquery-3.2.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>