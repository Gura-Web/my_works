
<?php
    define('PAGE_NAME','HOME');
    define('CSS','index');

    require_once 'php/define.php'; // パスやサイト名の定義データ
    require_once 'php/header.php';
?>

    <main class="main">
        <div class="main__container">
            <div class="main-visual">
                <div class="main-visual__container">
                    <div class="main-visual__wrapper">
                        <div class="main-visual__wrap">
                            <p data-aos="fade-right" data-aos-delay="1000" data-aos-easing="ease" data-aos-duration="1300" class="main-visual__catch"><img src="<?= IMG_PATH ?>main_catch.svg" alt="GLOW UP! ALWAYS STUDY"></p>
                            <p class="main-visual__text" data-aos="fade-right" data-aos-delay="1500" data-aos-easing="ease" data-aos-duration="1300">常に成長するデザイナーへ</p>
                        </div>
                        <div class="main-visual__illust">
                            <img src="<?= IMG_PATH ?>main_illust2.svg" data-aos="fade-left" data-aos-delay="2000" data-aos-easing="ease" data-aos-duration="1300" alt="">
                            <div class="circle__blue" data-aos="zoom-in" data-aos-delay="2800" data-aos-easing="ease" data-aos-duration="1000"></div>
                        </div>    
                    </div>
                </div>
                <p class="main-visual__scroll"><a href="#profile">SCROLL</a></p>
                
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square1"></div><div class="square2"></div>
                    <div class="square-small1"></div><div class="square-small2"></div><div class="square-small3"></div>
                </div>
                
            </div>
            <section id="profile" class="profile">
                <div class="content-container">
                    <h2 class="hdn" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>profile_ttl.svg" alt="PROFILE"><span class="hdn__ja">プロフィール</span></h2>
                    <section class="me">
                        <h3 class="me__name" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600"><span>Web Design</span><img src="<?= IMG_PATH ?>name.svg" alt="HIROKI OGURA"></h3>
                        <div data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600">
                            <p class="me__desc">2018年にECCコンピュータ専門学校へ入学し、WEBデザインを専攻しています。
                            持ち前の真面目さと積極性でWEB制作のアルバイトや勉強会に参加し、日々欠かさずWEB制作について学んでいます。</p>
                            <ul class="contact">
                                <li><a href="https://twitter.com/Gura_web"><img src="<?= IMG_PATH ?>twitter.svg" alt="Twitter"></a></li>
                                <li class="mail"><img src="<?= IMG_PATH ?>mail.svg" alt="mail"><span class="mail-view">OguraHiroki1999@yahoo.co.jp</span></li>
                                <li><a href="https://github.com/Gura-Web"><img src="<?= IMG_PATH ?>github.svg" alt="Twitter"></a></li>
                            </ul>
                        </div>
                        <p data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600"><a class="btn" href="profile.php">VIEW MY PROFILE</a></p>
                    </section>
                </div>
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="600" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square3"></div><div class="square4"></div>
                    <div class="square-small4"></div><div class="square-small5"></div><div class="square-small6"></div>
                </div>
                <div class="circle" data-aos="zoom-in" data-aos-delay="200" data-aos-easing="ease" data-aos-duration="1000"></div>
            </section>
            
            <section class="skill">
                <div class="content-container">
                    <h2 class="hdn" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>skill_ttl.svg" alt="SKILL"><span class="hdn__ja">スキル</span></h2>
                    <section class="learning" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="900">
                        <h3 class="skill__hdn">Learning Now</h3>
                        <div class="skill__lists">
                            <ul class="skill__list" data-aos="fade-right" data-aos-delay="100" data-aos-easing="ease" data-aos-duration="1300">
                                <li>Photoshop<span></span></li>
                                <li>Illustrator<span></span></li>
                                <li>Adobe XD<span></span></li>
                                <li>HTML5<span></span></li>
                                <li>CSS3<span></span></li>
                                <li>SCSS<span></span></li>
                                <li>JavaScript<span></span></li>
                            </ul>
                            <ul class="skill__list2" data-aos="fade-right" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="1300">
                                <li>PHP<span></span></li>
                                <li>MySQL<span></span></li>
                                <li>Git<span></span></li>
                                <li>Gulp<span></span></li>
                                <li>Wordpress<span></span></li>
                                <li>VSCode<span></span></li>
                            </ul>
                        </div>
                    </section>
                    <section class="other-experience" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="900">
                        <h3 class="skill__hdn">Other Experience</h3>
                        <ul class="other-experience__list">
                            <li data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease" data-aos-duration="900">WEB制作会社での<br>アルバイト経験</li>
                            <li data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="900">ハッカソンでの<br>ディレクション経験</li>
                            <li data-aos="fade-up" data-aos-delay="700" data-aos-easing="ease" data-aos-duration="900">インターン<br>参加経験(2社)</li>
                        </ul>
                    </section>
                </div>
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="1000" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square5"></div><div class="square6"></div>
                    <div class="square-small7"></div><div class="square-small8"></div><div class="square-small9"></div>
                </div>
                <div class="circle" data-aos="zoom-in" data-aos-delay="200" data-aos-easing="ease" data-aos-duration="1000"></div>
            </section>

            <section class="works">
                <div class="content-container">
                    <h2 class="hdn" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>works_ttl.svg" alt="WORKS"><span class="hdn__ja">作品一覧</span></h2>
                    <div class="works__wrapper">
                        <div class="works__wrap" data-aos="fade-right" data-aos-delay="100" data-aos-easing="ease" data-aos-duration="900">
                            <p class="works__desc">早くクオリティの高いデザイン物を作れるよう、現在は時間を決めてその間にサイトのトレースをしたりしてデザインの引き出しと早く仕上げる練習をしています。</p>
                            <p class="works__desc">また大阪で行われている勉強会や、Slackの有料コミュニティなどにも参加して、学校の中では分からない外の情報も積極的に取り入れるようにしています。</p>
                            <p><a class="btn" href="works.php">VIEW MY WORKS</a></p>
                        </div>
                        <figure class="works__img" data-aos="fade-left" data-aos-delay="700" data-aos-easing="ease" data-aos-duration="900"><img src="<?= IMG_PATH ?>device.png" alt=""></figure>
                    </div>
                </div>
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="1000" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square7"></div><div class="square8"></div>
                    <div class="square-small9"></div><div class="square-small10"></div>
                </div>
                <div class="circle" data-aos="zoom-in" data-aos-delay="200" data-aos-easing="ease" data-aos-duration="1000"></div>
            </section>

            <section class="policy">
                <div class="policy__img" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="900"></div>
                <div class="content-container">
                    <h2 class="hdn" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="600">
                        <img src="<?= IMG_PATH ?>policy_ttl.svg" alt="POLICY"><span class="hdn__ja">ポリシー</span>
                    </h2>
                    <section class="my-policy" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="600">
                        <h3 class="my-policy__ttl"><span>Future</span>将来</h3>
                        <p class="my-policy__desc">将来はWEBデザイナーになりたいと考えていますが、デザインだけでなく今後はもっとコーディングやプログラミングなど幅広く出来ることを増やしていきたいと思っています。</p>
                        
                    </section>
                </div>
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="600" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square9"></div><div class="square10"></div>
                    <div class="square-small11"></div><div class="square-small12"></div>
                </div>
                <div class="circle__small"></div>
                <div class="smog"></div>
            </section>

            <section class="blog">
                <div class="content-container">
                    <h2 class="hdn" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>blog_ttl.svg" alt="BLOG"><span class="hdn__ja">ブログ</span></h2>
                    <div class="blog__wrapper">
                        <article class="blog-item" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease" data-aos-duration="900">
                            <a href="#">
                                <p class="blog-item__cate">PRIVATE</p>
                                <div class="blog-item__wrap">
                                    <h3 class="blog-item__ttl">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                    <p class="blog-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                    <p class="blog-item__time"><time datetime="2019-09-09">2019.09.09</time></p>
                                </div>
                                <p class="blog-item__img"></p>
                            </a>
                        </article>
                        <article class="blog-item" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="900">
                            <a href="#">
                                <p class="blog-item__cate">PRIVATE</p>
                                <div class="blog-item__wrap">
                                    <h3 class="blog-item__ttl">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                    <p class="blog-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                    <p class="blog-item__time"><time datetime="2019-09-09">2019.09.09</time></p>
                                </div>
                                <p class="blog-item__img"></p>
                            </a>
                        </article>
                        <article class="blog-item" data-aos="fade-up" data-aos-delay="700" data-aos-easing="ease" data-aos-duration="900">
                            <a href="#">
                                <p class="blog-item__cate">PRIVATE</p>
                                <div class="blog-item__wrap">
                                    <h3 class="blog-item__ttl">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
                                    <p class="blog-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                    <p class="blog-item__time"><time datetime="2019-09-09">2019.09.09</time></p>
                                </div>
                                <p class="blog-item__img"></p>
                            </a>
                        </article>
                     
                    </div>
                    <p data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600"><a class="btn" href="#">VIEW MY BLOG</a></p>
                </div>
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="600" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square10"></div><div class="square11"></div>
                    <div class="square-small12"></div><div class="square-small13"></div>
                </div>
            </section>
        </div><!-- main__container -->
        
    </main>
    
    <?php require_once 'php/footer.php' ?>
    <script>
        // メールボタン
        mail_view[1].style.display = "none";
        mailBtn_footer.onclick = function() {
            if(mail_view[1].style.display == "block") {
                mail_view[1].style.display = "none";
            } else {
                mail_view[1].style.display = "block";
            }
        }
    </script>
    
</body>
</html>