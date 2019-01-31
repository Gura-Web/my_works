<?php

	require_once "include_php/main.php"; 
	require_once "include_php/dbconnect.php"; 
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."yasai_meta.php"; ?> 
	<title><?= SITE_NAME ?> | トップページ</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>yasai/product_style.css" rel="stylesheet">
	
</head>
<body>

	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>

	<main class="main">
		<div class="main-container">
			<?php

			$id = $_REQUEST['id'];
			if(!isset($id)) { // ?id=""がurlになかったら、とりあえず３番の商品を表示
				$id = 3;
			}
			if(!is_numeric($id) || $id <= 0) {
				print('１以上の数字で指定してください');
				exit();
			}

			$products = $db->prepare('SELECT * FROM yasai_result WHERE id=?');
			$products->execute(array($id));
			$product = $products->fetch();
			?>
			<!-- パンくずリスト -->
			<ul class="breadcrumb">
				<li class="breadcrumb__home"><a href="index.php">ホーム</a></li>
				<li class="breadcrumb__item"><a href="result.php">検索結果</a></li>
				<li class="breadcrumb__item"><a href="result.php"><?= $product["name"] ?></a></li>
			</ul>
			<div class="main-container__content">
			
				
				<section class="product">
					<h2 class="product__ttl"><span class="product__en scroll_hide1">Product</span><span class="product__ttl__text scroll_hide1">商品の紹介</span></h2>
					<div class="product__container">
						<div class="product__images scroll_hide3">
							<figure class="product__image"><img src=<?= IMG_PHOTO . "richness_tomato_big.jpg" ?> alt="新鮮そうなトマト"></figure>
							<ul class="product__image-smalls">
								<li class="product__image__item"><img src="<?= IMG_PHOTO . "pride_tomato_small.jpg" ?>" alt="新鮮そうなトマト"></li>	
								<li class="product__image__item"><img src="<?= IMG_PHOTO . "fresh_tomato_small.jpg" ?>" alt="新鮮そうな大きいトマト"></li>	
								<li class="product__image__item"><img src="<?= IMG_PHOTO . "richness_tomato_small.jpg" ?>" alt="新鮮そうなトマト"></li>	
							</ul>
						</div>
						<section class="product__item scroll_hide2">
							<h3 class="product__name"><?= $product['name'] ?></h3>
							<p class="product__star"><img src="<?= IMG_GLOBAL . $product['star'] ?>" alt=""></p>
							<p class="product__price">¥ <?= $product['price'] ?><span class="product__tax">(税込)</span></p>
							<div class="product__btn">
								<p class="product__btn__buyBtn"><a href="buy_form.php">購入する</a></p>
								<p class="product__btn__regularlyBtn"><a href="#">定期購入</a></p>
							</div>
							<p class="product__shipment">発送可能日 : <span class="product__shipment-date">2019/2/19</span><span class="product__shipment-thin">から発送が可能です。</span></p>
							<p class="product__text">丹精込めて作った野菜です。<br>
								野菜に切れ目が多々ありますが、味は美味しく食べごろです。<br>
								とても新鮮なので野菜ジュースやサラダにぴったりです。
							</p>
						</section>
					</div>
				</section>
				<div class="farmer-costomer">
					<section class="farmer-detail scroll_hide3">
						<h3 class="farmer-detail__ttl">農家</h3>
						<section class="farmer-detail__wrapper">
							<figure class="farmer-detail__image"><img src="<?= IMG_PHOTO . 'couple_farmer_hand.jpg' ?>" alt="手をあげて笑っている若い夫婦"></figure>
							<div class="farmer-detail__wrap">
								<h4 class="farmer-detail__name"><?= $product["farmer"] ?></h4>
								<p class="farmer-detail__farmer-pref">大阪府泉南市</p>
								<p class="farmer-detail__favoriteBtn"><a href="#">お気に入り</a></p>
							</div>
						</section>
						<p class="farmer-detail__text">私たちの農園は大阪府泉南市にあります。<br>野菜を通じて人々の健康を良くしたいを理念に丹精込めて野菜を作っています。</p>
						<p class="check-btn__product"><a class="check-btn__product__link" href="#"><span class="check-btn__product__text">農家を詳しく見る</span></a></p>
					</section>

					<section class="customer-review scroll_hide2">
						<h3 class="customer-review__ttl">カスタマーレビュー</h3>
						<section class="customer-review__item">
							<?php foreach($customer as $data) : ?>
								<div class="customer-review__wrapper">
									<div class="customer-review__wrap">
										<h4 class="customer-review__name"><?= $data["name"] ?></h4>
										<p class="customer-review__star"><img src="<?= $data["star"] ?>" alt=""></p>
									</div>
									<p class="customer-review__image"><img src="<?= $data["img"] ?>" alt=""></p>
									
								</div>
								<p class="customer-review__time"><?= $data["time"] ?></p>
								<p class="customer-review__text"><?= $data["text"] ?></p>
							<?php endforeach ?>			
							<p class="check-btn__product"><a class="check-btn__product__link" href="#"><span class="check-btn__product__text">さらにレビューを見る</span></a></p>
						</section>

					</section>
				</div>
			</div>
		</div><!-- main-container -->
	</main>

	
	<!-- footerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js">
</script>
<script>
	var product_ttl = document.getElementsByClassName("product__ttl__text")[0];
	var product_ttl_en = document.getElementsByClassName("product__en")[0];
	window.onload = function() {
			product_ttl.classList.add("scroll_view1");
			product_ttl_en.classList.add("scroll_view1");
	}


	var product_images = document.getElementsByClassName("product__images")[0];
	var product_item = document.getElementsByClassName("product__item")[0];
	var farmer_detail = document.getElementsByClassName("farmer-detail")[0];
	var customer_review = document.getElementsByClassName("customer-review")[0];
	
	document.onscroll = function() {
		menu_view();
		var scrollTop = document.documentElement.scrollTop;
		if(scrollTop >= 110) {
			product_images.classList.add("scroll_view3");
			product_item.classList.add("scroll_view2");
		}
		if(scrollTop >= 545) {
			farmer_detail.classList.add("scroll_view3");
			customer_review.classList.add("scroll_view2");
		}
	}


	// slide
	var big_imgs = ["pride_tomato_big.jpg", 
					"fresh_tomato_big.jpg",
					"richness_tomato_big.jpg"]

	var main_img = document.getElementsByClassName("product__image")[0];
	var mini_img = document.getElementsByClassName("product__image__item");
	mini_img[2].classList.add("product__image__opacity1"); // 初期状態
	for (var i = 0; i < mini_img.length; i++) {
		mini_img[i].onclick = function() {
			var img_src = this.children[0].src.replace(/small/, "big") // クリックした画像ファイル名のsmallをbigに置換
			main_img.children[0].src = img_src; // それを代入
			
			// current_image
			for (var i = 0; i < mini_img.length; i++) {
				mini_img[i].classList.remove("product__image__opacity1");
				this.classList.add("product__image__opacity1");
			}
			console.log(this);
		}
	}
	
</script>
</body>
</html> 