<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\_PROJECTS\farmacia\Schedule;
use App\User;

class FarmaciaController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function chi_siamo(User $user)
	{
		return view(Schedule::base_folder().'chi_siamo')
			->with('schedule', Schedule::getDaySchedule(\Carbon\Carbon::now()))
	        ->with('today', Schedule::formatDate(\Carbon\Carbon::now()))
	        ->with('base_uri', Schedule::base_uri($user->username))
	        ->with('root', Schedule::base_folder());
	}

	public function come_raggiungerci(User $user)
	{
		return view(Schedule::base_folder().'come_raggiungerci')
			->with('schedule', Schedule::getDaySchedule(\Carbon\Carbon::now()))
	        ->with('today', Schedule::formatDate(\Carbon\Carbon::now()))
	        ->with('base_uri', Schedule::base_uri($user->username))
	        ->with('root', Schedule::base_folder());
	}	

	public function turni(User $user)
	{
		$summerSchedule = Schedule::getSeason('summer');
		$winterSchedule = Schedule::getSeason('winter');
		$turniSchedule = Schedule::generateTurni();

		return view(Schedule::base_folder().'turni', compact(['summerSchedule', 'winterSchedule', 'turniSchedule']))
			->with('schedule', Schedule::getDaySchedule(\Carbon\Carbon::now()))
	        ->with('today', Schedule::formatDate(\Carbon\Carbon::now()))
	        ->with('base_uri', Schedule::base_uri($user->username))
	        ->with('root', Schedule::base_folder());		
	}

	public function informazioni(User $user)
	{
		return view(Schedule::base_folder().'informazioni')
			->with('schedule', Schedule::getDaySchedule(\Carbon\Carbon::now()))
	        ->with('today', Schedule::formatDate(\Carbon\Carbon::now()))
	        ->with('base_uri', Schedule::base_uri($user->username))
	        ->with('root', Schedule::base_folder());	
	}

	public function contatti(User $user)
	{
		return view(Schedule::base_folder().'contatti')
			->with('schedule', Schedule::getDaySchedule(\Carbon\Carbon::now()))
	        ->with('today', Schedule::formatDate(\Carbon\Carbon::now()))
	        ->with('base_uri', Schedule::base_uri($user->username))
	        ->with('root', Schedule::base_folder());		
	}
}
