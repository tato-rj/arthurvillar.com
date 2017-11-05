<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheScienceBreakerController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index($user)
	{
		return view('_PROJECTS/tsb/index');
	}

	public function breaker($user, $breaker)
	{
		return view('_PROJECTS/tsb/breaker');
	}

	public function break($user, $category, $break)
	{
		return view('_PROJECTS/tsb/break');
	}

	public function admin($user)
	{
		return view('_PROJECTS/tsb/admin');
	}

	public function graphs($user)
	{
		return view('_PROJECTS/tsb/graphs');
	}
}
