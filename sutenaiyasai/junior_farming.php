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
	<meta property="og:title" content="ジュニア農業体験 | トップページ">
	<meta property="og:description" content="レストラン向けの訳あり野菜通販サイト">
	<meta property="og:url" content="https://hoge.ecc.com/">
	<meta property="og:image" content="https://hoge.ecc.com/ogp.png">
	<meta property="og:type" content="website">
	<link rel="canonical" href="http://">
	<!-- <link rel="alternate" type="" title="" href="http://"> -->
	<link rel="shortcut icon" href="<?= IMG_FAVICON ?>junior_favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="<?= IMG_FAVICON ?>junior_favicon.ico">
	<title>ジュニア農業体験 | トップページ</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.0.0/dist/css/yakuhanjp.min.css">
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>junior_farming/junior_style.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="header__container">
			<h1 class="header__logo"><a href="#"><img src="<?= IMG_JUNIOR ?>junior_logo_side.svg" alt="ジュニア農業体験"></a></h1>
			<nav class="header__nav__wrap">
				<ul class="header__nav">
					<li class="header__list"><a href="#about">ジュニア農業体験<span>って</span>？</a></li>
					<li class="header__list"><a href="#merit">参加するメリット</a></li>
					<li class="header__list"><a href="#event-content">体験内容</a></li>
					<li class="header__list"><a href="#date">イベント</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<main class="main">
		<div class="main__container">

			<section class="main-visual">
				<div class="main-visual__container">
					<h2 class="main-visual__logo" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800"><img src="<?= IMG_JUNIOR ?>junior_logo.svg" alt="ジュニア農業体験"></h2>
					<p class="main-visual__catch" data-aos="fade-up" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="800">野菜を収穫する楽しみを<br>たっぷり楽しもう！</p>
					<p class="main-visual__scroll__text" data-aos="fade-up" data-aos-delay="1200" data-aos-easing="ease" data-aos-duration="800"><a href="#about">SCROLL</a></p>
				</div>
			</section>

			<section id="about" class="about">
				<div class="about__container">
					<h2 class="about__ttl" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">ジュニア農業体験って？</h2>
					<!-- <img src="<?= IMG_JUNIOR ?>junior_about.svg" alt="ジュニア農業体験って？"> -->
					<div class="about__desc-wrapper" data-aos="fade-up" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="800">
						<p class="about__desc">ジュニア農業体験は子供達が農家の元で、季節に合わせた野菜を<br>収穫したり調理をしたりして楽しめる体験です。<br>とれた野菜でBBQをしたり楽しみ盛りだくさん！</p>
					</div>
					<section class="reason">
						<div class="reason__wrapper">
							<div class="reason__wrap" data-aos="zoom-in" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">
								<h3 class="reason__ttl">農業体験を行う理由</h3>
								<p class="reason__text">現在は食の欧米化とも言われているようにハンバーガーやインスタント食品などを口にすることが多くなっており、子供達が野菜を食べる機会が少なくなっています。</p>
							</div>
						</div>
					</section>
					<section class="philosophy">
						<div class="philosophy__wrapper">
							<div class="philosophy__wrap"  data-aos="zoom-in" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="500">
								<h3 class="philosophy__ttl">野菜の美味しさを知ってほしい。</h3>
								<p class="philosophy__text">もっと野菜を食べて健康な食事を習慣にしてほしい、野菜のおいしさを知ってほしいと考えジュニア農業体験は始まりました。</p>
							</div>
						</div>
					</section>
				</div>
			</section>

			<section id="merit" class="merit">
				<div class="merit__container">
					<h2 class="merit__ttl" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">参加するメリット</h2>
					<div class="merit-item__wrapper">
						<section class="merit-item__like">
							<div class="merit-item__like__wrap" data-aos="fade-left" data-aos-delay="300" data-aos-easing="ease" data-aos-duration="800">
								<h3 class="merit-item__like__ttl">子供の野菜嫌い解消に</h3>
								<p class="merit-item__like__text">子供達が野菜を食べたいという気持ちになってもらえるよう、体験では野菜のおいしさとその栄養について深く知ってもらいます。</p>
							</div>
							<figure class="merit-item__like__image" data-aos="fade-right" data-aos-delay="600" data-aos-easing="ease" data-aos-duration="800"><img src="<?= IMG_JUNIOR ?>harvest_boy.png" alt="野菜を収穫して笑顔な男の子"></figure>
						</section>
						<section class="merit-item__sociability">
							<div class="merit-item__sociability__wrap" data-aos="fade-right" data-aos-delay="300" data-aos-easing="ease" data-aos-duration="800">
								<h3 class="merit-item__sociability__ttl">社会性を身につける</h3>
								<p class="merit-item__sociability__text">他の子供と一緒に野菜の収穫や料理をすることで、社会性を身につけることができます。また、土と触れ合い都会ではできない自然な体験が経験できます。</p>
							</div>
							<figure class="merit-item__sociability__image" data-aos="fade-left" data-aos-delay="600" data-aos-easing="ease" data-aos-duration="800"><img src="<?= IMG_JUNIOR ?>harvest_kids.png" alt="野菜を収穫して笑顔な男の子"></figure>
						</section>
						<section class="merit-item__memories">
							<div class="merit-item__memories__wrap" data-aos="fade-left" data-aos-delay="300" data-aos-easing="ease" data-aos-duration="800">
								<h3 class="merit-item__memories__ttl">休日の思い出作りに！</h3>
								<p class="merit-item__memories__text">運動不足の多い子供たちが多い中、収穫作業は子供の体力作りに最適でボール遊びなども実地するのでいい思い出作りになります。<br>また、新しい友達ができるチャンス！</p>
							</div>
							<figure class="merit-item__memories__image" data-aos="fade-right" data-aos-delay="600" data-aos-easing="ease" data-aos-duration="800"><img src="<?= IMG_JUNIOR ?>run_girls.png" alt="野菜を収穫して笑顔な男の子"></figure>
						</section>
					</div>
				</div>
			</section>

			<section id="event-content" class="event-content">
				<h2 class="event-content__ttl" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">体験内容</h2>
				<div class="event-content__wrapper">
					<section class="harvest-step" data-aos="fade-up" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="800">
						<div class="harvest-step__wrap">
							<h3 class="harvest-step__ttl">収穫</h3>
							<p class="harvest-step__text">自分達の手で野菜を収穫！</p>
						</div>
						<p class="harvest-step__image"><img src="<?= IMG_JUNIOR ?>harvest_one.gif" alt=""></p>
					</section>
					<section class="harvest-step" data-aos="fade-up" data-aos-delay="1000" data-aos-easing="ease" data-aos-duration="800">
						<div class="harvest-step__wrap">
							<h3 class="harvest-step__ttl">料理</h3>
							<p class="harvest-step__text">収穫した野菜をみんなで料理します。</p>
						</div>
						<p class="harvest-step__image"><img src="<?= IMG_JUNIOR ?>harvest_two.gif" alt=""></p>
					</section>
					<section class="harvest-step" data-aos="fade-up" data-aos-delay="1200" data-aos-easing="ease" data-aos-duration="800">
						<div class="harvest-step__wrap">
							<h3 class="harvest-step__ttl">お昼ご飯</h3>
							<p class="harvest-step__text">料理した野菜をみんなで食べます。自分で作ったのでいつもよりおいしさUP。</p>
						</div>
						<p class="harvest-step__image"><img src="<?= IMG_JUNIOR ?>harvest_three.gif" alt=""></p>
					</section>
					<section class="harvest-step" data-aos="fade-up" data-aos-delay="1400" data-aos-easing="ease" data-aos-duration="800">
						<div class="harvest-step__wrap">
							<h3 class="harvest-step__ttl">遊び</h3>
							<p class="harvest-step__text">ご飯の後はみんなで遊ぼう！休日のいい思い出作りに。</p>
						</div>
						<p class="harvest-step__image"><img src="<?= IMG_JUNIOR ?>harvest_four.gif" alt=""></p>
					</section>
				</div>
			</section>

			<div class="vegetables_i" data-aos="fade-right" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">
				
			</div>

			<section id="date" class="date">
				<h2 class="date__ttl" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">イベントのご案内</h2>
				<div class="date__container">
					<div class="date__wrapper">
						<section class="explain" data-aos="fade-up" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="800">
							<h3 class="explain__ttl">説明会</h3>
							<h4 class="explain__date">日時</h4>
							<p class="explain__date__text">2019年9月28日(土)&nbsp;〜&nbsp;29日(日)10:00 ~ 12:00</p>
							<h4 class="explain__place">場所</h4>
							<div class="explain__wrap">
								<p class="explain__place__text">東京都中野区中野４丁目１３ 中野四季の森公園<span class="explain__place__note">※申し込みは説明会で受付しています。</span></p>
								<p class="explain__map">マップを見る</p>
							</div>
						</section>
						<section class="event-day" data-aos="fade-up" data-aos-delay="1200" data-aos-easing="ease" data-aos-duration="800">
							<h3 class="event-day__ttl">イベント当日</h3>
							<h4 class="event-day__date">日時</h4>
							<p class="event-day__date__text">2019年10月13日(日) 11:00 ~ 17:00</p>
							<h4 class="event-day__place">場所</h4>
							<div class="event-day__wrap">
								<p class="event-day__place__text">千葉県君津市大鷲新田４－４</p>
								<p class="event-day__map">マップを見る</p>
							</div>
						</section>
					</div>
				</div>

				<section class="festival">
					<h2 class="festival__ttl" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">訳あり野菜フェス<span class="festival__small-text">も</span><br>同時開催予定！</h2>
					<p class="festival__desc" data-aos="fade-up" data-aos-delay="600" data-aos-easing="ease" data-aos-duration="800">訳あり野菜フェスとは、全国各地のレストランシェフが一堂に集まり訳あり野菜だけを使った料理を提供するイベントのことです</p>
					<div class="festival__detail">
						<div class="festival__container">
							<div class="festival__wrapper" data-aos="fade-right" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800">
								<div class="festival-wrap">
									<h3 class="festival__date">開催期間</h3>
									<p class="festival__date__text">2019年 9/28(土) 〜 9/29(日)</p>
								</div>
								<div class="festival-wrap">
									<h3 class="festival__place">場所</h3>
									<p class="festival__place__text">ジュニア農業体験と同所</p>
								</div>
							</div>
							<p class="festival__image" data-aos="fade-left" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="800"><img src="<?= IMG_FES ?>festival_logo.svg" alt="訳あり野菜フェス"></p>
						</div>
					</div>
					<p class="junior-check" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="800"><a class="junior-check__link" href="festival.php">詳しく見る</a></p>
				</section>
			</section>
		</div><!-- main-container -->
	</main><!-- main -->

	

	<?php include_once "include_php/lp_footer.php"; ?>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init(); </script>
</body>
</html>