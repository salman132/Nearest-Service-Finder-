<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Role;
use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->profile == NULL){
            return redirect()->route('pro');
        }
        else {
            $profile = Profile::where('user_id',Auth::id())->first();

            $role = Role::find($profile->role_id);


            return view('home')->with('profile',$profile)->with('role',$role);
        }
    }
}
