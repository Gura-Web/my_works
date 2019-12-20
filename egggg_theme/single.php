<?php get_header(); ?>
    <main class="main article-main">
        <div class="heading-background"></div>
        <?php if( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
        <section id="post-<?php the_ID(); ?>" <?php post_class('contents'); ?>>
            <div class="contents__container">
                <div class="contents-header">
                    <h2 class="contents-header__ttl"><?php the_title(); ?></h2>
                    <nav class="breadcrumb-list">
                        <ul class="breadcrumb-list__wrapper">
                            <li class="breadcrumb-list__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
                            <li class="breadcrumb-list__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        </ul>
                    </nav>
                    <p class="share-btn"><a href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>&via=Gura_web&tw_p=tweetbutton&related=Gura_web">
                    SHARE</a></p>
                    <div class="contents-header__wrap">
                        <p class="contents-header__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>
                        <p class="contents-header__category--<?php 
                            $cat = get_the_category();
                            $cat = $cat[0];
                             echo $cat->category_nicename;
                        ?>">
                        <?php the_category('a'); ?></p>
                    </div>
                </div>
                <div class="contents__main">
                    <p class="contents__eye-catch"><?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail('large'); ?>
                                    <?php else: ?>
                                    <img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>noimage.png" alt="noimage">
                                    <?php endif; ?></p>
                    <?php the_content(); ?>
                    <?php
                        endwhile;
                    endif; ?>
                </div><!-- contents__main -->
                <p class="share-btn"><a href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>&via=Gura_web&tw_p=tweetbutton&related=Gura_web">SHARE</a></p>
                <section class="relation">
                    <h3 class="relation__ttl">おすすめ記事</h3>
                    <?php
                        query_posts('showposts=3');
                        if (have_posts()) : 
                        while (have_posts()) : 
                        the_post();
                    ?>
                    <a href="#">
                        <article class="relation-item">
                            <p class="relation-item__img"><a href="<?php the_permalink(); ?>">
                                <?php if( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                <img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>noimage.png" alt="noimage">
                                <?php endif; ?>
                                </a>
                            </p>
                            <div class="relation-item__wrapper">
                                <div class="relation-item__wrap">
                                    <p class="relation-item__category"><?php the_category('a'); ?></p>
                                    <p class="relation-item__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>
                                </div>
                                <h4 class="relation-item__txt"><?php the_title(); ?></h4>
                            </div>
                        </article>
                    </a>
                    <?php
                        endwhile;
                        endif;
                    ?>
                </section>
                <div class="next-prev-article">
                    <div class="prev-article">
                        <p class="prev-article__ttl">前の記事</p>
                        <p class="prev-article__txt">
                            <?php if (get_previous_post()):?>
                                <?php previous_post_link('%link'); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="next-article">
                        <p class="next-article__ttl">次の記事</p>
                        <p class="next-article__txt">
                            <?php if (get_next_post()):?>
                                <?php next_post_link('%link'); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div><!-- contents__container -->
        </section><!-- contents -->
    </main>
    <?php get_footer(); ?>