const work1 = "個人制作";
const work2 = "グループ制作";
const work3 = "インターン";

const will1 = "学校課題";
const will2 = "個人的に";
const will3 = "インターン";

const img_path = "img/product_detail/";
const desc_img = "img/product_desc/"


const web_path = "works/works_web/"
const gra_path = "works/works_gra/"
const other_path = "works/works_other/"
const design_path = "works/works_design/"



// モバイル作品のみ
const mockup = document.getElementsByClassName("product-detail__img")[0];
const btn = document.getElementsByClassName("btn-normal")[0];

/*---------------- すてないやさい ---------------- */
if(location.search.slice(2) == "sutenaiyasai") {
    new Vue({
        el: '#vue',
        data: {
            name: "すてないやさい",
            about_desc: "食品ロスを防ぐ、規格外野菜販売サイト",
            work: work1,
            desc: "「規格外野菜」を仕入れることができる。レストランオーナー向けの通販サイトです。野菜高騰で悩むレストランオーナーと、売る手段のない規格外野菜をサイトで繋ぎます。",
            desc_sub: "<p class='product-detail__desc--sub mt20'>規格外野菜とは？<br>味は普通の野菜と変わりないですが、見た目が悪いなどで出荷の基準に達せない野菜のことです。</p>",
            special1: `<p class="gradient-bottom mt50">ECCEXPO2019最優秀賞受賞</p>`,
            special2: `<p class="gradient-bottom mt15">展示会で企業投票１位を獲得</p>`,
            img: img_path+"sutenai_yasai.png",
            role: "全て",
            season: "1年後期",
            time: "55時間",
            type: "PC/TB/SPサイト",
            will: will1,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / MySql / Git / Gulp",
            link: `<a href='${web_path}sutenai_yasai/' target="_blank">サイトを見る</a>`,
            content: 
            `
            <section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] 売れない野菜とレストランを繋ぐ</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/problem.jpg">
                </p>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/consept.jpg">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[デザイン] 長く滞在できる居心地のいいサイトをデザイン</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/color.jpg">
                </p>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/logo.jpg">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[フロント&バックエンド制作]  一通りの機能が行えるよう実装</h3>
                <p class="product-desc__txt">
                    私はデザイナー専攻ですがJavaScriptやPHP,MySqlを、作品の為に必要な部分を独学で勉強しました。<br>
                    通販サイトとしての基本機能である「商品登録」,「検索機能」,「DBから商品の表示」 の機能を実装しました。
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
                <h3 class="solid-ttl">[ 工夫した点 ] "地元貢献シンボル"で地元貢献店に認定</h3>
                <p class="product-desc__txt">
                    地産地消を推進する為に地元の農家から野菜を多く購入したら、シンボルという特典がもらえる案を考えました。<br>
                    食品偽造が問題になっていたこともあり、安心してそのレストランで<br>食事してもらえる信頼性(ブランド)をアップできる案を考えました。
                </p>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}sutenaiyasai/symbol.jpg">
                </p>
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
    })
}

// /*---------------- ポートフォリオ２作目 ---------------- */
if(location.search.slice(2) == "portfolio2") {
    new Vue({
        el: '#vue',
        data: {
            name: "ポートフォリオ２作目",
            about_desc: "情熱と優しさを表したポートフォリオ",
            work: work1,
            desc: "２作目となるポートフォリオでデザインに対する情熱と自身の性格を表現した。成長をテーマに「大樹」をモチーフにしました。",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"portfolio2.png",
            role: "全て",
            season: "1年後期",
            time: "60時間",
            type: "SP/TB/PCサイト",
            will: will2,
            skill: "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / MySql / Git / Gulp",
            link: `<a href='https://portfolio.gura-web.com/' target="_blank">サイトを見る</a>`,
            content:
            `<section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] デザインに対する熱と制作における気遣いをデザインに</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}portfolio2/main_visual.png">
                    <img class="product-desc__img" src="${desc_img}portfolio2/color.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[デザイン] 常に成長していることをアピール</h3>
                <p class="product-desc__txt">
                    新しいデザインを常に取り入れていることをアピールするために、トレンドのデザインである<br>「流体シェイプ」や「鮮やかなグラデーション」を取り入れました。<br>
                    <span class="op5">参考例</span>
                    <img src="${desc_img}portfolio2/trend.png">
                </p>
            </section>
            `
        }
    })
}


// /*---------------- ポートフォリオ３作目 ---------------- */
if(location.search.slice(2) == "portfolio3") {
    new Vue({
        el: '#vue',
        data: {
            name: "ポートフォリオ３作目",
            about_desc: "自身の可能性を表現した作品",
            work: work1,
            desc: '他の分野ではなにも楽しず力を発揮できなかった自分が、本気で楽しいと思えるものに出会ったことでここまでの実績を残すことができた"自分の可能性"を表現しました。',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"portfolio3.png",
            role: "全て",
            season: "2年前期",
            time: "現在進行形",
            type: "PCサイト",
            will: will2,
            skill: "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / Vue.js / Gulp",
            link: `<a href='index.php' target="_blank">サイトを見る</a>`,
            // link: "index.php",
            // link_txt: "サイトを見る",
            content:
            `<section class="product-desc">
                <h3 class="solid-ttl">[UPDATEの由来] 常にアップデートし続ける。</h3>
                <p class="product-desc__txt">
                    デザインという一生をかけてやっていきたいものが見つかったことで、毎日スキルアップに励む自分と<br>人の生活を良くしたいという気持ちを<span class="color2">「UPDATE」</span>という言葉に変えてサイトのテーマとしました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] 自分の"可能性"を宇宙で表現</h3>
                <p class="product-desc__txt">
                    取り柄がなくまったく自信のなかった自分が、<br>デザインというものに出会って自分に自信を持てるようになりました。<br>
                    「自分には可能性がある」<br>
                    そう思えるようになったのは自分の好きな事が見つかり、努力が報われ、<br>賞をもらえたなど様々な経験があったからです。
                    それは全てWEBやデザインのお陰だと信じています。<br>
                    自分のこれからの可能性を感じたので胸を張ってこのテーマにしようと思いました。
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
    })
}

// /*---------------- Suu ---------------- */
if(location.search.slice(2) == "suu") {
    new Vue({
        el: '#vue',
        data: {
            name: "化粧水「Suu」紹介サイト",
            about_desc: "初めて作ったWEBサイト",
            work: work1,
            desc: '入学後初めて制作したWEBサイトです。商品アイディア、リサーチ、三つ折り、商品ラベル、WEBサイト、デザイナーに必要な知識をこの作品を通して学びました。',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"suu.png",
            role: "全て",
            season: "1年前期",
            time: "50時間",
            type: "PCサイト",
            will: will1,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS",
            link: `<a href='${web_path}suu/' target="_blank">サイトを見る</a>`,
            // link: web_path+"suu/",
            // link_txt: "サイトを見る",
            content:
            `
            `
        }
    })
}
// /*---------------- EGGGG ---------------- */
if(location.search.slice(2) == "egggg") {
    new Vue({
        el: '#vue',
        data: {
            name: "EGGGG",
            about_desc: "個人ブログ",
            work: work1,
            desc: '文章力の上達や自分の考えを文字にしっかり起こす練習もしたかった為、個人ブログを立ち上げました。WordPressを学び自作テーマを作成しました。',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"egggg.png",
            role: "全て",
            season: "1年後期",
            time: "50時間",
            type: "PC / TB / SPサイト",
            will: will2,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / WordPress",
            link: `<a href='https://gura-web.com/' target="_blank">サイトを見る</a>`,
            content:
            `
            `
        }
    })
}



// /*---------------- CORGI ---------------- */
if(location.search.slice(2) == "corgi") {
    new Vue({
        el: '#vue',
        data: {
            name: "CORGI",
            about_desc: "コーギー紹介サイト",
            work: work1,
            desc: '「コーギー」という犬種についてサイトで紹介するサイトです。実際に飼って「思っていたのと違う」と感じる飼い主を減らすため、コーギーについて詳しく説明しています。',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"corgi.png",
            role: "全て",
            season: "1年前期",
            time: "18時間",
            type: "PCサイト",
            will: will2,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS",
            link: `<a href='${web_path}corgi/' target="_blank">サイトを見る</a>`,
            content:
            `<section class="product-desc">
                <h3 class="solid-ttl">[作った理由] コーギーを飼う大変さを伝える</h3>
                <p class="product-desc__txt">
                    私の家ではコーギーを飼っています。<br>
                    飼う前に十分にコーギーのことを調べて、犬を飼うことが大変であることを認識した上で購入しました。<br>
                    それでもコーギーの世話はわりと大変で、あまり情報を知らないまま犬を飼ってしまうとそのまま飼育放棄してしまう飼い主が多いのではないかと感じました。<br>
                    そういった飼い主の知識不足を減らそうと思い、コーギーの魅力と同時に飼う事の大変さをサイトで伝えようと思いました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[学び01] リサーチの重要性</h3>
                <p class="product-desc__txt">
                    このコーギーのサイトを制作するにあたって２つ大事なことを学べました。<br>
                    それはリサーチの信頼性と、実際に飼った事があるか(体験)ということです。<br>
                    リサーチの信頼性はコーギーのサイトを考えている時に間違った情報を与えて、<br>「思ったのと違う」と飼い主に思われたら元も子もないということです。<br>
                    コーギーの正しい知識について教えることを目的としていたので、<br>紹介する情報源は必ず信頼できるものでなければありませんでした。<br>
                    当たり前のことですが1年前期からリサーチの重要な部分について自分で学べてよかったと思います。<br>
                    また、実際に自分がコーギーを買わなければわからないことがとても多かったです。<br>
                    夏にはよだれまみれになるとか、コーギー独特の悩みなどは飼ってみないとユーザーに伝えることはできませんでした。<br>
                    この頃から自分が体験するということがなによりも大切ということがわかりました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[学び02] 実際に体験しないと分からない</h3>
                <p class="product-desc__txt">
                    実際に自分がコーギーを買わなければわからないことがとても多かったです。<br>
                    夏にはよだれまみれになるとか、コーギー独特の悩みなどは飼ってみないとユーザーに伝えることはできませんでした。<br>
                    この頃から自分が体験するということがなによりも大切ということがわかりました。
                </p>
            </section>
            `
        }
    })
}

// /*---------------- mediclock ---------------- */
if(location.search.slice(2) == "mediclock") {
    new Vue({
        el: '#vue',
        data: {
            name: "MediClock",
            about_desc: "誤薬防止ができるアラートWEBアプリ",
            work: work2,
            desc: '利用者の服薬時間を登録し、時間になると通知で知らせてくれるWEBサービス。誤薬防止を目的に介護士向けサービスを制作しました。',
            desc_sub: "<p class='product-detail__desc--sub mt20'>誤訳とは？<br>病院や介護施設での患者の薬の飲み忘れ、飲み間違いのことを誤薬と言います。</p>",
            special1: ``,
            special2: ``,
            img: img_path+"mediclock.png",
            role: "企画 / プレゼン / デザイン / コーディング /<br> フロントエンド",
            season: "1年夏休み",
            time: "18時間",
            type: "PCサイト",
            will: will1,
            skill: "Photoshop / Illustrator / HTML / CSS / JavaScript / PHP / MySql",
            link: `<a href='http://click.ecc.ac.jp/ecc/hogura/MediClock/web/' target="_blank">サイトを見る</a>`,
            content:
            `
            `
        }
    })
}

// /*---------------- づっち ---------------- */
if(location.search.slice(2) == "dutti") {
    new Vue({
        el: '#vue',
        data: {
            name: "づっち",
            about_desc: "話を聞いてくれる、あいづちサービス",
            work: work2,
            desc: '誰かに愚痴を聞いて欲しいけど、変に意見されたくない。ただ話を聞いていて欲しい。そんな人の為にキャラクターが意見を言わず、ただ相槌をうってくれるWEBアプリ',
            desc_sub: "",
            special1: `<p class="gradient-bottom mt50">Yahoo!OSAKA主催 HACK U 出場作品</p>`,
            special2: ``,
            img: img_path+"dutti.png",
            role: "ディレクション / コーディング / フロントエンド",
            season: "1年夏休み",
            time: "30時間",
            type: "PCサイト",
            will: will2,
            skill: "HTML / CSS / JavaScript",
            link: `<a href='https://dutti.gura-web.com/' target="_blank">サイトを見る</a>`,
            content:
            `<section class="product-desc">
                <h3 class="solid-ttl">[制作のきっかけ] YahooOSAKA主催のハッカソンに参加</h3>
                <p class="product-desc__txt">
                    Yahoo!OSAKA主催が主催するハッカソンが夏休みに開催すると学校で知り、クラスメイトと3年の先輩を私が誘いチームを結成しました。
                    当時はJavaScriptも知らずプログラミングはほぼ未経験の状態で応募し、その後はHACK Uに間に合うように独学で勉強していました。
                    プログラムを書けるメンバーが僕と3年の先輩だけだったこともあり、同級生はデザインを担当し私はフロントエンドとリーダーを勤めました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[大変だったこと] 初めてのハッカソン、初めてのチーム制作</h3>
                <p class="product-desc__txt">
                    入学してからいきなりハッカソンに参加したことや、この時チーム制作をすること自体初めてだったので結構分からないことでいっぱいでした。特に初リーダーだったため上手くやれるのかという不安もありましたが、先輩やチームのサポートがありHack Uで作品を出すことができました。<br><br>
                    リーダーに必要なことはスケジュール管理、チームへの配慮、明るさが大切だと学べました！<br>みんなで制作したことは夏休みの良い思い出です。<br>
                </p>
            </section>
            `
        }
    })
}

// /*---------------- ミニポートフォリオ ---------------- */
if(location.search.slice(2) == "mini_portfolio") {
    new Vue({
        el: '#vue',
        data: {
            name: "ミニポートフォリオ",
            about_desc: "勢いで作ってしまったミニポートフォリオ",
            work: work1,
            desc: '先輩のポートフォリオを見て自分も作りたい！となり完全に勢いで作ってしまったサイト。<br>このあまり良くないポートフォリオを作ったことにより、今後の制作において大事なことを学べました。',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"mini_portfolio.png",
            role: "全て",
            season: "1年夏休み",
            time: "15時間",
            type: "PCサイト",
            will: will2,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / Jquery",
            link: `<a href='${web_path}mini_portfolio/' target="_blank">サイトを見る</a>`,
            content:
            `
            `
        }
    })
}

// /*---------------- +E展 ---------------- */
if(location.search.slice(2) == "plus_e_ten") {
    new Vue({
        el: '#vue',
        data: {
            name: "+E展",
            about_desc: "学校の作品展示会をPRするサイト",
            work: work2,
            desc: '私の学校が毎年2回行なっている作品展示会をブランディングするために、有志だけが集まりみんなで制作したPRサイト。放課後に集まり、1年から3年と学年をまたいで制作しました。',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"plus_e_ten.png",
            role: "デザイン",
            season: "1年後期",
            time: "7時間 (デザイン)",
            type: "PCサイト",
            will: will2,
            skill: "Adobe XD / Photoshop / Illustrator / Git",
            link: `<a href='http://click.ecc.ac.jp/ecc/plus-e-ten/' target="_blank">サイトを見る</a>`,
            content:
            `
            `
        }
    })
}


// /*---------------- Fantastic Memories ---------------- */
if(location.search.slice(2) == "wedding") {
    new Vue({
        el: '#vue',
        data: {
            name: "Fantastic Memories",
            about_desc: "心に残る最高のウェディングを",
            work: work1,
            desc: "人生初の結婚式を迎える女性に向けたウェディングサイトを個人的に制作。女性向けのデザインは経験が少なかったので春休みのうちに挑戦しました。",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"wedding.png",
            role: "全て",
            season: "1年春休み",
            time: "30時間",
            type: "SP/TB/PCサイト",
            will: will2,
            skill: "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / Gulp",
            link: `<a href='${web_path}wedding/' target="_blank">サイトを見る</a>`,
            content:
            `
            <section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] 日本で、外国の雰囲気を味わえる結婚式場</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}wedding/target.png">
                    <img class="product-desc__img" src="${desc_img}wedding/research.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[制作] 清潔感を重視したデザイン</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}wedding/design.png">
                    <img class="product-desc__img" src="${desc_img}wedding/device.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[工夫した点] メインビジュアルのこだわり</h3>
                <p class="product-desc__txt flex">
                    <img class="product-desc__img" src="${desc_img}wedding/mainvisual.png">
                </p>
            </seciton>
            `
        }
    })
}

// /*---------------- 村山工業 ---------------- */
if(location.search.slice(2) == "murayama") {
    new Vue({
        el: '#vue',
        data: {
            name: "村山工業(仮)採用サイト",
            about_desc: "社会貢献度の高さをアピールして理系学生を獲得する",
            work: work3,
            desc: "1年後期の展示会でインターンのお誘いを受けた企業様の元で制作致しました。理系学生を採用したいというクライアントの思いを意識して制作しました。<br>",
            desc_sub: "<p class='product-detail__desc--sub mt20'>※ポートフォリオにはロゴや画像は変更するよう言われている為、全て差し合えています。<br>また、一部デザインは既存サイトのパーツを使用している部分があります</p>",
            special1: ``,
            special2: ``,
            img: img_path+"murayama_kogyo.png",
            role: "ビジュアルデザイン (文章は除く)",
            season: "1年春休み",
            time: "30時間",
            type: "デザインカンプ",
            will: will3,
            skill: "Adobe XD / Photoshop / Illustrator",
            link: `<a href='${design_path}murayama_kogyo.png' target="_blank">サイトを見る</a>`,
            content:
            `<section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] 理系学生を採用したいクライアントの要望に答えるデザイン</h3>
                <p class="product-desc__txt">
                    インターンではすでにサイトの構成などが考えられており、今回はそのビジュアルデザインを提案するという内容でした。<br>
                    <img class="product-desc__img" src="${desc_img}murayama/consept.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[デザイン01] メインビジュアルでターゲットを明確に</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}murayama/mainvisual.png">
                    <img class="product-desc__img" src="${desc_img}murayama/job.png">
                    <img class="product-desc__img" src="${desc_img}murayama/member.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[工夫した点] メインビジュアルで興味を引いてみる</h3>
                <p class="product-desc__txt flex">
                    <img class="product-desc__img" src="${desc_img}murayama/mouse.png">
                </p>
            </section>
            `
        }
    })
}

// /*---------------- 藤田観光 下層ページ ---------------- */
if(location.search.slice(2) == "fujita") {
    new Vue({
        el: '#vue',
        data: {
            name: "藤田観光 事業紹介ページ",
            about_desc: "藤田観光の強みである、施設の幅広さをアピール",
            work: work3,
            desc: "ECCEXPO2019で最優秀賞を獲得後、インターンのお誘いを受けた企業様の元で制作致しました。藤田観光というホテルを運営する会社様の事業紹介ページをデザインしました。<br>どんな施設を運営しているのかイメージしやすいよう意識しました。",
            desc_sub: "<p class='product-detail__desc--sub mt20'>※ヘッダーやフッター部分は既存の元を使用しています。</p>",
            special1: ``,
            special2: ``,
            img: img_path+"fujita_kanko.png",
            role: "デザイン",
            season: "1年春休み",
            time: "20時間",
            type: "デザインカンプ",
            will: will3,
            skill: "Photoshop / Illustrator",
            link: `<a href='${design_path}fujita_kanko.jpg' target="_blank">サイトを見る</a>`,
            content:
            `
            <section class="product-desc">
                <h3 class="solid-ttl">[デザイン] ユニークなテーマホテルや事業の幅広さをアピール</h3>
                <p class="product-desc__txt">
                事業紹介ページな為、事業イメージをユーザーに持ってもらうことを一番の目的にしています。
                    <img src="${desc_img}fujita/photos.png">
                    写真を多様して事業イメージを目で見える形にすることで直感的にわかるデザインにしています。
                </p>
                <p class="product-desc__txt flex">
                    <img class="flex__img" src="img/product/thumb-fujita.png">
                    <span class="flex__txt">幅広い施設を扱っており、それを通じて「集いの場を提供する」というビジョンをデザインに落とし込みました。<br>レジャー施設やテーマホテルなども扱っていることから、楽しげな雰囲気を伝えようと考えました。<br>
                    ただ、元のデザインからかけ離れないように、元のデザインに合わせるように調節しながらデザインしました。</span>
                </p>
            </section>
            `
        }
    })
}

// /*---------------- ポートフォリオ１作目 ---------------- */
if(location.search.slice(2) == "portfolio1") {
    new Vue({
        el: '#vue',
        data: {
            name: "ポートフォリオ１作目",
            about_desc: "初めてのポートフォリオ",
            work: work1,
            desc: "1年後期に作った始めてのポートフォリオ。<br>自分のことをよく知ってもらえるように作っただけに、テキストばっかりになってしまったり。楽しげなサイトをイメージしたけど逆にデザインが幼稚になってしまったり反省点がたくさんありました。",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"portfolio1.png",
            role: "全て",
            season: "1年冬休み",
            time: "40時間",
            type: "PC / SPサイト",
            will: will2,
            skill: "Photoshop / Illustrator / Adobe XD / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
            link: `<a href='${web_path}portfolio1' target="_blank">サイトを見る</a>`,
            // link: web_path+"portoflio2",
            // link_txt: "サイトを見る",
            content:
            `
            `
        }
    })
}
/*---------------- cracone ---------------- */
if(location.search.slice(2) == "cracone") {
    new Vue({
        el: '#vue',
        data: {
            name: "[製作中]CraCone",
            about_desc: "クリエイター志望向けの作品投稿型コミュニティサイト",
            work: work2,
            desc: "自分の作った作品を投稿して作品を通じて同じ志を持った人と繋がれるサイト。<br>WEBクリエイターになりたい初学者の為に制作しました。",
            desc_sub: "",
            special1: `<p class="gradient-bottom mt50">スマホ向けデザインは<a target="_blank" class="underline" href="https://xd.adobe.com/view/79b4ffdc-e99c-4072-7251-bae8a8348bf4-0f85/">コチラ</a></p>`,
            special2: ``,
            img: img_path+"cracone.png",
            role: "デザイン / ディレクション / 企画",
            season: "2年前期",
            time: "25時間",
            type: "PC / TB / SPサイト",
            will: will2,
            skill: "Photoshop / Illustrator / Adobe XD",
            link: `<a href='https://xd.adobe.com/view/af32d3f9-d181-4dcf-4e1d-76b41357165a-d903/' target="_blank">プロトタイプを見る</a>`,
            content:
            `
            <section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] 自分の作品を通じて交流できるコミュニティサイト</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}cracone/target.png">
                    <img class="product-desc__img" src="${desc_img}cracone/problem.png">
                    <img class="product-desc__img" src="${desc_img}cracone/consept.png">
                </p>
            </section>
            `
        }
    })
}
/*---------------- 訳あり野菜フェス ---------------- */
if(location.search.slice(2) == "yasai_fes") {
    new Vue({
        el: '#vue',
        data: {
            name: "訳あり野菜フェス",
            about_desc: "規格外野菜だけを使った食フェス企画",
            work: work1,
            desc: "規格外野菜と食品ロスのことについて多くの人に知ってもらう為、規格外野菜だけを使った食フェスを都内で開催する企画案を作りました。",
            desc_sub: "<p class='product-detail__desc--sub mt20'>規格外野菜とは？<br>味は普通の野菜と変わりないですが、見た目が悪いなどで出荷の基準に達せない野菜のことです。</p>",
            special1: ``,
            special2: ``,
            img: img_path+"yasai_fes.png",
            role: "全て",
            season: "1年後期",
            time: "15時間",
            type: "PCサイト",
            will: will1,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
            link: `<a href='${web_path}sutenai_yasai/festival.php' target="_blank">サイトを見る</a>`,
            content: 
            `
            `
        }
    })
}

/*---------------- ジュニア農業体験 ---------------- */
if(location.search.slice(2) == "yasai_junior") {
    new Vue({
        el: '#vue',
        data: {
            name: "ジュニア農業体験",
            about_desc: "子供達の自然と健康を取り戻す農業体験企画",
            work: work1,
            desc: "地方の使われていない土地を活用して、日帰りの農業体験イベントを実地。取れた野菜を料理して食べるなど、野菜づくりの楽しさを知ってもらいます。",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"yasai_fes.png",
            role: "全て",
            season: "1年後期",
            time: "15時間",
            type: "PCサイト",
            will: will1,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
            link: `<a href='${web_path}sutenai_yasai/junior_farming.php' target="_blank">サイトを見る</a>`,
            content: 
            `
            <section class="product-desc">
                <h3 class="solid-ttl">[制作理由] 不健康な生活を送る子供達</h3>
                <p class="product-desc__txt">
                    メイン企画である「すてないやさい」の企画中に派生企画として生まれました。<br>
                    今の生活の中には子供のうちからファストフードやインスタント食品が周りに溢れています。<br>
                    また都内に住む子供達は自然と遊ぶ機会が少なく、ゲームやインターネットで運動を行う機会も昔に比べ減ってきています。<br>
                    子供達は体に悪い食べ物を食べゲームで運動を行わなくなるという不健康な生活を送りがちとなる環境にいるのです。<br>
                    <img class="product-desc__img" src="${desc_img}junior/research.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] 農業体験で子供達の健康を取り戻す</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}junior/problem.png">
                    <img class="product-desc__img" src="${desc_img}junior/step.png">
                    <img class="product-desc__img" src="${desc_img}junior/parent.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[デザイン] 親子に参加したい/させたいと思わせる</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}junior/design.png">
                </p>
            </section>
            `
        }
    })
}

/*---------------- 就農応援プログラム ---------------- */
if(location.search.slice(2) == "yasai_program") {
    new Vue({
        el: '#vue',
        data: {
            name: "就農応援プログラム",
            about_desc: "安心して農業を始めてもらうための応援企画",
            work: work1,
            desc: "この企画は農業を始めたいと思ってもらうところから、実際に農家として働くまでを応援するサイトです。<br>農業次世代人材投資資金という就農支援制度を使い、教育から独立までいちから就農を支援する為の企画を考えました。",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"yasai_program.png",
            role: "全て",
            season: "1年後期",
            time: "20時間",
            type: "PCサイト",
            will: will1,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS / JavaScript / PHP / Git / Gulp",
            link: `<a href='${web_path}sutenai_yasai/farmer_support.php' target="_blank">サイトを見る</a>`,
            content:
            `<section class="product-desc">
            <h3 class="solid-ttl">[制作理由] 農家不足の日本</h3>
                <p class="product-desc__txt">
                    メイン企画である「すてないやさい」の企画中に派生企画として生まれました。<br>
                    農林水産省の発表によると日本の食料自給率は2017年度で38％、主要先進国の中で最低水準に位置しています。ニュースでもTPPが取り上げられていた時、度々食料自給率の話などが話されていました。<br>
                    私は本サイトの「すてないやさい」を制作するに辺り、"日本の農業"についても企画を提案したいと思い本サイトを制作しました。<br>
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[リサーチ01] 新規就農者の数をリサーチ</h3>
                <p class="product-desc__txt">
                    私は農業が本当に人気がなくなり、誰もやりたがらない仕事になったのかという疑問を感じました。<br>
                    その為新規就農者の推移をリサーチしました。<br>
                    画像
                    図の通り平成28年の新規就農者は6万150人で、2年連続で6万人を超えているとわかりました。<br>
                    私はこれに加え「農業をやりたいけど踏み出せない」潜在的なターゲットが存在するのではないかと仮説を立てました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[ターゲット] 潜在するターゲットの選定</h3>
                <p class="product-desc__txt">
                    脱サラ農業という言葉がある通り、就農に興味がある一番のターゲットは都内に住む社会人であると想定。<br>
                    ターゲットは都内に住む社会人と決めました。<br>
                    理由としては<br>
                    ・都内の社会人は職場での人間関係に疲れやすく、農業に憧れを持っているのではないか<br>
                    ・田舎から上京した層がまたもう一度農業に関心を持つのではないか<br>
                    ・田舎暮らしや土に触れる生活に憧れを感じやすい都会に住んでいる為<br>
                    という３つの仮説を元に選定しました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[企画の目的] "興味がある"から"やりたい"へ</h3>
                <p class="product-desc__txt">
                    ターゲットの気持ちとして農業は興味があるけれど、今の仕事を投げ打って失敗するのが不安という方が多いと思います。<br>また、始めたいが敷居が高すぎるといった部分も就農を妨げる要因となっていました。<br>
                    興味がありサイトを閲覧する→敷居が高く諦めるの パターンに陥らないように、農業を始めたいという気持ちになってもらうことを目的としました。<br><br>
                    <span class="color2">農業を始める高い敷居を下げる</span><br>
                    これまで農業を始めるには高額な初期費用や農業に対する十分な知識が必要でした。<br>これは農業を始めるにあたり非常に敷居の高い要因で、多くの就農希望者がこれにより諦めてしまっているのではないかと思いました。<br>
                    これらの障害を解決するため、私は農業次世代人材投資資金という国から農業を始めたいと思う方に給付金が受けられる制度を企画で利用しました。<br><br>
                    <span class="color2">使われていない資源の活用</span><br>
                    私は田舎で問題となっている後継者不足で使われなくなった道具・土地・住み場所があることがリサーチで分かりました。<br>これらの問題を解決する為、使われない資源を新規に農業を始めたい方に貸し出すという企画を提案。<br>
                    上記２つにより就農者の初期費用の負担軽減、就農の敷居を下げることができ、資源の有効活用が行えます。<br><br>
                    <span class="color2">手厚い研修を行い、安心を提供する</span><br>
                    また、脱サラ農業が失敗する主な理由としては不足の事態に対処ができないなどの、"知識や経験の不足"がリサーチで分かりました。
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[ 工夫した点 ] 独立した農家への優遇制度</h3>
                <p class="product-desc__txt">
                    このプログラムを通して独立してもらった農家には、「新人の野菜」という「すてないやさい」本サイトの特別ページにて掲載が可能となる仕組みです。
                    プログラムを通して独立した方にのみ、掲載費無料で野菜を販売することができます。<br>
                    本サイトの利用者と知名度を増やす目的で、プログラムと「すてないやさい」本サイトを繋ぐ要素を考えました。
                </p>
            </section>`
        }
    })
}

/*---------------- my_paper ---------------- */
if(location.search.slice(2) == "my_paper") {
    mockup.className = "product-detail__img--sp";
    btn.classList.add("btn-normal--sp");
    new Vue({
        el: '#vue',
        data: {
            name: "My Paper",
            about_desc: "トイレットペーパーのみを販売する通販サイト。",
            work: work1,
            desc: "色んなトイレットペーパーを取り扱う専門サイト。痔で悩む人のために自分にあったトイレットペーパーを探すことができます。",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"my_paper.png",
            role: "全て",
            season: "1年後期",
            time: "8時間",
            type: "アプリ",
            will: will2,
            skill: "Adobe XD / Photoshop / Illustrator / HTML / CSS / SCSS / PHP / Gulp",
            link: `<a href="#" onclick="alert('推奨：ブラウザの全画面モードを解除してから開くと、スマホサイズのウィンドウが開きます。');window.open('${web_path}my_paper/','My Paper','width=375,height=667');">サイトを見る</a>`,
            content:
            `
            `
        }
    })
}
/*---------------- study_mode ---------------- */
if(location.search.slice(2) == "study_mode") {
    mockup.className = "product-detail__img--sp";
    btn.classList.add("btn-normal--sp");
    new Vue({
        el: '#vue',
        data: {
            name: "Study Mode",
            about_desc: "ゲーム感覚で勉強を楽しく",
            work: work2,
            desc: "勉強を続けることができない学生に、ゲーム感覚で楽しく勉強を続けてもらうアプリ。合宿で名古屋へ行き、合同で名古屋の専門学生と制作しました。",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"studymode.png",
            role: "デザイン / プロトタイプ / プレゼン / 企画",
            season: "1年春休み",
            time: "15時間",
            type: "アプリ",
            will: will1,
            skill: "Adobe XD / Photoshop / Illustrator",
            link: `<a target="_blank" href='https://xd.adobe.com/view/e12ed78c-5940-4a4a-7ac4-c4c9a3f588df-971f/'>プロトタイプを見る</a>`,
            sp_link: ``,
            content:
            `
            <section class="product-desc">
                <h3 class="solid-ttl">[コンセプト] やる気のない男子高校生の勉強意欲を上げる</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}study_mode/target.png">
                    <img class="product-desc__img" src="${desc_img}study_mode/community.png">
                    <img class="product-desc__img" src="${desc_img}study_mode/social.png">
                </p>
            </section>
            <section class="product-desc">
                <h3 class="solid-ttl">[デザイン] 苦手意識を与えない楽しそうなデザイン</h3>
                <p class="product-desc__txt">
                    <img class="product-desc__img" src="${desc_img}study_mode/design.png">
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
                    使ったカスタマージャーニーマップ
                    <img class="product-desc__img" src="${desc_img}study_mode/map.png">
                </p>
            </section>
            `
        }
    })
}


/*---------------- hello_idea ---------------- */
if(location.search.slice(2) == "helloidea") {
    mockup.className = "product-detail__img--sp";
    btn.classList.add("btn-normal--sp");
    new Vue({
        el: '#vue',
        data: {
            name: "Hello Idea",
            about_desc: "生活をちょっと快適に",
            work: work2,
            desc: "みんなの家で活用できる、生活の知恵を共有するアプリ<br>日常生活で知っていると便利な事をユーザー同士で投稿し合い、日常生活に活用したり情報を発信できるサービス",
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"helloidea.png",
            role: "デザイン / プレゼン / 企画 / バックエンド",
            season: "1年後期",
            time: "20時間",
            type: "アプリ",
            will: will1,
            skill: "Adobe XD / Photoshop / Illustrator / PHP / MySql",
            link: `<a href="#" onclick="alert('推奨：ブラウザの全画面モードを解除してから開くと、スマホサイズのウィンドウが開きます。');window.open('${web_path}helloidea/','Helloidea','width=375,height=667');">サイトを見る</a>`,
            content:
            `
            `
        }
    })
}

// /*---------------- Suu スマホ版 ---------------- */
if(location.search.slice(2) == "suu_sp") {
    mockup.className = "product-detail__img--sp";
    btn.classList.add("btn-normal--sp");
    new Vue({
        el: '#vue',
        data: {
            name: "化粧水「Suu」紹介サイト スマホ版",
            about_desc: "初めて作ったWEBサイト スマホver",
            work: work1,
            desc: '化粧水「Suu」紹介サイトのスマホ版です。当時はレスポンシブデザインを知らなかったことから、スマホとPCでファイルを分けて制作しました。',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: img_path+"suu_sp.png",
            role: "全て",
            season: "1年前期",
            time: "50時間",
            type: "PCサイト",
            will: will1,
            skill: "Photoshop / Illustrator / HTML / CSS / SCSS",
            link: `<a href="#" onclick="alert('推奨：ブラウザの全画面モードを解除してから開くと、スマホサイズのウィンドウが開きます。');window.open('${web_path}suu_sp/','Suu','width=375,height=667');;">サイトを見る</a>`,
            content:``
        }
    })
}


// /*-------------------------------- グラフィック -------------------------------- */

// /*---------------- キャンドルナイト ---------------- */
if(location.search.slice(2) == "candle") {
    mockup.className = "product-detail__img--gra";
    // btn.classList.add("btn-normal--gra");
    new Vue({
        el: '#vue',
        data: {
            name: "キャンドルナイト チラシ",
            about_desc: "",
            work: work1,
            desc: '',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: gra_path+"candle_night_main.png",
            role: "グラフィックデザイン",
            season: "1年後期",
            time: "6時間",
            type: "チラシ",
            will: will1,
            skill: "Photoshop / Illustrator",
            link: `<a href="${gra_path}candle_night_main.png" target="_blank">デザインを見る</a>`,
            content:``
        }
    })
}

// /*---------------- ECCEXPOチラシ ---------------- */
if(location.search.slice(2) == "eccexpo_gra") {
    mockup.className = "product-detail__img--gra";
    // btn.classList.add("btn-normal--gra");
    new Vue({
        el: '#vue',
        data: {
            name: "ECCEXPO チラシ",
            about_desc: "",
            work: work1,
            desc: '',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: gra_path+"eccexpo_main.png",
            role: "グラフィックデザイン",
            season: "1年後期",
            time: "3時間",
            type: "チラシ",
            will: will1,
            skill: "Photoshop / Illustrator",
            link: `<a href="${gra_path}eccexpo_main.png" target="_blank">デザインを見る</a>`,
            content:``
        }
    })
}

// /*---------------- すてないやさいチラシ ---------------- */
if(location.search.slice(2) == "yasai_gra") {
    mockup.className = "product-detail__img--gra";
    // btn.classList.add("btn-normal--gra");
    new Vue({
        el: '#vue',
        data: {
            name: "すてないやさい チラシ",
            about_desc: "",
            work: work1,
            desc: '',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: gra_path+"yasai_main.png",
            role: "グラフィックデザイン",
            season: "1年後期",
            time: "6時間",
            type: "チラシ",
            will: will1,
            skill: "Photoshop / Illustrator",
            link: `<a href="${gra_path}yasai_main.png" target="_blank">デザインを見る</a>`,
            content:``
        }
    })
}

// /*---------------- Suu印刷物 ---------------- */
if(location.search.slice(2) == "suu_gra") {
    mockup.className = "product-detail__img--gra";
    // btn.classList.add("btn-normal--gra");
    new Vue({
        el: '#vue',
        data: {
            name: "Suu 印刷物",
            about_desc: "",
            work: work1,
            desc: '',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: gra_path+"suu_gra_main.png",
            role: "グラフィックデザイン",
            season: "1年後期",
            time: "6時間",
            type: "チラシ",
            will: will1,
            skill: "Photoshop / Illustrator",
            link: `<a href="${gra_path}suu_graphic_main.png" target="_blank">デザインを見る</a>`,
            content:``
        }
    })
}

// /*---------------- タンブラーラベル ---------------- */
if(location.search.slice(2) == "tumbler") {
    mockup.className = "product-detail__img--tumbler";
    // btn.classList.add("btn-normal--gra");
    new Vue({
        el: '#vue',
        data: {
            name: "タンブラーラベル",
            about_desc: "",
            work: work1,
            desc: '',
            desc_sub: "",
            special1: ``,
            special2: ``,
            img: gra_path+"tumbler_main.png",
            role: "グラフィックデザイン",
            season: "1年夏休み",
            time: "6時間",
            type: "タンブラーラベル",
            will: will1,
            skill: "Illustrator",
            link: `<a href="${gra_path}tumbler_main.png" target="_blank">デザインを見る</a>`,
            content:``
        }
    })
}




// 作品説明 - アコーディオン
$('.accordion').click(function() {
    let $content = $(this).find('.accordion__content');
    if($content.hasClass('accordion--open')) {
         $content.removeClass('accordion--open');
         $content.slideDown();
         $(this).find('.accordion--icon').text('-');
    } else {
         $content.addClass('accordion--open');
         $content.slideUp();
         $(this).find('.accordion--icon').text('+');
    }
});