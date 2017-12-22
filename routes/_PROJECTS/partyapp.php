<?php

Auth::routes();

Route::get('/partyapp/', function () {
	$location = 'Granada, Spain';
    return view('_PROJECTS/partyapp/pages/welcome', compact('location'));
})->name('home');

Route::get('/partyapp/host-your-party', function () {
    return view('_PROJECTS/partyapp/pages/host');
});

Route::get('/partyapp/search', function () {

	// Filters set by user
	$maxDistance = 5000;
	if (!empty(app('request')->input('max_dist')) && app('request')->input('max_dist') != 'any') {
		$maxDistance = app('request')->input('max_dist');
	}
	$feeRange = [0,100];
	if (!empty(app('request')->input('fee_range')) && app('request')->input('fee_range') != 'any') {
		$feeRange = explode('-', app('request')->input('fee_range'));
	}

	// Locations already filtered by state
	$parties = [
		[
			'title' => 'Best party ever!',
			'description' => 'Aenean at molestie nulla. Aenean nibh libero, pulvinar sit amet volutpat at, ullamcorper eget arcu.',
			'time' => '23:00 to 3:30',
			'rating' => '5',
			'rating_count' => '26',
			'fee' => 2.5,
			'coordinates' => [37.204585,-3.612815],
		],
		[
			'title' => 'Come hang out with us:)',
			'description' => 'Cras tincidunt hendrerit ante vel laoreet. Ut eget sapien magna.',
			'time' => '22:30 to 2:00',
			'rating' => '4.5',
			'rating_count' => '44',
			'fee' => 2,
			'coordinates' => [37.196585,-3.639815],
		],
		[
			'title' => 'First drink is on the house!!',
			'description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ornare, massa vel volutpat auctor, enim mauris mattis erat, non ultrices leo lorem accumsan ligula.',
			'time' => '24:00 to 5:00',
			'rating' => '3',
			'rating_count' => '34',
			'fee' => 5,
			'coordinates' => [37.198585,-3.622815],
		],
		[
			'title' => 'Housewarming party tonight!',
			'description' => 'Maecenas ac tempus urna, sed consequat ex. Maecenas sodales at magna et hendrerit. Fusce id nisi leo. Maecenas id lacinia nibh.',
			'time' => '23:30 to 4:30',
			'rating' => '2.5',
			'rating_count' => '3',
			'fee' => 2,
			'coordinates' => [37.192585,-3.602804],
		],
		[
			'title' => 'Partying all night',
			'description' => 'Duis tristique dui id sollicitudin facilisis. Aenean interdum commodo turpis, quis ornare tellus eleifend at.',
			'time' => '24:00 to 3:30',
			'rating' => '3.5',
			'rating_count' => '67',
			'fee' => 2.5,
			'coordinates' => [37.193590,-3.619815],
		],
		[
			'title' => 'Stella and Leffe party!',
			'description' => 'Duis tristique dui id sollicitudin facilisis. Aenean interdum commodo turpis, quis ornare tellus eleifend at.',
			'time' => '24:00 to 3:30',
			'rating' => '3.5',
			'rating_count' => '67',
			'fee' => 2.5,
			'coordinates' => [45.975417,12.230789],
		]
	];

	$coordinates = [
		[37.204585,-3.612815],
		[37.198585,-3.622815],
		[37.199077,-3.63282],
		[37.192585,-3.602804],
		[37.193590,-3.619815]
	];
	$destinations = '';

	foreach ($parties as $party) {
		$destinations .= implode(',', $party['coordinates']).'|';	
	}

	$user_location = 'Granada';

	$input = (!empty(app('request')->input('location'))) ? app('request')->input('location') : $user_location;
	$origin = str_replace([',', ' '], ['', '+'], $input);
	

	$distances = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destinations&units=imperial&key=AIzaSyAW8kBdRoSfT255OEaclmeZWQJuwCt9lTI");
	$distances = json_decode($distances, true);

	$distArray = $distances['rows'][0]['elements'];

	// Filter distances
	for ($i=0; $i<count($distArray); $i++) {
		if (!empty($distArray[$i]['distance'])) {
			if ($distArray[$i]['distance']['value'] > $maxDistance) {
				unset($parties[$i]);
			}			
		} else {
			unset($parties[$i]);
		}
	}

	// Filter prices
	foreach ($parties as $key => $party) {
		if ($party['fee'] < $feeRange[0] || $party['fee'] > $feeRange[1]) {
			unset($parties[$key]);
		}
	}

    return view('_PROJECTS/partyapp/pages/search', compact(['parties', 'user_location']));
});

// Party page
Route::get('/partyapp/parties/{slug}', function () {
    return view('_PROJECTS/partyapp/pages/party');
});

// User page
Route::get('/partyapp/users/{slug}', function () {
	$user = [
		'username' => 'alvaro', 
		'img_count' => 2
	];
    return view('_PROJECTS/partyapp/pages/user', compact('user'));
});

// Help Routes

Route::get('/partyapp/help', function () {
    return view('_PROJECTS/partyapp/pages/help');
});

Route::get('/partyapp/help/{topic}', function() {
	return view('_PROJECTS/partyapp/pages/help/topic');
});

Route::get('/partyapp/help/{topic}/{article}', function() {
	$article = 'Article';
	return view('_PROJECTS/partyapp/pages/help/topic', compact('article'));
});