<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor_event extends Model
{
    //
    protected $fillable = [
        'user_id', 'Birthday', 'Professional_event','Musical_event','Corporate_event','Party'
    ];
}
