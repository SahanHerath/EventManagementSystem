<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photography_package extends Model
{
    //
    protected $fillable = [
        'user_id','Package_Name', 'Event_Type', 'Services','Price','Pdf'
    ];
}
