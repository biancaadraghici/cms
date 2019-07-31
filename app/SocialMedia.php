<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable=[
        'member_id','app_name','link',
    ];

    
}
