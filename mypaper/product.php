<?php
    define('TITLE','My Paper');
    define('PAGE','Product');
    define('BACK','result.php');
    define('HeaderClass','product');

    define('IMG_PATH', 'img/');

    include_once('php/header.php');
?>
    <main class="main product">
        <div class="product-visual">
            <div class="product-visual__wrapper">
                <h2 class="product-visual__ttl">素晴らしい紙</h2>
                <p class="product-visual__value">¥2100</p>
                <p class="product-visual__desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <div class="product-visual__wrap">
                    <p class="product-visual__btn"><a href="buy.php">カートに入れる</a></p>
                    <p class="product-visual__fav"><img src="<?= IMG_PATH ?>heart.svg" alt="ハート"></p>
                </div>
            </div>
            <figure class="product-visual__img"><img src="<?= IMG_PATH ?>productBig@2x.png" alt="トイレットペーパー"></figure>
        </div>
    </main>
</body>
<?php include_once('php/footer.php') ?>