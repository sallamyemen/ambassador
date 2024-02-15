'use strict';

// import gulp from 'gulp';
// import autoprefixer from 'gulp-autoprefixer';
// import browserSync from 'browser-sync';
// const sass = require('gulp-sass')(require('sass'));
// import nodeBourbon from 'node-bourbon';
// import rename from 'gulp-rename';
// import cleanCSS from 'gulp-clean-css';
//import compiler from 'node-sass';

let gulp         = require('gulp'), // Подключаем Gulp
    browserSync  = require('browser-sync').create(),// Подключаем Browser Sync
    sass         = require('gulp-sass')(require('sass')), // Подключаем Sass пакет
    nodeBourbon  = require('node-bourbon'), // Подключаем библиотеку Sass миксинов
    rename       = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    autoprefixer = require('gulp-autoprefixer'), // Подключаем библиотеку для автоматического добавления префиксов
    cleanCSS     = require('gulp-clean-css');

sass.compiler = require('node-sass');


function styles() {
    return gulp.src("sass/**/*.sass")
        // перегоняем sass в css
        .pipe(sass({
            includePaths: nodeBourbon.includePaths
        }).on('error', sass.logError))
        // переименовываем файл
        .pipe(rename({suffix: ".min", prefix : ""}))
        // добавляем свойсва в css для популярных браузеров
        .pipe(autoprefixer({
            cascade: false
        }))
        // сжимаем css
        .pipe(cleanCSS({
            level: 2
        }))
        // кладём в папку
        .pipe(gulp.dest("../web/front/css"))
        // перезагрузка станицы
        .pipe(browserSync.stream());
}


function watch() {
    browserSync.init({
        port: 3000,
        ui: {
            port: 3001
        },
        proxy: 'http://kolambassador.loc/',
        notify: false // Отключаем уведомления
    });

    gulp.watch("./sass/**/*.sass", styles);

    gulp.watch("../web/*.php").on('change', browserSync.reload);
    gulp.watch("../web/*.html").on('change', browserSync.reload);

    gulp.watch("../assets/*.php").on('change', browserSync.reload);
    gulp.watch("../config/*.php").on('change', browserSync.reload);
    gulp.watch("../controller/*.php").on('change', browserSync.reload);
    gulp.watch("../models/*.php").on('change', browserSync.reload);
    gulp.watch("../view/*.php").on('change', browserSync.reload);
    gulp.watch("../widgets/*.php").on('change', browserSync.reload);
}


gulp.task(
    'default',
    gulp.series(styles, watch)
);
