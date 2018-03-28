var gulp = require('gulp');
var sass = require('gulp-sass');
var csscomb = require('gulp-csscomb');
var plumber = require('gulp-plumber');
var autoprefixer = require('gulp-autoprefixer');
var notify  = require('gulp-notify');
var watch = require('gulp-watch');
var changed = require('gulp-changed');
var cache = require('gulp-cached');


gulp.task('sass', function() {
  return gulp.src(['assets/sass/**/*.scss'])
    .pipe(plumber({ // gulp-plumberを咬ますとエラー時にgulpが止まらない。
        errorHandler: notify.onError('Error: <%= error.message %>') // gulp-notifyでエラー通知を表示
    }))
    .pipe(sass()) // gulp-sassでコンパイルし、
    .pipe(autoprefixer({ browsers: ['last 2 versions', 'Android 3', 'ie 10'] })) // 対応ブラウザ。案件によって変更する
    .pipe(csscomb()) // gulp-csscombで整形
    .pipe(gulp.dest('public_html/css/')) // cssフォルダに吐き出す。
});


gulp.task( 'js',function() {
    return gulp.src(['assets/js/**/*.js'])
    .pipe(cache('js-cache')) // キャッシュさせつつ、
    .pipe(gulp.dest('public_html/js/')) // destDirに出力
});

gulp.task('default',['sass'],function(){
    // watch([assetsDir + '/**/*.+(jpg|jpeg|gif|png|html|php)'], function(event){
        // gulp.start(['copyResource']); css,sass,js以外に変更があったら実行。
    // });
    watch(['assets/sass/**/*.scss'], function(event){
        gulp.start(['sass']); // sassに変更があったら実行。
    });
    watch(['assets/js/**/*.js'], function(event){
        gulp.start(['js']); //.jsに変更があったら実行。
    });
});