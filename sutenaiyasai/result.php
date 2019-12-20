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
	<link href="<?= CSS_PATH ?>yasai/result_style.css" rel="stylesheet">
	
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
			</ul>

			<div class="main-column">
				<!-- 検索バー -->
				<?php require_once PHP_PATH."search_leftBar.php"; ?>

				<section class="result scroll_hide3">
					<div class="result__container">
						<div class="result__heading">
							<h2 class="result__ttl">検索結果<span class="result__number">6件</span></h2>
							<div class="result__heading-right">
								<div class="icon-desc">
									<p class="icon-desc__customer_star">お客様の評価・・・</p>
									<p class="icon-desc__symbol">地域貢献シンボル・・・</p>
								</div>
								<div class="sort">
									<p class="sort__ttl">並び替え&nbsp;：&nbsp;</p>
									<select name="sort" class="sort__select">
										<option value="0">関連性の高い順</option>
										<option value="1">値段の安い順</option>
										<option value="2">値段の高い順</option>
										<option value="3">評価の高い順</option>
									</select>
								</div>
							</div>
						</div>
						<div class="result__items">
						
							<?php 
							// URLになにも指定がない時 keywordもvege_nameもない時
							if(!isset($_REQUEST['keyword']) && !isset($_REQUEST['vege_name'])) {
								$result = $db->prepare('SELECT * FROM yasai_result WHERE name LIKE ? LIMIT 0, 6');
								$result->execute(array("%トマト%"));
							}

							// キーワード検索
							if (isset($_REQUEST['keyword'])) {
								$keyword = htmlspecialchars($_REQUEST['keyword'], ENT_QUOTES);
								$result = $db->prepare('SELECT * FROM yasai_result WHERE name LIKE ? LIMIT 0, 6');
								$result->execute(array("%{$keyword}%"));
								
							} 
							// セレクト検索
							if(isset($_REQUEST['vege_name']) && !is_numeric($_REQUEST['vege_name'])) {
								$vege_name = htmlspecialchars($_REQUEST['vege_name'], ENT_QUOTES);
								// $pref_name = htmlspecialchars($_REQUEST['pref-select'], ENT_QUOTES);
								$result = $db->prepare('SELECT * FROM yasai_result WHERE name LIKE ? LIMIT 0, 6');
								$result->execute(array("%{$vege_name}%"));
							}
							// 都道府県検索
							// if(isset($_REQUEST['pref-select'])) {
							// 	$pref = htmlspecialchars($_REQUEST['pref-select'], ENT_QUOTES);	
							// }

							// // $count = $db->prepare('SELECT COUNT(*) FROM yasai_result WHERE id=3');
							
							// $count = $db->prepare('SELECT COUNT(name) FROM yasai_result');
							// print($count);
							while($result_item = $result->fetch()):  
							?>

								<div class="item">
									<a class="item__link" href="product.php?id=<?= $result_item['id']; ?>">
										<figure class="item__image"><img src="<?= IMG_PHOTO . $result_item["img"] ?>" alt="<?= $result_item["img_alt"] ?>"></figure>
										<section class="item__product">
											<h3 class="item__name"><?= $result_item["name"] ?></h3>
											<p class="item__farmer"><?= $result_item["farmer"] ?><span class="item__pref">[<?= $result_item['pref'] ?>]</span></p>
											<p class="item__price">¥&nbsp;<?= $result_item["price"] ?><span class="item__tax">(税込)</span></p>
											<div class="item__popular"><img src="<?= IMG_GLOBAL . $result_item["star"] ?>" alt=""></div>
										</section>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="back-next">
							<p class="back-next__back"><a href="#">前へ</a></p>
							<ol class="back-next__numbers">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ol>
							<p class="back-next__next"><a href="#">次へ</a></p>
						</div>


					</div><!-- result__container -->
				</section><!-- result -->
			</div>
		</div><!-- main-container -->
	</main>

	
	<!-- footerデータを挿入 -->
	<?php require_once PHP_PATH."yasai_footer.php"; ?>
	<script src="<?= JS_PATH ?>script.js">
	</script>
	<script>
	var aa = document.getElementsByClassName("vegetable-select__wrapper")[0];
	aa.onclick = function() {
		console.log("a");
	}

		var vege_icon = document.getElementsByClassName("vegetable-select__list");
		var vege_label = document.getElementsByClassName("vegetable-select__label");
		var check = document.getElementsByClassName("vege_checkbox");

		for(var i =0; i < 13; i++) {			
			vege_icon[i].onclick = function() {
				this.classList.toggle("vege_bak");
			}
		}
	
		var search_leftbar = document.getElementsByClassName("search-leftbar")[0];
		var result = document.getElementsByClassName("result")[0];

		document.onscroll = function() {
			menu_view();
			var scrollTop = document.documentElement.scrollTop;
		}
		window.onload = function() {
				search_leftbar.classList.add("scroll_view2");
				result.classList.add("scroll_view3");
		}
	
	</script>
</body>
</html>