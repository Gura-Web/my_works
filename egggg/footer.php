
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-me">
                <p class="footer-me__illust"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>illust_footer.svg" alt="グラ"></p>
                <dl class="footer-me__wrapper">
                    <dt class="footer-me__name">グラ</dt>
                    <dd>Webデザインを学んでる専門学生です。<br>
                    イラストは似てません。</dd>
                    <dt class="footer-me__twitter">Twitter</dt>
                    <dd class="twitter-btn"><a href="https://twitter.com/Gura_web"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>twitter_white.svg" alt="twitter"></a></dd>
                </dl>
            </div><!-- footer-me -->
            <div class="footer-middle">
                <div class="footer-middle__container">
                    <div class="footer-category">
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
                    <div class="footer-tags">
                        <p class="ttl-arrow--bottom">タグ</p>
                            <?php
                            $args = [
                                'number' => '8',
                            ];
                                $posttags = get_tags( $args );
                                if ( $posttags ){
                                    echo ' <ul class="tags"> ';
                                    foreach( $posttags as $tag ) {
                                        echo '<li class="tags__list"><a href="'. get_tag_link( $tag->term_id ) .'">' . $tag->name . '</a></li>';
                                    }
                                    echo ' </ul> ';
                                }
                            ?>
                    </div>
                </div><!-- footer-middle__container -->
            </div><!-- footer-middle -->
            <div class="footer-bottom">
                <div class="footer-bottom__container">
                    <p class="footer-bottom__logo"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>logo_footer.svg" alt=""></p>
                    <nav class="footer-nav">
                        <?php
                        $args = [
                            'menu' => 'footer-navigation',
                            'container' => false,
                            'menu_class' => 'footer-nav__lists'
                        ];
                        wp_nav_menu($args);
                        ?>
                    </nav>
                    <section class="footer-recommend">
                        <h2 class="footer-recommend__heading">おすすめの記事</h2>
                        <ul class="footer-recommend__items">
                        <?php
                            query_posts('showposts=3');
                            if (have_posts()) : 
                            while (have_posts()) : 
                            the_post();
                        ?>
                            <li class="footer-recommend__item">
                                <a href="<?php the_permalink(); ?>">
                                    <article>
                                        <h3 class="footer-recommend__ttl"><?php the_title(); ?></h3>
                                        <figure class="footer-recommend__img">
                                            <?php if( has_post_thumbnail() ): ?>
                                            <?php the_post_thumbnail(array(10,10)); ?>
                                            <?php else: ?>
                                            <img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>noimage.png" alt="noimage">
                                            <?php endif; ?>
                                        </figure>
                                    </article>
                                </a>
                            </li>
                            <?php
                            endwhile;
                            endif;
                            ?>
                        </ul>
                    </section>
                </div><!-- footer-bottom__contaner -->
            </div><!-- footer-bottom -->
            <div class="go-top">
                <p class="go-top__btn"><a href="#">TOP</a></p>
            </div>
        </div><!-- footer-container -->
    </footer>
    <?php wp_footer(); ?>
    
</body>
</html>
