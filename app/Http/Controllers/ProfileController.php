<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        if($user->completed){
            return redirect()->back();
        }
        else {
            return view('profile.profile')->with('roles', Role::all());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role'=> 'required|integer|max:2',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'image'=> 'required|image'
        ]);

        $profile = new Profile();

        $profile->user_id = Auth::id();
        $profile->role_id = $request->role;
        $profile->phone = $request->phone;

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/profile',$image_new_name);

            $profile->image = $image_new_name;
        }
        $profile->save();

        $user = User::find(Auth::id());

        $user->completed = 1;
        $user->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.update')->with('user',Auth::user());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'required|regex:/(01)[0-9]{9}/',

        ]);

        $profile = Profile::find($id);
        $profile->phone = $request->phone;

        if($request->hasFile('image')){
            if(file_exists('/uploads/profile/'.$profile->image)){

                @unlink('/uploads/profile/'.$profile->image);
            }
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/profile',$image_new_name);

            $profile->image = $image_new_name;
        }

        $profile->save();

        Session::flash('success','You Successfully Updated Your Profile');

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
