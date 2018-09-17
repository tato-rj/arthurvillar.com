<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/check-queue', function() {
	//
});

/*
|--------------------------------------------------------------------------
| Projects Routes
|--------------------------------------------------------------------------
*/
