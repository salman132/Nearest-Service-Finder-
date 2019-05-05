<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    public function district(){
        return $this->belongsTo('App\District');
    }
    public function order(){
        return $this->hasMany('App\Order');
    }
    public function apartment(){
        return $this->hasMany('App\Apartment');
    }

}
