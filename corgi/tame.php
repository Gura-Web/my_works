
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
	<link href="<?= CSS_PATH ?>tame_style.css" rel="stylesheet">
</head>


<body>
<?php require_once "include_php/header.php"; ?>
    <main class="main">
        <div class="top-visual">
            <div class="top-visual__wrapper">
                <div class="top-visual__wrap">
                    <h2 class="top-visual__ttl">コーギーの飼い方</h2>
                    <p class="top-visual__desc">このページではコーギーの飼い方をご紹介します</p>
                </div>
            </div>
        </div>
        <div class="underLayer-container">
            <section class="hard">
                <div class="hard__wrap">
                    <h2 class="hard__ttl">コーギーは飼うのが大変</h2>
                    <p class="hard__desc">コーギーの原産地はイギリスのウェールズという所です。<br>
                    原産国のイギリスは日本より寒い国であることから、コーギーは寒さに強く暑さに弱い動物となっています。</p>
                </div>
                <p class="hard__img"><img src="<?= IMG ?>photo_two_dog.jpg" alt=""></p>
                <div class="hard__wrapper">
                    <section class="hard-item">
                        <p class="hard-item__img"><img src="<?= IMG ?>photo_walk_time.jpg" alt=""></p>
                        <h3 class="hard-item__ttl">散歩時間<span class="hard-item__ttl--small">の</span>目安
                            <span class="hard-item__ttl--small">は</span><br>
                            <span class="orange">1</span><span class="orange">時間</span>
                        </h3>
                        <p class="hard-item__desc">散歩の目安としては1日２回前後で３０〜１時間ほどがいいかと思います。かなりの運動量が必要なので飼い主もコーギーに
                        しっかり時間をかけれる方でないとおすすめできません。</p>
                    </section>
                    <section class="hard-item">
                        <p class="hard-item__img"><img src="<?= IMG ?>photo_indoor.jpg" alt=""></p>
                        <h3 class="hard-item__ttl">抜け毛が多い</h3>
                        <p class="hard-item__desc">コーギーは抜け毛が多く、室内飼育の場合頻繁な掃除が必要となります。　衣服につきやすい毛質なため外出時には
                        コロコロが必需品といえるでしょう。</p>
                    </section>
                    <section class="hard-item">
                        <p class="hard-item__img"><img src="<?= IMG ?>photo_yawn.jpg" alt=""></p>
                        <h3 class="hard-item__ttl">吠え癖、噛み癖が酷い！</h3>
                        <p class="hard-item__desc">コーギーは元牧羊犬で、知らない人が入ってきたり、家のベルが鳴ったりなどがあった場合に吠えるタイプのコーギーが多いです。<br>
                        また羊に噛み付いたり吠えたりして追いかけたりするのが牧羊犬のため、反射的に飼い主の足に噛み付くこともよくあります。</p>
                    </section>
                    <section class="hard-item">
                    <p class="hard-item__img"><img src="<?= IMG ?>photo_walk_plain.jpg" alt=""></p>
                        <h3 class="hard-item__ttl">ヘルニアになりやすい</h3>
                        <p class="hard-item__desc">コーギーは太ると脊髄・腰椎に負担がかかりやすいため、徹底した食事管理が必要となります。<br>
                        特に階段での運動は腰への負担が高いためできるだけやめるようにしましょう。</p>
                    </section>
                </div>
                <section class="meal">
                    <p class="ttl-center--en">Meal</p>
                    <h2 class="ttl-center">コーギーの食事</h2>
                    <p class="meal__desc">コーギーは食欲旺盛で太りやすく、飼い主のきちんとした食事管理がかかせません。<br>
                    それに毎日の十分な運動が必要となります。</p>
                    <section class="leftBox">
                        <div class="leftBox__wrapper">
                            <p class="ttl-en">Dogfood</p>
                            <h2 class="leftBox__ttl">外国産ドッグフードが<br>おすすめ</h2>
                            <p class="leftBox__text">
                            コーギーは元牧羊犬で、知らない人が入ってきたり、家のベルが鳴ったりなどがあった場合に吠えるタイプのコーギーが多いです。<br>
                            また羊に噛み付いたり吠えたりして追いかけたりするのが牧羊犬のため、反射的に飼い主の足に噛み付くこともよくあります。
                            </p>
                        </div>
                        <figure class="leftBox__image"><img src="<?= IMG ?>photo_dogfood.jpg" alt=""></figure>
                    </section>
                </section>
            </section>
            
        </div><!-- underLayer-container -->
    </main>
    <?php include_once("include_php/footer.php"); ?>
</body>
</html>