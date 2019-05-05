<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function order($id){
        $ap = Apartment::find($id);


        $order = new Order();
        $order->user_id = Auth::id();
        $order->host_id = $ap->user_id;
        $order->apartment_id = $ap->id;
        $order->save();

        Session::flash('success','You Sent A Request');
        return redirect()->back();

    }
    public  function remove($id){
        $order = Order::where('apartment_id',$id)->where('user_id',Auth::id())->first();



        if($order->accepted){
            Session::flash('danger','Order is already Activated');
            return redirect()->back();
        }
        else{
            Order::destroy($order->id);
            Session::flash('success','You Cancelled Request');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::where('host_id',Auth::id())->get();



      return view('hosts/order')->with('orders',$order);


    }
    public function view(){
        $user = Auth::user();

        $order = Order::where('user_id',$user->id)->get();


        return view ('users.order')->with('orders',$order);
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
    public function accept($id){
        $order = Order::find($id);
        $order->accepted = 1;
        $order->save();

        Session::flash('success','You Accepted Order Request');
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
        Order::destroy($id);
        Session::flash('success','You Deleted a Request');
        return redirect()->back();
    }
}
