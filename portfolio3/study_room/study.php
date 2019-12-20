<?php 
    define('SITE_NAME', 'STUDY | HIROKI OGURA PORTFOLIO');
    define('IMG','../img/');
    define('JS','study');
    define('CSS','../css/');
    define('PAGE','profile');
    define('PATH','');
    require_once('header.php');
?>
<main class="main">
            <div id="vue" class="main__container product">
                <section class="product-detail">
                    <div class="product-detail__wrapper width">
                        <div class="product-detail__left">
                            <h2 class="product-detail__ttl" v-html="name"></h2>
                            <p class="product-detail__about-desc" v-html="about_desc"></p>
                            <p class="product-detail__desc" v-html="desc"></p>
                            <div class="product-info mt30">
                                <div class="product-info__left">
                                    <dl class="product-info__wrap">
                                        <dt>制作時期</dt>
                                        <dd v-html="season"></dd>
                                    </dl>
                                    <dl class="product-info__wrap">
                                        <dt>所要時間</dt>
                                        <dd v-html="time"></dd>
                                    </dl>
                                    <dl class="product-info__wrap">
                                        <dt>種類</dt>
                                        <dd v-html="type"></dd>
                                    </dl>
                                </div>
                            </div>
                        </div><!-- product-detail__left -->
                        <div class="product-detail__right">
                            <figure class="product-detail__img"><img v-bind:src="img" v-bind:alt="name"></figure>
                        </div><!-- product-detail__right -->
                    </div><!-- product-detail__wrapper -->
                </section><!-- product-detail -->
            </div><!-- main__container -->
        </main>
        <?php require_once('footer.php'); ?>