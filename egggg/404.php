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
                            </ul>
                        </div>
                        <div class="sort">
                            <form action="" method="GET">
                                <p class="sort__txt">並び替え:</p>
                                <select name="sort" id="sortLists" class="sort-lists">
                                    <option value="">投稿日時が新しい順</option>
                                    <option value="">投稿日時が古い順</option>
                                    <option value="">人気順</option>
                                </select>
                            </form>
                        </div>
                    </div><!-- result-categories__container -->
                </div><!-- result-categories -->
                <nav class="breadcrumb-list">
                    <ul class="breadcrumb-list__wrapper">
                        <li class="breadcrumb-list__item"><a href="#">ホーム</a></li>
                        <li class="breadcrumb-list__item"><a href="#">デザイン</a></li>
                    </ul>
                </nav>
            </div>
            <div class="article archive-article">
                <p class="no-found">お探しのページはありませんでした。<br>
                申し訳ございませんが、<a class="red" href="<?php echo home_url();?>">こちら</a>のリンクからトップページへお戻りください。</p>
            </div><!-- section -->
        </section><!-- main-container -->
    </main>
    <?php get_footer(); ?>
