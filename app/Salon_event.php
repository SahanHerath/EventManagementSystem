<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon_event extends Model
{
    //
    protected $fillable = [
        'user_id','wedding', 'parties', 'fashion_show'
    ];
}
