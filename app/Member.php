<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=[
        'first_name','last_name','role','photo_id','description',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function events(){
        return $this->hasMany('App\Event');
    }

    public function socialmedias(){
        return $this->hasMany('App\SocialMedia');
    }
}
