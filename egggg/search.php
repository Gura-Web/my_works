<?php get_header(); ?>
    <main class="main">
        <section class="main-container">
            <div class="heading-background">
                <h2 class="heading"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>archive.svg" alt="archive 記事の一覧"></h2>
            </div>
            <div class="result-menu">
                <div class="result-categories">
                    <div class="result-categories__container">
                        <div class="result-categories__wrapper">
                            <p class="ttl-arrow--bottom">カテゴリー</p>
                            <ul class="categories">
                                <?php 
                                $args = [
                                    'title_li' => '',
                                    
                                ];
                                wp_list_categories( $args );
                                ?>
                                <!-- <li class="categories__list--design"><a href="#">デザイン</a></li>
                                <li class="categories__list--code"><a href="#">コーディング</a></li>
                                <li class="categories__list--school"><a href="#">学校のこと</a></li>
                                <li class="categories__list--private"><a href="#">私生活</a></li> -->
                            </ul>
                        </div>
                    </div><!-- result-categories__container -->
                </div><!-- result-categories -->
                <nav class="breadcrumb-list">
                    <ul class="breadcrumb-list__wrapper">
                        <li class="breadcrumb-list__item"><a href="#">ホーム</a></li>
                        <li class="breadcrumb-list__item"><a href="#"><?php the_search_query(); ?>の検索結果</a></li>
                    </ul>
                </nav>
            </div>
            <p class="result-txt">「<?php the_search_query(); ?>」<span class="result-txt__small">の</span>検索結果</p>
            <div class="article archive-article">
                <?php get_template_part('loop','main'); ?>
            </div><!-- article -->
        </section><!-- main-container -->
    </main>
    <?php get_footer(); ?>
