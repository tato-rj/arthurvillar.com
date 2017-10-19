<?php

use App\_PROJECTS\farmacia\Schedule;

Route::get('users/{user}/farmacia', 'FarmaciaController@chi_siamo');

Route::get('users/{user}/farmacia/come-raggiungerci', 'FarmaciaController@come_raggiungerci');

Route::get('users/{user}/farmacia/turni', 'FarmaciaController@turni');

Route::get('users/{user}/farmacia/informazioni', 'FarmaciaController@informazioni');

Route::get('users/{user}/farmacia/contatti', 'FarmaciaController@contatti');