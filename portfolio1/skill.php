<?php
	require_once "include_php/main.php"; // 定数・コンテンツデータ
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<!-- meta属性のデータを挿入 -->
	<?php require_once PHP_PATH."meta.php"; ?> 
	<title><?= SITE_NAME ?> | SKILL</title>
	<link href="<?= CSS_PATH ?>ress.css" rel="stylesheet"> 
	<link href="<?= CSS_PATH ?>skill_style.css" rel="stylesheet">
</head>
<body>
    <?php require "include_php/header.html" ?>
    

    <div>
        <p class="sidebar-toggle none">目次</p>
    </div>
    <div class="sidebar">
        <ul class="sidebar__wrapper">
            <li id="school-study_link" class="sidebar__item"><a href="#school-study"><span class="sidebar__text">学校の勉強</span></a></li>
            <li id="studying-now_link" class="sidebar__item"><a href="#studying-now"><span class="sidebar__text">スキル</span></a></li>
            <li id="skill-comment_link" class="sidebar__item"><a href="#skill-comment"><span class="sidebar__text">コメント</span></a></li>
        </ul>
    </div>

	<main class="main">
		<div class="main__container">
            <h1 class="global-ttl">SKILL<span class="global-ttl__jp">スキル</span></h1>
            <section id="school-study" class="school-study">
                <h2 class="g-heading">学校の勉強</h2>
                <p class="school-study__text">学校では主にWEBデザインからコーディングまで一通り学んでます。<br>
                その他にはDTPの知識や、コンセプトワーク、グループ制作などを学校では行います。<br>
                自分はプログラムにも興味があるので、放課後はJavascriptの勉強会に参加したりエンジニア専攻だけの授業ですが、PHPの授業に毎回エンジニアの人に混ざって授業を受けています。</p>
            </section>

            <section id="studying-now" class="studying-now">
                <h2 class="g-heading">勉強中のスキル</h2>
                <section class="studying-content">
                    <h3 class="box-heading__color">Tool</h3>
                    <ul class="studying-content__list">
                        <li class="studying-content__item studying-content__photoshop"><span class="studying-content__text">Photoshop</span></li>
                        <li class="studying-content__item studying-content__vscode"><span class="studying-content__text">VSCode</span></li>
                        <li class="studying-content__item studying-content__illustrator"><span class="studying-content__text">Illustrator</span></li>
                        <li class="studying-content__item studying-content__dreamweaver"><span class="studying-content__text">Dreamweaver</span></li>
                        <li class="studying-content__item studying-content__adobexd"><span class="studying-content__text">Adobe XD</span></li>
                    </ul>
                </section>
                <section class="studying-content">
                    <h3 class="box-heading__color">Design</h3>
                        <ul class="studying-content__list">
                            <li class="studying-content__item studying-content__web-design"><span class="studying-content__text">Web Design</span></li>
                            <li class="studying-content__item studying-content__graphic-design"><span class="studying-content__text">Graphic design</span></li>
                            <li class="studying-content__item studying-content__ux-design"><span class="studying-content__text">UX Design</span></li>
                        </ul>
                </section>
                <section class="studying-content">
                    <h3 class="box-heading__color">Code / Program</h3>
                    <ul class="studying-content__list studying-content__list__code">
                        <li class="studying-content__item studying-content__HTML"><span class="studying-content__text">HTML</span></li>
                        <li class="studying-content__item studying-content__responsive"><span class="studying-content__text">Responsive Design</span></li>
                        <li class="studying-content__item studying-content__css"><span class="studying-content__text">CSS</span></li>
                        <li class="studying-content__item studying-content__js"><span class="studying-content__text">JavaScript</span></li>
                        <li class="studying-content__item studying-content__scss"><span class="studying-content__text">SCSS</span></li>
                        <li class="studying-content__item studying-content__php"><span class="studying-content__text">PHP</span></li>
                    </ul>
                </section>
                <section class="studying-content">
                    <h3 class="box-heading__color">Other</h3>
                    <ul class="studying-content__list studying-content__list__other">
                        <li class="studying-content__item studying-content__git"><span class="studying-content__text">Git</span></li>
                        <li class="studying-content__item studying-content__wordpress"><span class="studying-content__text">WordPress</span></li>
                        <li class="studying-content__item studying-content__gulp"><span class="studying-content__text">Gulp</span></li>
                    </ul>
                </section>
            </section>
            
            <section id="skill-comment" class="skill-comment">
                <h2 class="g-heading">コメント</h2>
                <p class="skill-comment__text">
                    <span class="skill-comment__edit">今後の課題としては素早くクオリティの高いデザイン物を作れるようになることで、現在は時間を決めてその間にバナーのトレースをしたりしてデザインの引き出しと早く仕上げる練習をしています。</span><br>

                また企業が主催する勉強会などにも参加して、学校の中だけでなく外の情報も積極的に取り入れるようにしています。</p>

            </section>

		</div> <!-- main__container -->
    </main>
    <div class="bottom-frame"></div>
    <script src="js/script.js"></script>
    <script>
        var school_study_link = document.getElementById("school-study_link");
        var studying_now_link = document.getElementById("studying-now_link");
        var skill_comment_link = document.getElementById("skill-comment_link");
        document.onscroll = function() {
            console.log(document.documentElement.scrollTop);
            if(document.documentElement.scrollTop >= 100 )  {
                school_study_link.classList.add("sidebar_colorChange");
                studying_now_link.classList.remove("sidebar_colorChange");
                skill_comment_link.classList.remove("sidebar_colorChange");
            }
            if (document.documentElement.scrollTop >= 678) {
                school_study_link.classList.remove("sidebar_colorChange");
                studying_now_link.classList.add("sidebar_colorChange");
                skill_comment_link.classList.remove("sidebar_colorChange");
            }
            if (document.documentElement.scrollTop >= 1543) {
                school_study_link.classList.remove("sidebar_colorChange");
                studying_now_link.classList.remove("sidebar_colorChange");
                skill_comment_link.classList.add("sidebar_colorChange");
            }
        }
    </script>
</body>
</html>