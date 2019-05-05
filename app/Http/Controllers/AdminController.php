<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\District;
use App\Profile;
use App\Thana;
use App\User;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('admin');

    }

    public function index()
    {
        return view('admin.home')
            ->with('users',User::all())
            ->with('hosts',Profile::where('role_id',2)->get())
            ->with('us',Profile::where('role_id',1)->get())
            ->with('apartments',Apartment::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.district')->with('districts',District::all());
    }

    public function district(Request $request){
        $request->validate([
            'city'=> 'required|max:80'
        ]);

        $city = new District();

        $city->name = $request->city;
        $city->save();

        Session::flash('success','You Added New City');

        return redirect()->back();
    }
    public function thana(){
        return view('admin.thana')
            ->with('districts',District::all())
            ->with('thanas',Thana::all());
    }
    public function tstore(Request $request){
        $request->validate([
            'city_id'=> 'required|integer',
            'thana'=> 'required|max:100'
        ]);

        $thana = new Thana();

        $thana->district_id = $request->city_id;
        $thana->thana = $request->thana;
        $thana->save();

        Session::flash('success','You Added A Thana');

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
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
