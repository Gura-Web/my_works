<?php
  define("pagePath","home/");
  define("title","ホーム画面");
  require_once "head.php";
?>
  <body data-pageType="home" class="body">
    <div class="layout">
      <header id="js-header" class="header">
        <div class="header__container">
          <h1 class="chara-name"><img src="<?= imgPath ?>ico-chara_thumb.svg" alt=""><span>ぐでたま丸</span></h1>
          <p class="settingBtn"><a href="#"><img src="<?= imgPath ?>btn-setting.svg" alt=""></a></p>
        </div>
      </header>
      <main class="main">
        <div class="main__container">
          <div class="backWall">
            <div id="js-status" class="status">
                <ul class="status__list">
                  <!-- かわいさ -->
                  <li class="status__item">
                    <p class="status__silhouette"><img src="<?= imgPath ?>ico-chara1.svg" alt=""></p>
                    <p class="status__type">かわいさ</p>
                    <p class="status__txt"><span>あと</span><span class="status__num">20</span></p>
                    <div class="status__meter"><span class="status__meter status__meter--cute"></span></div>
                  </li>
                  <!-- かっこよさ -->
                  <li class="status__item">
                    <p class="status__silhouette"><img src="<?= imgPath ?>ico-chara2.svg" alt=""></p>
                    <p class="status__type">かっこよさ</p>
                    <p class="status__txt"><span>あと</span><span class="status__num">20</span></p>
                    <div class="status__meter"><span class="status__meter status__meter--cool"></span></div>
                  </li>
                  <!-- おしゃれさ -->
                  <li class="status__item">
                    <p class="status__silhouette"><img src="<?= imgPath ?>ico-chara3.svg" alt=""></p>
                    <p class="status__type">おしゃれさ</p>
                    <p class="status__txt"><span>あと</span><span class="status__num">20</span></p>
                    <div class="status__meter"><span class="status__meter status__meter--fashion"></span></div>
                  </li>
                </ul>
            </div><!-- status -->
            
            <div class="objects">
              <div class="obj-top">
                <p class="obj-top__item obj-top__item--one"><img src="<?= imgPath ?>obj-lamp.svg" alt=""></p>
                <p class="obj-top__item obj-top__item--two"><img src="<?= imgPath ?>obj-lamp__long.svg" alt=""></p>
              </div>
              <div id="js-obj-middle" class="obj-middle">
                <p id="js-character" class="character"><img src="<?= imgPath ?>character_rabbit_3.png" alt=""></p>
                <p class="obj-middle__item obj-middle__item--one"><img src="<?= imgPath ?>obj-window.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--two"><img src="<?= imgPath ?>obj-paint.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--three"><img src="<?= imgPath ?>obj-stand_lamp.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--four"><img src="<?= imgPath ?>obj-cabinet.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--five"><img src="<?= imgPath ?>obj-door.svg" alt=""></p>
              </div>
            </div><!-- objects -->
          </div><!-- topWall -->
          <div class="floor"></div>
        </div><!-- main__container -->
      </main>
      <footer class="footer">
        <div class="footer__container">
          <nav id="js-g-nav" class="g-nav">
            <ul class="g-nav__list">
              <li class="g-nav__item"><a href="qr_scan.php"><img src="<?= imgPath ?>btn-qr.svg" alt=""></a><span class="g-nav__txt">QRコード</span></li>
              <li class="g-nav__item"><a href="map.php"><img src="<?= imgPath ?>btn-map.svg" alt=""></a><span class="g-nav__txt">使えるお店</span></li>
              <li class="g-nav__item"><a href="item.php"><img src="<?= imgPath ?>btn-item.svg" alt=""></a><span class="g-nav__txt">アイテム</span></li>
            </ul>
          </nav>
        </div>
      </footer>
    </div><!-- layout -->

<?php require_once "bottom.php"; ?>
