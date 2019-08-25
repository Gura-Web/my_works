<?php include('head.php') ?>
<body>
<header id="header" class="header">
    <div class="header__container">
        <h1 class="header__logo"><a href="index.php"><img src="<?= IMG_PATH ?>logo.svg" alt="Ogura Portfolio"></a></h1>
        <div id="menu" class="header__menu"><div></div></div>
    </div>
    <nav id="menuList" class="header-nav none">
        <ul class="header-nav__list">
            <li><a href="index.php">HOME</a></li>
            <li><a href="profile.php">PROFILE</a></li>
            <li><a href="works.php">WORKS</a></li>
            <li><a href="https://myblog.gura-web.com/">BLOG</a></li>
        </ul>
    </nav>
    <div id="toggleBtn" class="menu-toggle none"></div>
</header>