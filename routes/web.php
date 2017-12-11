<?php

/*
|--------------------------------------------------------------------------
| Main APP Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/users/{user}/dashboard', 'UsersController@index')->name('home');

Route::delete('/users/{user}', 'UsersController@destroy');

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

Route::post('/contact', 'EmailsController@send');

Route::get('/psicanalise', function(){

	return view('_PROJECTS/psicanalise/index');
});

/*
|--------------------------------------------------------------------------
| Projects Routes
|--------------------------------------------------------------------------
*/

include __DIR__ . '/_PROJECTS/farmacia.php';
include __DIR__ . '/_PROJECTS/chiaying.php';
include __DIR__ . '/_PROJECTS/tsb.php';