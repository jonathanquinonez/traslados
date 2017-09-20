var gulp = require('gulp'),
    gutil = require('gulp-util'),
    plugins = require('gulp-load-plugins')();
var browserSync = require('browser-sync').create();
var download = require("gulp-download-stream");
var materialFonts = ['./node_modules/materialize-css/fonts/**/*', './node_modules/mdi/fonts/**', './src/fonts/**'],
    destinationMaterialFonts = './dist/fonts/';
// CODIGOFORGE : TEST
var w3cjs = require('gulp-w3cjs');

// SASS
// ========================================
gulp.task('scss', function() {
    return gulp.src('./src/scss/main.scss')
        .pipe(plugins.sourcemaps.init({ largeFile: true })) // Process the original sources
        .pipe(plugins.sass().on('error', plugins.sass.logError))
        .pipe(plugins.autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
        .pipe(plugins.sourcemaps.write()) // Add the map to modified source.
        .pipe(gulp.dest('./dist/css'))
        // .pipe(plugins.notify({ title:"Forge: scss", message: 'main.css has been generated!',"onLast": true,"wait": true }))
        .pipe(browserSync.stream());
});

// miscellaneous : CSS
// ========================================
gulp.task('mis:scss', function() {
    return gulp.src(['./src/scss/dynamic.scss', './src/scss/markup.scss'])
        .pipe(plugins.sass({ outputStyle: 'compressed' }).on('error', plugins.sass.logError))
        .pipe(plugins.autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
        .pipe(plugins.rename({ suffix: '.min' }))
        .pipe(gulp.dest('./dist/css'))
        // .pipe(plugins.notify({ title:"Forge: scss",message: 'Dynamic css has been generated!',"onLast": true,"wait": true }))
        .pipe(browserSync.stream());
});

// CSS PLUGINS : SASS => CSS
// ========================================
gulp.task('css-plugins', function() {
    return gulp.src('./src/scss/plugins/**/*.scss')
        .pipe(plugins.sass().on('error', plugins.sass.logError))
        .pipe(plugins.cssmin())
        .pipe(gulp.dest('./dist/css/plugins'));
    // .pipe(plugins.notify({ title:"Forge: css-plugins",message: 'CSS plugins are ready!',"onLast": true,"wait": true}));
});

// MINIFY CSS
// ========================================
gulp.task('minify-css', ['scss'], function() {
    return gulp.src(['./dist/css/main.css'])
        .pipe(plugins.cssmin())
        .pipe(plugins.rename({ suffix: '.min' }))
        .pipe(gulp.dest('./dist/css'))
        .pipe(plugins.notify({ title: "Forge: cssminify", message: 'main.min.css has been generated!', "onLast": true, "wait": true }));
});

// Materail Notes Updates
gulp.task('materialnote', function() {
    return gulp.src('./src/plugins/materialNote/sass/**/*.scss')
        .pipe(plugins.sass().on('error', plugins.sass.logError))
        .pipe(plugins.autoprefixer('last 10 version'))
        .pipe(plugins.cssmin())
        .pipe(gulp.dest('./dist/plugins/materialNote/css'))
        .pipe(plugins.notify({ title: "Forge: MaterialNotes Editor", message: 'MaterialNotes CSS is ready!', "onLast": true, "wait": true }));
});

// SCRIPT
// ========================================
gulp.task('scripts', ['script:es6'], function() {
    return gulp.src([
            './node_modules/jquery/dist/jquery.min.js',
            './src/js/jquery-ui.min.js',
            './node_modules/materialize-css/bin/materialize.js',
            './src/plugins/scrollbar/perfect-scrollbar.min.js',
            './dist/js/forge.js',
            './src/js/init.js'
        ])
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.concat('all.js'))
        .pipe(gulp.dest('./dist/js'))
        .pipe(plugins.sourcemaps.write('.'));
});

// Ecma Script
// ========================================
gulp.task('script:es6', function() {
    return gulp.src(["./src/js/forge.js", "./src/js/dashboard.js", "./src/js/init.js", "./src/js/signin.js"])
        .pipe(plugins.babel())
        // .pipe(plugins.uglify())
        .pipe(plugins.minify())
        .pipe(gulp.dest("./dist/js"))
        .pipe(browserSync.stream());
});

// Download JS
// ========================================
gulp.task('download:js', function() {
    download([{
            file: "jquery-ui.min.js",
            url: "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        }])
        .pipe(gulp.dest("./src/js/"));
});

// PUG TEMPLATE
// ========================================
gulp.task('templates', function() {
    return gulp.src('./src/pug/pages/*.pug')
        .pipe(gutil.env.type === 'dev' ? gutil.noop() : plugins.changed('./dist/pages', { extension: '.html' }))
        .pipe(plugins.pugBeautify({ omit_empty: true, fill_tab: true, omit_div: false, tab_size: 4, separator_space: true }))
        .pipe(plugins.pug({ pretty: true }))
        .pipe(gulp.dest('./dist/pages'))
        .pipe(plugins.notify({ title: "Forge: pug", message: 'HTML file are ready!', "onLast": true, "wait": true }))
        .pipe(browserSync.stream());
});

// COPY FONTS
// ========================================
gulp.task('copy:fonts', function() {
    return gulp
        .src(materialFonts)
        .pipe(gulp.dest(destinationMaterialFonts));
});

// COPY PLUGINS
// ========================================
gulp.task('copy:plugins', function() {
    return gulp
        .src(['./src/plugins/**/*'])
        .pipe(gulp.dest('./dist/plugins/'));
});

// COPY ChartJS
// ========================================
gulp.task('copy:chartJS', function() {
    return gulp
        .src(['./node_modules/chart.js/dist/*'])
        .pipe(gulp.dest('./dist/plugins/charts/chartjs/dist/'));
});

// COPY IMAGES
// ========================================
gulp.task('copy:images', function() {
    return gulp.src(['./src/images/**/*'])
        .pipe(gulp.dest('./dist/images/'));
});

// COPY LOGO
// ========================================
gulp.task('copy:logo', function() {
    return gulp
        .src(['./src/logo/**/*'])
        .pipe(gulp.dest('./dist/logo'));
});

// COPY VIDEO
// ========================================
gulp.task('copy:video', function() {
    return gulp.src(['./src/video/**/*'])
        .pipe(gulp.dest('./dist/video/'));
});

// SERVE
// ========================================
gulp.task('serve', function() {
    browserSync.init({
        server: {
            baseDir: ["./dist", "./dist/pages"] //added multiple directories 
        }
    });
    gulp.watch('./dist/pages/*.html').on('change', browserSync.reload);
});

// WATCH
// ========================================
gulp.task('watch', function() {
    gulp.watch('./src/scss/**/*.scss', ['scss']);
    gulp.watch('./src/pug/pages/*.pug', ['templates']);
});

gulp.task('watch:scss', function() {
    gulp.watch('./src/scss/**/*.scss', ['scss']);
});

gulp.task('watch:scripts', ['script:es6', 'scripts'], function() {
    gulp.watch('./src/js/*.js', ['script:es6', 'scripts']);
});

gulp.task('watch:css-plugins', ['css-plugins'], function() {
    gulp.watch("./src/sass/plugins/**/*.scss", ['css-plugins']);
});

// DEFAULT
// ========================================
gulp.task('default', ['copy:fonts', 'scss', 'scripts', 'templates', 'css-plugins']);

// TASK LIST
// ========================================
gulp.task('dev', ['default', 'watch'], function() {
    gulp.start('serve');
});
gulp.task('dev-watch', ['watch'], function() {
    gulp.start('serve');
});
gulp.task('prod', ['default', 'minify-css', 'mis:scss']);
gulp.task('assets', ['copy:fonts', 'copy:plugins', 'copy:logo', 'copy:images', 'download:js', 'copy:chartJS', 'copy:video']);

// CODIGOFORGE : TEST
gulp.task('w3cjs', function() {
    gulp.src('./dist/pages/*.html')
        .pipe(w3cjs())
        .pipe(w3cjs.reporter());
});