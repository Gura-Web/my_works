
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
	<link href="<?= CSS_PATH ?>born_style.css" rel="stylesheet">
</head>


<body>
<?php require_once "include_php/header.php"; ?>
    <main class="main">
        <div class="top-visual">
            <div class="top-visual__wrapper">
                <div class="top-visual__wrap">
                    <h2 class="top-visual__ttl">コーギーの生い立ち</h2>
                    <p class="top-visual__desc">このページではコーギーの生い立ちをご紹介します</p>
                </div>
            </div>
        </div>
        <div class="underLayer-container">
            <div class="wales">
                <p><img src="<?= IMG ?>wales.png" alt=""></p>
            </div>
            <section class="knowledge">
                <p class="ttl-center--en">Knowledge </p>
                <h2 class="ttl-center">元牧羊犬</h2>
                <section class="leftBox">
                    <div class="leftBox__wrapper">
                        <p class="ttl-en">Sheep Dog</p>
                        <h2 class="leftBox__ttl">コーギーは活発な性格！</h2>
                        <p class="leftBox__text">
                        コーギーは元牧羊犬で牛や羊の足を噛んで誘導する務めを果たす
                        犬種でした。<br>
                        そのため反射的に飼い主の足に噛み付くことも多々あります。
                        </p>
                    </div>
                    <figure class="leftBox__image"><img src="<?= IMG ?>photo_lookup.jpg" alt="コーギーが走っている"></figure>
                </section>
                <section class="rightBox extinction">
                    <div class="rightBox__wrapper">
                        <p class="ttl-en">Extinction</p>
                        <h2 class="rightBox__ttl">絶滅の危機!?</h2>
                        <p class="rightBox__text">
                        ２０１３年イギリスで生まれ、登録されたコーギーの数はたった２４１匹で絶滅危惧種とされました。<br>
                        イギリスで２０１６年に登録されたコーギーは３９３匹で以前として絶滅が危惧される状況にあります。
                        </p>
                    </div>
                    <figure class="rightBox__image"><img src="<?= IMG ?>photo_sleep.jpg" alt="コーギーが走っている"></figure>
                </section>
            </section>
            <section class="tail">
                <p class="ttl-center--en">Why no tail</p>
                <h2 class="ttl-center">どうしてコーギーには尻尾がないの？</h2>
                <p class="tail__img"><img src="<?= IMG ?>photo_tail.jpg" alt=""></p>
                <p class="tail__desc">コーギーの尻尾は昔からの習慣で、生後１週間以内に切り落とされます。<br>
                断尾の理由は元々コーギーは牧羊犬として働いていたため、牛に尻尾を踏まれないようにするためです。<br>
                カーディガンは断尾されることはないですが、ベンブロークは以前として断尾されています。</p>
            </section>
        </div><!-- underLayer-container -->
    </main>
    <?php include_once("include_php/footer.php"); ?>
</body>
</html>