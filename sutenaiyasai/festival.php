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
	<meta property="og:title" content="訳あり野菜フェス | トップページ">
	<meta property="og:description" content="レストラン向けの訳あり野菜通販サイト">
	<meta property="og:url" content="https://hoge.ecc.com/">
	<meta property="og:image" content="https://hoge.ecc.com/ogp.png">
	<meta property="og:type" content="website">
	<link rel="canonical" href="http://">
	<!-- <link rel="alternate" type="" title="" href="http://"> -->
	<link rel="shortcut icon" href="<?= IMG_FAVICON ?>festival_favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="<?= IMG_FAVICON ?>festival_favicon.ico">
	<title>訳あり野菜フェス | トップページ</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.0.0/dist/css/yakuhanjp.min.css">
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>festival/festival_style.css" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="header__container">
			<h1 class="logo"><a href="#"><img src="<?= IMG_FES ?>fes_logo_header.svg" alt="訳あり野菜フェス"></a></h1>
			<nav class="header-nav">
				<ul class="header-nav__wrapper">
					<li class="header-nav__list"><a class="header-nav__link" href="#about">訳あり野菜フェスとは<span class="header-nav__en">About</span></a></li>
					<li class="header-nav__list"><a class="header-nav__link" href="#charm">フェスの魅力<span class="header-nav__en">Charm</span></a></li>
					<li class="header-nav__list"><a class="header-nav__link" href="#event">イベント<span class="header-nav__en">Event</span></a></li>
					<li class="header-nav__list"><a class="header-nav__link" href="#restaurant-list">出店予定レストラン<span class="header-nav__en">Restaurant</span></a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<main class="main">
		<div class="main__container">
			<section class="main-visual">
				<div class="main-visual__container">
					<p class="main-visual__desc scroll_hide1">訳あり野菜を使った野菜グルメが堪能できる！<br>全国各地のレストランが大集合！</p>
					<h2 class="main-visual__logo scroll_hide1"><img src="<?= IMG_FES ?>festival_logo.svg" alt="訳あり野菜フェス"></h2>
					<div class="main-visual__wrapper">	
						<p class="main-visual__time scroll_hide1"><time datetime="2019-09-29"><img src="<?= IMG_FES ?>festival_mainVisual_date.gif" alt="2019年9月29日(日)"></time></p>
						<p class="main-visual__place scroll_hide1"><img src="<?= IMG_FES ?>festival_mainVisual_place.gif" alt="東京都中野区中野４丁目１３ 中野四季の森公園"></p>
						<div class="main-visual__btn-wrap scroll_hide3">
							<p class="goPage"><a class="goPage__link" href="index.php">すてないやさいへ</a></p>
							<p class="store-open"><a class="store-open__link" href="#store-merit">出店希望の方は<br>コチラ</a></p>
						</div>
					</div>
				</div>
			</section>
			<div class="main__wrapper">
				<section id="about" class="about">
					<div class="about__container">
						<h2 class="about__ttl scroll_hide1"><img src="<?= IMG_FES ?>fes_about_ttl.gif" alt="訳あり野菜フェスとは"></h2>
						<p class="about__illust scroll_hide1"><img src="<?= IMG_FES ?>fes_about_illust.gif" alt=""></p>
						<p class="about__desc scroll_hide1">全国各地のレストランシェフが一堂に集まり、訳あり野菜を使った料理を提供する、食品ロス削減を目指す食フェスです。</p>
						<section class="meaning scroll_hide2">
							<div class="meaning__wrapper">
								<h3 class="meaning__ttl">訳あり野菜とは？</h3>
								<p class="meaning__desc">訳あり野菜とは見た目が悪いなどで出荷の基準に達せなかった野菜のことです。</p>
								<p class="meaning__desc">見た目が悪いだけで中身は普通の野菜と変わりがないので、訳あり野菜は本来おいしく食べられる野菜なのです。</p>
							</div>
							<figure class="meaning__image"><img src="<?= IMG_PHOTO ?>hand_potato.jpg" alt="両手にいっぱい乗ったじゃがいも"></figure>
						</section>
						<section class="thought scroll_hide3">
							<div class="thought__wrapper">
								<h3 class="thought__ttl">イベントの思い</h3>
								<p class="thought__desc">訳あり野菜は形が悪いという理由だけで捨てられてしまうので、無駄に生ゴミを増やす原因となっています。</p>
								<p class="thought__desc">食品ロスを減らしたいという思いからこの野菜フェスは考えられました。</p>
							</div>
							<figure class="thought__image"><img src="<?= IMG_PHOTO ?>hand_leaf.jpg" alt="野菜の葉をやさしく触る手"></figure>
						</section>
						<p class="fes-checkBtn scroll_hide1"><a class="fes-checkBtn__link" href="index.php">出店希望の方はコチラ</a></p>
					</div>
				</section>

				<section id="charm" class="charm">
					<div class="charm__container">
						<h2 class="charm__ttl scroll_hide1"><img src="<?= IMG_FES ?>fes_charm_ttl.gif" alt="野菜フェスの魅力をご紹介"></h2>
						<p class="charm__desc scroll_hide1">訳あり野菜フェスには独自の魅力がいっぱい！<br>
							「人気レストランの料理が食べれる」「食べるだけで環境に貢献できる」などメリットが沢山</p>
						<div class="charm-item__wrapper">
							<section class="charm-item scroll_hide1">
								<h3 class="charm-item__ttl">&quot;全国の味&quot;が都内に集結</h3>
								<p class="charm-item__desc">全国各地のレストランが当フェスに参加するので、いろんな地域の味が楽しめます。</p>
							</section>
							<section class="charm-item scroll_hide1">
								<h3 class="charm-item__ttl">そこでしか食べられない特別メニュー</h3>
								<p class="charm-item__desc">当イベントに向けた特別メニューをシェフの方に作っていただくので、ここでしか食べられない料理がたくさん！</p>
							</section>
							<section class="charm-item scroll_hide1">
								<h3 class="charm-item__ttl">食べて廃棄問題に貢献！</h3>
								<p class="charm-item__desc">イベントの野菜を食べるだけで環境問題に貢献することになります。是非どんどん食べてください！</p>
							</section>
						</div>
					</div>
				</section>

				<section id="restaurant-list" class="restaurant-list scroll_hide2">
					<div class="restaurant-list__container">
						<h2 class="restaurant-list__ttl">現在出店予定<span class="restaurant-list__ttl__small">の</span><span class="restaurant-list__ttl__restaurant">レストラン</span></h2>
						<table class="restaurant-list__table">
							<tr class="restaurant-list__row">
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
							</tr>
							<tr class="restaurant-list__row">
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
							</tr>
							<tr class="restaurant-list__row">
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
							</tr>
							<tr class="restaurant-list__row">
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
								<td class="restaurant-list__data">・ 大友レストラン</td>
							</tr>
						</table>
					</div>
				</section>

				<section id="event" class="event">
					<div class="event__container">
						<h2 class="event__ttl scroll_hide1"><img src="<?= IMG_FES ?>fes_event__ttl.gif" alt="イベントの詳細"></h2>
						<div class="event-item__wrapper">
							<section class="event-item scroll_hide2">
								<div class="event-item__wrap">
									<div class="event-item__ttl__wrap">
										<h3 class="event-item__ttl">訳あり野菜フェス</h3>
										<p class="event-item__free">入場料無料</p>
									</div>
									<h4 class="event-item__time__ttl">開催期間</h4>
									<p class="event-item__time">2019年 9/28(土) 〜 9/29(日) 11:00 ~ 17:00</p>
									<h4 class="event-item__place__ttl">開催場所</h4>
									<p class="event-item__place">東京都中野区中野４丁目１３ 中野四季の森公園</p>
									<p class="event-item__map">マップを見る</p>
								</div>
								<p class="event-item__logo"><img src="<?= IMG_FES ?>festival_logo.svg" alt="訳あり野菜フェス"></p>
							</section>
							<section class="event-item-junior scroll_hide3">
								<div class="event-item-junior__wrap">
									<h3 class="event-item-junior__ttl">ジュニア農業体験も同時開催予定！</h3>
									<p class="event-item-junior__desc">子供達が季節に合わせた野菜を農家の元で、収穫したり調理をしたりして楽しめる体験です</p>
									<h4 class="event-item-junior__explain">説明会</h4>
									<p class="event-item-junior__explain__desc">日時と開催場所に関しては野菜フェスと同じになります。</p>
									<p class="fes-checkBtn__mini"><a class="fes-checkBtn__mini__link" href="junior_farming.php">詳しく見る</a></p>
								</div>
								<figure class="event-item-junior__image"><img src="<?= IMG_PHOTO ?>hand_carrot.jpg" alt="子供が収穫した人参"></figure>
							</section>
						</div>
					</div>
				</section>

				<section id="store-merit" class="store-merit">
					<div class="store-merit__container">
						<h2 class="store-merit__ttl scroll_hide1"><img src="<?= IMG_FES ?>for_restaurant_ttl.gif" alt="出店するメリットをご紹介"></h2>
						<div class="merit-item__wrapper">
							<section class="merit-item merit-item__shop scroll_hide1">
								<h3 class="merit-item__ttl">お店の知名度のUP</h3>
								<p class="merit-item__desc">出店することで料理を気に入ってもらえ、レストランを知ってもらえる</p>
							</section>
							<section class="merit-item merit-item__farmer scroll_hide1">
								<h3 class="merit-item__ttl">農家の知名度のUP</h3>
								<p class="merit-item__desc">紹介したい農家のプロフィールも展示することで、その農家の知名度もUP</p>
							</section>
							<section class="merit-item merit-item__menu scroll_hide1">
								<h3 class="merit-item__ttl">新メニュー考案に</h3>
								<p class="merit-item__desc">特別料理を提供し参加者の反応を見ることで、新メニュー考案の鍵に！</p>
							</section>
						</div>
						<p class="fes-checkBtn scroll_hide1"><a class="fes-checkBtn__link" href="index.php">出店エントリーはコチラ</a></p>
					</div>
				</section>
			</div>

		</div><!-- main-container -->
	</main><!-- main -->

	<?php include_once "include_php/lp_footer.php"; ?>
	<script src="js/festival.js"></script>
</body>
</html>