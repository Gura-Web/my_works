<?php
    require_once 'php/define.php'; // パスやサイト名の定義データ
    define('PAGE_NAME','WORKS');
    define('CSS','works');

    require_once 'php/define.php'; // パスやサイト名の定義データ
    require_once 'php/header.php';
    
    require('php/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<body>
<?php require_once 'php/header.php' ?>
    <main class="main">
        <div class="main__container">


            <section class="bgHdn">
                <div class="bgHdn__container">
                    <h2 class="bgHdn__ttl" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>works_bigTtl.svg" alt="WORKS"><span class="bgHdn__sub-ttl">[作品一覧]</span></h2>
                    <p class="note" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="600">あくまでも個人のスキルを伸ばすために作成したものであり、商業目的などの理由は一切ありません。</p>
                </div>
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square1"></div><div class="square2"></div>
                    <div class="square-small1"></div><div class="square-small2"></div><div class="square-small3"></div>
                </div>
            </section>

            <section class="my-works">
                <div class="my-works__container">
                    <h3 class="hdn" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>myWorks_ttl.svg" alt="MY WORKS"><span class="hdn__ja">私の作品一覧</span></h3>
                    <section class="work-list">
                        <div class="work-list__container">
                            <ul class="work-list__toggle">
                                <li id="webToggle" class="work-list__btn toggle-line">Web</li>
                                <li id="graphicToggle" class="work-list__btn">Graphic</li>
                            </ul>
                            <div>

                            <div id="webWork" class="work-list__wrapper" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600">
                                <?php  
                                    $work = $db->query('SELECT * FROM type,season,works_web WHERE type.id=works_web.type_id AND season.id=works_web.season_id ORDER BY season.id DESC; ');
                                    while($work_item = $work->fetch()):    
                                ?>
                                    <article class="work-item works-web">
                                        <div class="work-item__wrapper">
                                            <div class="work-item__wrap">
                                                <h4 class="work-item__name"><?= $work_item['name'] ?></h4>
                                                <p class="work-item__detail"><span class="work-item__ttl-detail">種類</span><?= $work_item['type'] ?></p>
                                                <p class="work-item__detail"><span class="work-item__ttl-detail">制作時期</span><?= $work_item['season'] ?></p>
                                                <p class="work-item__detail"><span class="work-item__ttl-detail">制作意志</span><?= $work_item['will'] ?></p>
                                                
                                                <p class="work-item__category"><?= $work_item['category'] ?></p>
                                            </div>
                                            <figure class="work-item__img">
                                                <a target="_blank" href="my_work.php?id=<?= $work_item['id'] ?>&type=0">
                                                    <img src="<?= IMG_PATH . $work_item['img'] ?>.png" alt="<?= $work_item['name'] ?>">
                                                </a>
                                            </figure>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                                <div class="work-item works-web"></div>
                            </div>
                           
                            <div id="graphicWork" class="work-list__wrapper">
                                <?php
                                    $work = $db->query('SELECT * FROM season,works_graphic WHERE season.id=works_graphic.season_id ORDER BY season.id DESC; ');
                                    while($work_item = $work->fetch()):
                                ?>
                                    <article class="work-item works-graphic">
                                        <div class="work-item__wrapper">
                                            <div class="work-item__wrap">
                                                <h4 class="work-item__name"><?= $work_item['name'] ?></h4>
                                                <p class="work-item__detail"><span class="work-item__ttl-detail">制作時期</span><?= $work_item['season'] ?></p>
                                                <p class="work-item__detail"><span class="work-item__ttl-detail">制作意志</span><?= $work_item['will'] ?></p>
                                                <p class="work-item__category"><?= $work_item['category'] ?></p>
                                            </div>
                                            <figure class="work-item__img">
                                                <a target="_blank" href="my_work.php?id=<?= $work_item['id'] ?>&type=1">
                                                    <img src="<?= IMG_PATH . $work_item['img'] ?>.png" alt="すてないやさい">
                                                </a>
                                            </figure>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="square-wrapper" data-aos="fade-right" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="1300">
                        <div class="square1"></div><div class="square2"></div>
                        <div class="square-small1"></div><div class="square-small2"></div><div class="square-small3"></div>
                    </div>
                    <div class="circle" data-aos="zoom-in" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="1000"></div>
                </section>
            </section>

        </div><!-- main__container -->
    </main>

    <?php require_once 'php/footer.php' ?>
    <script>
        var webBtn = document.getElementById('webToggle');
        var graBtn = document.getElementById('graphicToggle');
        var webContent = document.getElementById('webWork');
        var graContent = document.getElementById('graphicWork');
        graContent.style.display = "none";
        webBtn.onclick = function() {
            console.log("a")
            webContent.classList.remove("hide");
            webContent.classList.add("show");
            
            graContent.style.display = "none";
            webContent.style.display = "flex";
            this.classList.add("toggle-line");
            graBtn.classList.remove("toggle-line");
        }
        var none_webContent = function() {
            webContent.style.display = "none";
        }
        graBtn.onclick = function() {
            console.log("b");
            graContent.style.display = "flex";
            graContent.classList.add("show");
            
            
            graContent.classList.remove("hide");
            graContent.classList.add("show");
            
            webContent.classList.add("hide");
            setTimeout(none_webContent, 100);

            this.classList.add("toggle-line");
            webBtn.classList.remove("toggle-line");
            
        }
    </script>
</body>
</html>