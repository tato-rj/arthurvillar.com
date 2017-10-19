<?php

namespace App\_PROJECTS\farmacia\Calendar;

use Carbon\Carbon;

trait Seasons
{
	protected static function getSeason($season) {

		$winter = [
			'date' => Carbon::create(null, 12, 21, 0, 0, 0),
			'matina' => [
				'non-sabato' => '8:45 - 12:30',
				'sabato' => '8:45 - 12:30'
			],
			'pomeriggio' => [
				'non-sabato' => '15:30 - 19:00',
				'sabato' => 'chiuso'
			]
		];

		$summer = [
			'date' => Carbon::create(null, 06, 21, 0, 0, 0),
			'matina' => [
				'non-sabato' => '8:45 - 12:30',
				'sabato' => '8:45 - 12:30'
			],
			'pomeriggio' => [
				'non-sabato' => '16:00 - 19:30',
				'sabato' => 'chiuso'
			]
		];

		if ($season == 'summer') {
			return $summer;
		} else if ($season == 'winter') {
			return $winter;
		} else {
			throw new \Exception('Unidentified season!');
		}
	}
}