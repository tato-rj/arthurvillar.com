<?php

/*
|--------------------------------------------------------------------------
| Main APP Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('intro');
});

Route::get('/music', function() {
	return view('music');
});

Route::get('/code', function() {
	return view('code');
});

Route::get('/contact', function() {
	return view('contact');
});

/*
|--------------------------------------------------------------------------
| Projects Routes
|--------------------------------------------------------------------------
*/

include __DIR__ . '/_PROJECTS/farmacia.php';
include __DIR__ . '/_PROJECTS/chiaying.php';