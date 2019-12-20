<?php
    require_once "include_php/main.php"; // 定数・コンテンツデータ
    
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."meta.php"; ?> 
	<title><?= SITE_NAME ?> | WORKS</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
    <link href="<?= CSS_PATH ?>works_style.css" rel="stylesheet">
</head>
<body>
    <?php require "include_php/header.html" ?>
    



	<main class="main">
		<div class="main__container">
            <h1 class="global-ttl">WORKS<span class="global-ttl__jp">制作一覧</span></h1>
            <section class="precautions">
                <h2 class="g-heading">諸注意</h2>
                <p class="precautions__text">本サイトで公開されている画像やイラスト類は学校の勉強上でのみ使用しています。
                商業目的などの理由は一切ございません。</p>
            </section>
            <section class="works-list">
                <h2 class="g-heading">作品一覧</h2>
                <div class="category category__big">
                    <p class="category__web opacity_hover">Web/App</p>
                    <p class="category__graphic opacity_hover">Graphic</p>
                </div>
                <div class="category category__small">
                    <p class="category__practice opacity_hover">Practice</p>
                    <p class="category__other opacity_hover">Other</p>
                </div>

                <div class="explain">
                    <p class="explain__item">PC … パソコン</p>
                    <p class="explain__item">TB … タブレット</p>
                    <p class="explain__item">SP … スマートフォン</p>
                </div>

                <div class="works-list__wrapper">
                    <?php foreach ($work_web as $web) : ?>
                        <div class="work-item work-web">
                            <div class="work-item__wrapper">
                                <h3 class="work-item__name"><?= $web["name"] ?></h3>
                                <div class="work-item__wrap">
                                    <p class="work-item__sub-ttl">種類</p>
                                    <p class="work-item__text"><?= $web["type"] ?></p>
                                </div>
                                <div class="work-item__wrap">
                                    <p class="work-item__sub-ttl">制作日時</p>
                                    <p class="work-item__text"><?= $web["season"] ?></p>
                                </div>
                                <div class="work-item__wrap">
                                    <p class="work-item__sub-ttl">制作意思</p>
                                    <p class="work-item__text"><?= $web["purpose"] ?></p>
                                </div>
                            </div>
                            <figure class="work-item__image"><img src="<?= IMG_PHOTO ?><?= $web["img"] ?>" alt="<?= $web["alt"] ?>"></figure>
                            <p class="work-item__tag"><?= $web["tag"] ?></p>
                        </div>
                    <?php endforeach ?>
                    <!-- <div class="work-item"></div> -->
                </div>

                <div class="works-list__wrapper">
                    <?php foreach ($work_graphic as $graphic) : ?>
                        <div class="work-item work-graphic">
                            <div class="work-item__wrapper">
                                <h3 class="work-item__name"><?= $graphic["name"] ?></h3>
                                <div class="work-item__wrap">
                                    <p class="work-item__sub-ttl">制作日時</p>
                                    <p class="work-item__text"><?= $graphic["season"] ?></p>
                                </div>
                                <div class="work-item__wrap">
                                    <p class="work-item__sub-ttl">制作意思</p>
                                    <p class="work-item__text"><?= $graphic["purpose"] ?></p>
                                </div>
                            </div>
                            <figure class="work-item__image"><img src="<?= IMG_PHOTO ?><?= $graphic["img"] ?>" alt="<?= $graphic["alt"] ?>"></figure>
                            <p class="work-item__tag"><?= $graphic["tag"] ?></p>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="works-list__wrapper">
                    <?php foreach ($work_practice as $practice) : ?>
                        <div class="work-item work-practice">
                            <div class="work-item__wrapper">
                                <h3 class="work-item__name"><?= $practice["name"] ?></h3>
                                <div class="work-item__wrap">
                                    <p class="work-item__sub-ttl">制作日時</p>
                                    <p class="work-item__text"><?= $practice["season"] ?></p>
                                </div>
                                <div class="work-item__wrap">
                                    <p class="work-item__sub-ttl">制作意思</p>
                                    <p class="work-item__text"><?= $practice["purpose"] ?></p>
                                </div>
                            </div>
                            <figure class="work-item__image"><img src="<?= IMG_PHOTO ?><?= $practice["img"] ?>" alt="<?= $practice["alt"] ?>"></figure>
                            <p class="work-item__tag"><?= $practice["tag"] ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>

            <div class="product none">
                <div class="product__container">
                    <div class="product__wrapper">
                        <h2 class="product__name">a</h2>    
                        <h3 class="product__heading product__heading__info">概要</h3>
                        <div class="product-info">
                            <p class="product-info__item product-info__type"><span class="product-info__item__sub-ttl">種類</span><span class="info__data"></span></p>
                            <p class="product-info__item"><span class="product-info__item__sub-ttl">制作日時</span><span class="info__data"></span></p>
                            <p class="product-info__item"><span class="product-info__item__sub-ttl">所要時間</span><span class="info__data"></span></p>
                            <p class="product-info__item product-info__job"><span class="product-info__item__sub-ttl">担当箇所</span><span class="info__data"></span></p>
                            <p class="product-info__item"><span class="product-info__item__sub-ttl">制作意思</span><span class="info__data"></span></p>
                        </div>
                        <div class="product-skill__wrap">
                            <h3 class="product__heading product__heading__skill">使用スキル</h3>
                            <p class="product__skill"></p>
                        </div>
                    </div>
                    <figure class="product__image"><img src="a" alt=""></figure>
                </div>
                <div class="product__wrap">
                    <p class="product__text">
                    </p>
                    <p class="product__btn"><a href="">サイトを見る</a></p>
                </div>
                <div class="product__close"></div>
                <div class="product__frameTop"></div>
                <div class="product__frameBottom"></div>
            </div>
            

		</div> <!-- main__container -->
	</main>
<div class="bottom-frame"></div>
<script src="js/script.js"></script>
<script src="js/work.js"></script>

</body>
</html>