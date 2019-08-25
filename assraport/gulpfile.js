 //strictmodeでのjsファイルを実行
'use strict';

//moduleの追加
require('es6-promise').polyfill();
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const pug = require('gulp-pug');
const browserSync = require("browser-sync");
const { series,task,src,dest,watch } = gulp;

// in/output dir path
const cssSrcPath = './src/sass/**';
const cssDestPath = './css';
const jsSrcPath = './src/js';
const jsDestPath = './js';
const pugSrcPath = './src/pug';
const pugDestPath = './';

//taskの実行
task('sass',(done)=>{
    console.log("sassの実行");
    src(cssSrcPath + '/*.scss' )
    .pipe(plumber({
    errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    .pipe(sass({
    outputStyle:'expanded',
    compass : true
    }).on('error',sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer())
    .pipe(dest(cssDestPath));
    browserSync.reload();
    done();
})
task('js',(done)=>{
    console.log("jsの実行");
    src(jsSrcPath + '/*.js' )
    .pipe(plumber({
        errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    .pipe(dest(jsDestPath));
    browserSync.reload();
    done();
})
task('pug',(done)=>{
    console.log("pugの実行");
    src([`${pugSrcPath}/*.pug` , `!${pugSrcPath}/_*.pug`]) // ← アンダーバーついてるファイルは読み込まないという意味
    // sassファイルアンダーバーのファイル読み込まないから、ルール統一している。
    // * = 全部 _がついてるファイルは"全部"。
    .pipe(plumber({
        errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    .pipe(pug({
        pretty: true
    }))
    .pipe(dest(pugDestPath));
    done();
})

task('watch',(done)=>{
    console.log("watchの実行");
    watch(`${cssSrcPath}/*.scss`,task('sass'));
    watch(`${jsSrcPath}/*.js`,task('js'));
    watch(`${pugSrcPath}/*.pug`,task('pug'));
    done();
})
task("server", (done)=> {
    browserSync.init({
        proxy: "localhost/project/2019_08_02_assraport/",
        index:"index.php"
    });
    done();
});

task('default',series('server','watch'));

// 画像圧縮
const changed = require('gulp-changed');
const imagemin = require('gulp-imagemin');
const imageminJpg = require('imagemin-jpeg-recompress');
const imageminPng = require('imagemin-pngquant');
const imageminGif = require('imagemin-gifsicle');
const svgmin = require('gulp-svgmin');

const paths = {
    srcDir: 'img/**/',
    dstDir: 'img_dest/'
}

// jpg png gif画像の圧縮
gulp.task('imagemin', function() {
    const srcGlob = paths.srcDir + "/**/*.+(jpg|jpeg|png|gif)";
    const dstGlob = paths.dstDir;
    gulp.src( srcGlob )
    .pipe(changed(dstGlob))
    .pipe(imagemin([
        imageminPng(),
        imageminJpg(),
        imageminGif({
            interlaced: false,
            optimizationLevel: 3,
            colors: 180
        })
    ]))
    .pipe(gulp.dest(dstGlob));
});


// svg画像の圧縮
gulp.task('svgmin', function () {
    const srcGlob = paths.srcDir + "/**/*.+(svg)";
    const dstGlob = paths.dstDir;
    gulp.src(srcGlob)
        .pipe(changed(dstGlob))
        .pipe(svgmin())
        .pipe(gulp.dest(dstGlob));
});