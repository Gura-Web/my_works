
<?php
    require_once "include_php/define.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."meta.php"; ?> 
	<title><?= SITE_NAME ?> | HOME</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>about_style.css" rel="stylesheet">
</head>


<body>
<?php require_once "include_php/header.php"; ?>
    <main class="main">
        <div class="top-visual">
            <div class="top-visual__wrapper">
                <div class="top-visual__wrap">
                    <h2 class="top-visual__ttl">コーギーってどんな犬?</h2>
                    <p class="top-visual__desc">このページではコーギーってどんな犬なのかをご紹介します</p>
                </div>
            </div>
        </div>
        <div class="underLayer-container">
            <section class="aboutCorgi">
                <div class="aboutCorgi__container">
                    <p class="aboutCorgi__img"><img src="<?= IMG ?>photo_sit.jpg" alt=""></p>
                    <div class="aboutCorgi__wrap">
                        <h2 class="aboutCorgi__ttl orange font32">コーギーって？</h2>
                        <p class="aboutCorgi__text">胴長で短足の見た目が特徴のコーギー。<br>
                        おっとりした顔でよく舌を出してることが多いです。<br>
                        原産国はイギリスのウェールズという所で、イギリス王室で古くから飼われていることで有名です。
                        </p>
                    </div>
                </div>
            </section>
            <section class="type">
                <h2 class="type__ttl font32">コーギーには<span class="brown">ペンブローク</span>と<span class="gray">カーディガン</span>がいる！</h2>
                <ul class="bothBox">
                    <li class="bothBox-item">
                        <p class="bothBox-item__img"><img src="<?= IMG ?>photo_front.jpg" alt=""></p>
                        <h3 class="bothBox-item__ttl brown">ウェルシュ・コーギー・ペンブローク</h3>
                        <p class="bothBox-item__desc">日本国内にいるコーギーのほとんどはペンブローク。<br> カーディガンと比べ耳がひとまわり小さい また興奮しやすく落ち着きがない。</p>
                    </li>
                    <li class="bothBox-item">
                        <p class="bothBox-item__img"><img src="<?= IMG ?>photo_relax.jpg" alt=""></p>
                        <h3 class="bothBox-item__ttl gray">ウェルシュ・コーギー・カーディガン</h3>
                        <p class="bothBox-item__desc">日本国内ではカーディガンはとても少ない。 ペンブロークより耳がひとまわり大きい 骨太でがっちりとした体型</p>
                    </li>
                </ul>
            </section>
            <section class="character">
                <p class="ttl-center--en">Character & Intelligence</p>
                <h2 class="ttl-center">コーギーの性格と賢さ</h2>
                <section class="leftBox">
                    <div class="leftBox__wrapper">
                        <p class="ttl-en">Character</p>
                        <h2 class="leftBox__ttl">コーギーは活発な性格！</h2>
                        <p class="leftBox__text">
                            とても活発で運動が大好き、社交的で飼い主に基本的には従順な犬種
                            食欲旺盛でなんでも際限なく食べるが、太りやすく食べ物に対する執着がとても強い。<br>
                            そのため飼い主はコーギーの食事管理と毎日の運動がかかせません。
                        </p>
                    </div>
                    <figure class="leftBox__image"><img src="<?= IMG ?>photo_run.jpg" alt="コーギーが走っている"></figure>
                </section>
                <section class="rightBox">
                    <div class="rightBox__wrapper">
                        <p class="ttl-en">Intelligence</p>
                        <h2 class="rightBox__ttl">コーギーはとても賢い！</h2>
                        <p class="rightBox__text">
                        とても活発で運動が大好き、社交的で飼い主に基本的には従順な犬種
                        食欲旺盛でなんでも際限なく食べるが、太りやすく食べ物に対する執着がとても強い。<br>
                        そのため飼い主はコーギーの食事管理と毎日の運動がかかせません。
                        </p>
                    </div>
                    <figure class="rightBox__image"><img src="<?= IMG ?>photo_glare.jpg" alt="コーギーが走っている"></figure>
                </section>
            </section>
            <section class="price">
                <p class="ttl-center--en">Price & Lifespan</p>
                <h2 class="ttl-center">コーギーの値段や寿命</h2>
                <ul class="bothBox">
                    <li class="bothBox-item">
                        <p class="bothBox-item__img"><img src="<?= IMG ?>photo_neck.jpg" alt=""></p>
                        <h3 class="bothBox-item__ttl brown">コーギーの値段</h3>
                        <p class="bothBox-item__desc">コーギーの値段はペットショップにもよりますが、一般的に１０〜２０万くらいが相場になっています。<br>
                        また血統により値段も変わってきます。</p>
                    </li>
                    <li class="bothBox-item">
                        <p class="bothBox-item__img"><img src="<?= IMG ?>photo_right_side.jpg" alt=""></p>
                        <h3 class="bothBox-item__ttl gray">コーギーの寿命</h3>
                        <p class="bothBox-item__desc">コーギーの寿命は１３歳前後が平均となっていて、<br>
                        中には１５年以上いきることもあるそうです。</p>
                    </li>
                </ul>
            </section>
        </div><!-- underLayer-container -->
    </main>
    <?php include_once("include_php/footer.php"); ?>
</body>
</html>