<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photography_event extends Model
{
    //
    protected $fillable = [
        'user_id', 'Wedding', 'Get_togather','Birthday','Competition','Professional_Events','Sports','Trips'
    ];
}
