<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    
    public function likes(){
       return $this->belongsTo('App\Like'); 
    }
}
