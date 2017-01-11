const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});*/

elixir(function(mix) {
  var bootstrapPath = 'node_modules/bootstrap-sass/assets';
  var sitePath = 'site/';
  mix
    .copy(bootstrapPath + '/fonts', 'public/fonts')
    .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
    .copy('node_modules/font-awesome/fonts','public/fonts')
  	//.sass('app.scss')
  	.sass(sitePath + 'site.scss')
    .webpack(sitePath + 'site.js');
});