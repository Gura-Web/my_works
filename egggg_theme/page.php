<?php get_header(); ?>
    <main class="main <?php if(is_page( 'contact' )) { echo 'contact-main'; } ?>">
    
        <div class="heading-background"></div>

        <?php if( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
        <section id="post-<?php the_ID(); ?>" <?php post_class('contents about') ?>>
            <div class="contents__container">
                <div class="contents-header">
                    <h2 class="contents-header__ttl about-ttl"><?php the_title(); ?></h2>
                    <nav class="breadcrumb-list">
                        <ul class="breadcrumb-list__wrapper">
                            <li class="breadcrumb-list__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
                            <li class="breadcrumb-list__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        </ul>
                    </nav>
                    <?php the_content(); ?>
                </div>

            </div><!-- contents__container -->
        </section><!-- contents -->
        <?php
        endwhile;
        endif;
        ?>
    </main>
    <?php get_footer(); ?>