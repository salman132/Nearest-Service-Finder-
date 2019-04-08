<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\District;
use App\Thana;
use Illuminate\Http\Request;
use Auth;
use Session;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->profile->role_id;

        if($user == 2) {

            $ap = Apartment::where('user_id',Auth::id())->first();


            if($ap == NULL) {
                return view('house/district')->with('districts', District::all());
            }
            else{
                return "hi";
            }
        }
        else{
            return redirect()->route('front');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user()->profile->role_id;

        if($user == 2) {
            $dis = $request->district;

            $thana = Thana::where('district_id', $dis)->get();

            return view('house/apartment')
                ->with('thanas', $thana)
                ->with('district', District::find($dis));
        }
        else{
            return redirect()->route('front');
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
            'district'=>'required|integer',
            'house'=> 'required|integer',
            'road'=> 'required|integer',
            'thana'=> 'required|integer',
            'flat'=> 'required|integer',
            'image'=> 'required|image',

        ]);

        $apartment = new Apartment();

        $apartment->user_id = Auth::id();
        $apartment->district_id = $request->district;
        $apartment->house_no = $request->house;
        $apartment->road_no = $request->road;
        $apartment->thana_id = $request->thana;
        $apartment->flat_no = $request->flat;

        $image= $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/apartments',$image_new_name);

        $apartment->image = $image_new_name;

        $apartment->save();

        Session::flash('success','You Added a House For Rent');

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
