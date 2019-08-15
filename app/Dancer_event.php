<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dancer_event extends Model
{
    //
    protected $fillable = [
        'user_id', 'Wedding','Musical_event','Corporate_event','Party'
    ];
}
