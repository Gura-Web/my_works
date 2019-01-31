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
	<link href="<?= CSS_PATH ?>yasai/new-farmer_style.css" rel="stylesheet">
	
</head>
<body>

	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>

	<main class="main">
		<div class="main-container">
			<!-- パンくずリスト -->
			<ul class="breadcrumb">
				<li class="breadcrumb__home"><a href="index.php">ホーム</a></li>
				<li class="breadcrumb__item"><a href="result.php">新人の野菜</a></li>
			</ul>

			<div class="main-column">
				<!-- 検索バー -->
				<?php require_once PHP_PATH."search_leftBar.php"; ?>
			<section class="new-farmer scroll_hide3">
				<div class="new-farmer__container">
					<div class="new-farmer__ttl-wrapper">
						<h2 class="new-farmer__ttl"><img src="<?= IMG_GLOBAL ?>new_farmer_ttl.svg" alt="新人の野菜"></h2>
						<p class="new-farmer__desc">新人の野菜とは新しく農家として就農した３年未満の農家の野菜を掲載するコーナーです。</p>
					</div>
					<section class="new-farmer__highlight">
						<h3 class="new-farmer__highlight__ttl">評価の高い新人農家</h3>
						<section class="farmer-one scroll_hide1">
							<div class="farmer-one__wrapper">
								<figure class="farmer-one__image"><img src="<?= IMG_PHOTO ?>tanaka_farmer.jpg" alt="笑顔の田中夫婦"></figure>
								<h4 class="farmer-one__name"><span class="farmer-one__carrier">農家歴1年目</span>田中夫婦</h4>
							</div>
							<div class="items-wrapper">
								<div class="item">
									<a class="item__link" href="product.php?id=1">
										<figure class="item__image"><img src="<?= IMG_PHOTO ?>richness_tomato.jpg" alt="新鮮そうなトマト"></figure>
										<section class="item__product">
											<h5 class="item__name">濃厚トマト<span class="item__weight"> (3kg)</span></h5>
											<p class="item__farmer">田中農場<span class="item__pref">[大阪府]</span></p>
											<p class="item__price">¥&nbsp;1000<span class="item__tax">(税込)</span></p>
											<div class="item__popular"><img src="<?= IMG_GLOBAL ?>four_star_i.svg" alt=""></div>
										</section>
									</a>
								</div>
								<div class="item">
									<a class="item__link" href="product.php?id=1">
										<figure class="item__image"><img src="<?= IMG_PHOTO ?>richness_tomato.jpg" alt="新鮮そうな大きいトマト"></figure>
										<section class="item__product">
											<h5 class="item__name">新鮮トマト<span class="item__weight"> (3kg)</span></h5>
											<p class="item__farmer">田中農場<span class="item__pref">[大阪府]</span></p>
											<p class="item__price">¥&nbsp;900<span class="item__tax">(税込)</span></p>
											<div class="item__popular"><img src="<?= IMG_GLOBAL ?>four_star_i.svg" alt=""></div>
										</section>
									</a>
								</div>
							</div><!-- items-wrapper -->
						</section>
						<section class="farmer-two scroll_hide1">
							<div class="farmer-two__wrapper">
								<figure class="farmer-two__image"><img src="<?= IMG_PHOTO ?>matsumoto_farmer.jpg" alt="野菜を収穫したばかりで笑顔の男性"></figure>
								<h4 class="farmer-two__name"><span class="farmer-two__carrier">農家歴2年目</span>松本さん</h4>
							</div>
							<div class="items-wrapper">
								<div class="item">
									<a class="item__link" href="product.php?id=47">
										<figure class="item__image"><img src="<?= IMG_PHOTO ?>many_potato.jpg" alt="沢山のじゃがいも"></figure>
										<section class="item__product">
											<h5 class="item__name">大量じゃがいも<span class="item__weight"> (3kg)</span></h5>
											<p class="item__farmer">松本農園<span class="item__pref">[長野県]</span></p>
											<p class="item__price">¥&nbsp;800<span class="item__tax">(税込)</span></p>
											<div class="item__popular"><img src="<?= IMG_GLOBAL ?>four_star_i.svg" alt=""></div>
										</section>
									</a>
								</div>
								<div class="item">
									<a class="item__link" href="product.php?id=47">
										<figure class="item__image"><img src="<?= IMG_PHOTO ?>many_potato.jpg" alt="沢山のじゃがいも"></figure>
										<section class="item__product">
											<h5 class="item__name">新鮮じゃがいも<span class="item__weight"> (3kg)</span></h5>
											<p class="item__farmer">松本農園<span class="item__pref">[長野県]</span></p>
											<p class="item__price">¥&nbsp;1000<span class="item__tax">(税込)</span></p>
											<div class="item__popular"><img src="<?= IMG_GLOBAL ?>four_star_i.svg" alt=""></div>
										</section>
									</a>
								</div>
							</div><!-- items-wrapper -->
							
						</section>
						<section class="farmer-three scroll_hide1">
							<div class="farmer-three__wrapper">
								<figure class="farmer-three__image"><img src="<?= IMG_PHOTO ?>yoshida_farmer.jpg" alt="野菜を収穫したばかりで笑顔の男性"></figure>
								<h4 class="farmer-three__name"><span class="farmer-two__carrier">農家歴3年目</span>吉田さん</h4>
							</div>
							
							<div class="items-wrapper">
								<div class="item">
									<a class="item__link" href="product.php?id=26">
										<figure class="item__image"><img src="<?= IMG_PHOTO ?>richness_pumpkin.jpg" alt="濃厚そうなかぼちゃ"></figure>
										<section class="item__product">
											<h5 class="item__name">濃厚かぼちゃ<span class="item__weight"> (3kg)</span></h5>
											<p class="item__farmer">吉田ファーム<span class="item__pref">[滋賀県]</span></p>
											<p class="item__price">¥&nbsp;800<span class="item__tax">(税込)</span></p>
											<div class="item__popular"><img src="<?= IMG_GLOBAL ?>four_star_i.svg" alt=""></div>
										</section>
									</a>
								</div>
								<div class="item">
									<a class="item__link" href="product.php?id=26">
										<figure class="item__image"><img src="<?= IMG_PHOTO ?>richness_pumpkin.jpg" alt="濃厚そうなかぼちゃ"></figure>
										<section class="item__product">
											<h5 class="item__name">濃厚かぼちゃ<span class="item__weight"> (3kg)</span></h5>
											<p class="item__farmer">吉田ファーム<span class="item__pref">[滋賀県]</span></p>
											<p class="item__price">¥&nbsp;1200<span class="item__tax">(税込)</span></p>
											<div class="item__popular"><img src="<?= IMG_GLOBAL ?>four_star_i.svg" alt=""></div>
										</section>
									</a>
								</div>
							</div><!-- items-wrapper -->
							
						</section>
					</section>
					

					
				</div>
			</section><!-- new-farmer -->
			</div>
		</div><!-- main-container -->
	</main>

	
	<!-- footerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js">
</script>
<script>
		var vege_icon = document.getElementsByClassName("vegetable-select__list");
		var vege_label = document.getElementsByClassName("vegetable-select__label");
		var check = document.getElementsByClassName("vege_checkbox");

		for(var i =0; i < vege_icon.length; i++) {			
			vege_icon[i].onclick = function() {
				this.classList.add("vege_bak");
			}
		}

		var farmer_one = document.getElementsByClassName("farmer-one")[0];
		var farmer_two = document.getElementsByClassName("farmer-two")[0];
		var farmer_three = document.getElementsByClassName("farmer-three")[0];
		document.onscroll = function() {
			menu_view();
			var scrollTop = document.documentElement.scrollTop;
			if(scrollTop >= 510) {
				farmer_one.classList.add("scroll_view1");
			} 
			if(scrollTop >= 900) {
				farmer_two.classList.add("scroll_view1");
			} 
			if(scrollTop >= 1170) {
				farmer_three.classList.add("scroll_view1");
			} 
		}

		var search_leftbar = document.getElementsByClassName("search-leftbar")[0];
		var new_farmer = document.getElementsByClassName("new-farmer")[0];

		window.onload = function() {
				search_leftbar.classList.add("scroll_view2");
				new_farmer.classList.add("scroll_view3");
		}
		</script>
</body>
</html>