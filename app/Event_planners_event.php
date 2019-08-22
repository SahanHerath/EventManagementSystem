<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_planners_event extends Model
{
    //
    protected $fillable = [
        'Wedding', 'Parties', 'Meetings','Corporate_event','Outside_event','Sport_event','user_id'
    ];
}
