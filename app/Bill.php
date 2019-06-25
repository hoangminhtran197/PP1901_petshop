<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function productdetail() {
    	return $this->hasOne('App\Productdetail');
    }
}
