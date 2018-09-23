let mix = require('laravel-mix')

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

/*
mix.webpackConfig({
  node: {
    fs: 'empty' //https://github.com/webpack-contrib/css-loader/issues/447 issue
  },
});
*/
mix.setPublicPath('./')

mix.options({
  processCssUrls: false,
  fs : 'empty',
})
  .js('resources/assets/js/app.js', 'assets/js');
