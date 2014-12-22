'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    jshint = require('gulp-jshint'),
    browserify = require('browserify'),
    duration = require('gulp-duration'),
    livereload = require('gulp-livereload'),
    runSequence = require('run-sequence'),
    del = require('del'),
    buffer      = require('vinyl-buffer'),
    source      = require('vinyl-source-stream'),
    watchify    = require('watchify');

var paths = {
    bowerPath:"./vendor/bower"
};

var jslibs = require('./jslibs');

gulp.task('concat:dev-libs', function() {
    return gulp.src(jslibs(paths.bowerPath.replace('./','')))
        .pipe(concat('lib.js'))
        .pipe(gulp.dest('./protected/dist/'));
});

gulp.task('clean', function(done) {
    del(['./protected/dist/*'], {force: true}, done);
});

gulp.task('jshint', function(){
    return gulp.src(['./protected/src/**/*.js'])
        .pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('jshint-summary', {
            fileColCol: ',bold',
            positionCol: ',bold',
            codeCol: 'green,bold',
            reasonCol: 'cyan'
        }))
        .pipe(jshint.reporter('fail'));
});

gulp.task('devDist',['clean'],function(done){
    runSequence('concat:dev-libs', done)
});

gulp.task('browserify', function () {
    var bundler = browserify({
        cache: {},
        packageCache: {},
        fullPaths: true,
        entries: ['./protected/src/main.js'],
        insertGlobals: true,
        debug: true
    });

    var rebundle = function () {
        return bundler
            .bundle()
            .pipe(source('main.js'))
            .pipe(duration('bundle time'))
            .pipe(buffer())
            .pipe(gulp.dest('./protected/dist'))
            .pipe(livereload());
    };

    bundler = watchify(bundler);
    bundler
        .on('update', function () {
            //to exclude jshint task pass -f argument
            if (!argv.f) {
                return gulp.start(['jshint'], rebundle);
            }
            return rebundle();
        });

    return rebundle();
});

gulp.task('watch', ['browserify'], function (done) {
    done();
});

gulp.task('livereload', function () {
    var lrserver = livereload();

    gulp.watch('./protected/src/**/*.js').on('change', function(file) {
        lrserver.changed(file.path);
    });
});

gulp.task('dev', function (done) {
    runSequence(
        'devDist',
        'watch',
        done);
});
