<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'member_id','event_title','event_content','year',
    ];

    
}
