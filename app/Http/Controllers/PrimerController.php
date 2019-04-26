<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function index()
    {
    	return view('pages.primer.index');
    }
}
