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
                    </div><!-- result-categories__container -->
                </div><!-- result-categories -->
                <nav class="breadcrumb-list">
                    <ul class="breadcrumb-list__wrapper">
                        <li class="breadcrumb-list__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
                        <?php if( is_tag() ) : ?>
                            <?php $url = get_tag_link( $postTag[0]->term_id ); ?>
                            <li class="breadcrumb-list__item"><a href="<?= $url ?>"><?php single_tag_title(); ?></a></li>
                        <?php else :?>
                            <li class="breadcrumb-list__item"><?php the_category('a'); ?></li>
                        <?php endif;?>
                    </ul>
                </nav>
            </div>
            <div class="article archive-article">
                <?php get_template_part('loop','main'); ?>
            </div><!-- article -->
        </section><!-- main-container -->
    </main>
    <?php get_footer(); ?>
