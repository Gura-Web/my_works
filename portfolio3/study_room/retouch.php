<?php 
    define('SITE_NAME', 'STUDY ROOM | HIROKI OGURA PORTFOLIO');
    define('IMG','../img/');
    define('JS','study');
    define('CSS','../css/');
    define('PAGE','profile');
    define('PATH','');
    require_once('header.php');
?>
        <main class="main">
            <div class="main__container">
            <section id="section02" class="works container">
                    <h3 class="medium-ttl">PHOTO RETOUCH</h3>
                    <p class="medium-sub-ttl">画像加工</p>
                    <ul class="work-category">
                        <!-- <li class="work-category__item controls" id="workWeb" data-filter=".cate-banner">バナー</li> -->
                        <!-- <li class="work-category__item controls" id="workGra" data-filter=".cate-gra">GRAPHIC</li>
                        <li class="work-category__item controls" id="workOther" data-filter=".cate-other">OTHERS</li> -->
                    </ul>
                    <div id="section03" class="work-list study-list">
                        <article class="work-item study-banner mix cate-banner">
                            <a href="#">
                                <figure class="work-item__img"><img src="img/retouch/retouch01.png" alt=""></figure>
                                <p class="work-item__info">
                                    <span class="work-item__season">2年前期</span>
                                    <span class="work-item__slash work-item__time">所用時間:15分</span>
                                </p>
                                <h1 class="work-item__ttl">スープを暖かそうに</h1>
                                <p class="hidden">img/retouch/retouch01.png</p>
                            </a>
                        </article>
                        <article class="work-item study-banner mix cate-banner">
                            <a href="#">
                                <figure class="work-item__img"><img src="img/retouch/retouch02.png" alt=""></figure>
                                <p class="work-item__info">
                                    <span class="work-item__season">2年前期</span>
                                    <span class="work-item__slash work-item__time">所用時間:28分</span>
                                </p>
                                <h1 class="work-item__ttl">肉体を綺麗に</h1>
                                <p class="hidden">img/retouch/retouch02.png</p>
                            </a>
                        </article>
                        <div class="work-item work-item--last"></div>
                    </div>
                </section>
                <div class="study-info">
                    <h2 id="study-info__ttl" class=""></h2>
                    <div class="study-info__wrapper">
                        <figure class="study-info__figure"><img id="study-info__img" src=""></figure>
                        <div class="study-info__wrap">
                            <dl class="study-info__detail">
                                <dt>制作時期</dt>
                                <dd id="study-info__season"></dd>
                            </dl>
                            <dl class="study-info__detail">
                                <dt>所要時間</dt>
                                <dd id="study-info__time"></dd>
                            </dl>
                        </div>
                    </div>
                    <p class="study-info__close"><img src="<?= IMG ?>icon-cross.svg" alt=""></p>
                </div>
            </div><!-- main__container -->
        </main>
<?php require_once('footer.php'); ?>