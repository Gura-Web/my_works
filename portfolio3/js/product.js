const work1 = "個人制作";
const work2 = "グループ制作";
const work3 = "インターン";

const will1 = "学校課題";
const will2 = "個人的に";
const will3 = "インターン";

const img_path = "img/product_detail/";
const desc_img = "img/product_desc/";

const all_design = "img/all_design/";

const web_path = "works/works_web/";
const gra_path = "works/works_gra/";
const other_path = "works/works_other/";
const design_path = "works/works_design/";

// モバイル作品のみ
const mockup = document.getElementsByClassName("product-detail__img")[0];
const btn = document.getElementsByClassName("btn-normal")[0];

/*---------------- すてないやさい ---------------- */
if (location.search.slice(2) == "sutenaiyasai") {
  new Vue({
    el: "#vue",
    data: {
      name: "すてないやさい",
      about_desc: "食品ロスを防ぐ、規格外野菜販売サイト",
      work: work1,
      desc:
        "「規格外野菜」を仕入れることができる。レストランオーナー向けの通販サイトです。野菜高騰で悩むレストランオーナーと、売る手段のない規格外野菜をサイトで繋ぎます。",
      desc_sub:
        "<p class='product-detail__desc--sub mt20'>規格外野菜とは？<br>味は普通の野菜と変わりないですが、見た目が悪いなどで出荷の基準に達せない野菜のことです。</p>",
      special1: `<p class="gradient-bottom mt50">学内コンテスト ECCEXPO2019で最優秀賞受賞</p>`,
      special2: `<p class="gradient-bottom mt15">作品展示会で企業投票１位を獲得</p>`,
      img: img_path + "sutenai_yasai.png",
      role: "全て",
      season: "1年後期",
      time: "55時間",
      type: "PC/TB/SPサイト",
      will: will1,
      skill:
        "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / MySql / Git / Gulp",
      link: `<a href='${web_path}sutenai_yasai/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexPC flexPC--3column mt30">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/index.png">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/about.png">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/symbol.png">
                    </p>
                    <p class="flexPC flexPC--3column mt30">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/result.png">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/product.png">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/new_farmer.png">
                    </p>
                    <p class="flexPC flexPC--3column mt30">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/event.png">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/product.png">
                        <img class="product-desc__img" src="${all_design}sutenai_yasai/buy_form.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/sutenai_yasai.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">デザイン</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/sutenai_yasai_design.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">フロントエンド&バックエンド</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/sutenai_yasai_code.png">
                </p>
                <p class="product-desc__txt">
                    商品登録機能&商品検索機能の紹介
                    <video style="width:100%;" controls src="video/sutenaiyasai.mp4"></video>
                </p>
            </section>
            <section class="product-desc accordion">
                <h3 class="solid-ttl">[リサーチ01] 食品ロスの関心について調査</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="product-desc__txt">
                        制作を始める前にこの企画が本当に必要かどうか、事前調査をインターネット上で行いました。<br>
                        最初に食品ロスの問題は現在どれだけの関心があるのかを調査したところ、<br>
                        およそ<span class="color2">65.4%</span>もの人が食品ロスの問題を知っており。関心の高い問題であることが分かりました。
                    </p>
                    <p class="product-desc__txt">
                        また、食品ロス削減のために何らかの行動をしている人の割合は<span class="color2">62.4%</span>と高い水準にあることが分かりました。
                    </p>
                    <p class="fs12 ct op5">
                        出典01：出典： 消費者庁「消費生活に関する意識調査結果報告書」
                        <br>出典02：神戸市「食品ロス実態調査」
                    </p>
                </div>
            </section>
            <section class="product-desc accordion">
                <h3 class="solid-ttl">[リサーチ02] 現状廃棄されている食品の品目を調査</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="product-desc__txt">廃棄された品目の中で生鮮野菜が<br>
                        <img class="w50" src="${desc_img}sutenaiyasai/hinmoku.png"></p>
                    <p class="product-desc__txt">
                        廃棄された品目の中で生鮮野菜が48.7%と割合の中でもっとも多いことが分かりました。
                    </p>
                    <p class="fs12 ct op5">
                        出典：神戸市「食品ロス実態調査」
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[ 学び ] 得意な部分を伸ばすということ</h3>
                <p class="product-desc__txt">
                    企画&制作と共に高い評価を得られたのはしっかりとスケジュール管理を行い、<br>余裕を持って制作に挑むことができたからだと思います。<br>
                    制作の後半にはかなり余裕があり、２つ目のポートフォリオサイトを制作していました。<br><br>

                    ただ最初の企画出しの時、中々アイディアが出てこずユニークな発想を持った同級生に引け目を感じていました。<br>
                    ですが自分の現実的で真面目な性格を受け入れて、社会問題を解決する企画にシフトしたところ<br>スラスラと企画が進むようになりました。
                    自分の弱みを受け入れ、強みの部分で勝負することが一番大切だと感じました。
                </p>
            </section>
            `
    }
  });
}

// /*---------------- EGP Checker ---------------- */
if (location.search.slice(2) == "egpChecker") {
  new Vue({
    el: "#vue",
    data: {
      name: "EGP Checker",
      about_desc: "EGPの出席管理をもっと簡単に。",
      work: work2,
      desc:
        "お昼休みに英語を話しながらご飯を食べる英会話教室「EGP」の出席管理サービス。今までは先生に出席回数を聞くしかなかったが、EGP CheckerでWeb上で出席日数を確認可能。<br>学生証を忘れても学籍番号バーコードを表示できる他、エクセルで管理していたものを見やすいUIに変更、先生の業務負担を軽減します。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "egp_checker.png",
      role: "デザイン",
      season: "2年前期",
      time: "30時間",
      type: "SP/TB/PCサイト",
      will: will2,
      skill:
        "Sketch / Illustrator",
      link: `<a href='${web_path}egp/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design (PC)</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}egp/pc-top.png">
                        <img class="product-desc__img" src="${all_design}egp/pc-signUp.png">
                    </p>
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}egp/pc-signUp-finish.png">
                        <img class="product-desc__img" src="${all_design}egp/pc-login.png">
                    </p>
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}egp/pc-mypage.png">
                        <img class="product-desc__img" src="${all_design}egp/pc-admin.png">
                    </p>
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}egp/pc-admin-write.png">
                        <img class="product-desc__img" src="${all_design}egp/pc-admin-success.png">
                    </p>
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}egp/pc-admin-error.png">
                        <img class="product-desc__img" src="${all_design}egp/pc-studentList.png">
                    </p>
                    </div>
                </div>
            </section>
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design (SP)</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                  <p class="flexSP mt30">
                      <img class="product-desc__img" src="${all_design}egp/top.png">
                      <img class="product-desc__img" src="${all_design}egp/signup.png">
                      <img class="product-desc__img" src="${all_design}egp/signup-write.png">
                      <img class="product-desc__img" src="${all_design}egp/signup-error.png">
                  </p>
                  <p class="flexSP mt30">
                      <img class="product-desc__img" src="${all_design}egp/signup-finish.png">
                      <img class="product-desc__img" src="${all_design}egp/login.png">
                      <img class="product-desc__img" src="${all_design}egp/login-write.png">
                      <img class="product-desc__img" src="${all_design}egp/login-write-checked.png">
                  </p>
                  <p class="flexSP mt30">
                      <img class="product-desc__img" src="${all_design}egp/login-error.png">
                      <img class="product-desc__img" src="${all_design}egp/mypage.png">
                      <img class="product-desc__img" src="${all_design}egp/admin.png">
                      <img class="product-desc__img" src="${all_design}egp/admin-write.png">
                  </p>
                  <p class="flexSP mt30">
                      <img class="product-desc__img" src="${all_design}egp/admin-success.png">
                      <img class="product-desc__img" src="${all_design}egp/admin-fail.png">
                      <img class="product-desc__img" src="${all_design}egp/student-list.png">
                  </p>
                </div>
            </section>
            `
    }
  });
}

// /*---------------- findWeb ---------------- */
if (location.search.slice(2) == "findWeb") {
  new Vue({
    el: "#vue",
    data: {
      name: "Find.web",
      about_desc: "学校生活をもっと便利に",
      work: work1,
      desc:
        "先生の状況を確認することができるサービス。「先生がどこにいるのか」「聞きたいことがあるけど授業で忙しくないか」など、先生の状況を知りたい生徒の為に制作しました。<br>時間割も素早くチェックすることができます。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "findWeb.png",
      role: "全て",
      season: "2年前期",
      time: "30時間",
      type: "SP/TB/PCサイト",
      will: will2,
      skill:
        "Sketch / Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / Gulp",
      link: `<a href='${web_path}findWeb/about.html' target="_blank">サイトを見る</a>`,
      content: `
            `
    }
  });
}

// /*---------------- ポートフォリオ２作目 ---------------- */
if (location.search.slice(2) == "portfolio2") {
  new Vue({
    el: "#vue",
    data: {
      name: "ポートフォリオ２作目",
      about_desc: "情熱と優しさを表したポートフォリオ",
      work: work1,
      desc:
        `２作目となるポートフォリオで「常に成長し続けるデザイナー」という「成長」をテーマに制作しました。陽を浴びてスクスク成長する「大樹」をモチーフにしています。<br><span class="color2">ID: gura パスワード: gura03</span>`,
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "portfolio2.png",
      role: "全て",
      season: "1年後期",
      time: "60時間",
      type: "SP/TB/PCサイト",
      will: will2,
      skill:
        "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / MySql / Git / Gulp",
      link: `<a href='https://portfolio.gura-web.com/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}portfolio2/pc-index.png">
                        <img class="product-desc__img" src="${all_design}portfolio2/pc-profile.png">
                    </p>
                    <p class="flexPC">
                        <img class="product-desc__img" src="${all_design}portfolio2/pc-works.png">
                        <img class="product-desc__img" src="${all_design}portfolio2/pc-product.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}portfolio2/portfolio2.png">
                </p>
            </section>
            `
    }
  });
}

// /*---------------- ポートフォリオ３作目 ---------------- */
if (location.search.slice(2) == "portfolio3") {
  new Vue({
    el: "#vue",
    data: {
      name: "ポートフォリオ３作目",
      about_desc: "自身の可能性を宇宙で表現",
      work: work1,
      desc:
        '今まで心のそこからやりたいと思う事が見つからなかった私が、本気で楽しいと思えるものに出会ったことでここまでの実績を残すことができた"自分の可能性"を表現しました。',
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "portfolio3.png",
      role: "全て",
      season: "2年前期",
      time: "現在進行形",
      type: "PCサイト",
      will: will2,
      skill:
        "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / Vue.js / Gulp",
      link: `<a href='index.php' target="_blank">サイトを見る</a>`,
      content: `<section class="product-desc">
                <h3 class="solid-ttl">[UPDATEの由来] 常にアップデートし続ける。</h3>
                <p class="product-desc__txt">
                    デザインという一生をかけてやっていきたいものが見つかったことで、毎日スキルアップに励む自分と<br>人の生活を良くしたいという気持ちを<span class="color2">「UPDATE」</span>という言葉に変えてサイトのテーマとしました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] 自分の"可能性"を宇宙で表現</h3>
                <p class="product-desc__txt">
                    心のそこからやりたいことがなかった私が、<br>デザインというものに出会って自分に自信を持てるようになりました。<br>
                    「自分には可能性がある」<br>
                    そう思えるようになったのは自分の好きな事が見つかり、努力が報われ、<br>賞をもらえたなど様々な経験があったからです。
                    それは全てWEBやデザインのお陰だと信じています。<br>
                    自分のこれからの可能性を感じた為、胸を張ってこのテーマにしようと思いました。
                </p>
                <p class="product-desc__txt mt100">
                    <img class="product-desc__img" src="${desc_img}portfolio3/consept.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[デザイン] 自分自身を見てもらう</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}portfolio3/design.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[工夫したところ] 写真を使わず世界観を守る</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}portfolio3/illust.png">
                </p>
            </section>
            `
    }
  });
}

// /*---------------- Suu ---------------- */
if (location.search.slice(2) == "suu") {
  new Vue({
    el: "#vue",
    data: {
      name: "化粧水「Suu」紹介サイト",
      about_desc: "初めて作ったWEBサイト",
      work: work1,
      desc:
        "入学後初めて制作したWEBサイトです。商品アイディア、リサーチ、三つ折り、商品ラベル、WEBサイト、デザイナーに必要な知識をこの作品を通して学びました。<br>オープンキャンパスで高校生向けに展示する作品として選ばれました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "suu.png",
      role: "全て",
      season: "1年前期",
      time: "50時間",
      type: "PCサイト",
      will: will1,
      skill: "Photoshop / Illustrator / HTML / CSS / SCSS",
      link: `<a href='${web_path}suu/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexPC flexPC--3column mt30">
                        <img class="product-desc__img" src="${all_design}suu/index.png">
                        <img class="product-desc__img" src="${all_design}suu/about.png">
                        <img class="product-desc__img" src="${all_design}suu/shop.png">
                    </p>
                    <p class="flexPC flexPC--3column mt30">
                        <img class="product-desc__img" src="${all_design}suu/use.png">
                        <img class="product-desc__img" src="${all_design}suu/question.png">
                        <img class="product-desc__img" src="${all_design}suu/online.png">
                    </p>
                    <p class="flexPC flexPC--3column mt30">
                        <img class="product-desc__img" src="${all_design}suu/buy.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}suu/suu.png">
                </p>
            </section>
            `
    }
  });
}
// /*---------------- EGGGG ---------------- */
if (location.search.slice(2) == "egggg") {
  new Vue({
    el: "#vue",
    data: {
      name: "EGGGG",
      about_desc: "個人ブログ",
      work: work1,
      desc:
        "文章力の上達や自分の考えを言語化する練習がしたかった為、個人ブログを立ち上げました。WordPressを学び自作テーマを作成しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "egggg.png",
      role: "全て",
      season: "1年後期",
      time: "50時間",
      type: "PC / TB / SPサイト",
      will: will2,
      skill:
        "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / WordPress / Gulp",
      link: `<a href='https://gura-web.com/' target="_blank">サイトを見る</a>`,
      content: `
            `
    }
  });
}

// /*---------------- CORGI ---------------- */
if (location.search.slice(2) == "corgi") {
  new Vue({
    el: "#vue",
    data: {
      name: "CORGI",
      about_desc: "コーギー紹介サイト",
      work: work1,
      desc:
        "「コーギー」という犬種についてサイトで紹介するサイトです。実際に飼って「思っていたのと違う」と感じる飼い主を減らすため、コーギーについて詳しく説明しています。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "corgi.png",
      role: "全て",
      season: "1年前期",
      time: "18時間",
      type: "PCサイト",
      will: will2,
      skill: "Photoshop / Illustrator / HTML / CSS / SCSS",
      link: `<a href='${web_path}corgi/' target="_blank">サイトを見る</a>`,
      content: ``
    }
  });
}

// /*---------------- mediclock ---------------- */
if (location.search.slice(2) == "mediclock") {
  new Vue({
    el: "#vue",
    data: {
      name: "MediClock",
      about_desc: "誤薬防止ができるアラートWEBアプリ",
      work: work2,
      desc:
        "利用者の服薬時間を登録し、時間になると通知で知らせてくれるWEBサービス。誤薬防止を目的に介護士向けサービスを制作しました。",
      desc_sub:
        "<p class='product-detail__desc--sub mt20'>誤薬とは？<br>病院や介護施設での患者の薬の飲み忘れ、飲み間違いのことを誤薬と言います。</p>",
      special1: ``,
      special2: ``,
      img: img_path + "mediclock.png",
      role: "企画 / プレゼン / デザイン / コーディング /<br> フロントエンド",
      season: "1年夏休み",
      time: "18時間",
      type: "PCサイト",
      will: will1,
      skill: "Photoshop / Illustrator / HTML / CSS / JavaScript / PHP / MySql",
      link: `<a href='http://click.ecc.ac.jp/ecc/hogura/MediClock/web/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}mediclock/index.png">
                        <img class="product-desc__img" src="${all_design}mediclock/about.png">
                    </p>
                    <p class="flexPC mt30">
                    <img class="product-desc__img" src="${all_design}mediclock/how.png">
                        <img class="product-desc__img" src="${all_design}mediclock/step1.png">
                        <img class="product-desc__img" src="${all_design}mediclock/step2.png">
                        <img class="product-desc__img" src="${all_design}mediclock/step3.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}mediclock/mediclock.png">
                </p>
            </section>
            `
    }
  });
}

// /*---------------- づっち ---------------- */
if (location.search.slice(2) == "dutti") {
  new Vue({
    el: "#vue",
    data: {
      name: "づっち",
      about_desc: "話を聞いてくれる、あいづちサービス",
      work: work2,
      desc:
        "誰かに愚痴を聞いて欲しいけど、変に意見されたくない。ただ話を聞いていて欲しい。そんな人の為にキャラクターが意見を言わず、ただ相槌をうってくれるWEBアプリ",
      desc_sub: "",
      special1: `<p class="gradient-bottom mt50">Yahoo!OSAKA主催 HACK U 出場作品</p>`,
      special2: ``,
      img: img_path + "dutti.png",
      role: "ディレクション / コーディング / フロントエンド",
      season: "1年夏休み",
      time: "30時間",
      type: "PCサイト",
      will: will2,
      skill: "HTML / CSS / JavaScript",
      link: `<a href='https://dutti-web.gura-web.com/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt flex">
                    <img class="product-desc__img" src="${desc_img}dutti/dutti.png">
                </p>
            </seciton>
            `
    }
  });
}

// /*---------------- ミニポートフォリオ ---------------- */
if (location.search.slice(2) == "mini_portfolio") {
  new Vue({
    el: "#vue",
    data: {
      name: "ミニポートフォリオ",
      about_desc: "勢いで作ってしまったミニポートフォリオ",
      work: work1,
      desc:
        "先輩のポートフォリオを見て自分も作りたい気持ちになり、勢いで作ったサイト。<br>出来た時はあまり気に入らない仕上がりでしたが、これを作ったことにより今後のもっと良いポートフォリオを作ろうと思えました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "mini_portfolio.png",
      role: "全て",
      season: "1年夏休み",
      time: "15時間",
      type: "PCサイト",
      will: will2,
      skill:
        "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / Jquery",
      link: `<a href='${web_path}mini_portfolio/' target="_blank">サイトを見る</a>`,
      content: `
            `
    }
  });
}

// /*---------------- +E展 ---------------- */
if (location.search.slice(2) == "plus_e_ten") {
  new Vue({
    el: "#vue",
    data: {
      name: "+E展",
      about_desc: "学校の作品展示会をPRするサイト",
      work: work2,
      desc:
        "私の学校が毎年2回行なっている作品展示会をブランディングするために、有志だけが集まりみんなで制作したPRサイト。放課後に集まり、1年から3年と学年をまたいで制作しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "plus_e_ten.png",
      role: "デザイン",
      season: "1年後期",
      time: "7時間 (デザイン)",
      type: "PCサイト",
      will: will2,
      skill: "Adobe XD / Photoshop / Illustrator / Git",
      link: `<a href='http://click.ecc.ac.jp/ecc/plus-e-ten/2018/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexPC flexPC--3column mt30">
                        <img class="product-desc__img" src="${all_design}plus_e_ten/index.png">
                        <img class="product-desc__img" src="${all_design}plus_e_ten/profile.png">
                        <img class="product-desc__img" src="${all_design}plus_e_ten/profile-detail.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt flex">
                    <img class="product-desc__img" src="${desc_img}eten/plus_e_ten.png">
                </p>
            </seciton>
            `
    }
  });
}

// /*---------------- Fantastic Memories ---------------- */
if (location.search.slice(2) == "wedding") {
  new Vue({
    el: "#vue",
    data: {
      name: "Fantastic Memories",
      about_desc: "心に残る最高のウェディングを",
      work: work1,
      desc:
        "人生初の結婚式を迎える女性に向けたウェディングサイトを個人的に制作。女性向けのデザインは経験が少なかったので春休みのうちに挑戦しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "wedding.png",
      role: "全て",
      season: "1年春休み",
      time: "30時間",
      type: "SP/TB/PCサイト",
      will: will2,
      skill: "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / Gulp",
      link: `<a href='${web_path}wedding/' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design (PC)</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="mt30"><img class="product-desc__img" src="${all_design}wedding/pc-index.png"></p>
                </div>
            </section>
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexSP mt30">
                        <img class="product-desc__img" src="${all_design}wedding/sp-index@2x.png">
                        <img class="product-desc__img" src="${all_design}wedding/sp-menu@2x.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt flex">
                    <img class="product-desc__img" src="${desc_img}wedding/wedding.png">
                </p>
            </seciton>
            <section class="product-desc">
                <h3 class="solid-ttl">デザイン</h3>
                <p class="product-desc__txt flex">
                    <img class="product-desc__img" src="${desc_img}wedding/wedding_design.png">
                </p>
            </seciton>
            `
    }
  });
}

// /*---------------- 村山工業 ---------------- */
if (location.search.slice(2) == "murayama") {
  new Vue({
    el: "#vue",
    data: {
      name: "村山工業(仮)採用サイト",
      about_desc: "社会貢献度の高さをアピールして理系学生を獲得する",
      work: work3,
      desc:
        "1年後期の展示会でインターンのお誘いを受けた企業様の元で「リサイクル重機を製造する会社の採用サイト」を制作致しました。理系学生を採用したいというクライアントの思いを意識して制作しました。<br>",
      desc_sub:
        "<p class='product-detail__desc--sub mt20'>※ポートフォリオにはロゴや画像は変更するよう言われている為、全て差し合えています。<br>また、一部デザインは既存サイトのパーツを使用している部分があります</p>",
      special1: ``,
      special2: ``,
      img: img_path + "murayama_kogyo.png",
      role: "ビジュアルデザイン (文章は除く)",
      season: "1年春休み",
      time: "30時間",
      type: "デザインカンプ",
      will: will3,
      skill: "Adobe XD / Photoshop / Illustrator",
      link: `<a href='${design_path}murayama_kogyo.png' target="_blank">サイトを見る</a>`,
      content: `<section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}murayama/murayama.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">デザイン</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}murayama/murayama_design.png">
                </p>
            </section>
            `
    }
  });
}

// /*---------------- 前田観光 下層ページ ---------------- */
if (location.search.slice(2) == "maeda") {
  new Vue({
    el: "#vue",
    data: {
      name: "前田観光 事業紹介ページ",
      about_desc: "前田観光の強みである、施設の幅広さをアピール",
      work: work3,
      desc:
        "ECCEXPO2019で最優秀賞を獲得後、インターンのお誘いを受けた企業様の元で制作致しました。前田観光(仮)というホテルを運営する会社様の事業紹介ページをデザインしました。<br>どんな施設を運営しているのかイメージしやすいよう画像を多様したデザインにしています。",
      desc_sub:
        "<p class='product-detail__desc--sub mt20'>※ヘッダーやフッター部分は既存の元を使用しています。<br>またロゴなどは別のものに差し替えています。</p>",
      special1: ``,
      special2: ``,
      img: img_path + "maeda_kanko.png",
      role: "デザイン",
      season: "1年春休み",
      time: "20時間",
      type: "デザインカンプ",
      will: will3,
      skill: "Photoshop / Illustrator",
      link: `<a href='${design_path}maeda_kanko.jpg' target="_blank">デザインを見る</a>`,
      content: `
            `
    }
  });
}
// /*---------------- オファーボックス ---------------- */
if (location.search.slice(2) == "offerbox") {
  new Vue({
    el: "#vue",
    data: {
      name: "OfferBox デザイン案",
      about_desc: "オファーが届く逆求人型就活サイト",
      work: work3,
      desc:
        "OfferBox Creativeというクリエイターになりたい学生の為の就活サイトのデザイン案を考えてみました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "offerbox.png",
      role: "デザイン",
      season: "2年前期",
      time: "20時間",
      type: "デザインカンプ",
      will: will1,
      skill: "Sketch / Illustrator",
      link: `<a href='${design_path}offerbox.png' target="_blank">デザインを見る</a>`,
      content: `
            `
    }
  });
}

// /*---------------- ポートフォリオ１作目 ---------------- */
if (location.search.slice(2) == "portfolio1") {
  new Vue({
    el: "#vue",
    data: {
      name: "ポートフォリオ１作目",
      about_desc: "初めてのポートフォリオ",
      work: work1,
      desc:
        "1年後期に作った始めてのポートフォリオ。<br>自分のことをよく知ってもらえるように作っただけに、テキストばっかりになってしまったり。楽しげなサイトをイメージしたけど逆にデザインが幼稚になってしまったり反省点がたくさんありました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "portfolio1.png",
      role: "全て",
      season: "1年冬休み",
      time: "40時間",
      type: "PC / SPサイト",
      will: will2,
      skill:
        "Photoshop / Illustrator / Adobe XD / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
      link: `<a href='${web_path}portfolio1' target="_blank">サイトを見る</a>`,
      // link: web_path+"portoflio2",
      // link_txt: "サイトを見る",
      content: `
            `
    }
  });
}
/*---------------- cracone ---------------- */
if (location.search.slice(2) == "cracone") {
  new Vue({
    el: "#vue",
    data: {
      name: "[製作中]CraCone",
      about_desc: "デザイナー向けの作品投稿型コミュニティサイト",
      work: work2,
      desc:
        "自分の作った作品を投稿して作品を通じて同じ志を持った人と繋がれるサイト。<br>WEBクリエイターになりたい初学者のモチベーションアップの為に制作しました。",
      desc_sub: "",
      special1: `<p class="gradient-bottom mt50">スマホ向けデザインは<a target="_blank" class="underline" href="https://xd.adobe.com/view/79b4ffdc-e99c-4072-7251-bae8a8348bf4-0f85/">コチラ</a></p>`,
      special2: ``,
      img: img_path + "cracone.png",
      role: "デザイン / ディレクション / 企画",
      season: "2年前期",
      time: "25時間",
      type: "PC / TB / SPサイト",
      will: will2,
      skill: "Photoshop / Illustrator / Adobe XD",
      link: `<a href='https://xd.adobe.com/view/af32d3f9-d181-4dcf-4e1d-76b41357165a-d903/' target="_blank">プロトタイプを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design (PC)</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexPC mt30">
                        <img class="product-desc__img" src="${all_design}cracone/pc-index.png">
                        <img class="product-desc__img" src="${all_design}cracone/pc-deatail-delete.png">
                    </p>
                    <p><img class="product-desc__img" src="${all_design}cracone/pc-sign-in.png"></p>
                    <p><img class="product-desc__img" src="${all_design}cracone/pc-post.png"></p>
                    <p><img class="product-desc__img" src="${all_design}cracone/pc-contact.png"></p>
                    <p><img class="product-desc__img" src="${all_design}cracone/pc-product.png"></p>
                </div>
            </section>
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design (SP)</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexSP mt30">
                        <img class="product-desc__img" src="${all_design}cracone/sp-sign-up@2x.png">
                        <img class="product-desc__img" src="${all_design}cracone/sp-sign-in@2x.png">
                        <img class="product-desc__img" src="${all_design}cracone/sp-index@2x.png">
                        <img class="product-desc__img" src="${all_design}cracone/sp-post@2x.png">
                    </p>
                    <p class="flexSP">
                        <img class="product-desc__img" src="${all_design}cracone/sp-contact@2x.png">
                        <img class="product-desc__img" src="${all_design}cracone/sp-work-detail@2x.png">
                        <img class="product-desc__img" src="${all_design}cracone/sp-mypage@2x.png">
                        <img class="product-desc__img" src="${all_design}cracone/sp-mypage-edit@2x.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}cracone/cracone.png">
                </p>
            </section>
            `
    }
  });
}
/*---------------- 訳あり野菜フェス ---------------- */
if (location.search.slice(2) == "yasai_fes") {
  new Vue({
    el: "#vue",
    data: {
      name: "訳あり野菜フェス",
      about_desc: "規格外野菜だけを使った食フェス企画",
      work: work1,
      desc:
        "規格外野菜と食品ロスのことについて多くの人に知ってもらう為、規格外野菜だけを使った食フェスを都内で開催する企画案を作りました。",
      desc_sub:
        "<p class='product-detail__desc--sub mt20'>規格外野菜とは？<br>味は普通の野菜と変わりないですが、見た目が悪いなどで出荷の基準に達せない野菜のことです。</p>",
      special1: ``,
      special2: ``,
      img: img_path + "yasai_fes.png",
      role: "全て",
      season: "1年後期",
      time: "15時間",
      type: "PCサイト",
      will: will1,
      skill:
        "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
      link: `<a href='${web_path}sutenai_yasai/festival.php' target="_blank">サイトを見る</a>`,
      content: `
            `
    }
  });
}

/*---------------- ジュニア農業体験 ---------------- */
if (location.search.slice(2) == "yasai_junior") {
  new Vue({
    el: "#vue",
    data: {
      name: "ジュニア農業体験",
      about_desc: "子供達の自然と健康を取り戻す農業体験企画",
      work: work1,
      desc:
        "地方の使われていない土地を活用して、日帰りの農業体験イベントを実地。取れた野菜を料理して食べるなど、野菜づくりの楽しさを知ってもらいます。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "yasai_junior.png",
      role: "全て",
      season: "1年後期",
      time: "15時間",
      type: "PCサイト",
      will: will1,
      skill:
        "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
      link: `<a href='${web_path}sutenai_yasai/junior_farming.php' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc">
                <h3 class="solid-ttl">制作理由</h3>
                <p class="product-desc__txt">
                    メイン企画である「すてないやさい」の企画中に派生企画として生まれました。<br>
                    今の生活の中には子供のうちからファストフードやインスタント食品が周りに溢れています。<br>
                    また都内に住む子供達は自然と遊ぶ機会が少なく、ゲームやインターネットで運動を行う機会も昔に比べ減ってきています。<br>
                    子供達は体に悪い食べ物を食べゲームで運動を行わなくなるという不健康な生活を送りがちとなる環境にいるのです。<br>
                    <img class="product-desc__img" src="${desc_img}junior/research.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}junior/problem.png">
                    <img class="product-desc__img" src="${desc_img}junior/step.png">
                    <img class="product-desc__img" src="${desc_img}junior/parent.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">デザイン</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}junior/design.png">
                </p>
            </section>
            `
    }
  });
}

/*---------------- 就農応援プログラム ---------------- */
if (location.search.slice(2) == "yasai_program") {
  new Vue({
    el: "#vue",
    data: {
      name: "就農応援プログラム",
      about_desc: "安心して農業を始めてもらうための応援企画",
      work: work1,
      desc:
        "この企画は農業を始めたいと思ってもらうところから、実際に農家として働くまでを応援するサイトです。<br>農業次世代人材投資資金という就農支援制度を使い、教育から独立までいちから就農を支援する為の企画を考えました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "yasai_program.png",
      role: "全て",
      season: "1年後期",
      time: "20時間",
      type: "PCサイト",
      will: will1,
      skill:
        "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
      link: `<a href='${web_path}sutenai_yasai/farmer_support.php' target="_blank">サイトを見る</a>`,
      content: `
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}yasai_program/yasai_program.png">
                </p>
            </section>
            `
    }
  });
}
/*---------------- Burger Emperor ---------------- */
if (location.search.slice(2) == "burger") {
  new Vue({
    el: "#vue",
    data: {
      name: "Burger Emperor",
      about_desc: "架空の新ハンバーガー紹介サイト",
      work: work2,
      desc:
        "学校課題で架空のハンバーガーの紹介ページをグループで作成しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "burger.png",
      role: "デザイン / 一部コーディング",
      season: "1年後期",
      time: "15時間",
      type: "PCサイト",
      will: will1,
      skill: "Photoshop / Illustrator / HTML / CSS / SCSS / Gulp",
      link: `<a href='http://click.ecc.ac.jp/ecc/hogura/burger_emperor_week2/' target="_blank">サイトを見る</a>`,
      content: `
            `
    }
  });
}
/*---------------- my_paper ---------------- */
if (location.search.slice(2) == "my_paper") {
  mockup.className = "product-detail__img--sp";
  btn.classList.add("btn-normal--sp");
  new Vue({
    el: "#vue",
    data: {
      name: "My Paper",
      about_desc: "トイレットペーパーのみを販売する通販サイト。",
      work: work1,
      desc:
        "色んなトイレットペーパーを取り扱う専門サイト。自分にあったトイレットペーパーを探すことができます。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "my_paper.png",
      role: "全て",
      season: "1年後期",
      time: "8時間",
      type: "アプリ",
      will: will2,
      skill:
        "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / PHP / Gulp",
      link: `<a href="#" onclick="alert('推奨：ブラウザの全画面モードを解除してから開くと、スマホサイズのウィンドウが開きます。');window.open('${web_path}my_paper/','My Paper','width=375,height=667');">サイトを見る</a>`,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexSP mt30">
                        <img class="product-desc__img" src="${all_design}toilet/index@2x.png">
                        <img class="product-desc__img" src="${all_design}toilet/result@2x.png">
                        <img class="product-desc__img" src="${all_design}toilet/product@2x.png">
                        <img class="product-desc__img" src="${all_design}toilet/buy@2x.png">
                    </p>
                </div>
            </section>
            `
    }
  });
}
/*---------------- study_mode ---------------- */
if (location.search.slice(2) == "study_mode") {
  mockup.className = "product-detail__img--sp";
  btn.classList.add("btn-normal--sp");
  new Vue({
    el: "#vue",
    data: {
      name: "Study Mode",
      about_desc: "ゲーム感覚で勉強を楽しく",
      work: work2,
      desc:
        "勉強を続けることができない学生に、ゲーム感覚で楽しく勉強を続けてもらうアプリ。制作合宿で名古屋へ行き、名古屋の専門学生と合同制作しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "studymode.png",
      role: "デザイン / プロトタイプ / プレゼン / 企画",
      season: "1年春休み",
      time: "15時間",
      type: "アプリ",
      will: will1,
      skill: "Adobe XD / Photoshop / Illustrator",
      link: `<a target="_blank" href='https://xd.adobe.com/view/e12ed78c-5940-4a4a-7ac4-c4c9a3f588df-971f/'>プロトタイプを見る</a>`,
      sp_link: ``,
      content: `
            <section class="product-desc accordion">
                <h3 class="solid-ttl">All Design</h3>
                <div class="accordion--icon">+</div>
                <div class="accordion__content accordion--open">
                    <p class="flexSP mt30">
                        <img class="product-desc__img" src="${all_design}study_mode/frontpage@2x.png">
                        <img class="product-desc__img" src="${all_design}study_mode/subject@2x.png">
                        <img class="product-desc__img" src="${all_design}study_mode/login@2x.png">
                        <img class="product-desc__img" src="${all_design}study_mode/point_slot@2x.png">
                    </p>
                    <p class="flexSP mt30">
                        <img class="product-desc__img" src="${all_design}study_mode/point_slot-modal@2x.png">
                        <img class="product-desc__img" src="${all_design}study_mode/register1@2x.png">
                        <img class="product-desc__img" src="${all_design}study_mode/register2@2x.png">
                        <img class="product-desc__img" src="${all_design}study_mode/register3@2x.png">
                    </p>
                    <p class="flexSP mt30">
                        <img class="product-desc__img" src="${all_design}study_mode/register4@2x.png">
                    </p>
                </div>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">コンセプト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}study_mode/study_mode.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[学び] お互いの意見を尊重する大切さ</h3>
                <p class="product-desc__txt">
                    今回は共同制作ということもあり、もう1人のデザイン担当とデザインを分担して作業していました。<br>
                    それにもかかわらず、ものすごくスムーズにデザインが完成しました。<br>
                    なぜスムーズに完成できたかというと、お互いに相手の気持ちを察する力が高く、相手の言おうとしてることを理解しようと努力していたことが大きいと感じました。<br><br>
                    デザイナーは相手に伝える力も大切ですが相手の意思を汲み取る力も大切だと今回の名古屋合宿で学ぶことができました<br>
                    ↓ブログに共同制作の感想をまとめてみました。<br>
                    <a href="https://gura-web.com/nagoya-study/">https://gura-web.com/nagoya-study/</a><br><br>
                </p>
            </section>
            `
    }
  });
}

/*---------------- hello_idea ---------------- */
if (location.search.slice(2) == "helloidea") {
  mockup.className = "product-detail__img--sp";
  btn.classList.add("btn-normal--sp");
  new Vue({
    el: "#vue",
    data: {
      name: "Hello Idea",
      about_desc: "生活をちょっと快適に",
      work: work2,
      desc:
        "みんなの家で活用できる、生活の知恵を共有するアプリ<br>日常生活で知っていると便利な事をユーザー同士で投稿し合い、日常生活に活用したり情報を発信できるサービス",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "helloidea.png",
      role: "デザイン / プレゼン / 企画 / バックエンド",
      season: "1年後期",
      time: "20時間",
      type: "アプリ",
      will: will1,
      skill: "Adobe XD / Photoshop / Illustrator / PHP / MySql",
      link: `<a href="#" onclick="alert('推奨：ブラウザの全画面モードを解除してから開くと、スマホサイズのウィンドウが開きます。');window.open('${web_path}helloidea/','Helloidea','width=375,height=667');">サイトを見る</a>`,
      content: `
            <section class="product-desc">
                <h3 class="solid-ttl">[リサーチ] 情報を活用しているターゲットはどれくらいいるのか調査</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}helloidea/helloidea.png">
                </p>
            </section>
            `
    }
  });
}

// /*---------------- Suu スマホ版 ---------------- */
if (location.search.slice(2) == "suu_sp") {
  mockup.className = "product-detail__img--sp";
  btn.classList.add("btn-normal--sp");
  new Vue({
    el: "#vue",
    data: {
      name: "「Suu」紹介サイト スマホ版",
      about_desc: "初めて作ったWEBサイト スマホver",
      work: work1,
      desc:
        "化粧水「Suu」紹介サイトのスマホ版です。当時はレスポンシブデザインを知らなかったことから、スマホとPCでファイルを分けて制作しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "suu_sp.png",
      role: "全て",
      season: "1年前期",
      time: "50時間",
      type: "スマホサイト",
      will: will1,
      skill: "Photoshop / Illustrator / HTML / CSS / SCSS",
      link: `<a href="#" onclick="alert('推奨：ブラウザの全画面モードを解除してから開くと、スマホサイズのウィンドウが開きます。');window.open('${web_path}suu_sp/','Suu','width=375,height=667');">サイトを見る</a>`,
      content: ``
    }
  });
}
// /*---------------- CaloCalc ---------------- */
if (location.search.slice(2) == "calocalc") {
  mockup.className = "product-detail__img--sp";
  btn.classList.add("btn-normal--sp");
  new Vue({
    el: "#vue",
    data: {
      name: "CaloCalc",
      about_desc: "カロリーを消費するのに必要な運動量を計算する",
      work: work1,
      desc:
        "お菓子を食べてしまうと、運動をどのくらいすれば今食べた分のカロリーを帳消しにできるのか知りたい。<br>そう思うことがよくあるのでパッと計算できるサービスを作ってみようと思いました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "calocalc.png",
      role: "全て",
      season: "2年前期",
      time: "5時間",
      type: "アプリ",
      will: will2,
      skill: "Adobe XD / Illustrator / HTML / CSS / Sass / JavaScript",
      link: `<a href="#" onclick="alert('推奨：ブラウザの全画面モードを解除してから開くと、スマホサイズのウィンドウが開きます。');window.open('https://calocalc.gura-web.com/','CaloCalc','width=375,height=667');">サイトを見る</a>`,
      content: ``
    }
  });
}
// /*---------------- tanpopo ---------------- */
if (location.search.slice(2) == "tanpopo") {
  mockup.className = "product-detail__img--sp";
  btn.classList.add("btn-normal--sp");
  new Vue({
    el: "#vue",
    data: {
      name: "Tanpopo",
      about_desc: "趣味を見つける趣味探しサービス",
      work: work1,
      desc:
        "無趣味で休日することがない方をターゲットに、各地で開催されるサークル活動やコミュニティに気軽に参加できるサービス。<br>自分の好きな趣味を見つけて充実した休日を送ってほしいと考えグループで制作しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: img_path + "tanpopo.png",
      role: "デザイン",
      season: "2年前期",
      time: "25時間",
      type: "SP/PCサイト",
      will: will1,
      skill: "Adobe XD / Illustrator",
      link: ``,
      content: `
      <section class="product-desc accordion">
            <h3 class="solid-ttl">All Design (PC)</h3>
            <div class="accordion--icon">+</div>
            <div class="accordion__content accordion--open">
                <p class="flexPC mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/pc-home.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/pc-search.png">
                </p>
                <p class="flexPC mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/pc-detail.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/pc-userlist.png">
                </p>
                <p class="flexPC mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/pc-post.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/pc-mypage.png">
                </p>
                </div>
            </div>
        </section>
        <section class="product-desc accordion">
            <h3 class="solid-ttl">All Design (SP)</h3>
            <div class="accordion--icon">+</div>
            <div class="accordion__content accordion--open">
                <p class="flexSP mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/home@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/login@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/register@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/register-result@2x.png">
                </p>
                <p class="flexSP mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/password_forget@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/password_forget-finish@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/need-register@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/category@2x.png">
                </p>
                <p class="flexSP mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/article_list—reccomend@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/article_list—music@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/article_detail@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/article_detail-change@2x.png">
                </p>
                <p class="flexSP mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/article_post@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/article_post–change@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/profile--me@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/profile—me-edit@2x.png">
                </p>
                <p class="flexSP mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/profile—other@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/quiz1@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/quiz2@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/quiz3@2x.png">
                </p>
                <p class="flexSP mt30">
                    <img class="product-desc__img" src="${all_design}tanpopo/quiz4@2x.png">
                    <img class="product-desc__img" src="${all_design}tanpopo/quiz-result@2x.png">
                </p>
            </div>
        </section>
        
      `
    }
  });
}

// /*-------------------------------- グラフィック -------------------------------- */

// /*---------------- キャンドルナイト ---------------- */
if (location.search.slice(2) == "candle") {
  mockup.className = "product-detail__img--gra";
  // btn.classList.add("btn-normal--gra");
  new Vue({
    el: "#vue",
    data: {
      name: "キャンドルナイト チラシ",
      about_desc: "",
      work: work1,
      desc:
        "大阪市北区中崎町で行われるキャンドルナイトのデザインコンペに応募するために制作しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: gra_path + "candle_night_main.png",
      role: "グラフィックデザイン",
      season: "1年後期",
      time: "6時間",
      type: "チラシ",
      will: will1,
      skill: "Photoshop / Illustrator",
      link: `<a href="${gra_path}candle_night_main.png" target="_blank">デザインを見る</a>`,
      content: ``
    }
  });
}

// /*---------------- ECCEXPOチラシ ---------------- */
if (location.search.slice(2) == "eccexpo_gra") {
  mockup.className = "product-detail__img--gra";
  // btn.classList.add("btn-normal--gra");
  new Vue({
    el: "#vue",
    data: {
      name: "ECCEXPO チラシ",
      about_desc: "",
      work: work1,
      desc: "",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: gra_path + "eccexpo_main.png",
      role: "グラフィックデザイン",
      season: "1年後期",
      time: "3時間",
      type: "チラシ",
      will: will1,
      skill: "Photoshop / Illustrator",
      link: `<a href="${gra_path}eccexpo_main.png" target="_blank">デザインを見る</a>`,
      content: ``
    }
  });
}

// /*---------------- すてないやさいチラシ ---------------- */
if (location.search.slice(2) == "yasai_gra") {
  mockup.className = "product-detail__img--gra";
  // btn.classList.add("btn-normal--gra");
  new Vue({
    el: "#vue",
    data: {
      name: "すてないやさい チラシ",
      about_desc: "",
      work: work1,
      desc:
        "訳あり野菜フェスのWEBサイトを制作した際に、印刷物も制作したいと思い制作しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: gra_path + "yasai_main.png",
      role: "グラフィックデザイン",
      season: "1年後期",
      time: "6時間",
      type: "チラシ",
      will: will1,
      skill: "Photoshop / Illustrator",
      link: `<a href="${gra_path}yasai_main.png" target="_blank">デザインを見る</a>`,
      content: ``
    }
  });
}

// /*---------------- Suu印刷物 ---------------- */
if (location.search.slice(2) == "suu_gra") {
  mockup.className = "product-detail__img--gra";
  // btn.classList.add("btn-normal--gra");
  new Vue({
    el: "#vue",
    data: {
      name: "Suu 印刷物",
      about_desc: "",
      work: work1,
      desc: "初めて印刷について学び、WEBサイトとは別に印刷物も制作しました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: gra_path + "suu_gra_main.png",
      role: "グラフィックデザイン",
      season: "1年後期",
      time: "6時間",
      type: "チラシ",
      will: will1,
      skill: "Photoshop / Illustrator",
      link: `<a href="${gra_path}suu_graphic_main.png" target="_blank">デザインを見る</a>`,
      content: ``
    }
  });
}

// /*---------------- タンブラーラベル ---------------- */
if (location.search.slice(2) == "tumbler") {
  mockup.className = "product-detail__img--tumbler";
  // btn.classList.add("btn-normal--gra");
  new Vue({
    el: "#vue",
    data: {
      name: "タンブラーラベル",
      about_desc: "",
      work: work1,
      desc:
        "夏休みに大阪府産業廃棄物協会が実地した「不法投棄を阻止する」ことをテーマにしたタンブラーのデザインコンテストに応募しました。<br>入賞し、「佳作」を頂きました。",
      desc_sub: "",
      special1: ``,
      special2: ``,
      img: gra_path + "tumbler_main.png",
      role: "グラフィックデザイン",
      season: "1年夏休み",
      time: "6時間",
      type: "タンブラーラベル",
      will: will1,
      skill: "Illustrator",
      link: `<a href="${gra_path}tumbler_main.png" target="_blank">デザインを見る</a>`,
      content: ``
    }
  });
}

// 作品説明 - アコーディオン
$(".accordion").click(function() {
  let $content = $(this).find(".accordion__content");
  if ($content.hasClass("accordion--open")) {
    $content.removeClass("accordion--open");
    $content.slideDown();
    $(this)
      .find(".accordion--icon")
      .text("-");
  } else {
    $content.addClass("accordion--open");
    $content.slideUp();
    $(this)
      .find(".accordion--icon")
      .text("+");
  }
});
