
<?php
    require_once "include_php/define.php";
?>
<!DOCTYPE html>
<html>
<head lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."meta.php"; ?> 
	<title><?= SITE_NAME ?> | HOME</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>index_style.css" rel="stylesheet">
</head>
<body>
<?php require_once "include_php/header.php"; ?>

    <main class="main">
        <div class="main-container">
            <div class="index-mainvisual">
                <h2 class="index-mainvisual__logo"><img src="<?= IMG ?>corgi_white.svg" alt="CORGI"></h2>
                <p class="index-mainvisual__text">いつもかわいい素敵なペット</p>
                <div class="scroll"><a href="#about"><img src="<?= IMG ?>hand_down.png" alt=""></a></div>
            </div>
            <section id="about" class="about">
                <h2 class="about__ttl"><img src="<?= IMG ?>corgi_ttl.png" alt="CORGIってなに？"></h2>
                <p class="about__text">コーギーを飼いたいって思う方に向けたコーギー紹介サイトです。<br>
                    「コーギーって実際飼って見たらどうなの？」とか<br>
                    「飼いたいけど飼えるか不安・・・」など<br>
                    コーギーの特徴や知っておくべき知識、飼い方などを全般的にご紹介しています。
                </p>
            </section>
            <div class="photos"></div>
            <section class="what-corgi">
                <div class="what-corgi__wrapper">
                    <h2 class="what-corgi__ttl">コーギーって？</h2>
                    <p class="what-corgi__text">胴長で短足が特徴のコーギー。<br>
                        とても活発な犬で運動するのが大好きな犬です。<br>
                        ふさふさな毛質と社交的な性格で飼う人みんな癒されています。
                        賢くて物覚えが良く、好奇心旺盛な性格が多い犬種です。
                    </p>
                    <p class="index-btn"><a href="about.php">さらに特徴を知る<span class="index-btn__en">STEP１</span></a></p>
                    <div class="note-wrap"><p class="what-corgi__note">ペンブロークとカーディガンという種類がいるよ</p></div>
                </div>
                <figure class="what-corgi__image"><img src="<?= IMG ?>photo_walk.jpg" alt="コーギーが平原を歩いている"></figure>
            </section>

            <section class="where-born">
                <div class="where-born__wrapper">
                    <h2 class="where-born__ttl">どこで生まれたの？</h2>
                    <p class="where-born__text">原産地はイギリスのウェールズという所で、牧羊犬として活躍していました。もともと<span class="main_color">ヒーラー※</span>として繁殖された犬種のため、散歩中の飼い主の足に噛み付くこともあったりします。<br>
                    <span class="main_color">※ 牛や羊などのかかとに噛み付いて、吠えながら追いかける役目</span>
                    </p>
                    <p class="index-btn"><a href="born.php">生い立ちを見る<span class="index-btn__en">STEP２</span></a></p>
                </div>
                <figure class="where-born__image"><img src="<?= IMG ?>photo_run.jpg" alt="コーギーが走っている"></figure>
                <div class="note-wrap"><p class="where-born__note">寒さに強くて暑さに弱いよ</p></div>
            </section>

            <section class="howTo-tame">
                <div class="howTo-tame__wrapper">
                    <h2 class="howTo-tame__ttl">飼うのは大変？</h2>
                    <p class="howTo-tame__text">
                        コーギーは非常に運動が大好きな犬種で、散歩の目安としては1日２回 30〜1時間くらいの運動量が必要となります。<br>
                        そのため飼い主はコーギーに対してしっかり時間をとれる人であることが前提となります。
                    </p>
                    <p class="index-btn"><a href="tame.php">飼い方を知る<span class="index-btn__en">STEP３</span></a></p>
                </div>
                <figure class="howTo-tame__image"><img src="<?= IMG ?>corgi_sit.jpg" alt="コーギーが座っている"></figure>
                <div class="note-wrap"><p class="howTo-tame__note">犬を飼うのが初めてな人にはおすすめできない！</p></div>
            </section>

            <section class="index-question">
                <div class="index-question__wrapper">
                    <h2 class="index-question__ttl">コーギーの疑問</h2>
                    <p class="index-question__text">「コーギーは中型犬？」<br>
                        「どうして尻尾がないの？」<br>
                        コーギーに関する気になること、不安なこと<br>
                        色んな疑問に答えます。
                    </p>
                    <p class="index-btn"><a href="#">知識を知る<span class="index-btn__en">STEP４</span></a></p>
                </div>
            </section>
        </div><!-- main-container -->
    </main>

<?php include_once("include_php/footer.php"); ?>
</body>
</html>