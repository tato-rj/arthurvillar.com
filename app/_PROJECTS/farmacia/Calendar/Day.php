<?php

namespace App\_PROJECTS\farmacia\Calendar;

use Carbon\Carbon;

trait Day
{

	protected static function getDay_IT ($index)
	{
		$daysArray = [
			'Domenica',
			'Lunedí',
			'Martedí',
			'Mercoledí',
			'Giovedí',
			'Venerdí',
			'Sabato'
		];

		return $daysArray[$index];
	}

	protected static function getMonth_IT($index)
	{
		$monthsArray = [
			'Gennaio',
			'Febbraio',
			'Marzo',
			'Aprile',
			'Maggio',
			'Giugno',
			'Luglio',
			'Agosto',
			'Settembre',
			'Ottobre',
			'Novembre',
			'Dicembre'
		];	

		return $monthsArray[$index];
	}

    protected static function checkDate($date, $season)
    {
    	if (self::isTurni($date)) {
			$schedule['matina'] = 'TURNI';
			$schedule['pomeriggio'] = 'TURNI';

		} else if ($date->isWeekday()) {

			$schedule['matina'] = $season['matina']['non-sabato'];
			$schedule['pomeriggio'] = $season['pomeriggio']['non-sabato'];

		} else if ($date->dayOfWeek == \Carbon\Carbon::SATURDAY) {

			$schedule['matina'] = $season['matina']['sabato'];
			$schedule['pomeriggio'] = $season['pomeriggio']['sabato'];

		} else {

			$schedule['matina'] = 'chiuso';
			$schedule['pomeriggio'] = 'chiuso';

		}

		return $schedule;
    }

    protected static function format($date)
    {
		$today = Carbon::now(new \DateTimeZone('Europe/Rome'));
		return self::getDay_IT($today->dayOfWeek).' '.$today->day.' '.self::getMonth_IT($today->month).', '.$today->year;
    }
}