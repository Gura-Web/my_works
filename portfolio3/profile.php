<?php 
    define('SITE_NAME', 'PROFILE | HIROKI OGURA PORTFOLIO');
    define('IMG','img/');
    define('JS','profile');
    define('CSS','css/');
    define('PAGE','profile');
    require_once('header.php');
?>
                <ol class="right-dot">
                    <li id="dot01" class="right-dot__item"><a href="#section01"><span class="right-dot__border"></span></a></li>
                    <li id="dot02" class="right-dot__item"><a href="#section02"><span class="right-dot__border"></span></a></li>
                    <li id="dot03" class="right-dot__item"><a href="#section03"><span class="right-dot__border"></span></a></li>
                    <li id="dot04" class="right-dot__item"><a href="#section04"><span class="right-dot__border"></span></a></li>
                    <li id="dot05" class="right-dot__item"><a href="#section05"><span class="right-dot__border"></span></a></li>
                </ol>
                <div class="go-top"><a href="#"></a></div>
            </div><!-- header__container -->
        </header>
        <div class="main-visual--sub">
            <div class="main-visual--sub__wrapper">
                <h2 class="main-visual--sub__ttl inview"><img class="inview__inner" src="<?= IMG ?>deco-profile.svg" alt="PROFILE"></h2>
                <p class="main-visual--sub__txt inview"><span class="inview__inner">プロフィール</span></p>
            </div>
                <p class="main-visual__scroll"><a href="#section01">SCROLL</a></p>
        </div><!-- main-visual -->
        <main class="main">
            <div class="main__container">
            <div class="mail-address">
                <p class="mail-address__wrap">OguraHiroki1999@yahoo.co.jp</p>
                <p class="mail-address__cross"><img src="<?= IMG ?>icon-cross.svg" alt=""></p>
            </div>
            <div id="section01" class="top-profile profile">
                    <div class="top-profile__wrapper">
                        <div class="top-profile__left slideup09"><img src="<?= IMG ?>deco-me.png" alt=""></div>
                        <section class="top-me">
                            <h3 class="top-me__name inview"><span class="inview__inner">HIROKI OGURA</span></h3>
                            <p class="top-me__desc inview"><span class="inview__inner">ECCコンピュータ専門学校 WEBデザイナー専攻2年<br>2021年卒業予定 兵庫県在住でデザインと格闘技見るのが好きです。</span></p>
                            <ul class="sns-list inview">
                                <li class="sns-list__item inview__inner"><a href="https://twitter.com/Gura_web"><img src="<?= IMG ?>icon-twitter.svg" alt="twitter"></a></li>
                                <li class="sns-list__item inview__inner"><a href="https://www.facebook.com/GuraWeb"><img src="<?= IMG ?>icon-facebook.svg" alt="faceboook"></a></li>
                                <li class="sns-list__item inview__inner"><a href="https://github.com/Gura-Web"><img src="<?= IMG ?>icon-github.svg" alt="github"></a></li>
                            </ul>
                            <div class="top-me__btns">
                            <p id="mailBtn" class="btn-normal slideright09"><a href="#">メールを送る</a></p>
                            </div>
                        </section>
                    </div>
                </div><!-- top-profile -->

                <section id="section02" class="profile-type">
                    <h3 class="solid-ttl slideup02">こんな人<span class="solid-ttl__en">Type</span></h3>
                    <div class="type-list">
                        <div class="type-item slideup02">
                            <p class="type-item__ttl">目標があると頑張れる</p>
                            <p class="type-item__txt">
                                何かに対して明確な目標がある時が一番充実している時です。逆に目標がないと堕落します。
                            </p>
                        </div>
                        <div class="type-item slideup02">
                            <p class="type-item__ttl">尊敬する人がいると頑張れる</p>
                            <p class="type-item__txt">
                                この人に認められたい！役に立ちたいと思った時にやる気がでます。
                                一緒にいる人によって、成長度が変わる
                            </p>
                        </div>
                        <div class="type-item slideup06">
                            <p class="type-item__ttl">人の助けになれる時が頑張れる</p>
                            <p class="type-item__txt">
                                人の役に立ちたいと思った時にやる気が倍増します。
                                教えてあげたい、仕事をカバーしてあげたいとかそんな時。<br>
                            </p>
                        </div>

                        </div>
                </section><!-- profile-type -->
                <section id="section03" class="my-data">
                    <h3 class="solid-ttl">私のデータ<span class="solid-ttl__en">My Data</span></h3>
                    <dl class="data-dl">
                        <dt class="inview"><span class="inview__inner">性格</span></dt>
                        <dd class="inview"><span class="inview__inner">生真面目&nbsp; 心配性</span></dd>
                        <dt class="inview"><span class="inview__inner">長所</dt>
                        <dd class="inview"><span class="inview__inner">努力家&nbsp; 積極的&nbsp; 頑張り屋&nbsp; スケジュール管理が得意</span></dd>
                        <dt class="inview"><span class="inview__inner">好きな事</span></dt>
                        <dd class="inview"><span class="inview__inner">人と話すこと &nbsp;チーム制作&nbsp; 英語(中学生レベル)</span></dd>
                        <dt class="inview"><span class="inview__inner">趣味</span></dt>
                        <dd class="inview"><span class="inview__inner">Twitter&nbsp; LINE&nbsp; おしゃべり&nbsp; 作品制作&nbsp; 格闘技観戦</span></dd>
                        <dt class="inview"><span class="inview__inner">活動歴(専門学校)</span></dt>
                        <dd class="inview">
                            <span class="inview__inner">
                                Yahoo!OSAKA主催のハッカソンイベント HACK Uへの参加<br>
                                1年後期展示会で企業投票1位を獲得<br>
                                ECCEXPO2019 出場権獲得<br>
                                ECCEXPO2019 最優秀賞受賞<br>
                                大阪府リサイクル推進タンブラーラベルのデザインで佳作受賞<br>
                                インターン5社からお誘い、4社に参加
                            </span>
                        </dd>
                    </dl>

                </section><!-- my-data -->
                <section id="section04" class="skill">
                    <h3 class="solid-ttl slideup02">スキル<span class="solid-ttl__en">Skill</span></h3>
                    <ul class="skill-list slideup02">
                        <li class="skill-list__item">Photoshop<span class="skill-list__bar"><span class="skill-list__photoshop"></span></span></li>
                        <li class="skill-list__item">Illustrator<span class="skill-list__bar"><span class="skill-list__illustrator"></span></span></li>
                        <li class="skill-list__item">Adobe XD<span class="skill-list__bar"><span class="skill-list__xd"></span></span></li>
                        <li class="skill-list__item">HTML5&CSS<span class="skill-list__bar"><span class="skill-list__html"></span></span></li>
                        <li class="skill-list__item">SCSS<span class="skill-list__bar"><span class="skill-list__scss"></span></span></li>
                        <li class="skill-list__item">Pug<span class="skill-list__bar"><span class="skill-list__pug"></span></span></li>
                        <li class="skill-list__item">JavaScript(ES6)<span class="skill-list__bar"><span class="skill-list__js"></span></span></li>
                        <li class="skill-list__item">JQuery<span class="skill-list__bar"><span class="skill-list__jquery"></span></span></li>
                        <li class="skill-list__item">Vue.js<span class="skill-list__bar"><span class="skill-list__vue"></span></span></li>
                        <li class="skill-list__item">Firebase<span class="skill-list__bar"><span class="skill-list__firebase"></span></span></li>
                        <li class="skill-list__item">PHP<span class="skill-list__bar"><span class="skill-list__php"></span></span></li>
                        <li class="skill-list__item">MySql<span class="skill-list__bar"><span class="skill-list__mysql"></span></span></li>
                        <li class="skill-list__item">WordPress<span class="skill-list__bar"><span class="skill-list__wp"></span></span></li>
                        <li class="skill-list__item">Git (SourceTree)<span class="skill-list__bar"><span class="skill-list__git"></span></span></li>
                        <li class="skill-list__item">Gulp<span class="skill-list__bar"><span class="skill-list__gulp"></span></span></li>
                    </ul>
                </section><!-- skill -->
                <section id="section05" class="activity">
                    <h3 class="solid-ttl slideup02">その他の活動<span class="solid-ttl__en">Activity</span></h3>
                    <dl class="data-dl">
                        <dt>普段行なっていること</dt>
                        <dd>
                            <dl class="data-dl__inner">
                                <dt class="inview"><span class="inview__inner">勉強会への参加</span></dt>
                                <dd class="inview"><span class="inview__inner">Yahoo!OSAKA主催のMix Leap Studyや、大阪で行われる勉強会などに積極的に参加しています。</span></dd>
                            </dl>
                            <dl class="data-dl__inner">
                                <dt class="inview"><span class="inview__inner">Web制作のアルバイト</span></dt>
                                <dd class="inview"><span class="inview__inner">WEB制作会社にアルバイトに誘われ現在そこでデザイン/コーディング業務を行なっています。<br>学校の都合をすごく考慮して頂いたり、技術的なことも教えていただけるのでとても感謝しています。</span></dd>
                            </dl>
                            <dl class="data-dl__inner">
                                <dt class="inview"><span class="inview__inner">英会話</span></dt>
                                <dd class="inview"><span class="inview__inner">中学の頃から英語に興味があり、親に頼んで2年間英会話に行かせてもらっていました。<br>
                                英語の授業は免除になっており、代わりに月４回オンライン英会話を受講させて頂いています。<br>(免除生は学内で7名しかいないそう！自分も全然喋れないのに！)<br>
                                お昼休みにはEGPという英語だけを話す教室でお昼ご飯を食べながら話しています。<br></span>
                            </dd>
                            </dl>
                            <dl class="data-dl__inner">
                                <dt class="inview"><span class="inview__inner">デッサン</span></dt>
                                <dd class="inview"><span class="inview__inner">デザイナーには観察力とスケッチの力が必要と思い、週２日選択科目を取りデッサンを行っています。<br>また土曜日にも個人的にデッサン教室に通っています。</span></dd>
                            </dl>
                        <dt>過去行なっていたこと</dt>
                        <dd>
                            <dl class="data-dl__inner">
                                <dt class="inview"><span class="inview__inner">＋E展の制作</span></dt>
                                <dd class="inview"><span class="inview__inner">＋E展という学校で行われる展示会を多くの方にPRするため、印刷物やWEBサイトを制作&運営する会に参加していました。有志だけで放課後集まり制作を行なってました。</span></dd>
                            </dl>
                            <dl class="data-dl__inner">
                                <dt class="inview"><span class="inview__inner">オープンキャンパスのスタッフ</span></dt>
                                <dd class="inview"><span class="inview__inner">現在は多忙で行っておりませんが、一時期はオープンキャンパスで高校生達に学校の説明や盛り上げを行なっていました。介護士として働いていた時の明るさを発揮しました・・・。</span></dd>
                            </dl>
                    </dl>
                </section><!-- my-data -->
            </div><!-- main__container -->
        </main>
<?php require_once('footer.php'); ?>