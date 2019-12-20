<?php 
    define('SITE_NAME', 'WORKS | HIROKI OGURA PORTFOLIO');
    define('IMG','img/');
    define('IMG_WORK','img/product/');
    define('JS','works');
    define('CSS','css/');
    define('PAGE','works');
    require_once('header.php');
?>
                <ol class="right-dot">
                    <li id="dot01" class="right-dot__item"><a href="#section01"><span class="right-dot__border"></span></a></li>
                    <li id="dot02" class="right-dot__item"><a href="#section02"><span class="right-dot__border"></span></a></li>
                </ol>
                <div class="go-top"><a href="#"></a></div>
            </div><!-- header__container -->
        </header>
        <div class="main-visual--sub">
            <div class="main-visual--sub__wrapper">
                <h2 class="main-visual--sub__ttl inview"><img class="inview__inner" src="<?= IMG ?>deco-works.svg" alt="WORKS"></h2>
                <p class="main-visual--sub__txt inview"><span class="inview__inner">作品一覧</span></p>
            </div>
            <p class="main-visual__scroll"><a href="#section01">SCROLL</a></p>
        </div><!-- main-visual -->
        <main class="main">
            <div class="main__container">
                <section id="section01" class="service">
                    <h3 class="medium-ttl inview"><span class="inview__inner">SERVICE</span></h3>
                    <p class="medium-sub-ttl inview"><span class="inview__inner">公開中のサービス</span></p>
                    <div class="work-list slideup02">
                        <article class="work-item">
                            <a target="_blank" href="product.php?=egggg">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-egggg.png" alt=""></figure>
                                <p class="work-item__info">1年春休み<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[個人ブログ] EGGGG</h4>
                            </a>
                        </article>
                        <article class="work-item">
                            <a target="_blank" href="product.php?=egpChecker">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-egp_checker.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[製作中] EGP Checker</h4>
                            </a>
                        </article>
                        <article class="work-item">
                            <a target="_blank" href="product.php?=findWeb">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-findWeb.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[学内サービス] FindWeb</h4>
                            </a>
                        </article>
                        <article class="work-item">
                            <a target="_blank" href="product.php?=calocalc">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-calocalc.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[計算サービス] CaloCalc</h4>
                            </a>
                        </article>
                        <div class="work-item work-item--last"></div>
                    </div>
                </section><!--  -->
                
                <section id="section02" class="works container">
                    <h3 class="medium-ttl inview"><span class="inview__inner">WORKS</span></h3>
                    <p class="medium-sub-ttl inview"><span class="inview__inner">作品集</span></p>
                    <ul class="work-category inview">
                        <li class="work-category__item controls inview__inner" id="workWeb" data-filter=".cate-web">WEB</li>
                        <li class="work-category__item controls inview__inner" id="workGra" data-filter=".cate-gra">GRAPHIC</li>
                        <li class="work-category__item controls inview__inner" id="workOther" data-filter=".cate-other">OTHERS</li>
                    </ul>
                    <ul class="work-category--more inview">
                        <li class="work-category--more__item controls inview__inner" id="workGood" data-filter=".cate-good">自信作</li>
                        <li class="work-category--more__item controls inview__inner" id="workIdea" data-filter=".cate-idea">企画を重視</li>
                        <li class="work-category--more__item controls inview__inner" id="workPrivate" data-filter=".cate-private">自主制作</li>
                        <li class="work-category--more__item controls inview__inner" id="workSchool" data-filter=".cate-school">学校課題</li>
                        <li class="work-category--more__item controls inview__inner" id="workSingle" data-filter=".cate-single">個人制作</li>
                        <li class="work-category--more__item controls inview__inner" id="workGroupe" data-filter=".cate-group">グループ制作</li>
                    </ul>
                    <!-- <p class="op5">※おすすめ順です。</p> -->
                    <div id="section03" class="work-list slideup02">
                        <article class="work-item mix cate-web cate-single cate-school cate-good cate-idea">
                            <a target="_blank" href="product.php?=sutenaiyasai">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-sutenai_yasai.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[ECCEXPO最優秀賞] すてないやさい</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-group cate-school cate-idea">
                            <a target="_blank" href="product.php?=tanpopo">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-tanpopo.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[趣味探しサービス] Tanpopo</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-private cate-good">
                            <a target="_blank" href="product.php?=portfolio3">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-portfolio3.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">ポートフォリオ３作目</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-private cate-good">
                            <a target="_blank" href="product.php?=wedding">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-wedding.png" alt=""></figure>
                                <p class="work-item__info">1年春休み<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[結婚式サイト] Fantastic Memories</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-group cate-private cate-good">
                            <a target="_blank" href="product.php?=cracone">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-cracone.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[作品投稿サイト]CraCone</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-private cate-good">
                            <a target="_blank" href="product.php?=portfolio2">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-portfolio2.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">ポートフォリオ２作目</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-group cate-school cate-idea">
                            <a target="_blank" href="product.php?=study_mode">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-study_mode.png" alt=""></figure>
                                <p class="work-item__info">1年春休み<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[勉強アプリ] Study Mode</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-group cate-school">
                            <a target="_blank" href="product.php?=mediclock">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-mediclock.png" alt=""></figure>
                                <p class="work-item__info">1年夏休み<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[誤薬防止サービス] MediClock</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-group cate-private">
                            <a target="_blank" href="product.php?=dutti">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-dutti.png" alt=""></figure>
                                <p class="work-item__info">1年夏休み<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[あいづちサービス]づっち</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web">
                            <a target="_blank" href="product.php?=murayama">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-murayama.png" alt=""></figure>
                                <p class="work-item__info">1年春休み<span class="work-item__slash">インターン</span></p>
                                <h4 class="work-item__ttl">村山工業採用サイト</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-school cate-good">
                            <a target="_blank" href="product.php?=suu">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-suu.png" alt=""></figure>
                                <p class="work-item__info">1年前期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[化粧水サイト] Suu</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web">
                            <a target="_blank" href="product.php?=maeda">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-maeda.png" alt=""></figure>
                                <p class="work-item__info">1年春休み<span class="work-item__slash">インターン</span></p>
                                <h4 class="work-item__ttl">前田観光 事業紹介ページ</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web">
                            <a target="_blank" href="product.php?=offerbox">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-offerbox.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[就活サイト] OfferBox デザイン案</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-group cate-private">
                            <a target="_blank" href="product.php?=plus_e_ten">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-eten.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[学校展示会PRサイト] +E展</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-school cate-idea">
                            <a target="_blank" href="product.php?=yasai_program">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-yasai_program.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">就農応援プログラム</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-school">
                            <a target="_blank" href="product.php?=yasai_fes">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-yasai_fes.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">訳あり野菜フェス</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-school cate-idea">
                            <a target="_blank" href="product.php?=yasai_junior">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-yasai_junior.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">ジュニア農業体験</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-private">
                            <a target="_blank" href="product.php?=corgi">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-corgi.png" alt=""></figure>
                                <p class="work-item__info">1年夏休み<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[コーギー紹介サイト]CORGI</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-private">
                            <a target="_blank" href="product.php?=portfolio1">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-portfolio1.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">ポートフォリオ１作目</h4>
                            </a>
                        </article>
                        <!-- <article class="work-item mix cate-other cate-single cate-private">
                            <a target="_blank" href="product.php?=my_paper">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-toilet.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">[練習]MyPaper</h4>
                            </a>
                        </article> -->
                        <article class="work-item mix cate-web cate-group cate-school">
                            <a target="_blank" href="product.php?=helloidea">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-helloidea.png" alt=""></figure>
                                <p class="work-item__info">1年夏休み<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[知恵共有サービス] Helloidea</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-group cate-school">
                            <a target="_blank" href="product.php?=burger">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-burger.png" alt=""></figure>
                                <p class="work-item__info">1年春休み<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[商品PRサイト] Burger Emperor</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-school">
                            <a target="_blank" href="product.php?=suu_sp">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-suu_sp.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">Suu スマホ版</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-other cate-single cate-private">
                            <a target="_blank" href="product.php?=mini_portfolio">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-mini_portfolio.png" alt=""></figure>
                                <p class="work-item__info">1年夏休み<span class="work-item__slash">自主制作</span></p>
                                <h4 class="work-item__ttl">ミニポートフォリオ</h4>
                            </a>
                        </article>
                        <!-- グラフィック -->
                        <article class="work-item mix cate-gra cate-school">
                            <a target="_blank" href="product.php?=candle">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-candle.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">キャンドルナイト チラシ</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-gra cate-school">
                            <a target="_blank" href="product.php?=yasai_gra">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-yasai_gra.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">すてないやさい チラシ</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-gra cate-school">
                            <a target="_blank" href="product.php?=eccexpo_gra">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-expo.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">ECCEXPO チラシ</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-gra cate-school">
                            <a target="_blank" href="product.php?=suu_gra">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-suu_gra.png" alt=""></figure>
                                <p class="work-item__info">1年前期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">Suu 印刷物</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-gra cate-school">
                            <a target="_blank" href="product.php?=tumbler">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-tumblr.png" alt=""></figure>
                                <p class="work-item__info">1年夏休み<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">タンブラーラベル</h4>
                            </a>
                        </article>
                        <div class="work-item work-item--last"></div>
                    </div>
                </section>
                
            </div><!-- main__container -->
        </main>
    <?php require_once('footer.php'); ?>