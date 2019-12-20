<?php 
$vege_img = [];
$vege_img = [
    "0" => IMG_PHOTO . "potato.jpg",
    

];
/* ----------- vegetable name ----------- */
$vegetable = [];
$vegetable[] = [   
    [
        [ "name" => "大根", "class" => "white_radish", "num" => 1 ],
        [ "name" => "人参", "class" => "carrot", "num" => 2],
        [ "name" => "れんこん", "class" => "lotus_root", "num" => 3],
        [ "name" => "さつまいも", "class" => "sweet_potato", "num" => 4],
        [ "name" => "じゃがいも", "class" => "potato", "num" => 5],
        [ "name" => "たまねぎ", "class" => "onion", "num" => 6],
        [ "name" => "キャベツ", "class" => "cabbage", "num" => 7],
        [ "name" => "レタス", "class" => "lettuce","num" => 8],
        [ "name" => "ネギ", "class" => "green_onion","num" => 9],
        [ "name" => "かぼちゃ", "class" => "pumpkin", "num" => 10],
        [ "name" => "トマト", "class" => "tomato", "num" => 11],
        [ "name" => "ナス", "class" => "eggplant", "num" => 12],
        [ "name" => "ピーマン", "class" => "green_pepper", "num" => 13],
    ]
];

// good_value heading data
$good_valueTtl = [];
$good_valueTtl[] = [
    "ttl" => "トマト",
    "sub_ttl" => "今月のお得な野菜は",
    "figure" => IMG_PHOTO . "tomato.png",
    "figure_alt" => "丸々とした綺麗なトマト",
    "desc" => "今月はお買い得なトマトが沢山！<br>サラダにも最適！",
];

// prefectures data
$pref = [];
$pref[] = [
    "hokkaido" => "北海道",
    "aomori" => "青森県",
    "iwate" => "岩手県",
    "akita" => "秋田県",
    "miyagi" => "宮城県",
    "yamagata" => "山形県",
    "fukushima" => "福島県",
];
$pref[] = [
    "tokyo" => "東京都",
    "kanagawa" => "神奈川県",
    "chiba" => "千葉県",
    "saitama" => "埼玉県",
    "ibaraki" => "茨城県",
    "totigi" => "栃木県",
    "gumma" => "群馬県",
];
$pref[] = [
    "nagano" => "長野県",
    "nigata" => "新潟県",
    "yamanashi" => "山梨県",
    "ishikawa" => "石川県",
    "toyama" => "富山県",
    "fukui" => "福井県",
];
$pref[] = [
    "aichi" => "愛知県",
    "gifu" => "岐阜県",
    "mie" => "三重県",
    "sizuoka" => "静岡県",
];
$pref[] = [
    "osaka" => "大阪府",
    "kyoto" => "京都府",
    "hyogo" => "兵庫県",
    "siga" => "滋賀県",
    "nara" => "奈良県",
    "wakayama" => "和歌山県",
];
$pref[] = [
    "totori" => "鳥取県",
    "shimane" => "島根県",
    "hiroshima" => "広島県",
    "okayama" => "岡山県",
    "yamaguchi" => "山口県",
];
$pref[] = [
    "ehima" => "愛媛県",
    "kagawa" => "香川県",
    "tokushima" => "徳島県",
    "kochi" => "高知県",
];
$pref[] = [
    "fukuoka" => "福岡県",
    "nagasaki" => "長崎県",
    "kumamoto" => "熊本県",
    "saga" => "佐賀県",
    "oita" => "大分県",
    "miyazaki" => "宮崎県",
    "kagoshima" => "鹿児島県",
    "okinawa" => "沖縄県",
];


/* ----------- product page ----------- */
$product = [];
$product[] = [
    "img" => IMG_PHOTO . "richness_tomato_big.jpg",
    "img_mini1" => IMG_PHOTO . "pride_tomato_small.jpg",
    "img_mini2" => IMG_PHOTO . "fresh_tomato_small.jpg",
    "img_mini3" => IMG_PHOTO . "richness_tomato_small.jpg",
    "img_alt" => "新鮮そうなトマト",
    "img_mini1_alt" => "新鮮そうなトマト",
    "img_mini2_alt" => "新鮮そうな大きいトマト",
    "img_mini3_alt" => "新鮮そうなトマト",
    "name" => "自慢のトマト",
    "weight" => "3kg",
    "text" => "丹精込めて作ったトマトです。<br>
                トマトに切れ目が多々ありますが、味は美味しく食べごろのトマトです。<br>
                とても新鮮なのでトマトジュースやサラダにぴったりです。",
    "farmer" => "大友ファーム",
    "farmer_img" => IMG_PHOTO . "couple_farmer_hand.jpg",
    "farmer_alt" => "手をあげて笑っている若い夫婦",
    "pref" => "大阪府泉南市",
    "price" => "1200",
    "star" => IMG_GLOBAL . "four_star_i.svg",
    "farmer_desc" => "私たちの農園は大阪府泉南市にあります。<br>野菜を通じて人々の健康を良くしたいを理念に丹精込めて野菜を作っています。",
    "shipment" => "2019/2/19",
];

// customer review
$customer = [];
$customer[] = [
    "name" => "大友居酒屋",
    "img" => IMG_PHOTO . "sakamoto_restaurant.png",
    "star" => IMG_GLOBAL . "four_star_i.svg",
    "time" => "2019/2/19 11:00",
    "text" => "素晴らしいの一言！対応も良くリピーターになりました。",
];
$customer[] = [
    "name" => "宮崎居酒屋",
    "img" => IMG_PHOTO . "miyazaki_restaurant.png",
    "star" => IMG_GLOBAL . "four_star_i.svg",
    "time" => "2019/2/17 11:00",
    "text" => "見た目は少し違和感がありますが、味がとても美味しくお客様からとても好評でした。",
];


/* ----------- event page ----------- */
$event_dataSep = [];
$event_dataSep[] = [
    "name" => "訳あり野菜フェス",
    "text" => "訳あり野菜だけを使った食フェスを開催！全国各地のレストランが都内に集結！そこでしか食べられない料理を振る舞います。",
    "place" => "東京都中野区中野４丁目１３ 中野四季の森公園",
    "date" => "2019年 9/28(土) 〜 9/29(日)",
    "image" => IMG_PHOTO . "festival_thumbnail.jpg",
    "image_alt" => "料理を両手に持っている人",
    "link" => "festival.php",
];
$event_dataSep[] = [
    "name" => "ジュニア農業体験",
    "text" => "子供達が季節に合わせた野菜を農家の元で、収穫したり調理をしたりして楽しめる体験です。
                子供達の体力向上や、社会性を学ぶことが出来ます。",
    "place" => "東京都中野区中野４丁目１３ 中野四季の森公園",
    "date" => "2019年 9/28(土) 〜 9/29(日)",
    "image" => IMG_PHOTO . "junior_thumbnail.jpg",
    "image_alt" => "野菜を両手に持っている子供",
    "link" => "junior_farming.php",
];
$event_dataJune[] = [
    "name" => "就農応援プログラム",
    "text" => "農業に興味がある社会人を対象とした就農を支援するプログラムの説明会です。なかなか踏み出せない農業の仕事、今こそ始めませんか？",
    "place" => "東京都千代田区大手町２丁目６−１",
    "date" => "2019年 9/8(日)",
    "image" => IMG_PHOTO . "be_farmer_thumbnail_teach.jpg",
    "image_alt" => "農業の研修をしている男女",
    "link" => "farmer_support.php",
];



?>