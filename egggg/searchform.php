<form class="search-box" action="<?php echo home_url('/'); ?>" method="GET">
    <input class="search-box__txt" type="text" value="<?php the_search_query(); ?>" name="s" id="s">
    <button class="search-box__submit" type="submit"><img src="<?= get_template_directory_uri(); ?>/<?= IMG ?>search_normal.svg" alt="検索"></button>
</form>