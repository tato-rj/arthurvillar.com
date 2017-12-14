<?php

Route::get('/psicanalise', function () {
    return view('_PROJECTS/psicanalise/home');
});

Route::get('/psicanalise/contato', function () {
    return view('_PROJECTS/psicanalise/contato');
});

Route::get('/psicanalise/o-que-e-psicanalise', function () {
    return view('_PROJECTS/psicanalise/psicanalise');
});

Route::get('/psicanalise/como-funciona', function () {
    return view('_PROJECTS/psicanalise/como_funciona');
});

Route::get('/psicanalise/regulamentacao', function () {
    return view('_PROJECTS/psicanalise/regulamentacao');
});