<?php get_header(); ?>
    <main class="main">
        <?php if( is_home()): ?>
        <section class="main-visual">
            <div class="main-visual__container">
                <h2 class="heading"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>popular.svg" alt="Popular 人気の記事"></h2>
                <div class="popular-arrows"></div>
                <div class="slider">
                <ul class="slider-set">
                    
                    <?php 
                        $i = 0;
                        $args = ['tag' => 'popular']; 
                        $custom_posts = get_posts($args);
                        foreach ( $custom_posts as $post ): setup_postdata($post); 
                        if($i >= 5){
                            break;
                        }
                    ?>
                    <li class="popular-item popular-item--current slide-item recommend-tag">
                        <a class="popular-item__wrapper" href="<?php the_permalink(); ?>">
                            <article class="popular-item__inner">
                                <div class="popular-item__wrap">
                                    <h3 class="popular-item__ttl"><?php the_title(); ?></h3>
                                    <p class="popular-item__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>
                                    <p class="popular-item__txt"><?php the_excerpt(); ?></p>
                                </div>
                                <p class="btn--white">View</p>
                                <p class="popular-item__img">
                                    <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail('large'); ?>
                                    <?php else: ?>
                                    <img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>noimage.png" alt="noimage">
                                    <?php endif; ?>
                                </p>
                            </article>
                        </a>
                    </li>
                    <?php
                        $i++;
                        endforeach; 
                    ?>
                </ul>
                </div>
            </div><!-- main-visual__container -->
        </section><!-- main-visual -->
        <?php endif; ?>
        

        <div class="main-container">
            <div class="main-category">
                <h2 class="ttl-arrow--bottom">カテゴリー</h2>
                <ul class="main-category__items">
                    <?php 
                     $args = [
                        'title_li' => '',
                     ];
                     wp_list_categories( $args );
                     ?>

                </ul>
            </div><!-- main-category -->
            <section class="article">
                <h2 class="heading"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>article.svg" alt="Article 新着の一覧"></h2>
                <?php get_template_part('loop','main'); ?>
            </section><!-- article -->
        </div><!-- main-container -->
    </main>
<?php get_footer(); ?>