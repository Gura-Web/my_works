<?php 
    define('SITE_NAME', 'PRODUCT | HIROKI OGURA PORTFOLIO');
    define('IMG','img/');
    define('IMG_WORK','img/product/');
    define('CSS','css/');
    define('JS','product');
    include_once('header.php');
?>
                <div class="go-top"><a href="#"></a></div>
            </div><!-- header__container -->
        </header>
        <main class="main">
            <div id="vue" class="main__container product">
                <section class="product-detail">
                    <div class="product-detail__wrapper width">
                        <div class="product-detail__left">
                            <p class="product-detail__type color1 ls100" v-html="work"></p>
                            <h2 class="product-detail__ttl" v-html="name"></h2>
                            <p class="product-detail__about-desc" v-html="about_desc"></p>
                            <p class="product-detail__desc" v-html="desc"></p>
                            <div v-html="desc_sub"></div>
                            <div v-html="special1"></div>
                            <div v-html="special2"></div>
                        </div><!-- product-detail__left -->
                        <div class="product-detail__right">
                            <figure class="product-detail__img"><img v-bind:src="img" v-bind:alt="name"></figure>
                            <!-- <p class="btn-normal ct mt30"><a href="#" v-bind:onclick="sp_link" v-html="link_txt"></a></p> -->
                            <p class="btn-normal ct mt30" v-html="link"></p>
                        </div><!-- product-detail__right -->
                        <p class="main-visual__scroll"><a href="#productInfo">SCROLL</a></p>
                    </div><!-- product-detail__wrapper -->
                </section><!-- product-detail -->

                <div id="productInfo" class="product-info">
                    <div class="product-info__left">
                        <dl class="product-info__wrap">
                            <dt>担当</dt>
                            <dd v-html="role"></dd>
                        </dl>
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
                        <dl class="product-info__wrap">
                            <dt>制作意志</dt>
                            <dd v-html="will"></dd>
                        </dl>
                    </div>
                    <div class="product-info__right">
                        <dl class="product-skill">
                            <dt>使用スキル</dt>
                            <dd v-html="skill"></dd>
                        </dl>
                    </div>
                </div>
                <div v-html="content">
                </div>
                <section class="recommend-work width">
                    <h3 class="recommend-work__ttl">おすすめの作品</h3>
                    <div class="work-list slideup02">
                        <article class="work-item mix cate-web cate-single cate-school cate-good cate-idea">
                            <a target="_blank" href="product.php?=sutenaiyasai">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-sutenai_yasai.png" alt=""></figure>
                                <p class="work-item__info">1年後期<span class="work-item__slash">学校課題</span></p>
                                <h4 class="work-item__ttl">[ECCEXPO最優秀賞] すてないやさい</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-private cate-good">
                            <a target="_blank" href="product.php?=portfolio3">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-portfolio3.png" alt=""></figure>
                                <p class="work-item__info">2年前期<span class="work-item__slash">個人的に</span></p>
                                <h4 class="work-item__ttl">ポートフォリオ３作目</h4>
                            </a>
                        </article>
                        <article class="work-item mix cate-web cate-single cate-private cate-good">
                            <a target="_blank" href="product.php?=wedding">
                                <figure class="work-item__img"><img src="<?= IMG_WORK ?>thumb-wedding.png" alt=""></figure>
                                <p class="work-item__info">1年春休み<span>個人的に</span></p>
                                <h4 class="work-item__ttl">Fantastic Memories</h4>
                            </a>
                        </article>
                        <p class="btn-normal"><a href="works.php">作品一覧へ戻る</a></p>
                    </div>
                </section>
            </div><!-- main__container -->
        </main>
    <?php include_once('footer.php') ?>
</body>
</html>