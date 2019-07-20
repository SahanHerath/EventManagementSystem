<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decorator_event extends Model
{
    //
    protected $fillable = [
        'user_id','Wedding', 'Birthday', 'Get_Together','Parties','Outside_events'
    ];
}
