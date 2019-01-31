<?php
	require_once "include_php/main.php"; 
	require('include_php/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."yasai_meta.php"; ?> 
	<title><?= SITE_NAME ?> | トップページ</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>yasai/index_style.css" rel="stylesheet">
	
</head>
<body>

	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>
	<div class="sp__bottom_menu none"></div>
	<main class="main">

		<div class="main-container">

			<section class="home-mainVisual">
				<h2 class="home-mainVisual__logo">すてないやさい</h2>
				<p class="home-mainVisual__text">- 訳あり野菜とレストランを繋ぐ -<br>新鮮な訳あり野菜を農家があなたのお店へお届けします。</p>
				<p class="check-btn"><a class="check-btn__link" href="about.php"><span class="check-btn__text">すてないやさいって？</span></a></p>
				<div class="home-mainVisual__circle-container">
					<div class="home-mainVisual__circle"></div>
					<div class="home-mainVisual__circle"></div>
					<div class="home-mainVisual__circle"></div>
				</div>
				<div class="home-mainVisual__squareRB"></div>
				<div class="home-mainVisual__squareLT"></div>
			</section>
			
			<div class="search-side">
				<div class="search-side__container">
					<div class="search-side__ttl-wrapper">
						<p class="search-side__ttl">野菜を探す<span class="search-side__en">Search</span></p>
					</div>
					<form class="search-side__form" action="result.php" method="GET">
						<div class="search-side__pref-select__wrapper">
							<select name="pref-select" class="search-side__pref-select">
								<option value="">仕入れ先を選択</option>
								<optgroup label="北海道・東北">
									<?php foreach ($pref[0] as $key => $prefData) : ?>
										<option value="<?= $prefData ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>

								<optgroup label="関東">
									<?php foreach ($pref[1] as $key => $prefData) : ?>
										<option value="<?= $key ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>

								<optgroup label="北陸">
									<?php foreach ($pref[2] as $key => $prefData) : ?>
										<option value="<?= $key ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>
								<optgroup label="東海">
									<?php foreach ($pref[3] as $key => $prefData) : ?>
										<option value="<?= $key ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>
								<optgroup label="関西">
									<?php foreach ($pref[4] as $key => $prefData) : ?>
										<option value="<?= $key ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>
								<optgroup label="中国">
									<?php foreach ($pref[5] as $key => $prefData) : ?>
										<option value="<?= $key ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>
								<optgroup label="四国">
									<?php foreach ($pref[6] as $key => $prefData) : ?>
										<option value="<?= $key ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>
								<optgroup label="九州">
									<?php foreach ($pref[7] as $key => $prefData) : ?>
										<option value="<?= $key ?>"><?= $prefData ?></option>
									<?php endforeach ?>
								</optgroup>
							</select>
						</div>
						<div class="search-side__vegetable-select__wrapper">
							<select name="vege_name" class="search-side__vegetable-select">
								<option value="0">野菜を選択</option>
								<?php foreach ($vegetable[0][0] as $vegeData) : ?>
									<option value="<?= $vegeData["name"] ?>"><?= $vegeData["name"] ?></option>
								<?php endforeach ?>
							</select>
						</div>	
						
						<div class="search-side__keyword-submit">
							<p class="search-side__keyword"><input name="keyword" class="search-side__keywordBox" type="text" placeholder="キーワードを入力"></p>
							<button class="search-side__submit" type="submit">検索</button>
						</div>
					</form>
				</div>
			</div>
			<section class="news-mini none">
				<div class="news-mini__container">
					<h2 class="news-mini__ttl">お知らせ</h2>
					<p class="news-mini__text"><a class="news-mini__link" href="#"><span class="news-mini__time">2019.04.01</span>訳あり野菜フェス開催決定！</a> </p>
				</div>
			</section>

			<section class="home__bak home-daily scroll_hide1">
				<h2 class="home-heading"><span class="home-heading__sub-ttl">- 日替わりでおくる、オススメ野菜 -</span>毎日野菜</h2>
				<div class="home-daily__items-wrapper">
					<!-- 野菜(商品)のデータをforeachで挿入 -->
					<?php
						$daily = $db->query('SELECT * FROM yasai_result WHERE daily=1 LIMIT 0,4');
						while($daily_item = $daily->fetch()): 
					?>
					<div class="item">
						<a class="item__link" href="product.php?id=<?= $daily_item['id']; ?>">
							<figure class="item__image"><img src="<?= IMG_PHOTO . $daily_item["img"] ?>" alt="<?= $daily_item["img_alt"] ?>"></figure>
							<section class="item__product">
								<h3 class="item__name"><?= $daily_item['name'] ?></h3>
								<p class="item__farmer"><?= $daily_item["farmer"] ?><span class="item__pref">[<?= $daily_item["pref"] ?>]</span></p>
								<p class="item__price">¥&nbsp;<?= $daily_item["price"] ?><span class="item__tax">(税込)</span></p>
								<div class="item__popular"><img src="<?= IMG_GLOBAL . $daily_item["star"] ?>" alt=""></div>
							</section>
						</a>
					</div>
					<?php endwhile; ?>
				</div>
				<p class="check-btn"><a class="check-btn__link" href="result.php"><span class="check-btn__text">野菜を見る</span></a></p>
			</section>

			<section class="home__bak home-goodValue scroll_hide1">
				<div class="home-goodValue__container">
					<div class="home-goodValue__ttl-wrapper">
						<?php foreach ($good_valueTtl as $ttl_data) : ?>
							<h2 class="home-goodValue__ttl"><span class="home-goodValue__sub-ttl"><?= $ttl_data["sub_ttl"] ?></span>「<span class="accent_color"><?= $ttl_data["ttl"] ?></span>」</h2>
							<figure class="home-goodValue__image"><img src="<?= $ttl_data["figure"] ?>" alt="<?= $ttl_data["figure_alt"] ?>"></figure>
							<p class="home-goodValue__desc"><?= $ttl_data["desc"] ?></p>
						<?php endforeach; ?>
					</div>

					<div class="home-goodValue__items-wrapper">
							<?php
								// $tomatos = $db->query('SELECT * FROM tomato');
								// while($tomato = $tomatos->fetch()): 
								$tomatos = $db->query('SELECT * FROM yasai_result WHERE name LIKE "%トマト%" LIMIT 0,3');
								while($tomato = $tomatos->fetch()): 
							?>
							<div class="item">
								<a class="item__link" href="product.php?id=<?= $tomato['id']; ?>">
									<figure class="item__image"><img src="<?= IMG_PHOTO . $tomato["img"] ?>" alt="<?= $tomato["img_alt"] ?>"></figure>
									<section class="item__product">
										<h3 class="item__name"><?= $tomato["name"] ?></h3>
										<p class="item__farmer"><?= $tomato["farmer"] ?><span class="item__pref">[<?= $tomato["pref"] ?>]</span></p>
										<p class="item__price">¥&nbsp;<?= $tomato["price"] ?><span class="item__tax">(税込)</span></p>
										<div class="item__popular"><img src="<?= IMG_GLOBAL . $tomato["star"] ?>" alt=""></div>
									</section>
								</a>
							</div>
							<?php endwhile; ?>
						
					</div>
				</div>
				<p class="check-btn"><a class="check-btn__link" href="result.php"><span class="check-btn__text">トマトをチェック</span></a></p>
			</section>

			<div class="season_trend">
				<section class="home-season scroll_hide3">
					<h2 class="home-heading"><span class="home-heading__sub-ttl">- 季節で変わる美味しい野菜 -</span>旬な野菜特集！</h2>
					<div class="home-season__items-wrapper">
							<?php
								$season = $db->query('SELECT * FROM yasai_result WHERE season=1');
								while($season_item = $season->fetch()): 
							?>
							<div class="item">
								<a href="product.php?id=<?= $season_item['id']; ?>">
									<figure class="item__image"><img src="<?= IMG_PHOTO . $season_item["img"] ?>" alt="<?= $season_item["img_alt"] ?>"></figure>
									<section class="item__product">
										<h3 class="item__name"><?= $season_item["name"] ?></h3>
										<p class="item__farmer"><?= $season_item["farmer"] ?><span class="item__pref">[<?= $season_item["pref"] ?>]</span></p>
										<p class="item__price">¥&nbsp;<?= $season_item["price"] ?><span class="item__tax">(税込)</span></p>
										<div class="item__popular"><img src="<?= IMG_GLOBAL . $season_item["star"] ?>" alt=""></div>
									</section>
								</a>
							</div>
							<?php endwhile; ?>
					</div>
					<p class="check-btn"><a class="check-btn__link" href="result.php"><span class="check-btn__text">野菜を見る</span></a></p>

				</section>

				<section class="trend scroll_hide2">
					<?php
						$trend = $db->query('SELECT * FROM yasai_menu WHERE trend=1');
						while($trend_item = $trend->fetch()): 
					?>
						<h2 class="home-heading"><span class="home-heading__sub-ttl">- 今、話題の料理 -</span>トレンド</h2>
						<figure class="trend__image"><img src="<?= IMG_PHOTO . $trend_item["figure"] ?>" alt="<?= $trend_item["figure_alt"] ?>"></figure>
						<section class="trend-menu">
							<h3 class="trend-menu__name"><?= $trend_item["name"] ?></h3>
							<p class="trend-menu__text"><?= $trend_item["text"] ?></p>
						</section>
					<?php endwhile; ?>
				</section>
			</div>

			<section class="icon-search">
				<h2 class="icon-search__ttl scroll_hide1">野菜を選択して探す</h2>
				<div class="icon-search__list scroll_hide4">
					
					<?php foreach ($vegetable[0][0] as $vegetable) : ?>
						<a class="icon-search__item" href="#">
							<div class="icon-search__icon">
								<div class="icon-circle__base"><img src="<?= IMG_VEGETABLE . $vegetable["class"] ?>.svg" alt=""></div>
								<p class="icon-search__name"><?= $vegetable["name"] ?></p>
							</div>
						</a>
					<?php endforeach ?>
					
				</div>
			</section>

			<section class="home__bak recommend-menu scroll_hide1">
				<h2 class="recommend-menu__ttl"><span class="recommend-menu__sub-ttl">旬な野菜を使った</span>おすすめメニュー</h2>

				<div class="western-japanese__wrapper">
					<section class="western-style">
						<h3 class="western-style__ttl">洋風</h3>
						
						<?php
							$menu = $db->query('SELECT * FROM yasai_menu LIMIT 0, 2');
							while($menu_item = $menu->fetch()): 
						?>
							<div class="menu-item__wrapper">
								<figure class="menu-item__image"><img src="<?= IMG_PHOTO . $menu_item["figure"] ?>" alt="<?= $menu_item["figure_alt"] ?>"></figure>
								<section class="menu-item">
									<h4 class="menu-item__ttl"><?= $menu_item["name"] ?></h4>
									<p class="menu-item__text"><?= $menu_item["text"] ?></p>
								</section>
							</div>
						<?php endwhile; ?>
					</section>

					<section class="japanese-style">
						<h3 class="japanese-style__ttl">和風</h3>
						<?php 
							$menu = $db->query('SELECT * FROM yasai_menu LIMIT 2, 2');
							while($menu_item = $menu->fetch()):  
						?>
							<div class="menu-item__wrapper">
								<figure class="menu-item__image"><img src="<?= IMG_PHOTO . $menu_item["figure"] ?>" alt="<?= $menu_item["figure_alt"] ?>"></figure>
								<section class="menu-item">
									<h4 class="menu-item__ttl"><?= $menu_item["name"] ?></h4>
									<p class="menu-item__text"><?= $menu_item["text"] ?></p>
								</section>
							</div>
						<?php endwhile; ?>
					</section>
				</div>
			</section>

			<div class="news_event">
				<section class="home-event scroll_hide3">
					<h2 class="home-event__ttl">注目イベント<span class="home-event__en">event</span></h2>
					<?php 
						$highlights = $db->query('SELECT * FROM yasai_news WHERE highlight=1');
						while($highlight = $highlights->fetch()):  
					?>
						<a class="highlight-event" href="#">
							<figure class="home-event__image"><img src="<?= IMG_PHOTO . $highlight["figure"] ?>" alt="<?= $highlight["figure_alt"] ?>"></figure>
							<section class="event-content">
								<h3 class="event-content__ttl"><?= $highlight["name"] ?><span class="event-content__place">(<?= $highlight["place"] ?>)</span></h3>
								<p class="event-content__time">開催日時 ：
									<time datetime="<?= $highlight["date_time"] ?>"><?= $highlight["time"] ?></time>
								</p>
								<p class="event-content__text"><?= $highlight["text"] ?></p>
							</section>
						</a>
					<?php endwhile; ?>
					<p class="check-btn"><a class="check-btn__link" href="event.php"><span class="check-btn__text">イベント一覧を見る</span></a></p>
				</section>
				<section class="home-news scroll_hide2">
					<h2 class="home-news__ttl">お知らせ<span class="home-news__en">news</span></h2>
					<ol class="news-list">
						<?php 
							$news = $db->query('SELECT * FROM yasai_news LIMIT 0,3');
							while($news_item = $news->fetch()):  
						?>
							<li class="news-list__item"><a class="news-list__link" href="<?= $news_item["href"] ?>">
								<span class="news-list__time"><time datetime="<?= $news_item["date_time"] ?>"></time><?= $news_item["time"] ?></span>
								<?= $news_item["text"] ?>
							</a></li>
						<?php endwhile; ?>
					</ol>
					<p class="check-btn"><a class="check-btn__link" href="#"><span class="check-btn__text">お知らせ一覧を見る</span></a></p>
				</section>
			</div>
		</div>
	</main>
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js">
</script>
<script>
	var home_daily = document.getElementsByClassName("home-daily")[0];
	var home_goodValue = document.getElementsByClassName("home-goodValue")[0];
	var home_season = document.getElementsByClassName("home-season")[0];
	var trend = document.getElementsByClassName("trend")[0];
	var icon_search = document.getElementsByClassName("icon-search__list")[0];
	var icon_search__ttl = document.getElementsByClassName("icon-search__ttl")[0];
	var recommend_menu = document.getElementsByClassName("recommend-menu")[0];
	var home_event = document.getElementsByClassName("home-event")[0];
	var home_news = document.getElementsByClassName("home-news")[0];
	
	console.dir(home_daily.offsetTop);

	document.onscroll = function() {
		menu_view();
		var scrollTop = document.documentElement.scrollTop;
		if(scrollTop >= 350) {
			home_daily.classList.add("scroll_view1");
		} 
		if(scrollTop >= 882) {
			home_goodValue.classList.add("scroll_view1");
		}
		if(scrollTop >= 1412) {
			home_season.classList.add("scroll_view3");
			trend.classList.add("scroll_view2");
		}
		if(scrollTop >= 1954) {
			icon_search.classList.add("scroll_view4");
			icon_search__ttl.classList.add("scroll_view1_slow");
			
		}
		if(scrollTop >= 2332) {
			recommend_menu.classList.add("scroll_view1");
		}
		if(scrollTop >= 3150) {
			home_event.classList.add("scroll_view3");
			home_news.classList.add("scroll_view2");
		}
	}
</script>
</body>
</html>