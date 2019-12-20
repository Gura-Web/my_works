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
	<link href="<?= CSS_PATH ?>yasai/event_style.css" rel="stylesheet">
	
</head>
<body>

	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>

	<main class="main">
		
		<div class="main-container">
			<!-- パンくずリスト -->
			<ul class="breadcrumb">
				<li class="breadcrumb__home"><a href="index.php">ホーム</a></li>
				<li class="breadcrumb__item"><a href="result.php">イベント</a></li>
			</ul>
			<section class="event-list">
				<div class="event-list__container">
					<div class="event-list__wrapper">
						<h2 class="event-list__ttl scroll_hide1"><span class="event-list__en">- Events -</span>イベント一覧</h2>
						<p class="event-list__text scroll_hide1">〜 体験・食フェス・農業など幅広いイベントが盛りだくさん 〜</p>
						<p class="event-list__illust scroll_hide1"><img src="<?= IMG_GLOBAL ?>event_ttl.svg" alt="EVENTS"></p>
						<p class="event-list__desc scroll_hide1">すてないやさいでは食フェスから農業まで幅広いイベントを随時開催しております。是非、気になるイベントがあれば参加してみてください。</p>
						<p class="event-list__scroll"><a href="#event-items__wrapper">SCROLL</a></p>
					</div>
				</div><!-- event-list__container -->
				<div id="event-items__wrapper" class="event-items__wrapper">
					<section class="event-items__wrap">
						<h3 class="event-items__wrap__month scroll_hide1">9月</h3>
						<?php foreach ($event_dataSep as $data) : ?>
						<a class="event-items__link" href="<?= $data["link"] ?>">
							<section class="event-item scroll_hide1">
								<div class="event-item__wrap">
									<h4 class="event-item__heading"><?= $data["name"] ?></h4>
									<p class="event-item__desc"><?= $data["text"] ?></p>
									<p class="event-item__place"><?= $data["place"] ?></p>
									<p class="event-item__date"><?= $data["date"] ?></p>
								</div>
								<figure class="event-item__image"><img src="<?= $data["image"] ?>" alt="<?= $data["image_alt"] ?>"></figure>
							</section>
						</a>
						<?php endforeach ?>
						
					</section>

					<section class="event-items__wrap">
						<h3 class="event-items__wrap__month scroll_hide1">6月</h3>
						<?php foreach ($event_dataJune as $data) : ?>
						<a class="event-items__link" href="<?= $data["link"] ?>">
							<section class="event-item scroll_hide1">
								<div class="event-item__wrap">
									<h4 class="event-item__heading"><?= $data["name"] ?></h4>
									<p class="event-item__desc"><?= $data["text"] ?></p>
									<p class="event-item__place"><?= $data["place"] ?></p>
									<p class="event-item__date"><?= $data["date"] ?></p>
								</div>
								<figure class="event-item__image"><img src="<?= $data["image"] ?>" alt="<?= $data["image_alt"] ?>"></figure>
							</section>
						</a>
						<?php endforeach ?>
					</section>
				</div>
				
			</section><!-- event-list -->
		</div><!-- main-container -->
	</main>

	
	<!-- footerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js">
</script>
<script>
	var event_ttl = document.getElementsByClassName("event-list__ttl")[0];
	var event_txt = document.getElementsByClassName("event-list__text")[0];
	var event_illust = document.getElementsByClassName("event-list__illust")[0];
	var event_desc = document.getElementsByClassName("event-list__desc")[0];
	var event_month = document.getElementsByClassName("event-items__wrap__month");
	var event_items = document.getElementsByClassName("event-item");
	
	
	window.onload = function() {
		event_ttl.classList.add("scroll_view1");
		event_txt.classList.add("scroll_view1_slow");
		
	}
	document.onscroll = function() {
		menu_view();
		var scrollTop = document.documentElement.scrollTop;
		if(scrollTop >= 70) {
			event_illust.classList.add("scroll_view1");
		} 
		if(scrollTop >= 270) {
			event_desc.classList.add("scroll_view1");
		}
		if(scrollTop >= 760) {
			event_month[0].classList.add("scroll_view1");
		}
		if(scrollTop >= 800) {
			event_items[0].classList.add("scroll_view1");
		}
		if(scrollTop >= 1000) {
			event_items[1].classList.add("scroll_view1");
		}
		if(scrollTop >= 1470) {
			event_month[1].classList.add("scroll_view1");
		}
		if(scrollTop >= 1550) {
			event_items[2].classList.add("scroll_view1");
		}
		
	}
</script>
</body>
</html>