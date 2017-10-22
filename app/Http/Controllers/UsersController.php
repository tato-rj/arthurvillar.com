<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Project;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $this->authorize('view', $user);
        
<<<<<<< HEAD
        $projects = $this->getProjects($user);

=======
        $projects = $user->projects;
>>>>>>> 25967fbfb641ee113d3555f2d1410721ad76e2b1
        return view('dashboard', compact('projects'));
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
            return redirect('/');
        }
        return redirect()->back()->withErrors(['confirm_password', 'Wrong password!']);;
    }

    public function getProjects($user)
    {    
        return ($user->username == 'arthurvillar') ? Project::all() : $user->projects;
    }

}
