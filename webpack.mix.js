const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
	'resources/js/jquery.min.js',
	'resources/js/bootstrap.min.js',
	'resources/js/slick.min.js',
	'resources/js/nouislider.min.js',
	'resources/js/jquery.zoom.min.js',
	'resources/js/main.js'
	], 'public/js/all.js');
mix.styles([
	'resources/css/bootstrap.min.css',
	'resources/css/slick.css',
	'resources/css/slick-theme.css',
	'resources/css/nouislider.min.css',
	'resources/css/style.css'
	], 'public/css/all.css');


