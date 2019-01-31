<?php
    define('TITLE','My Paper');
    define('PAGE','Result');
    define('BACK','index.php');
    define('HeaderClass','result');

    define('IMG_PATH', 'img/');

    include_once('php/header.php');
?>
    <main class="main">
        <div class="top-search">
            <form class="top-search__wrapper" action="result.php" method="get">
                <input class="top-search__word" type="text" placeholder="あなたのトイレットペーパーを探す">
                <button class="top-search__btn" type="submit"><img src="<?= IMG_PATH ?>search.svg" alt=""></button>
            </form>
        </div>
        <div class="category-menu">
            <ul class="category-menu__wrapper">
                <li class="category-menu__item category-menu__item--current"><a href="#">All</a></li>
                <li class="category-menu__item"><a href="#">ソフト</a></li>
                <li class="category-menu__item"><a href="#">ダブル</a></li>
                <li class="category-menu__item"><a href="#">シングル</a></li>
                <li class="category-menu__item"><a href="#">ハード</a></li>
                <li class="category-menu__item"><a href="#">とてもソフト</a></li>
                <li class="category-menu__item"><a href="#">はてしなくソフト</a></li>
            </ul>
        </div>
        <div class="products">
            <article class="item">
                <div class="item__container">
                    <div class="item__wrapper">
                        <h1 class="item__ttl">素晴らしい紙</h1>
                        <p class="item__value">¥1,200</p>
                        <p class="item__btn"><a href="product.php">商品を見る</a></p>
                    </div>
                    <div class="item__img">
                        <figure class="item__img__wrap"><img src="<?= IMG_PATH ?>item@2x.png" alt=""></figure>
                    </div>
                    <p class="item__category">SOFT</p>
                    <p class="item__fav">100</p>
                </div>
            </article>
            <article class="item">
                <div class="item__container">
                    <div class="item__wrapper">
                        <h1 class="item__ttl">素晴らしい紙</h1>
                        <p class="item__value">¥1,200</p>
                        <p class="item__btn"><a href="product.php">商品を見る</a></p>
                    </div>
                    <div class="item__img">
                        <figure class="item__img__wrap"><img src="<?= IMG_PATH ?>item@2x.png" alt=""></figure>
                    </div>
                    <p class="item__category">SOFT</p>
                    <p class="item__fav">100</p>
                </div>
            </article>
            <article class="item">
                <div class="item__container">
                    <div class="item__wrapper">
                        <h1 class="item__ttl">素晴らしい紙</h1>
                        <p class="item__value">¥1,200</p>
                        <p class="item__btn"><a href="product.php">商品を見る</a></p>
                    </div>
                    <div class="item__img">
                        <figure class="item__img__wrap"><img src="<?= IMG_PATH ?>item@2x.png" alt=""></figure>
                    </div>
                    <p class="item__category">SOFT</p>
                    <p class="item__fav">100</p>
                </div>
            </article>
            <article class="item">
                <div class="item__container">
                    <div class="item__wrapper">
                        <h1 class="item__ttl">素晴らしい紙</h1>
                        <p class="item__value">¥1,200</p>
                        <p class="item__btn"><a href="product.php">商品を見る</a></p>
                    </div>
                    <div class="item__img">
                        <figure class="item__img__wrap"><img src="<?= IMG_PATH ?>item@2x.png" alt=""></figure>
                    </div>
                    <p class="item__category">SOFT</p>
                    <p class="item__fav">100</p>
                </div>
            </article>
            <article class="item">
                <div class="item__container">
                    <div class="item__wrapper">
                        <h1 class="item__ttl">素晴らしい紙</h1>
                        <p class="item__value">¥1,200</p>
                        <p class="item__btn"><a href="product.php">商品を見る</a></p>
                    </div>
                    <div class="item__img">
                        <figure class="item__img__wrap"><img src="<?= IMG_PATH ?>item@2x.png" alt=""></figure>
                    </div>
                    <p class="item__category">SOFT</p>
                    <p class="item__fav">100</p>
                </div>
            </article>
            <article class="item">
                <div class="item__container">
                    <div class="item__wrapper">
                        <h1 class="item__ttl">素晴らしい紙</h1>
                        <p class="item__value">¥1,200</p>
                        <p class="item__btn"><a href="product.php">商品を見る</a></p>
                    </div>
                    <div class="item__img">
                        <figure class="item__img__wrap"><img src="<?= IMG_PATH ?>item@2x.png" alt=""></figure>
                    </div>
                    <p class="item__category">SOFT</p>
                    <p class="item__fav">100</p>
                </div>
            </article>
        </div>
    </main>
</body>
<?php include_once('php/footer.php') ?>