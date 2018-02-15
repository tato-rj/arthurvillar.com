<?php

Route::get('/anandamayiyoga', function() {
	return view('_PROJECTS/anandamayiyoga/index');
})->name('anandamayi/home');

Route::get('/anandamayiyoga/introduction-to-yoga', function () {
    return view('_PROJECTS/anandamayiyoga/introduction');
})->name('anandamayi/introduction');

Route::get('/anandamayiyoga/about-anandamayi', function () {
    return view('_PROJECTS/anandamayiyoga/about');
})->name('anandamayi/about');

Route::get('/anandamayiyoga/register', function () {
    return view('_PROJECTS/anandamayiyoga/register');
})->name('anandamayi/register');

Route::get('/anandamayiyoga/support', function () {
    return view('_PROJECTS/anandamayiyoga/help');
})->name('anandamayi/help');

Route::get('/anandamayiyoga/support/contact', function () {
    return view('_PROJECTS/anandamayiyoga/contact');
})->name('anandamayi/contact');

Route::get('/anandamayiyoga/test', function() {
	return 'test';
});