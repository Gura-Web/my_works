<?php

	require_once "include_php/main.php"; 
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="keywords" content="すてないやさい,訳あり野菜,レストラン,農家">
	<meta name="description" content="レストラン向けの訳あり野菜通販サイト">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@twitteraccount">
	<meta property="og:site_name" content="すてないやさい">
	<meta property="og:title" content="すてないやさい | トップページ">
	<meta property="og:description" content="レストラン向けの訳あり野菜通販サイト">
	<meta property="og:url" content="https://hoge.ecc.com/">
	<meta property="og:image" content="https://hoge.ecc.com/ogp.png">
	<meta property="og:type" content="website">
	<link rel="canonical" href="http://">
	<!-- <link rel="alternate" type="" title="" href="http://"> -->
	<link rel="shortcut icon" href="<?= IMG_FAVICON ?>farmer-support_favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="<?= IMG_FAVICON ?>farmer-support_favicon.ico">
	<title>就農応援プログラム</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.0.0/dist/css/yakuhanjp.min.css">
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>farmer_support/farmer-support_style.css" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="header__container">
			<h1 class="logo"><a href="#"><img src="<?= IMG_FARMER ?>farmer-support_logo.svg" alt="就農応援プログラム"></a></h1>
			<nav class="header-nav">
				<ul class="header-nav__wrapper">
					<li class="header-nav__list"><a class="header-nav__link" href="#farmer-life">農家の生活って？</a></li>
					<li class="header-nav__list"><a class="header-nav__link" href="#family">嬉しい支援内容</a></li>
					<li class="header-nav__list"><a class="header-nav__link" href="#to-farmer">農家になるまで</a></li>
					<li class="header-nav__list"><a class="header-nav__link" href="#guide">説明会のご案内</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<main class="main">
		<div class="main__container">
            <div class="main-visual">
                <div class="main-visual__wrapper scale_hide">
                    <h2 class="main-visual__catch">理想<span class="main-visual__small__font">の</span>農業<span class="main-visual__middle__font">始めませんか？</span></h2>
                </div>
            </div>

            <section class="about">
                <div class="about__container">
                    <h2 class="about__ttl scroll_hide1"><span class="about__ttl__small">始めよう！</span>就農応援プログラム</h2>
                    <p class="about__desc scroll_hide1">就農応援プログラムとは、<br>
                        「農業の仕事に興味があるけれど、今の仕事を辞めて大丈夫だろうか」「失敗しそうで怖い」「何から始めればいいかわからない」といった不安をお持ちの方へ。                
                    </p>
                    <p class="about__desc scroll_hide1">
                        このプログラムでは農業に興味のある方を対象に農家として安定して働いていだけるように応援するプログラムです。
                    </p>
                </div>
            </section>

            <section id="farmer-life" class="farmer-life">
                <h2 class="farmer-life__ttl scroll_hide1"><span class="farmer-life__ttl__small">ゆ<span class="mainColorDark">と</span>り<span class="mainColorDark">あ</span>る</span><span class="mainColorDark">農家</span><span class="farmer-life__ttl__middle">の</span>生活</h2>
                <div class="farmer-life__wrapper">
                    <section class="life-item private scroll_hide2">
                        <div class="life-item__wrap">
                            <h3 class="life-item__ttl mainColorDark">仕事だけじゃない、<br>プライベートな時間を持てる</h3>
                            <p class="life-item__text">最初は小さな農場から始めるので野菜につきっきりにはならず、自分に合ったライフスタイルで働くことができます。</p>
                        </div>
                            <p class="life-item__image"><img src="<?= IMG_FARMER ?>work_life_balance.jpg" alt="家族団欒を楽しむ四人家族"></p>
                    </section>
                    <section class="life-item hobby scroll_hide3">
                        <div class="life-item__wrap">
                            <h3 class="life-item__ttl assortColor">副業や趣味との両立。</h3>
                            <p class="life-item__text">基本は野菜を育てて自由な時間では趣味や副業をするなどプライベートと両立ができ、自由な働きかたができるのが農家の魅力です。</p>
                        </div>
                        <p class="life-item__image"><img src="<?= IMG_FARMER ?>reading.jpg" alt="本を両手に窓の外を見る女性"></p>
                        
                    </section>
                    <section class="life-item healthy-life scroll_hide2">
                        <div class="life-item__wrap">
                            <h3 class="life-item__ttl accentColor">健康的な生活を送る。</h3>
                            <p class="life-item__text">自然と触れ合い、育てた野菜を出荷し、自分も食べる。<br>農家ならではの健康的な生活が送れるのもこの仕事の魅力です。</p>
                        </div>
                        <p class="life-item__image"><img src="<?= IMG_FARMER ?>healthy_life.jpg" alt="芝生の上で座ってリラックスしてる女性"></p>
                        
                    </section>
                </div>
            </section>

            <section id="family" class="family">
                <div class="family__container">
                    <h2 class="family__ttl scroll_hide1"><span class="family__ttl__small"><span class="mainColorDark">家</span>族で<span class="mainColorDark">移</span>住！</span><span class="mainColorDark">家族向け</span><span class="family__ttl__middle">の</span>移住支援</h2>
                    <p class="family__text scroll_hide1"><span class="family__text__small">各自治体が行なっている移住支援制度で、</span>家族ごと移住する場合も<span class="accentColor">メリット</span>があります。</p>
                    <p class="family__note scroll_hide1">※支援内容は各自治体によって変わります</p>
                    <section class="example scroll_hide1">
                        <div class="example__wrapper">
                            <div class="example__wrap">
                                <h3 class="example__ttl"><span class="example__ttl__small">修学が困難な方は</span><span class="assortColor">返還なし</span>で<span class="assortColor">奨学金</span>を給付!!</h3>
                                <p class="example__text">学業優秀、品行方正、かつ経済的理由により大学などでの修学が困難な人に対して奨学金の給付する。（返還なし）</p>
                                <p class="example__case">例えば、 岩手県 一戸町の場合</p>
                                <p class="farmer-checkBtn"><a class="farmer-checkBtn__link" href="https://www.iju-join.jp/feature_cont/file/042/03.html">自治体の支援内容を見る</a></p>
                            </div>
                            <p class="example__image"><img src="<?= IMG_FARMER ?>train.jpg" alt="列車が２両走っている"></p>
                        </div>
                    </section>
                </div>
            </section>
            
            <section class="problem">
                <div class="problem__container">
                    <h2 class="problem__ttl scroll_hide2">農業を始める際の<span class="problem__ttl__big">問題点</span></h2>
                    <p class="problem__text scroll_hide3">
                        今まで農業を始める際に問題となっていたのは高額な初期投資。<br>農地や住処、道具など揃えるものも多く農業を始める敷居は高いものでした。
            　　    </p>
                </div>
                <ul class="problem-list scroll_hide1">
                    <li clasS="problem-list__item">高額な初期費用</li>
                    <li clasS="problem-list__item">農地や道具の費用</li>
                    <li clasS="problem-list__item">家を借りる資金</li>
                </ul>
            </section>

            <section class="no-cost">
                <h2 class="no-cost__ttl scroll_hide1"><span class="no-cost__ttl__small"><span class="mainColorDark">高額</span>な</span>初期費用は<span class="mainColorDark">不要!!</span></h2>
                <section class="cost-support">
                    <div class="cost-support__wrapper scroll_hide2">
                        <div class="cost-support__wrap">
                            <h3 class="cost-support__ttl">高額な初期費用をサポート</h3>
                            <p class="cost-support__desc">当プログラムでは投資費用が十分でない方でも農業を始めれるように、高齢化などで有効に使われていない土地や道具を活用して支援を行います。</p>
                            <p class="support-point__ttl">Point!</p>
                            <ul class="support-point">
                                <li class="support-point__list">コスト不要</li>
                                <li class="support-point__list">道具類は全て貸し出し</li>
                                <li class="support-point__list">住み場所を提供</li>
                            </ul>
                        </div>
                        <p class="cost-support__image scroll_hide2"><img src="<?= IMG_FARMER ?>couple_farmer.jpg" alt="笑顔の若い夫婦"></p>
                    </div>
                    <ul class="merit-list">
                        <li clasS="merit-list__item scroll_hide1">補助金をもらいながら<br>就農ができる</li>
                        <li clasS="merit-list__item scroll_hide1">使われない土地を<br>貸し出し</li>
                        <li clasS="merit-list__item scroll_hide1">改修した空き家を<br>住み場所として提供</li>
                    </ul>
                </section>
            </section>
            
            <section id="to-farmer" class="to-farmer">
                <h2 class="to-farmer__ttl scroll_hide1"><span class="mainColorDark">農家</span>になるまで</h2>
                <section class="fail scroll_hide2">
                    <div class="fail__wrapper">
                        <div class="fail__wrap">
                            <h3 class="fail__ttl">脱サラ農業で失敗する大きな理由は勉強不足</h3>
                            <p class="fail__text">脱サラ農業で失敗する主な原因は勉強不足が一番多く、<br>
                                「想定外の自体になった場合どうすればいいかわからない。」「周りに聞ける農家がいない。」など一人で始めるには難しい部分が多くあります。
                            </p>
                        </div>
                    </div>
                </section>
                <section class="study-support scroll_hide3">
                    <div class="study-support__wrapper">
                        <div class="study-support__wrap">
                            <h3 class="study-support__ttl">教育から独立まで<br>いちから就農を支援</h3>
                            <p class="study-support__text">
                                この就農応援プログラムでは都道府県実地するの就農する方向けの補助金制度を利用して、就農に失敗しないよう教育から独立して安定するまでを全面的にサポート致します。
                            </p>
                            <p><a class="study-support__link" href="http://www.maff.go.jp/j/new_farmer/n_syunou/roudou.html">農業次世代人材投資資金</a></p>
                        </div>
                    </div>
                </section>
                <section class="process">
                    <h3 class="process__ttl scroll_hide1"><span class="mainColorDark">就農</span>の流れ</h3>
                    <section class="step-one scroll_hide3">
                        <div class="step-one__wrap">
                            <h4 class="step-one__ttl"><span class="step-one__en">STEP1</span><span class="step-one__circle">始</span>める</h4>
                            <p class="step-one__desc">説明会に参加してもらい、農家の仕事について知ってもらうことから始めます。</p>
                        </div>
                        <figure class="step-one__image"><img src="<?= IMG_FARMER ?>explain.jpg" alt="説明をする女性"></figure>
                    </section>
                    <section class="step-two scroll_hide2">
                        <div class="step-two__wrap">
                            <h4 class="step-two__ttl"><span class="step-two__en">STEP2</span><span class="step-two__circle">学</span>ぶ</h4>
                            <p class="step-two__desc">給付金を受け取りながら農家のもとで農業のノウハウを学んでいただきます。</p>
                        </div>
                        <figure class="step-two__image"><img src="<?= IMG_FARMER ?>teach.jpg" alt="楽しそうにノウハウを教える男性と学ぶ女性"></figure>
                    </section>
                    <section class="step-three scroll_hide3">
                        <div class="step-three__wrap">
                            <h4 class="step-three__ttl"><span class="step-three__en">STEP3</span><span class="step-three__circle">独</span>立する</h4>
                            <p class="step-three__desc">実際に農家として独り立ち、または農家に就職することができます。</p>
                        </div>
                        <figure class="step-three__image"><img src="<?= IMG_FARMER ?>became.jpg" alt="収穫して笑顔な農家"></figure>
                    </section>
                    <section class="step-four scroll_hide2">
                        <div class="step-four__wrap">
                            <h4 class="step-four__ttl"><span class="step-four__en">STEP4</span><span class="step-four__circle">支</span>援</h4>
                            <p class="step-four__desc"> 独立して終わりでなく、農家としての生活が安定するまで<a class="step-four__link" href="new_farmer.php">「しんじんのやさい」</a>という野菜を販売するサービスを利用いただけます。</p>
                        </div>
                        <figure class="step-four__image"><img src="<?= IMG_FARMER ?>internet_sales.jpg" alt="ipadを使って野菜を管理している"></figure>
                    </section>
                </section>
            </section>

            <section class="target">
            <div class="target__wrapper">
                    <h2 class="target__ttl scroll_hide1"><span class="target__ttl__small">プ<span class="mainColorDark">ロ</span>グ<span class="mainColorDark">ラ</span>ム</span><span class="mainColorDark">申し込み</span>対象者</h2>
                    <div class="target__wrap">
                        <ul class="target__list scroll_hide3">
                            <li class="target__item">就農予定時の年齢が、原則45歳未満</li>
                            <li class="target__item">独立・自営就農または雇用就農を目指すこと</li>
                            <li class="target__item">常勤の雇用契約を締結していないこと</li>
                        </ul>
                        <p class="target__image scroll_hide2"><img src="<?= IMG_FARMER ?>pen_mark.png" alt=""></p>
                    </div>
                    <p class="farmer-checkBtn scroll_hide1"><a class="farmer-checkBtn__link" href="http://www.maff.go.jp/j/new_farmer/n_syunou/roudou.html">詳しくはコチラ</a></p>
                </div>
            </section>

            <section id="guide" class="guide">
                <h2 class="guide__ttl scroll_hide1"><span class="mainColorDark">説明会</span><span class="guide__ttl__middle">の</span>ご案内</h2>
                <div class="guide__container">
                    <p class="guide__logo scroll_hide3"><img src="<?= IMG_FARMER ?>farmer-support_logo.svg" alt="就農応援プログラム"></p>
                    <div class="guide__wrapper scroll_hide2">
                        <div class="guide__date__wrap">
                            <h3 class="guide__date">【日時】</h3>
                            <p class="guide__date__text"><time datetime="2019-09-08 11:00">2019年9月8日(日) 11:00 ~ 17:00</time></p>
                        </div>
                        <div class="guide__place__wrap">
                            <h3 class="guide__place">【場所】</h3>
                            <p class="guide__place__text">東京都千代田区大手町２丁目６−１<br>
                                朝日生命大手町ビルフクラシア東京ステーション会議室1
                            </p>
                            <p class="guide__note">東京駅に近くアクセスしやすい地域で、駐車場もあります</p>
                        </div>
                    </div>
                </div>

            </section>

		</div><!-- main-container -->
	</main><!-- main -->

	<?php include_once "include_php/lp_footer.php"; ?>
<script src="js/farmer_support.js">
</script>
</body>
</html>