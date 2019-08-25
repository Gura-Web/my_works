<?php
	require_once "include_php/main.php"; 
	require('include_php/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."yasai_meta.php"; ?> 
	<title><?= SITE_NAME ?> | 商品登録完了</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>yasai/index_style.css" rel="stylesheet">
	<link href="<?= CSS_PATH ?>yasai/add_style.css" rel="stylesheet">
</head>
<body>

	<!-- headerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_header.php"; ?>
	<div class="sp__bottom_menu none"></div>
	<main class="main">
		<?php 
			$insert = $_POST;
			// print_r($insert);
			$insert_data = $db->prepare('INSERT INTO yasai_result SET name=?,img=?,farmer=?,pref=?,price=?,star="five_star_i.svg";');
			$insert_data->execute(array($insert['insert_name'],$insert['insert_img'],$insert['insert_farmer'],$insert['insert_pref'],$insert['insert_price']));
			// $insert_data = $db->prepare('INSERT INTO yasai_result(name, img, farmer, pref, price) VALUES(?, ?, ?, ?, ?)');
			
		?>
		<div class="main-container add">
			
			<p>登録が完了しました。</p>
			<p class="top-send"><a href="index.php">トップへ戻る</a></p>
		</div>
	</main>
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
<script src="<?= JS_PATH ?>script.js"></script>

</body>
</html>