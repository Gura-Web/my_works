<?php 
    define('SITE_NAME', 'UPDATE | HIROKI OGURA PORTFOLIO');
    define('IMG','img/');
    define('JS','index');
    define('PAGE','index');
    require_once('header.php');
?>
                <ol class="right-dot">
                    <li id="dot01" class="right-dot__item"><a href="#section01"><span class="right-dot__border"></span></a></li>
                    <li id="dot02" class="right-dot__item"><a href="#section02"><span class="right-dot__border"></span></a></li>
                    <li id="dot03" class="right-dot__item"><a href="#section03"><span class="right-dot__border"></span></a></li>
                    <li id="dot04" class="right-dot__item"><a href="#section04"><span class="right-dot__border"></span></a></li>
                    <li id="dot05" class="right-dot__item"><a href="#section05"><span class="right-dot__border"></span></a></li>
                </ol>
                <div class="go-top"><a href="#"></a></div>
            </div><!-- header__container -->
        </header>
        <div class="main-visual">
            <div class="main-visual__container">
                <div class="main-visual__wrapper">
                    <div class="main-visual__main-circle slideup09">
                        <img src="<?= IMG ?>deco-main_ball.svg" alt="">
                    </div>
                    <div class="main-visual__right">
                        <h2 class="main-visual__logo inview"><img class="inview__inner" src="<?= IMG ?>deco-main_logo.svg" alt="UPDATE"></h2>
                        <p class="main-visual__txt inview"><span class="inview__inner">発見、改善、そして更新する。</span></p>
                        <p class="main-visual__sub-txt inview"><span class="inview__inner">HIROKI OGURA PORTFOLIO</span></p>
                    </div>
                </div>
                <p class="main-visual__scroll"><a href="#section01">SCROLL</a></p>
            </div>
        </div><!-- main-visual -->
        <main class="main">
            <div class="main__container">
                <div class="mail-address">
                    <p class="mail-address__wrap">OguraHiroki1999@yahoo.co.jp</p>
                    <p class="mail-address__cross"><img src="<?= IMG ?>icon-cross.svg" alt=""></p>
                </div>
                <section id="section01" class="logo-desc">
                    <div class="logo-desc__wrapper">
                        <div class="inview"><h3 class="logo-desc__ttl inview__inner">UPDATE</h3></div>
                        <div class="inview"><p class="logo-desc__txt inview__inner">UPDATEには2つの意味が込められています。</p></div>
                        <ul class="logo-desc__list slideup09">
                            <li class="logo-desc__item">技術とデザインで、<br>人々の生活を更新する。</li>
                            <li class="logo-desc__cross"><img src="<?= IMG ?>icon-cross.svg" alt=""></li>
                            <li class="logo-desc__item">常に学び、<br>自身を更新する。</li>
                        </ul>
                        <div class="inview"><p class="logo-desc__desc inview__inner">
                            これからさらに人々の生活を豊かにできる分野はWEB/ITだと信じています。<br>
                            インターネットからデザインに出会い居場所や学び、自分の価値を手に入れました。<br>
                            自分の人生を価値あるものにしてくれたこの大好きな分野で、人の生活を豊かにしていきたい。<br>
                            だから私はこの分野で常に学び、自身を更新し続けています。
                        </p></div>
                    </div>
                </section><!-- logo-desc -->
                <section id="section02" class="top-profile">
                    <div class="top-profile__wrapper">
                        <div class="top-profile__left">
                            <h3 class="medium-ttl slideup09">PROFILE</h3>
                            <p class="medium-sub-ttl slideup09">プロフィール</p>
                            <p class="top-profile__ball slideright09"><img src="<?= IMG ?>deco-blue_ball.svg" alt=""></p>
                        </div>
                        <section class="top-me">
                            <div class="inview"><h4 class="top-me__name inview__inner">HIROKI OGURA</h4></div>
                            <div class="inview"><p class="top-me__desc inview__inner">ECCコンピュータ専門学校 WEBデザイナー専攻2年<br>2021年卒業予定 20歳</p></div>
                            <ul class="sns-list inview">
                                <li class="sns-list__item inview__inner"><a href="https://twitter.com/Gura_web"><img src="<?= IMG ?>icon-twitter.svg" alt="twitter"></a></li>
                                <li class="sns-list__item inview__inner"><a href="https://www.facebook.com/GuraWeb"><img src="<?= IMG ?>icon-facebook.svg" alt="faceboook"></a></li>
                                <li class="sns-list__item inview__inner"><a href="https://github.com/Gura-Web"><img src="<?= IMG ?>icon-github.svg" alt="github"></a></li>
                            </ul>
                            <h5 class="good-ttl mt50 inview"><span class="inview__inner">得意分野</span></h5>
                            <ul class="good-list">
                                <li class="good-list__item inview"><span class="inview__inner">・モダンなデザイン</span></li>
                                <li class="good-list__item inview"><span class="inview__inner">・ユーザーインターフェースデザイン</span></li>
                                <li class="good-list__item inview"><span class="inview__inner">・Gulp,SASS類を用いたコーディング</span></li>
                                <li class="good-list__item inview"><span class="inview__inner">・タスク/スケジュール管理</span></li>
                            </ul>
                            <div class="top-me__btns">
                                <p id="mailBtn" class="btn-normal slideright13"><a href="#">メールを送る</a></p>
                                <p class="btn-normal slideright18"><a href="profile.php">プロフィールを見る</a></p>
                            </div>
                        </section>
                    </div>
                </section><!-- top-profile -->

                <section id="section03" class="top-works">
                    <div class="top-works__wrapper">
                        <div class="inview"><h3 class="medium-ttl inview__inner">WORKS</h3></div>
                        <p class="medium-sub-ttl inview"><span class="inview__inner">作品集</span></p>
                        <p class="top-works__txt inview"><span class="inview__inner">今まで制作した作品を紹介しています。<br>数が多い為、ボタンを押してご覧ください。</span></p>
                        <p class="btn-normal slideright13"><a href="works.php">作品を見る</a></p>
                        <p class="top-works__img slideup09"><img src="<?= IMG ?>deco-designer_engineer.svg" alt=""></p>
                    </div>
                </section>

                <section id="section04" class="top-blog">
                    <div class="top-blog__container">
                        <div class="inview"><h3 class="medium-ttl inview__inner">EGGGG</h3></div>
                        <p class="medium-sub-ttl inview"><span class="inview__inner">私のブログ</span></p>
                        <p class="ls100 mt30 inview">
                            <span class="inview__inner">
                            普段思っていることを主に書いている個人ブログです。<br>
                            一般の方も見ている人がおられるので、勉強類のことは次項のSTUDY ROOMに記載することが多いです。
                            </span>
                        </p>
                        <div class="top-blog__wrapper">
                            <article class="slideup02 blog-item">
                                <a class="blog-item__wrap" href="https://gura-web.com/mix-leap-study-41/">
                                    <figure class="blog-item__img"><img src="<?= IMG ?>blog-01.png" alt=""></figure>
                                    <p class="blog-item__time"><time datetime="2019-05-13">2019.05.13</time></p>
                                    <h2 class="blog-item__ttl">Yahooの勉強会に行ってきた話</h2>
                                    <p class="blog-item__txt">つい先日Yahoo！OSAKA主催の勉強会「Mix Leap Study #41 – ...</p>
                                </a>
                            </article>
                            <article class="slideup04 blog-item">
                                <a class="blog-item__wrap" href="https://gura-web.com/nagoya-study/">
                                    <figure class="blog-item__img"><img src="<?= IMG ?>blog-02.png" alt=""></figure>
                                    <p class="blog-item__time"><time datetime="2019-09-19">2019.03.29</time></p>
                                    <h2 class="blog-item__ttl">名古屋合宿で学んだこと</h2>
                                    <p class="blog-item__txt">前回の続きで名古屋合宿のチーム制作で学んだことをメモしていきたいと思います ...</p>
                                </a>
                            </article>
                            <article class="slideup06 blog-item">
                                <a class="blog-item__wrap" href="https://gura-web.com/first-article/">
                                    <figure class="blog-item__img"><img src="<?= IMG ?>blog-03.png" alt=""></figure>
                                    <p class="blog-item__time"><time datetime="2019-09-19">2019.03.20</time></p>
                                    <h2 class="blog-item__ttl">祝!ブログ開設</h2>
                                    <p class="blog-item__txt">初めましてグラと申します、この度EGGGGという個人ブログを開設することになりました。 ...</p>
                                </a>
                            </article>
                        </div><!-- top-blog__wrapper -->
                        <p class="btn-normal ct slideright09"><a href="https://gura-web.com/">ブログを見る</a></p>
                    </div>
                </section><!-- top-blog -->
                <section id="section05" class="top-study-room ct">
                    <div class="top-study-room__wrapper">
                        <div class="inview"><h3 class="medium-ttl inview__inner">STUDY ROOM</h3></div>
                        <p class="medium-sub-ttl inview"><span class="inview__inner">勉強部屋</span></p>
                        <p class="top-study-room__txt inview"><span class="inview__inner">日々勉強したことやコツコツやっていることなどを貯めておく部屋です。</span></p>
                        <div class="top-study-room__wrap">
                            <p class="btn-normal slideright13"><a href="study_room/">部屋を見る</a></p>
                            <p class="top-study-room__ball slideright09"><img src="<?= IMG ?>deco-red_ball.svg" alt=""></p>
                        </div>
                    </div>
                </section>
                <p class="thanks"><img class="thanks__img" src="<?= IMG ?>deco-thanks.svg" alt=""></p>
            </div><!-- main__container -->
        </main>
<?php require_once('footer.php'); ?>