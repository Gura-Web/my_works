<?php 
    define('SITE_NAME', 'STUDY ROOM | HIROKI OGURA PORTFOLIO');
    define('IMG','../img/');
    // define('JS','study_room');
    define('CSS','../css/');
    define('PAGE','profile');
    define('PATH','');
    require_once('header.php');
?>
        <main class="main">
            <div class="main__container">
                <section class="study-top">
                    <h2 class="study-ttl">ここは日々勉強していることを貯めておく為のお勉強部屋です。</h2>
                    <p class="study-top__txt">カテゴリー別に勉強内容を分けているので、<span class="color3">右上のメニュー</span>を押して見たい勉強をお選びください。</>
                    <!-- <p class="study-top__cate-ttl">カテゴリー</p> -->
                    <!-- <ul class="study-top__category">
                        <li><a href="design.php">デザイン</a></li>
                        <li><a href="#">プログラム</a></li>
                        <li><a href="#">デッサン</a></li>
                        <li><a href="#">トレース</a></li>
                    </ul> -->
                    <p class="mt30"><a href="../index.php"><span class="color2">ホームへ</span></a></p>
                </section>
            </div><!-- main__container -->
        </main>
<?php require_once('footer.php'); ?>