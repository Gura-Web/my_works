<?php

	require_once "include_php/main.php"; 
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."yasai_meta.php"; ?> 
	<title><?= SITE_NAME ?> | トップページ</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>yasai/symbol_style.css" rel="stylesheet">
	
</head>
<body>

	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>

	<main class="main">
		
		<div class="main-container">
			<!-- パンくずリスト -->
			<ul class="breadcrumb">
				<li class="breadcrumb__home"><a href="index.php">ホーム</a></li>
				<li class="breadcrumb__item"><a href="result.php">地域貢献シンボル</a></li>
			</ul>
			<section class="symbol">
				<div class="symbol__container">
					<h2 class="symbol__ttl scroll_hide1"><span class="symbol__sub-ttl">- 地元に貢献した証！ -</span>地域貢献シンボル</h2>
					<section class="about-symbol">
						<div class="about-symbol__wrapper scroll_hide2">
							<h3 class="about-symbol__heading">地域貢献シンボルって？<span class="about-symbol__heading__en">- What is symbol? -</span></h3>
							<p class="about-symbol__desc">地元の野菜を多く出荷している農家、または地元の野菜を多く購入しているレストランに発行されるシンボルです。<br>
							シンボルを持つことで地元の訳あり野菜消費に貢献していることを証明します。</p>
						</div>
						<p class="about-symbol__image scroll_hide2"><img src="<?= IMG_GLOBAL ?>symbol.svg" alt="地域貢献シンボル"></p>
					</section>
					<ul class="symbol__images scroll_hide1">
						<li><img src="<?= IMG_PHOTO ?>tomato_farmer.jpg" alt="トマトを収穫している農家"></li>
						<li><img src="<?= IMG_PHOTO ?>local_road.jpg" alt="田舎の道路と自然"></li>
						<li><img src="<?= IMG_PHOTO ?>smile_farmer.jpg" alt="野菜を収穫して笑顔な農家"></li>
						<li><img src="<?= IMG_PHOTO ?>farm.jpg" alt="畑"></li>
					</ul>
				</div>
			</section>

			<section class="symbol-merit">
				<div class="symbol-merit__container">
					<h3 class="symbol-merit__ttl scroll_hide1"><span class="symbol-merit__sub-ttl">- シンボルが持つ嬉しい効果！ -</span>シンボルのメリット</h3>
					<div class="symbol-merit__wrapper scroll_hide1">
						<section class="merit-item">
							<h4 class="merit-item__ttl"><span class="merit-item__number">01</span><span class="merit-item__ttl-text">環境に配慮している<br>ことの証明</span></h4>
							<p class="merit-item__text">訳あり野菜を捨てずにメニューとして提供しており、食品ロス削減に貢献していることを証明します。</p>
						</section>
						<section class="merit-item">
							<h4 class="merit-item__ttl"><span class="merit-item__number">02</span><span class="merit-item__ttl-text">地元愛をアピール</span></h4>
							<p class="merit-item__text">地元の訳あり野菜を多く購入して、消費に貢献していること証明。地元経済と廃棄問題に貢献していることをアピールできます。</p>
						</section>
						<section class="merit-item">
							<h4 class="merit-item__ttl"><span class="merit-item__number">03</span><span class="merit-item__ttl-text">地元産だとすぐに分かる</span></h4>
							<p class="merit-item__text">シンボルは仕入先が地元産であることがすぐに分かるので、安心して食事をしていただけます。</p>
						</section>
					</div>
					<p class="symbol-merit__supplement scroll_hide4"><img src="<?= IMG_GLOBAL ?>tomatoman.svg" alt="農家は多くの野菜を出荷したという実績をアピールできます。"></p>
				</div>
			</section>
				

			<section class="get-symbol">
				<div class="get-symbol__container">
					<h3 class="get-symbol__ttl scroll_hide1"><span class="get-symbol__sub-ttl">- 過去に受賞された方々 -</span>シンボル受賞者</h3>
					<div class="get-symbol__wrapper">
						<section class="symbol-restaurant scroll_hide3">
							<h4 class="symbol-restaurant__ttl">レストラン受賞店</h4>
							<section class="get-person">
								<div class="get-person__wrap">
									<h5 class="get-person__name">宮崎居酒屋<span class="get-person__pref"> [大阪府]</span></h5>
									<p class="get-person__manager">代表：宮崎 大地 様</p>
								</div>
								<figure class="get-person__image"><img src="<?= IMG_PHOTO ?>miyazaki_restaurant.png" alt="宮崎居酒屋の店主"></figure>
							</section>
							<section class="get-person">
								<div class="get-person__wrap">
									<h5 class="get-person__name">坂本レストラン<span class="get-person__pref"> [兵庫県]</span></h5>
									<p class="get-person__manager">代表：坂本 健太郎 様</p>
								</div>
								<figure class="get-person__image"><img src="<?= IMG_PHOTO ?>sakamoto_restaurant.png" alt="坂本レストランの店主"></figure>
							</section>
							<section class="get-person">
								<div class="get-person__wrap">
									<h5 class="get-person__name">山田レストラン<span class="get-person__pref"> [長野県]</span></h5>
									<p class="get-person__manager">代表：山田 麗華 様様</p>
								</div>
								<figure class="get-person__image"><img src="<?= IMG_PHOTO ?>yamada_restaurant.png" alt="山田レストランの店主"></figure>
							</section>
						</section>

						<section class="symbol-farmer scroll_hide2">
							<h4 class="symbol-farmer__ttl">農家受賞者</h4>
							<section class="get-person">
								<div class="get-person__wrap">
									<h5 class="get-person__name">大友ファーム<span class="get-person__pref"> [大阪府]</span></h5>
									<p class="get-person__manager">代表：大友 正人 様</p>
								</div>
								<figure class="get-person__image"><img src="<?= IMG_PHOTO ?>otomo_farm.png" alt="野菜を収穫して笑顔な農家"></figure>
							</section>
							<section class="get-person">
								<div class="get-person__wrap">
									<h5 class="get-person__name">松本農園<span class="get-person__pref"> [兵庫県]</span></h5>
									<p class="get-person__manager">代表：松本夫婦 様</p>
								</div>
								<figure class="get-person__image"><img src="<?= IMG_PHOTO ?>matumoto_farm.png" alt="夫婦で収穫しているおじいさんとおばあさん"></figure>
							</section>
							<section class="get-person">
								<div class="get-person__wrap">
									<h5 class="get-person__name">田中農場<span class="get-person__pref"> [長野県]</span></h5>
									<p class="get-person__manager">代表：田中 健太郎 様</p>
								</div>
								<figure class="get-person__image"><img src="<?= IMG_PHOTO ?>tanaka_farm.png" alt="宮崎居酒屋の店主"></figure>
							</section>
						</section>
					</div>
					<p class="check-btn scroll_hide1"><a class="check-btn__link" href="#"><span class="check-btn__text">さらにレビューを見る</span></a></p>
				</div>
			</section>
		</div><!-- main-container -->
	</main>

	
	<!-- footerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js">
</script>
<script>
	var symbol_ttl = document.getElementsByClassName("symbol__ttl")[0];
	var about_symbol_wrapper = document.getElementsByClassName("about-symbol__wrapper")[0];
	var about_symbol_image = document.getElementsByClassName("about-symbol__image")[0];
	var symbol_images = document.getElementsByClassName("symbol__images")[0];
	var merit_ttl = document.getElementsByClassName("symbol-merit__ttl")[0];
	var merit_wrapper = document.getElementsByClassName("symbol-merit__wrapper")[0];
	var merit_supplement = document.getElementsByClassName("symbol-merit__supplement")[0];
	var get_symbol_ttl = document.getElementsByClassName("get-symbol__ttl")[0];
	var restaurant = document.getElementsByClassName("symbol-restaurant")[0];
	var farmer = document.getElementsByClassName("symbol-farmer")[0];
	var check_btn = document.getElementsByClassName("check-btn")[0];
	
	
	document.onscroll = function() {
		menu_view();
		var scrollTop = document.documentElement.scrollTop;
		if(scrollTop >= 0) { symbol_ttl.classList.add("scroll_view1"); }
		if(scrollTop >= 158) { about_symbol_image.classList.add("scroll_view2"); about_symbol_wrapper.classList.add("scroll_view3"); }
		if(scrollTop >= 380) { symbol_images.classList.add("scroll_view1"); }
		if(scrollTop >= 770) { merit_ttl.classList.add("scroll_view1"); }
		if(scrollTop >= 990) { merit_wrapper.classList.add("scroll_view1"); }
		if(scrollTop >= 1200) { merit_supplement.classList.add("scroll_view4"); }
		if(scrollTop >= 1844) { get_symbol_ttl.classList.add("scroll_view1"); }
		if(scrollTop >= 2100) { restaurant.classList.add("scroll_view3"); farmer.classList.add("scroll_view2"); }
		if(scrollTop >= 2500) { check_btn.classList.add("scroll_view1"); }
	}

	
</script>
</body>
</html>