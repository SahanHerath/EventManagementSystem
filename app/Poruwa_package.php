<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poruwa_package extends Model
{
    //
    protected $fillable = [
        'user_id','Package_Name', 'Services','Price','Pdf'
    ];
}
