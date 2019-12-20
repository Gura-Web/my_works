<?php
	require_once "include_php/main.php"; // 定数・コンテンツデータ
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."meta.php"; ?> 
	<title><?= SITE_NAME ?> | HOME</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>index_style.css" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="header__container">
			<nav class="main-nav">
				<ul class="main-nav__wrapper">
					<li class="main-nav__item"><a class="main-nav__profile" href="profile.php">PROFILE</a></li>
					<li class="main-nav__item"><a class="main-nav__skill" href="skill.php">SKILL</a></li>
					<li class="main-nav__item"><a class="main-nav__works" href="works.php">WORKS</a></li>
					<li class="main-nav__item"><a class="main-nav__blog" href="#">BLOG</a></li>
					<li class="main-nav__item"><a class="main-nav__policy" href="policy.php">POLICY</a></li>
				</ul>
			</nav>
			<div class="sp-nav-btn__wrap">
				<div class="sp-nav-btn"></div>
			</div>
			<nav class="sp-nav">
				<ul class="sp-nav__wrapper">
					<li class="sp-nav__item"><a href="profile.php">PROFILE</a></li>
					<li class="sp-nav__item"><a href="skill.php">SKILL</a></li>
					<li class="sp-nav__item"><a href="works.php">WORKS</a></li>
					<li class="sp-nav__item"><a href="#">BLOG</a></li>
					<li class="sp-nav__item"><a href="policy.php">POLICY</a></li>
				</ul>
				<div class="sp-nav__close"></div>
			</nav>
		</div>
	</header>

	<main class="main">
		<div class="main__container">
			<div class="main__wrapper">
				<h1 class="logo"><img src="<?= IMG_SVG ?>logo.svg" alt="小倉弘暉のポートフォリオ"></h1>

				<ul class="icon-list">
					<li class="icon-list__item icon-list__star__yellow"><img src="<?= IMG_SVG ?>star.svg" alt=""></li>
					<li class="icon-list__item icon-list__rectangle__gray"><img src="<?= IMG_SVG ?>rectangle_gray.svg" alt=""></li>
					<li class="icon-list__item icon-list__triangle__blue"><img src="<?= IMG_SVG ?>triangle_blue.svg" alt=""></li>
					<li class="icon-list__item icon-list__phone"><img src="<?= IMG_SVG ?>phone.svg" alt=""></li>
					<li class="icon-list__item icon-list__light"><img src="<?= IMG_SVG ?>light.svg" alt=""></li>
					<li class="icon-list__item icon-list__x__gray"><img src="<?= IMG_SVG ?>x_gray.svg" alt=""></li>
					<li class="icon-list__item icon-list__circle__yellow"><img src="<?= IMG_SVG ?>circle_yellow.svg" alt=""></li>
					<li class="icon-list__item icon-list__antenna"><img src="<?= IMG_SVG ?>antenna.svg" alt=""></li>
					<li class="icon-list__item icon-list__headphone"><img src="<?= IMG_SVG ?>headphone.svg" alt=""></li>
					<li class="icon-list__item icon-list__star__yellow2"><img src="<?= IMG_SVG ?>star_yellow.svg" alt=""></li>
					<li class="icon-list__item icon-list__rectangle__yellow"><img src="<?= IMG_SVG ?>rectangle_yellow.svg" alt=""></li>
					<li class="icon-list__item icon-list__triangle__blue2"><img src="<?= IMG_SVG ?>triangle_blue.svg" alt=""></li>
					<li class="icon-list__item icon-list__square__gray"><img src="<?= IMG_SVG ?>square_gray.svg" alt=""></li>
				</ul>
			</div><!-- main__wrapper -->

			<div class="icons">
				<div class="icons__wrapper">

				</div><!-- icons__wrapper -->
			</div><!-- icons -->
		</div> <!-- main__container -->

		<div class="contact-window none">
			<h2 class="contact-window__ttl">CONTACT</h2>
			<p class="contact-window__mail">OguraHiroki1999@yahoo.co.jp</p>
			<p class="contact-window__text">こんな僕に興味を持ってもらえたらツイッターをフォローしたり、メールを送ったりしてくれると嬉しいです。<br>
				「ツイッターのいいねを押したい」「話したい」だけでも大丈夫です。<br>
				お返事きっとお返しすると思うので、お気軽にどうぞ。</p>
			<div class="contact-window__close"></div>
		</div>
		
	</main>



	<footer class="footer">
		<section class="footer__container">
			<h2 class="contact__ttl">CONTACT</h2>
			<ul class="contact-list">
				<li class="contact-list__item facebook"><a href="#"><img src="<?= IMG_SVG ?>facebook.svg" alt="facebook"></a></li>
				<li class="contact-list__item twitter"><a href="#"><img src="<?= IMG_SVG ?>twitter.svg" alt="twitter"></a></li>
				<li class="contact-list__item mail"><a href="#"><img src="<?= IMG_SVG ?>mail.svg" alt="mail"></a></li>
			</ul>
		</section>
	</footer>
	<script src="js/script.js">
	</script>
	<script>
		// contact-close-btn
		var contact_window = document.getElementsByClassName("contact-window")[0];
		var contact_close = document.getElementsByClassName("contact-window__close")[0];
		contact_close.onclick = function() {
			contact_window.classList.add("none");
		}
		// view contact-window
		var contact_mail = document.getElementsByClassName("mail")[0];
		contact_mail.onclick = function() {
			contact_window.classList.toggle("none");
		}
	</script>
</body>
</html>