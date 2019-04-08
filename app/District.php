<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function apartment(){
        return $this->hasMany('App\Apartment');
    }
    public function thana(){
        return $this->hasMany('App\Thana');
    }
}
