
<div class="article__wrapper">
<?php if( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-item'); ?>>
        <div class="article-item__wrapper">
            <div class="article-item__inner">
                <h3 class="article-item__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="article-item__wrap">
                    <p class="article-item__category--<?php
                        // カテゴリー取得
                    $cat = get_the_category();
                    $cat = $cat[0];
                        echo $cat->category_nicename;
                        ?>"><?php the_category('a'); ?></p>
                    <p class="article-item__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>
                </div>
                <p class="btn--normal"><a href="<?php the_permalink(); ?>">View</a></p>
            </div>
            <a class="article-item__img" href="<?php the_permalink(); ?>">
                <p>
                    <?php if( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php else: ?>
                    <img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>noimage.png" alt="noimage">
                    <?php endif; ?>
                </p>
            </a>
        </div>
    </article>
    <?php
    endwhile;
    else :
    ?>
    <?php if(is_search()): ?>
    <p class="no-found">検索結果はありませんでした</p>
    <?php else :?>
    <p class="no-found">記事はありません</p>
    <?php endif; ?>
<?php endif; ?>
</div>

<?php if( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>

