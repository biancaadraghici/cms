<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title','content','user_id','photo_id',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
