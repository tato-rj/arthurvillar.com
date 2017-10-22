<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->getProjects();
        return view('home', compact('projects'));
    }

    public function getProjects()
    {
        if (\Auth::user()->username == 'arthurvillar') {
            return Project::all();
        } 
        
        return \Auth::user()->projects;
    }
}
