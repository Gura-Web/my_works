<?php
    define('TITLE','My Paper');
    define('PAGE','Buy');
    define('BACK','product.php');
    define('HeaderClass','buy');

    define('IMG_PATH', 'img/');

    include_once('php/header.php');
?>
    <main class="main buy">
        <div class="buy-content">
            <dl class="buy-content__wrap">
                <dt class="buy-content__item--name">トイレットペーパー</dt>
                <dd class="buy-content__item--value">2100円</dd>
            </dl>
            <dl class="buy-content__wrap">
                <dt class="buy-content__item--name">トイレットペーパー税</dt>
                <dd class="buy-content__item--value">100円</dd>
            </dl>
            <dl class="buy-content__wrap">
                <dt class="buy-content__result">合計</dt>
                <dd class="buy-content__result--value">2200円</dd>
            </dl>
        </div>
        
        <form class="user-buy" action="" method="post">
            <label class="user-info">Name*
                <input required name="name" class="user-info__form" type="text">
            </label>
            <label class="user-info">Email*
                <input required name="email" class="user-info__form" type="text">
            </label>
            <label class="user-info">Address*
                <input required name="address" class="user-info__form" type="text">
            </label>
            <p class="user-info__pay">Pay*</p>
            <div class="user-pay">
                <label class="user-info">
                    <input required class="user-pay__radio" name="pay" type="radio"> 銀行振込
                </label>
                <label class="user-info">
                    <input required class="user-pay__radio" name="pay" type="radio"> クレジットカード
                </label>
            </div>
            
            <label class="user-info__rule">
                <input required class="user-info__check" type="checkbox"><span class="user-info__agree">利用規約</span>に同意する
            </label>
            <button class="user-info__submit" type="submit">購入する</button>
        </form>
    </main>
</body>
<?php include_once('php/footer.php') ?>