<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user(){
        return $this->belognsTo('App\User');
    }
     public function post(){
        return $this->belognsTo('App\Post');
    }
    
    public function likes(){
        return $this->hasMany('App\Like');
    }
    
}
