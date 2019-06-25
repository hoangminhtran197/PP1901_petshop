<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function comment() {
    	return $this->hasMany('App\Comment','post_id');
    }

   	public function user() {
   		return $this->belongsTo('App\User');
   	}

   	public function productdetail() {
   		return $this->belongsTo('App\Productdetail');
   	}
    
}
