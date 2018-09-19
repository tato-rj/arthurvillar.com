<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Project;
use App\Jobs\ConquerTheWorld;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('test');
    }

    public function index(User $user)
    {
        $this->authorize('view', $user);
        
        $projects = $this->getProjects($user);

        return view('dashboard', compact('projects'));
    }

    public function test(Request $request)
    {
        dispatch(new ConquerTheWorld)->delay(now()->addSeconds(40));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $username)
    {
        $request->validate([
            'password' => 'required'
        ]);

        if (Hash::check($request->password, auth()->user()->password)) {
            auth()->user()->delete();
            return redirect('/')->with('feedback', 'Your profile has been deleted');
        }

        return redirect()->back()->withErrors(['Wrong password!']);
    }

    public function getProjects($user)
    {    
        return ($user->username == 'arthurvillar') ? Project::all() : $user->projects;
    }

}
