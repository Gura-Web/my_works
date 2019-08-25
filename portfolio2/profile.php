<?php
    define('PAGE_NAME','PROFILE');
    define('CSS','profile');

    require_once 'php/define.php'; // パスやサイト名の定義データ
    require_once 'php/header.php';
?>
    <?php require_once 'php/header.php' ?>
    <main class="main">
        <div class="main__container">
            
            <section class="bgHdn">
                <div class="bgHdn__container">
                    <h2 class="bgHdn__ttl" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>profile_bigTtl.svg" alt="PROFILE"><span class="bgHdn__sub-ttl">[OGURA HIROKI]</span></h2>
                    <section class="my-profile">
                        <h3 data-aos="fade-up"  data-aos-delay="400" data-aos-easing="ease" data-aos-duration="600" class="my-profile__name"><span>Web Design</span><img src="<?= IMG_PATH ?>name.svg" alt="HIROKI OGURA"></h3>
                        <p class="my-profile__year" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600">2021年卒業予定</p>
                        <ul class="contact" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="600">
                            <li><a href="https://twitter.com/Gura_web"><img src="<?= IMG_PATH ?>twitter.svg" alt="Twitter"></a></li>
                            <li class="mail"><img src="<?= IMG_PATH ?>mail.svg" alt="mail"><span class="mail-view">OguraHiroki1999@yahoo.co.jp</span></li>
                            <li><a href="https://github.com/Gura-Web/my_works"><img src="<?= IMG_PATH ?>github.svg" alt="GitHub"></a></li>
                        </ul>
                    </section>
                </div>
                <div class="square-wrapper" data-aos="fade-right" data-aos-delay="800" data-aos-easing="ease" data-aos-duration="1300">
                    <div class="square1"></div><div class="square2"></div>
                    <div class="square-small1"></div><div class="square-small2"></div><div class="square-small3"></div>
                </div>
            </section>
            
            <section class="about-me">
                <h3 class="hdn" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="600"><img src="<?= IMG_PATH ?>aboutMe_ttl.svg" alt="ABOUT ME"><span class="hdn__ja">私について</span></h3>
                
                <section class="hello">
                    <div class="hello__container">
                        <div class="hello__img" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="900"><img src="<?= IMG_PATH ?>pc.png" alt="MacBook"></div>
                        <div class="hello-content" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="600">
                                <h4 class="hello-content__ttl"><span>Hello</span>初めまして</h4>
                                <p class="hello-content__desc">大阪でWEBデザインを学んでいます、<span>小倉 弘暉</span>と申します。<br>
                                平日は学校とWEB制作のアルバイト、休日は主に好きなことを勉強してます。<br>常にWEB制作をしています。長所は真面目で積極的な所です。</p>
                                <p class="hello-content__desc">小5の頃からインターネットに触れそこからWEBの楽しさを知り、どっぷり浸かって成長しました。</p>
                        </div>
                    </div>
                    <div class="square-wrapper" data-aos="fade-right" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="1300">
                        <div class="square1"></div><div class="square2"></div>
                        <div class="square-small1"></div><div class="square-small2"></div><div class="square-small3"></div>
                    </div>
                </section>
                    
                <section class="creating">
                    <div class="creating__container">
                        <div class="creating__img" data-aos="fade-right" data-aos-easing="ease" data-aos-duration="900"><img src="<?= IMG_PATH ?>creating.png" alt="ペンタブを操作している"></div>
                        <div class="creating-content" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="600">
                            <h4 class="creating-content__ttl"><span>Creating</span>制作時の私</h4>
                            <p class="creating-content__desc">私は前倒しで計画を進めるのが得意で、同時進行で制作物がありますが、時間配分をしっかり考えて締め切りに間に合うようにしています。</p>
                            <p class="creating-content__desc">グループ制作においては報告・連絡・相談を意識して積極的に行い、グループ全体に自分の作業範囲を把握してもらうように心がけています。</p>
                        </div>
                    </div>
                    <div class="square-wrapper" data-aos="fade-right" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="1300">
                        <div class="square1"></div><div class="square2"></div>
                        <div class="square-small1"></div><div class="square-small2"></div><div class="square-small3"></div>
                    </div>
                </section>

                <section class="private" data-aos="fade-down" data-aos-delay="400" data-aos-easing="ease" data-aos-duration="600">
                    <div class="private__container">
                        <h4 class="private__hdn">My Study Life</h4>
                        <ul class="private__list">
                            <li>時短の為の<br>サイトトレース</li>
                            <li>大阪の勉強会<br>へ参加</li>
                            <li>エンジニア専攻だけの<br>PHPの授業に参加</li>
                            <li>デザイナー向けのSlack<br>コミュニティに参加(有料)</li>
                            <li>WEB制作の<br>アルバイト</li>
                            <li>作品の制作</li>
                            <li>有志だけの制作<br>イベントに参加</li>
                            <li>デザイン参考<br>サイトのチェック</li>
                        </ul>
                    </div>
                    
                </section>
                
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