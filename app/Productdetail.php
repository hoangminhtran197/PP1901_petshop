<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    //
    public function bill() {
    	return $this->hasOne('App\Bill');
    }

    public function comment() {
    	return $this->hasMany('App\Comment', 'productdetail_id');
    }

    public function post() {
    	return $this->hasMany('App\Post', 'productdetail_id');
    }
}
