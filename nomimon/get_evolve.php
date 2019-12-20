<?php 
  define("pagePath","get_evolve/");
  define("title","キャラが進化しました");
  require_once "head.php";

?>
  <body data-pageType="get_evolve" class="body">
    <div class="layout">
        <header class="header">
          <div class="header__container">
            <h1 id="js-headerHeading" class="header__heading"><img src="<?= imgPath ?>txt-omedetou.svg" alt="おめでとうございます"></h1>
          </div>
        </header>
        <main class="main">
          <div class="main__container">
            <div id="js-getEvolve" class="get-evolve">
              <img src="<?= imgPath ?>ico-decoCircle2.svg" alt="">
            </div>
            <div id="js-txtBox" class="txtBox">
              <h2 class="txtBox__evolve-heading"><span class="accentColor">「のみもん」</span>に<br>進化しました。</h2>
            </div>
          </div><!-- main__container -->
        </main>
          <footer class="footer">
          <div class="footer__container">
            <p class="goHomeBtn"><a href="index.php"><img src="<?= imgPath ?>btn-goHome.svg" alt="ホームに戻る"></a></p>
            <div class="background-bottom"></div>
          </div><!-- footer__container -->
        </footer>
    </div><!-- layout -->

<?php require_once "bottom.php"; ?>
