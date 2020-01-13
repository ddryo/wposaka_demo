const { src, dest, watch, series, parallel, lastRun } = require( 'gulp' );

// エラー時処理
const plumber = require( 'gulp-plumber' ); // 続行
const notify = require( 'gulp-notify' ); // 通知

// sass・css系
const sass = require( 'gulp-sass' ); // sassコンパイル
const sassGlob = require( 'gulp-sass-glob' ); // glob (@importの/*を可能に)
const autoprefixer = require( 'gulp-autoprefixer' ); // プレフィックス付与
const gcmq = require( 'gulp-group-css-media-queries' ); // media query整理
const cleanCSS = require( 'gulp-clean-css' );
const gulpStylelint = require('gulp-stylelint');

// webpack
// const webpack = require( 'webpack' );
// const webpackStream = require( 'webpack-stream' );
// const webpackConfig = require( './webpack.config' );

/**
 * パス
 */
const path = {
	watch: {
		scss: 'src/**/*.scss',
		js: 'src/**/*.js',
	},
	src: {
		scss: 'src/scss/**/*.scss',
		// js: 'src/**/*.js',
	},
	dest: {
		css: 'assets/css',
		js: 'assets',
	},
};

/**
 * SCSSコンパイル
 */
const compileScss = () => {
	return (
		src( path.src.scss )
			.pipe( plumber( { } ) )
			.pipe( sassGlob() )
			.pipe( sass() )
			.pipe(
				autoprefixer( {
					cascade: false,
				} )
			)
			.pipe( gcmq() )
		// .pipe(sass({ outputStyle: 'compressed' }))  //gcmqでnestedスタイルに展開されてしまうので再度compact化。
			// .pipe( cleanCSS() )
			.pipe(gulpStylelint({
				fix: true
			}))
			.pipe( dest( path.dest.css ) )
	);
};

/**
 * Webpack
 */
const doWebpack = () => {
	return webpackStream( webpackConfig, webpack )
		.on( 'error', function() {
			this.emit( 'end' ); // webpack-streamでエラー発生時に処理を終了させずに監視を続ける
		} )
		.pipe( dest( path.dest.js ) );
};

/**
 * watch
 */
const watchFiles = ( cb ) => {
	watch( path.watch.scss, compileScss );
	// watch( path.watch.js, doWebpack );
	cb();
};

exports.default = watchFiles;
