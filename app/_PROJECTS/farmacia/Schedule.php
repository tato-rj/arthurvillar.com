<?php

namespace App\_PROJECTS\farmacia;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	use Calendar\Seasons;
	use Calendar\Turni;
	use Calendar\Day;

    public static function base_uri($username)
    {
        return "users/{$username}/farmacia";
    }

    public static function base_folder()
    {
        return '_PROJECTS/farmacia/';
    }

    public static function getSeasonSchedule($date)
    {
    	$summer = self::getSeason('summer');
    	$winter = self::getSeason('winter');

		if ($date->lt($summer['date']) || $date->gt($winter['date'])) {
			return $winter;
		} else if ($date->lte($winter['date']) && $date->gte($summer['date'])) {
			return $summer;
		}
    }

    public static function getDaySchedule($date)
    {
    	$season = self::getSeasonSchedule($date);    	
		return self::checkDate($date, $season);
    }

    public static function formatDate($date)
    {
    	return self::format($date);
    }    
}
