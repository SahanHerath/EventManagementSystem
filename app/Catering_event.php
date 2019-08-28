<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering_event extends Model
{
    //
    protected $fillable = [
        'user_id','Wedding', 'Birthday', 'Party','Corporate_event','Funeral'
    ];
}
