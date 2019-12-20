<?php 
  define("pagePath","qr_scan/");
  define("title","QRスキャン");
  require_once "head.php";

?>
  <body data-pageType="qrScan" class="body">
    <div class="layout">
        <header class="header">
          <div class="header__container">
            <p class="back-btn"><a href="index.php"><img src="<?= imgPath ?>ico-arrow__brown.svg" alt=""></a></p>
            <h1 class="header__heading"><img src="<?= imgPath ?>ico-qr.svg" alt="">QRコード</h1>
          </div>
        </header>
        <main class="main">
          <div class="main__container">
            <div class="qrContent">
              <div class="qrContent__wrap">
                <h2 class="qrContent__ttl">QRコード リーダー</h2>
                <p class="qrContent__time">制限時間:<span>30秒</span></p>
              </div>
              <div class="qrContent__scan"></div>
              <p class="qrContent__note">QRコードを画面に合わせれば自動で認識します。</p>
            </div>
            <div id="js-qrErrorModal" class="qrErrorModal">
              <p class="qrErrorModal__txt">QRを確認できませんでした。<br>もう一度読み取って下さい。</p>
              <p class="qrErrorModal__ico"><img src="<?= imgPath ?>ico-question.svg" alt=""></p>
              <p id="js-qrmodalClose" class="btn btn--color1"><a href="#">閉じる</a></p>
            </div>
            <div id="js-qrModalBackground" class="qrModalBackground"></div>
          </div><!-- main__container -->
        </main>
    </div><!-- layout -->

<?php require_once "bottom.php"; ?>
