<?php

Route::get('users/{user}/thesciencebreaker', 'TheScienceBreakerController@index');

Route::get('users/{user}/thesciencebreaker/breakers/{breaker}', 'TheScienceBreakerController@breaker');

Route::get('users/{user}/thesciencebreaker/breaks/{category}/{break}', 'TheScienceBreakerController@break');

Route::get('users/{user}/thesciencebreaker/admin/dashboard', 'TheScienceBreakerController@admin');

Route::get('users/{user}/thesciencebreaker/admin/charts', 'TheScienceBreakerController@graphs');
