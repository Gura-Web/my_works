<header id="header" class="header header_show">
    <div class="header-container">
        <h1 class="header__logo">
            <a class="header__logo__link" href="index.php">
                <img class="header__logo__pc" src="<?= IMG_GLOBAL ?>yasai_logo.svg" alt="すてないやさい">    
                <img class="header__logo__sp none" src="<?= IMG_GLOBAL ?>logo_side.svg" alt="すてないやさい">
            </a>
        </h1>
        <nav class="header-menu">
            <div class="header-menu__container">
                <ul class="header-menu__main-list header-menu__main-list__first">
                    <li class="header-menu__main-item header__about"><a href="about.php">すてないやさいとは？<span class="header__en">About</span></a></li>
                    <li class="header-menu__main-item header__new-farmer"><a href="new_farmer.php">新人の野菜<span class="header__en">New Farmer</span></a></li>
                </ul>
                <ul class="header-menu__main-list header-menu__main-list__second">
                    <li class="header-menu__main-item header__event"><a href="event.php">イベント<span class="header__en">Event</span></a></li>
                    <li class="header-menu__main-item header__symbol"><a href="symbol.php">地域貢献シンボル<span class="header__en">Symbol</span></a></li>
                </ul>
            </div>

            <ul class="header-menu__sub-list">
                <li class="header-menu__sub-item header__mypage"><a href="#">マイページ</a></li>
                <li class="header-menu__sub-item header__favorite"><a href="insert.php">野菜登録</a></li>
                <li class="header-menu__sub-item header__good-value"><a href="#">お得な野菜</a></li>
                <li class="header-menu__sub-item header__history"><a href="#">注文履歴</a></li>
                <li class="header-menu__sub-item header__check"><a href="#">貢献度チェック</a></li>
                <li></li>
            </ul>
        </nav>
        <div class="account">
            <ul class="account__list">
                <li class="account__login"><a class="account__link" href="#">ログイン</a></li>
                <li class="account__register"><a class="account__link" href="#">会員登録</a></li>
            </ul>
        </div>
    </div>
</header>
<div id="toggle-nav" class="toggle-nav">
    <nav class="toggle-nav__container">
        <ul class="toggle-nav__list">
            <li class="toggle-nav__item"><a href="about.php">すてないやさいとは？</a></li>
            <li class="toggle-nav__item"><a href="new_farmer.php">新人の野菜</a></li>
            <li class="toggle-nav__item"><a href="event.php">イベント</a></li>
            <li class="toggle-nav__item"><a href="symbol.php">地域貢献シンボル</a></li>
            <li class="toggle-nav__item__small"><a href="insert.php">マイページ</a></li>
                <li class="toggle-nav__item__small"><a href="#">お気に入り農家</a></li>
                <li class="toggle-nav__item__small"><a href="#">お得な野菜</a></li>
                <li class="toggle-nav__item__small"><a href="#">注文履歴</a></li>
                <li class="toggle-nav__item__small"><a href="#">貢献度チェック</a></li>
        </ul>
    </nav> 
    <div class="toggle-nav__vege">右下</div>
    <div class="toggle-nav__sns">
        <p class="toggle-nav____twitter"><a href="#"><img src="<?= IMG_GLOBAL?>twitter_i.svg" alt="ツイッター"></a></p>
        <p class="toggle-nav__facebook"><a href="#"><img src="<?= IMG_GLOBAL?>facebook_i.svg" alt="フェイスブック"></a></p>
    </div>
</div>

<div id="header-toggle" class="header-toggle">
    <div id="header-toggle__wrapper" class="header-toggle__wrapper">
        <div class="header-toggle__one"></div>
        <div class="header-toggle__two"></div>
        <div class="header-toggle__three"></div>        
    </div>
</div>
