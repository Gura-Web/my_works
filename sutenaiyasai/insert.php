<?php
	require_once "include_php/main.php"; 
	require('include_php/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."yasai_meta.php"; ?> 
	<title><?= SITE_NAME ?> | 商品登録</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>yasai/index_style.css" rel="stylesheet">
	<link href="<?= CSS_PATH ?>yasai/add_style.css" rel="stylesheet">
</head>
<body>
	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>
	<div class="sp__bottom_menu none"></div>
	<main class="main">

		<div class="main-container">
				<div class="insert__wrapper">
					<?php // INSET INTO items SET ID=100, name=‘商品100’; ?>
					<form class="insert" action="add.php" method="POST">
						<dl class="insert_form">
							<dt>名前</dt>
							<dd><input name="insert_name" type="text" value="" class="long_field" /></dd>
							<dt>画像</dt>
							<dd><input name="insert_img" type="text" value="" class="long_field" /></dd>
							<dt>農家の名前</dt>
							<dd><input name="insert_farmer" type="text" value="" class="long_field" /></dd>
							<dt>都道府県</dt>
							<dd>
								<input name="insert_pref" type="text">
							</dd>
							<dt>値段</dt>
							<dd><input name="insert_price" type="text" value="" class="long_field" /></dd>
						</dl><!-- /#contact_form -->
						<p class="insert__send"><button name="insert_submit" type="submit">登録</button></p>
					</form>
					<p class="insert__memo">とうもろこし<br>corn.jpg<br>山田農園<br>沖縄県<br>1200</p>
					</div>
		</div>
	</main>
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js">
</script>

</body>
</html>