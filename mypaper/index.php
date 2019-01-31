<?php
    define('TITLE','My Paper');
    define('PAGE','HOME');
    define('HeaderClass','index');
    
    define('IMG_PATH', 'img/');

    include_once('php/header.php');
?>
    <main class="main">
        <div class="main-visual">
            <div class="main-visual__container">
                <p class="main-visual__catch">ハロー<br>紙をお探しかい？</p>
                <div class="top-search">
                    <form class="top-search__wrapper" action="result.php" method="get">
                        <input class="top-search__word" type="text" placeholder="あなたのトイレットペーパーを探す">
                        <button class="top-search__btn" type="submit"><img src="<?= IMG_PATH ?>search.svg" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
        <section class="sec">
            <h2 class="sec__ttl">Popular</h2>
            <p class="goodvalue"><a href="result.php"><img src="<?= IMG_PATH ?>goodvalue@2x.png" alt="超お買い得トイレットペッパー"></a></p>
        </section>
        <section class="sec">
            <h2 class="sec__ttl">Type</h2>
            <ul class="type">
                <li class="type__item"><a href="result.php">ソフト</a></li>
                <li class="type__item"><a href="result.php">ハード</a></li>
                <li class="type__item"><a href="result.php">ダブル</a></li>
                <li class="type__item"><a href="result.php">シングル</a></li>
                <li class="type__item"><a href="result.php">高級</a></li>
            </ul>
        </section>
        <div class="campaign">
            <p class="campaign__text">２週間限定キャンペーン</p>
            <p class="campaign__text-box">トイレットペーパー１万個が当たる！</p>
        </div>
        <section class="sec">
            <h2 class="sec__ttl">Popular word</h2>
            <ul class="tag">
                <li class="tag__item"><a href="result.php">ソフト</a></li>
                <li class="tag__item"><a href="result.php">ソフトっぽい</a></li>
                <li class="tag__item"><a href="result.php">とてもソフト</a></li>
                <li class="tag__item"><a href="result.php">はてしなくソフト</a></li>
                <li class="tag__item"><a href="result.php">ソフトすぎて溶ける</a></li>
                <li class="tag__item"><a href="result.php">ソフト</a></li>
                <li class="tag__item"><a href="result.php">ダブル</a></li>
                <li class="tag__item"><a href="result.php">硬くないやつ</a></li>
            </ul>
        </section>
    </main>
    <script>
        var header_ttl = document.getElementById("headerTtl");
        console.log(header_ttl)
        header_ttl.innerHTML = "MyPaper";
        var header_arrow = document.getElementById("headerArrow");
        
        header_arrow.classList.add("none");

    </script>
</body>
<?php include_once('php/footer.php') ?>