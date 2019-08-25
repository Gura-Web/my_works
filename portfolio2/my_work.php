<?php
    define('PAGE_NAME','MY WORK');
    define('CSS','my_work');

    require_once 'php/define.php'; // パスやサイト名の定義データ
    require_once 'php/header.php';

    require('php/dbconnect.php');
    $work_id = $_REQUEST['id'];
    $type_id = $_REQUEST['type'];
    // URLのtype_idが0(WEB)だった時にWEBの作品を表示
    if($type_id == 0) {
        $works_web = $db->prepare('SELECT * FROM type,season,works_web WHERE works_web.id=?');
        $works_web->execute(array($work_id));
        $work = $works_web->fetch();
    }
    // URLのtype_idが1(グラフィック)だった時にグラフィックの作品を表示
    if($type_id == 1) {
        $works_gra = $db->prepare('SELECT * FROM season,works_graphic WHERE works_graphic.id=?');
        $works_gra->execute(array($work_id));
        $work = $works_gra->fetch();
    }
?>

<body>
    <?php require_once 'php/header.php' ?>
    <main class="main">
        <div class="main__container">
            <div class="background">
                <div class="background__inner"></div>
            </div>

            <section class="work-item">
                <div class="work-item__container">
                    <h2 class="work-item__name">
                        <?= $work['name'] ?>
                    </h2>
                    <p class="work-item__season">
                        <?= $work['season'] ?> <span class="work-item__type">
                            <?= $work['type'] ?></span></p>
                    <figure class="work-item__image"><img src="<?= IMG_PATH . $work['img'] ?>Big.png" alt=""></figure>
                    <div class="work-item__wrapper">
                        <p class="work-item__role"><span class="work-item__define">担当</span>
                            <?= $work['role'] ?>
                        </p>
                        <p class="work-item__role"><span class="work-item__define">所要時間</span>
                            <?= $work['time'] ?>
                        </p>
                        <p class="work-item__role"><span class="work-item__define">制作意志</span>
                            <?= $work['will'] ?>
                        </p>
                    </div>
                    <p class="work-item__skill"><span class="work-item__define">使用スキル</span>
                        <?= $work['skill'] ?>
                    </p>
                    <p class="work-item__text">
                        <?= $work['text'] ?>
                    </p>
                    <div class="work-item__wrap">
                        <p class="work-item__back"><a href="works.php#webToggle">BACK</a></p>
                        <p class="work-item__view"><a href="<?= $work['site'] ?>">VIEW</a></p>
                    </div>
                </div>
            </section>

        </div><!-- main__container -->
    </main>

    <?php require_once 'php/footer.php' ?>
    <script>
        var work_img = document.getElementsByClassName("work-item__image")[0];
        if (work_img.children[0].src.match(/sp/)) {
            //imgのsrcに"sp"という文字列が含まれている場合
            work_img.className = "work-item__image--sp";
        }
    </script>
</body>

</html>