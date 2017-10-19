<?php

namespace App\_PROJECTS\farmacia\Calendar;

use Carbon\Carbon;

trait Turni
{
	protected static function generateTurni()
	{
		$turniArray = [
			[[3,20], [3,23]],
			[[4,22], [4,26]],
			[[5,25], [5,28]],
			[[6,27], [6,30]],
			[[7,6], [8,2]],
			[[9,1], [9,4]],
			[[10,4], [10,7]],
			[[11,6], [11,9]],
			[[12,9], [12,12]]
		];
	
		$now = Carbon::now();
		$start = 0;
		$end = 1;
		$month = 0;
		$day = 1;

		for ($i=0; $i < count($turniArray); $i++) {
			
			$startMonth = $turniArray[$i][$start][$month];
			$startDay = $turniArray[$i][$start][$day];
			$endMonth = $turniArray[$i][$end][$month];
			$endDay = $turniArray[$i][$end][$day];

			$turni[$i]['start'] = Carbon::create(null, $startMonth, $startDay, 0, 0, 0);
			$turni[$i]['end'] = Carbon::create(null, $endMonth, $endDay, 8, 30, 00);
			$turni[$i]['month_start'] = self::getMonth_IT(($startMonth - 1));
			$turni[$i]['month_end'] = self::getMonth_IT(($endMonth - 1));
			$turni[$i]['in_turni'] = (
				$now->gte($turni[$i]['start']) && 
				$now->lte($turni[$i]['end'])
			) ? true : false;

		}
		return $turni;
	}

	public static function isTurni($date)
    {
    	$turniDates = self::generateTurni();
    	$result = false;
    	foreach ($turniDates as $turni) {
    		if ($date->gte($turni['start']) && $date->lte($turni['end'])) {
    			$result = true;
    			break;
    		}
    	}
    	return $result;
    }
}