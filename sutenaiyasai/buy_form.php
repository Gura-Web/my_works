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
	<link href="<?= CSS_PATH ?>yasai/buy_form.css" rel="stylesheet">
	
</head>
<body>

	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>

	<main class="main">
		<div class="main-container">
			<!-- パンくずリスト -->
			<ul class="breadcrumb">
				<li class="breadcrumb__home"><a href="index.php">ホーム</a></li>
				<li class="breadcrumb__item"><a href="result.php">検索結果</a></li>
				<li class="breadcrumb__item"><a href="result.php">濃厚トマト</a></li>
				<li class="breadcrumb__item"><a href="buy_form.php">注文画面</a></li>
			</ul>
			<div class="main-container__content">

				<section class="form">
					<h2 id="formTtl" class="form__ttl"><span class="form__en scroll_hide1">Order screen</span><span class="form__ttl__text scroll_hide1">注文画面</span></h2>
					<div class="form__container">
						<div class="profile">
							<h3 class="profile__item profile__ttl">登録情報</h3>
							<div class="profile__wrapper">
								<p class="profile__item profile__name"><span class="profile__heading">お名前</span>前田 大地</p>
								<p class="profile__item profile__address"><span class="profile__heading">住所</span>
								<label><input type="radio">登録した住所を使う</label><input readonly placeholder="〒530-0012 大阪府大阪市北区芝田２丁目１０−３９" type="text">
								</p>
								<p class="profile__item profile__mail"><span class="profile__heading">メールアドレス</span><input readonly placeholder="maeda_daichi1995@yahoo.co.jp" type="text"></p>
								<p class="profile__item telephone"><span class="profile__heading">電話番号</span><input readonly type="text" placeholder="090-0989-9090"></p>
								<p class="profile__item pay">
									<span class="profile__heading">支払い方法</span>
									<label class="credit"><input name="pay" type="radio">クレジット支払い</label>
									<label class="bank"><input name="pay" type="radio">銀行振込</label>
								</p>
							</div>
						</div>

						<div class="total">
							<h3 class="total__ttl">お支払い合計</h3>
							<p class="total__num"><span>¥1000</span>円</p>
							<div class="total__btn">
								<p class="cansel"><a href="product.php">キャンセル</a></p>
								<p class="enter"><a href="#formTtl">確定</a></p>
							</div>
						</div>
					</div>

					<div class="complete none">
						<p>ご注文ありがとうございました。</p>
						<p class="goBack"><a href="index.php">トップへ戻る</a></p>
					</div>
				</section>

				
			</div>
		</div><!-- main-container -->
	</main>

	
	<!-- footerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js">
</script>
<script>
	var product_ttl = document.getElementsByClassName("form__ttl__text")[0];
	var product_ttl_en = document.getElementsByClassName("form__en")[0];
	window.onload = function() {
			product_ttl.classList.add("scroll_view1");
			product_ttl_en.classList.add("scroll_view1");
	}
	document.onscroll = function() {
		menu_view();
	}
	
	var enter = document.getElementsByClassName("enter")[0];
	enter.onclick = function() {
		var form = document.getElementsByClassName("form__container")[0];
		var complete = document.getElementsByClassName("complete")[0];
		form.style.display = "none";
		complete.classList.remove("none");
	}
</script>
</body>
</html> 