<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function role(){
        return $this->hasOne('App\Role');
    }
}
