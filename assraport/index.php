<?php
    define('SITE_NAME', '株式会社アスラポート');
    define('PAGE_NAME','採用サイト');
    define('IMG_PHOTO','img/photo/');
    define('IMG_ICON','img/icon/');
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="株式会社アスラポート,アスラポート,牛角,採用サイト">
    <meta name="description" content="株式会社アスラポートの採用サイトです。">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@twitteraccount">
    <meta property="og:site_name" content="株式会社アスラポート">
    <meta property="og:title" content="株式会社アスラポート">
    <meta property="og:description" content="株式会社アスラポートの採用サイトです。">
    <meta property="og:url" content="https://www.hogehoge.com">
    <meta property="og:image" content="https://www.hogehoge.com./hoge.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="400">
    <meta property="og:type" content="website">
    <link rel="canonical" hreflang="http://">
    <link rel="alternate" type="" title="" href="http://">
    <link rel="shortcut icon" href="http://www.hoge.hoge/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="apple-touch-icon" href="http://www.hoge.hoge/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/aos.js"></script>
    <title><?= SITE_NAME ?> | <?= PAGE_NAME ?></title>
    <script type="text/javascript" src="//typesquare.com/3/tsad/script/ja/typesquare.js?5afab327ba90415fa21957f9e90393a3" charset="utf-8"></script>
</head>
<body class="body">
    <header class="header">
        <div class="header__wrapper">
            <h1 class="logo"><img src="<?= IMG_ICON ?>logo.svg" alt="株式会社アスラポート"></h1>
            <nav class="g-nav">
                <ul class="g-nav__wrapper">
                    <li class="g-nav__item"><a href="#about">About us<span class="g-nav__jp">会社概要</span></a></li>
                    <li class="g-nav__item"><a href="#work">Job<span class="g-nav__jp">SVの仕事</span></a></li>
                    <li class="g-nav__item"><a href="#culture">Culture<span class="g-nav__jp">企業文化</span></a></li>
                    <li class="g-nav__item"><a href="#recruit">Recruit<span class="g-nav__jp">募集要項</span></a></li>
                </ul>
                <p class="entry-btn"><a href="https://docs.google.com/forms/d/10IYAfzEMiREB9rQsW-QQaTE0SuFgi9k0IE6GMpX98p4/viewform?edit_requested=true">エントリー</a></p>
            </nav>
            <nav class="sp-menu">
                <span></span>
                <span></span>
                <span></span>
            </nav>
        </div>
        <div class="entry-sideBtn" id="sideEntryBtn"><a href="https://docs.google.com/forms/d/10IYAfzEMiREB9rQsW-QQaTE0SuFgi9k0IE6GMpX98p4/viewform?edit_requested=true">エントリーはこちら</a></div>
    </header>
    <div class="main-visual">
        <div class="main-visual__wrapper">
            <h2 class="main-visual__catch"><img src="<?= IMG_PHOTO ?>catch.png" alt="活躍は無限大"></h2>
            <div class="main-visual__photo"><img src="<?= IMG_PHOTO ?>tel_man.png" alt="電話をかけるスーツの男性"></div>
            <p class="main-visual__scroll"><a href="#about"><img src="<?= IMG_ICON ?>mouse.png" alt=""><span>Scroll</span></a></p>
            <p class="main-visual__video"><a href="https://www.youtube.com/watch?v=ciysssOy0Z4"><img src="<?= IMG_PHOTO ?>video.png" alt=""></a></p>
        </div>
    </div>
    <main class="main">
        <section class="section about" id="about">
            <div class="about__wrapper">
                <div class="about__wrap">
                    <p class="fs18">アスラポート株式会社</p>
                    <h2 class="about__ttl" data-aos="fade-up" data-aos-duration="500"><img src="<?= IMG_PHOTO ?>about_catch.png" alt=""></h2>
                    <p class="about__txt lh100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">アスラポートは焼肉店・居酒屋を中心にフランチャイズ事業を運営し、年々急成長している今もっとも熱量の高い会社です。<br>当社は今後キャリアップを目指したい、熱意ある方を募集しています。</p>
                    <ul class="company-data" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                        <li class="company-data__item lh100">加盟店<span class="subColor-num block">575</span>店舗</li>
                        <li class="company-data__item"><span class="company-data__smallBig fs18 subColor">挑戦的<span class="fs14 white">な</span></span><br>社風</li>
                        <li class="company-data__item"><span class="company-data__smallBig fs18 subColor">海外事業<span class="fs14 white">も</span></span><br>展開</li>
                    </ul>
                    <p class="about__human"><img src="<?= IMG_PHOTO ?>human.png" alt=""></p>
                </div>
            </div>
        </section>
        <section class="section company" id="company">
            <div class="company__wrapper">
                <h2 class="g-ttl white" data-aos="fade-up" data-aos-duration="500">会社概要</h2>
                <p class="g-txt white" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">株式会社アスラポートについて知る</p>
                <p class="company__txt txt20_white" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">株式会社アスラポートでは「牛角」を筆頭に、食にまつわる様々なビジネスを展開しています。すべてのステークホルダーの皆様との信頼関係を大切に、グループ全体の企業価値向上を目指す企業です。</p>
                <div class="brand-logo" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <p><img src="<?= IMG_PHOTO ?>about_us_brand.png" alt=""></p>
                </div>
            </div>
        </section>
        <section class="section philosophy" id="philosophy">
            <h2 class="g-ttl" data-aos="fade-up" data-aos-duration="500">企業理念</h2>
            <p class="g-txt" data-aos="fade-up" data-aos-duration="500">PHILOSOPHY</p>
            <div class="skew-txtBox__wrap" data-aos="fade-up" data-aos-duration="500">
                <p class="skew-txtBox"><span>食のリーディングカンパニーを目指す</span></p>
            </div>
            <div class="philosophy__wrapper">
                <div class="feature-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="feature-item__wrapper">
                        <div class="feature-item__wrap">
                            <p class="feature-item__en">VALUE</p>
                            <h3 class="feature-item__ttl">食の美しさ<span class="white">と魅力を</span><br>世界に伝え<span class="white">る</span></h3>
                        </div>
                        <p class="feature-item__img"><img src="<?= IMG_PHOTO ?>meat.jpg" alt=""></p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="feature-item__wrapper">
                        <div class="feature-item__wrap">
                            <p class="feature-item__en">FEATURE</p>
                            <h3 class="feature-item__ttl">流通・生産<span class="white">・販売事業、</span><br>自社一貫で<span class="white">行う</span></h3>
                        </div>
                        <p class="feature-item__img"><img src="<?= IMG_PHOTO ?>track.jpg" alt=""></p>
                    </div>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="feature-item__wrapper">
                        <div class="feature-item__wrap">
                            <p class="feature-item__en">GLOBAL</p>
                            <h3 class="feature-item__ttl">ヨーロッパ<span class="white">を中心に</span><br>事業を展開</h3>
                        </div>
                        <p class="feature-item__img"><img src="<?= IMG_PHOTO ?>europe_city.jpg" alt=""></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section work" id="work">
            <div class="work__head">
                <h2 class="g-ttl black" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">仕事内容</h2>
                <p class="g-txt black" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">WORK</p>
                <div class="skew-txtBox__wrap" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <p class="skew-txtBox"><span>始めよう、スーパーバイザーの仕事</span></p>
                </div>
            </div>
            <div class="mainColorBox" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                <p class="mainColorBox__en">Superviser</p>
                <p class="mainColorBox__txt">店舗と本社を繋ぐ、<br>組織の中核を担うスーパーバイザーの仕事</p>
            </div>
            <div class="whiteBox-right">
                <p class="whiteBox-right__img" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150"><img src="<?= IMG_PHOTO ?>sv.jpg" alt=""></p>
                <section class="white-txtBox" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                    <h3 class="white-txtBox__ttl"><span class="white-txtBox__ttl--small">飲食店店舗と本社をつなぐ</span><span class="-txtBox__big">スーパーバイザー(SV)</span>とは</h3>
                    <p class="white-txtBox__txt">フランチャイズ加盟店に対して売上向上のため、情報提供や経営のアドバイスを行う仕事。<br>店舗と本社を繋ぎ、店舗の指導や店舗の業績を上げることを目的とした重要な職種。</p>
                </section>
            </div>
            <section class="job-flow">
                <div class="job-flow__wrapper">
                    <div class="job-flow__head">
                        <h3 class="job-flow__ttl">仕事の流れ <span class="job-flow__ttl--small">(出社の場合)</span></h3>
                        <div class="job-flow__toggle-icon">-</div>
                    </div>
                    <ol class="job-flow-list  job-flow-list--none">
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">9:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">出社</h4>
                                <p class="job-flow-item__txt">会社に到着後はメールチェックや、担当している店舗の報告書をまとめる等の事務作業を行います。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow_01.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">10:30</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">会議</h4>
                                <p class="job-flow-item__txt">当日のスケジュールや方針を社員同士で確認し合い共有します。何か問題があれば抱える課題をアドバイスし合い解決に導きます。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow_02.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">13:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">現状報告</h4>
                                <p class="job-flow-item__txt">上司に担当店舗の現状報告。<br>現状に対するアドバイスや今後の方針について上司と話し合います。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow_03.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">15:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">翌日の準備</h4>
                                <p class="job-flow-item__txt">翌日の提案書をまとめたり、店舗訪問の準備などを行います。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow_04.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">18:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">終業</h4>
                            </div>
                            <p class="job-flow-item__img"></p>
                        </li>
                    </ol>
                </div>
            </section>

            <section class="job-flow">
                <div class="job-flow__wrapper">
                    <div class="job-flow__head">
                        <h3 class="job-flow__ttl">仕事の流れ <span class="job-flow__ttl--small">(店舗訪問の場合)</span></h3>
                        <div class="job-flow__toggle-icon">-</div>
                    </div>
                    <ol class="job-flow-list job-flow-list--none">
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">15:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">店舗訪問</h4>
                                <p class="job-flow-item__txt">自宅から店舗へそのまま直行。店長と面談し、業績や次の施策のことなどを話します。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow2_01.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">16:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">店舗チェック</h4>
                                <p class="job-flow-item__txt">店舗が正しい運営しているかチェック＆指導を行います。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow2_02.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">17:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">オペレーションチェック</h4>
                                <p class="job-flow-item__txt">店舗の営業時間になり営業が始まると、商品やお客様に対するサービスが適切かどうかをチェックします。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow2_03.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">19:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">店長との振り返り</h4>
                                <p class="job-flow-item__txt">必要に応じて店長のメンタルケアなどを行います。</p>
                            </div>
                            <p class="job-flow-item__img"><img src="<?= IMG_PHOTO ?>job-flow2_04.png" alt=""></p>
                        </li>
                        <li class="job-flow-item">
                            <p class="job-flow-item__time">20:00</p>
                            <div class="job-flow-item__wrap">
                                <h4 class="job-flow-item__ttl">ホテルに戻り終業</h4>
                            </div>
                            <p class="job-flow-item__img"></p>
                        </li>
                    </ol>
                </div>

            </section>
        </section>

        <section class="section culture" id="culture">
            <div class="culture-head">
                <div class="culture-head__wrap">
                    <h2 class="g-ttl black" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">企業風土</h2>
                    <p class="g-txt black" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">CULTURE</p>
                    <div class="skew-txtBox__wrap" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <p class="skew-txtBox"><span>成長できる環境がここにある</span></p>
                    </div>
                </div>
            </div>
            <div class="mainColorBox" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                <p class="mainColorBox__en">Message</p>
                <p class="mainColorBox__txt">アスラポートは今後キャリアアップを<br>目指す方に最適な環境をご用意しています。</p>
            </div>
            <div class="culture__wrapper">
                <section class="descBox" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                    <div class="descBox__wrapper">
                        <div class="descBox__ttl-wrap">
                            <h3 class="descBox__ttl"><span>活かせる経験</span></h3>
                        </div>
                        <ul class="experience-list">
                            <li class="experience-list__item"><img src="<?= IMG_ICON ?>human01.svg" alt="">店長の経験</li>
                            <li class="experience-list__item"><img src="<?= IMG_ICON ?>human02.svg" alt="">SVの経験</li>
                            <li class="experience-list__item"><img src="<?= IMG_ICON ?>human03.svg" alt="">コンサルタント職の経験</li>
                        </ul>
                        <p class="descBox__txt">SVは店長に対する説得や共感をしてもらう必要があり、高いコミュニケーション能力が必要です。店舗を分析して課題を発見する、主観で話さずに客観的に数値で分析するなど経験が必要となる仕事です。</p>
                    </div>
                </section>
                <section class="descBox" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                    <div class="descBox__ttl-wrap">
                        <h3 class="descBox__ttl"><span>明確なキャリアステップ</span></h3>
                    </div>
                    <p class="descBox__subTtl">入社後の流れ</p>
                    <p class="descBox__flow"><img src="<?= IMG_ICON ?>join-flow.png" alt=""></p>
                </section>
                <section class="contest">
                    <h3 class="contest__ttl" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">会社全体<span class="fs32">が、</span><br><span class="mainColor">あなたの成長を応援</span><span class="fs32">する</span></h3>
                    <div class="whiteBox-right">
                        <p class="whiteBox-right__img" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150"><img src="<?= IMG_PHOTO ?>contest.jpg" alt=""></p>
                        <section class="white-txtBox" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                            <h3 class="white-txtBox__ttl"><span class="white-txtBox__ttl--small">成果を表彰する</span><span class="-txtBox__big">インプレッションフォーラム</span></h3>
                            <p class="white-txtBox__txt">グループのスタッフ・店長が店舗の成果を競い、優秀店舗を決定する大会です。優秀店舗の成功事例を共有するとともに、ここへの出場、優勝を目指すことがスタッフの目標となっています。</p>
                        </section>
                    </div>
                </section>
            </div>
        </section>

        <section class="section recruit" id="recruit">
            <div class="recruit__wrapper">
                <h2 class="g-ttl" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">募集要項</h2>
                <p class="g-txt" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">RECRUIT</p>
                <table class="recruit-desc" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                    <tr>
                        <th>応募資格</th>
                        <td>学歴不問<br>店長経験者優遇<br>スーパーバイザー経験者優遇</td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td>正社員</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>
                            関西圏及び関東圏の当社直営店 （大阪・兵庫・奈良・東京・埼玉・茨城）<br>
                            <span class="fs14 op8">※マネージャー・スーパーバイザーは東京・大阪・仙台・博多を拠点として、<br>全国出張や転勤をお願いさせて頂く場合があります。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td>店長：実働8時間（シフト制）<br><span class="fs14 op8">※店舗により勤務時間帯は異なります。</span><br>スーパーバイザー： 9時－18時</td>
                    </tr>
                    <tr>
                        <th>年収・給与</th>
                        <td>給与 25万円 ～ 30万円以上<br><span class="fs14 op8">※経験・能力等を考慮した上で、加給・優遇いたします。</span></td>
                    </tr>
                    <tr>
                        <th>待遇・福利厚生</th>
                        <td>
                            <ul>
                                <li>・ 昇給（年2回／4月、10月)</li>
                                <li>・ 賞与（業績に応じて支給）</li>
                                <li>・ 交通費全額支給</li>
                                <li>・ 各種社会保険完備</li>
                                <li>・ 現場手当</li>
                                <li>・ 役職手当（店長から支給）</li>
                                <li>・ 永年勤続手当（5年勤続／15万円、10年勤続／30万円、15年勤続／45万円）</li>
                                <li>・ 月間MVP手当（本賞／3万円、準賞／1万円）</li>
                                <li>・ 定期健康診断</li>
                                <li>・ 従業員持株会制度</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>休日休暇</th>
                        <td>店長：月8日（シフト制）、スーパーバイザー：日・月<br>夏季休暇、冬季休暇、慶弔休暇、有給休暇、リフレッシュ休暇、メモリアル休暇、誕生日休暇</td>
                    </tr>
                </table>
            </div>
        </section>
    </main>
    <footer class="footer">
        <section class="footer-entry">
            <div class="footer-entry__wrapper">
                <h2 class="footer-entry__txt" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">アスラポートはあなたの応募をお待ちしております。</h2>
                <p class="footer-entry__btn" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250"><a href="#">ENTRY</a></p>
            </div>
        </section>
        <section class="address">
            <p class="address__logo"><a href="#"><img src="<?= IMG_ICON ?>logo.svg" alt="株式会社アスラポート"></a></p>
            <p class="address__name">株式会社アスラポート</p>
            <p class="address__name--en">（英文名称 Asrapport Co.,Ltd.）</p>
            <address class="address__company-detail">
                本社所在地	東京都中央区日本橋蛎殻町1丁目5番6号<br>
                <span class="address__tel">TEL: <span class="mainColor">03-6311-5256</span></span>
            </address>
        </section>
        <address class="footer-copy">
            <p><small>Copyright ©  Asrapport Co.,Ltd.</small></p>
            <div class="topBtn" id="goTopBtn"><a href="#"><img src="<?= IMG_ICON ?>goTop.svg" alt=""></a></div>
        </address>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>