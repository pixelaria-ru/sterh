'use strict';
var gulp = require('gulp'),
pug = require('gulp-pug'),
stylus = require('gulp-stylus'),
shorthand = require('gulp-shorthand'),
svgSprite = require('gulp-svg-sprites'),
svgmin = require('gulp-svgmin'),
cheerio = require('gulp-cheerio'),
replace = require('gulp-replace'),
browserSync = require('browser-sync').create(),
concat = require('gulp-concat'),
postcss = require('gulp-postcss'),
clean = require('gulp-clean'),
autoprefixer = require('autoprefixer'),
cssnano = require('cssnano'),
uglify = require('gulp-uglify'),
pxtorem = require('postcss-pxtorem'),
imagemin = require('gulp-imagemin'),
focus = require('postcss-focus'),
postcssPresetEnv = require('postcss-preset-env'),
imageminMozjpeg = require('imagemin-mozjpeg'),
htmlmin = require('gulp-htmlmin'),
csscomb = require('gulp-csscomb'),
sourcemaps = require('gulp-sourcemaps'),
babel = require('gulp-babel'),
rename = require('gulp-rename');

var processors = [
autoprefixer({browsers: ['last 5 version']}),
postcssPresetEnv(),
focus(), 
pxtorem(), 
];

var cssmin = [
cssnano({
discardComments: {removeAll: true}
})
];

// Clean
gulp.task('clean', function () { 
return gulp.src('public', {read: false})
.pipe(clean());
});

// Pug
gulp.task('pug', function() {
return gulp.src('frontend/pug/*.pug')
.pipe(pug({
pretty:true
}))
// .pipe(htmlmin({ 
// collapseWhitespace: true,
// removeComments: true
// }))
.pipe(gulp.dest('public'))
});


// Pug
gulp.task('pug:prod', function() {
return gulp.src('frontend/pug/*.pug')
.pipe(pug({
pretty:true
}))
.pipe(htmlmin({ 
collapseWhitespace: true,
removeComments: true
}))
.pipe(gulp.dest('public'))
});

// Stylus and css min
gulp.task('stylus', function(){
return gulp.src('frontend/stylus/*.styl','frontend/stylus/*/*.styl')
// .pipe(sourcemaps.init())
.pipe(stylus())
.pipe(shorthand())
.pipe(gulp.src('frontend/assets/css/*.css'))
.pipe(concat('style.css'))
.pipe(csscomb())
.pipe(postcss(processors))
// .pipe(sourcemaps.write('.'))
.pipe(gulp.dest('public/css'))
.pipe(postcss(cssmin))
.pipe(rename({
suffix: ".min"
}))
.pipe(gulp.dest('public/css'))
.pipe(browserSync.stream());
});


// Stylus and css min for prod
gulp.task('stylus:prod', function(){
return gulp.src('frontend/stylus/*.styl','frontend/stylus/*/*.styl')
// .pipe(sourcemaps.init())
.pipe(stylus())
.pipe(shorthand())
.pipe(gulp.src('frontend/assets/css/*.css'))
.pipe(concat('style.css'))
.pipe(csscomb())
.pipe(postcss(processors))
// .pipe(sourcemaps.write('.'))
.pipe(postcss(cssmin))
.pipe(rename({
suffix: ".min"
}))
.pipe(gulp.dest('public/css'))
.pipe(browserSync.stream());
});

// Svg sprites
gulp.task('svg:build', function () {
return gulp.src('frontend/assets/svg/*.svg')
.pipe(cheerio({
run: function ($) {
$('[fill]').removeAttr('fill');
$('[style]').removeAttr('style');
$('[height]').removeAttr('height');
$('[width]').removeAttr('width');
},
parserOptions: { xmlMode: true }
}))
.pipe(svgmin({
js2svg: {
pretty: true
}
}))
.pipe(replace('&gt;', '>'))
.pipe(svgSprite({
mode: "symbols",
preview: false,
selector: "icon-%f",
svg: {
symbols: 'sprite.svg'
}
}
))
.pipe(gulp.dest('public/svg'))
});

// JS min
gulp.task('js:build', function(){
return gulp.src('frontend/js/*.js')
.pipe(gulp.src('frontend/js/*/*.js'))
.pipe(babel({
"presets": ["@babel/preset-env"]
}))
.pipe(concat('lib.js'))
.pipe(gulp.dest('public/js'))
.pipe(uglify())
.pipe(rename({
suffix: ".min"
}))
.pipe(gulp.dest('public/js'))
});

// JS prod
gulp.task('js:prod', function(){
return gulp.src('frontend/js/*.js')
.pipe(gulp.src('frontend/js/*/*.js'))
.pipe(babel({
"presets": ["@babel/preset-env"]
}))
.pipe(concat('lib.js'))
.pipe(uglify())
.pipe(rename({
suffix: ".min"
}))
.pipe(gulp.dest('public/js'))
});

// Fonts
gulp.task('fonts:build', function(){
return gulp.src('frontend/assets/fonts/HelveticaNeueCyr/*')
.pipe(gulp.src('frontend/assets/fonts/montserrat/*'))
.pipe(gulp.dest('public/css'))

});

// Image min
// npm config set unsafe-perm=true
gulp.task('images:build', function(){
return gulp.src('frontend/assets/images/**')
.pipe(imagemin({
interlaced: true,
progressive: true,
optimizationLevel: 5,
verbose: true
}))
.pipe(imagemin([imageminMozjpeg({
quality: 85
})]))
.pipe(gulp.dest('public/images'))
});

gulp.task('watch', function(){
gulp.watch(['frontend/stylus/*.styl','frontend/stylus/*/*.styl','frontend/stylus/**/*.styl','frontend/stylus/***/*.styl'],gulp.series('stylus'))
gulp.watch(['frontend/pug/*.pug','frontend/pug/*/*.pug'],gulp.series('pug'))
gulp.watch(['frontend/js/*.js','frontend/js/*/*.js'],gulp.series('js:build'))
});
 
gulp.task('browser-sync', function() {
browserSync.init({
server: {
baseDir: "./public"
}
});
browserSync.watch('public',browserSync.reload)
});

// ПЕРВИЧНАЯ СБОРКА 
gulp.task('build:dev',gulp.series(
gulp.parallel('js:build','fonts:build','images:build','svg:build')));

// ПЕРВИЧНАЯ СБОРКА В ПРОДАКШЕН
gulp.task('build:prod',gulp.series(
gulp.parallel('js:prod','fonts:build','images:build','svg:build')));

// ЛОКАЛЬНАЯ СБОРКА 
gulp.task('dev', gulp.series('clean', gulp.parallel('build:dev', 'pug','stylus'),
gulp.parallel('watch','browser-sync')
));

// СБОРКА ДЛЯ ПРОДАКШЕНА 
gulp.task('prod', gulp.series('clean', gulp.parallel('build:prod', 'pug:prod','stylus:prod'),
gulp.parallel('watch','browser-sync')
));

// СОБИРАЕМ И ОТПРАВЛЯЕМ НА СЕРВЕР
// gulp.task('deploy', gulp.series('clean', gulp.parallel(
// 'build','pug','stylus'), 'ftp'
// ));