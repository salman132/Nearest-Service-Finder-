<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function district(){
        return $this->belongsTo('App\District');
    }
    public function order(){
        return $this->hasMany('App\Order');
    }
    public function thana(){
        return $this->belongsTo('App\Thana');
    }
    public function is_being_followed_by_auth(){
        $id = Auth::id();

        $order_ids = array();

        foreach ($this->order as $order):
            array_push($order_ids,$order->user_id);
        endforeach;

        if(in_array($id,$order_ids)){
            return true;
        }
        else{
            return false;
        }
    }
}
