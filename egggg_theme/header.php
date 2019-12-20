<?php 
    define('SITE_NAME', 'EGGGG');
    define('IMG','img/');
?>

<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="">
    <meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Gura_web">
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:type" content="website">
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/<?= IMG ?>favicon.ico" type="image/vnd.microsoft.icon">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:400,500,700" rel="stylesheet">
    <!-- caronical設定 -->
    <?php if ( is_home() ) {
    $canonical_url=get_bloginfo('url')."/";
    }
    else if (is_category())
    {
        $canonical_url=get_category_link(get_query_var('cat'));
    }
    else if (is_page()||is_single())
    {
        $canonical_url=get_permalink();
    }
    if ( $paged >= 2 || $page >= 2)
    {
    $canonical_url=$canonical_url.'page/'.max( $paged, $page ).'/';
    }
    ?>
    <?php if(!(is_404())):?>
        <link rel="canonical" hreflang="<?php echo $canonical_url; ?>" />
    <?php endif;?>
    <!-- description設定 -->
    <?php if ( is_single()): ?>
    <?php if ($post->post_excerpt){ ?>
    <meta name="description" content="<? echo $post->post_excerpt; ?>" />
    <?php } else {
            $summary = strip_tags($post->post_content);
            $summary = str_replace("\n", "", $summary);
            $summary = mb_substr($summary, 0, 120). "…"; ?>
    <meta name="description" content="<?php echo $summary; ?>" />
    <?php } ?>
    <?php elseif ( is_home() || is_front_page() ): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php elseif ( is_category() ): ?>
    <meta name="description" content="<?php echo category_description(); ?>" />
    <?php elseif ( is_tag() ): ?>
    <meta name="description" content="<?php echo tag_description(); ?>" />
    <?php else: ?>
    <meta name="description" content="<?php the_excerpt();?>" />
    <?php endif; ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136495833-1"></script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4915536652171935",
    enable_page_level_ads: true
  });
</script>
<script async src="//
pagead2.googlesyndication.­com/
pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
google_ad_client: "pub-4915536652171935",
enable_page_level_ads: true
});
</script> 

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136495833-1');
</script>
    <script>
        var path = "<?php echo get_template_directory_uri();?>";
    </script>
    <?php
        wp_enqueue_script('jquery');
        wp_head();
     ?>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-container">
            <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>logo.svg" alt="EGGG"></a></h1>
            <label class="menu-view" for="menu-handle">
                <span class="menu-view__btn"></span>
            </label>
        </div><!-- header-container -->
        <input id="menu-handle" type="checkbox">
            <div class="menu-content">
                <div class="menu-content__wrapper">
                    <label class="menu-close" for="menu-handle"></label>
                    <nav class="menu-nav">
                            <?php
                            $args = [
                                'menu' => 'global-navigation',
                                'container' => false,
                                'menu_class' => 'menu-nav__lists'
                            ];
                            wp_nav_menu($args);
                            ?>
                    </nav>
                    <div class="menu-nav__category">
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
                    <p class="twitter-btn--square"><a href="https://twitter.com/Gura_web"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>twitter_blue.svg" alt="twitter"></a></p>
                </div> <!-- menu-content__wrapper -->
            </div><!-- menu-content -->
    </header>
    <div class="search">
        <label class="search-btn" for="search-handle"></label>
        <input id="search-handle" type="checkbox">
        <div class="search-content">
            <div class="search-content__wrapper">
                <p class="search-content__illust"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>search_illust.svg" alt=""></p>
                <p class="search-content__txt">キーワードを入力してね</p>
                <?php get_search_form();?>
            </div>
            <label class="menu-close" for="search-handle"></label>
        </div>
    </div>