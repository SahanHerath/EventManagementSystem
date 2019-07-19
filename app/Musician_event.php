<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician_event extends Model
{
    //
    protected $fillable = [
        'Wedding', 'Birthday', 'Beach_Party','Get_Together','Parties','user_id'
    ];
}
