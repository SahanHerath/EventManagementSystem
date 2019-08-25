<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall_event extends Model
{
    //
    protected $fillable = [
        'Wedding', 'Meeting', 'Party','Corporate_event','Professional_Event','hall_id'
    ];

}
