module.exports = {
    // メインとなるJavaScriptファイル（エントリーポイント）
    entry: `./src/js/index.js`,

    // ファイルの出力設定
    output: {
        //  出力ファイルのディレクトリ名
        // path: `${__dirname}/js`,
        // 出力ファイル名
        filename: "bundle.js",
    },

    // モード値を production に設定すると最適化された状態で、
    // development に設定するとソースマップ有効でJSファイルが出力される
    // 開発時にはdevelopmentを指定し、ウェブサイト公開時にはproductionに設定するのがいいでしょう。
    mode: "development"
};