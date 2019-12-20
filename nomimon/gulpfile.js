//strictmodeでのjsファイルを実行
"use strict";

//moduleの追加
require("es6-promise").polyfill();
const gulp = require("gulp");
const webpackStream = require("webpack-stream");
const webpack = require("webpack");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const browserSync = require("browser-sync").create();

// gulpプラグインの中からseriesとtaskというものを呼び出している。
const { parallel, src, dest, watch } = gulp;

// in/output dir path
const cssSrcPath = "./src/sass";
const cssDestPath = "./css";
const jsSrcPath = "./src/js";
const jsDestPath = "./js";

const browserReload = () =>
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });

// Sass変換タスク実行
const compileSass = () => {
  src(cssSrcPath + "/**/*.scss")
    .pipe(
      (plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
      }))
    )
    .pipe(sourcemaps.init()) // ソースマップを初期化
    .pipe(
      sass({
        outputStyle: "compressed",
        compass: true
      }).on("error", sass.logError)
    )
    .pipe(sourcemaps.write()) // ソースマップの作成
    .pipe(autoprefixer())
    .pipe(dest(cssDestPath))
    .pipe(browserSync.reload());
};
// webpackの設定ファイルの読み込み
const webpackConfig = require("./webpack.config");

// JSタスク実行(webpack)
const compileJS = () => {
  webpackStream(webpackConfig, webpack)
    .pipe(
      (plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
      }))
    )
    .pipe(gulp.dest("js"))
    .pipe(browserSync.reload());
}

// JS,Sassファイルを監視し、変更があったらJS,Sassを変換します
const watchSassFiles = () => { watch(`${cssSrcPath}/**/*.scss`, compileSass); };
const watchJSFiles = () => { watch(`${jsSrcPath}/**/*.js`, compileJS); };

// npx gulpというコマンドを実行した時、watchSassFilesとwatchJSFilesが実行されるようにします
// exports.default = parallel(watchSassFiles,watchJSFiles);
exports.default = parallel(watchSassFiles, watchJSFiles, browserReload);
