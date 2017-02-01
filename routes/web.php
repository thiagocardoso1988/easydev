<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
	return view('site.index');
});*/
Route::get('/', 'SiteController@index');
Route::post('/sendmail', 'SiteController@sendmail');



//Route::get('/blog', 'BlogController@index');
//Route::resource('blog', 'BlogController');

