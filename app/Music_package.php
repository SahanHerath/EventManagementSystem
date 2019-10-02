<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music_package extends Model
{
    //
    protected $fillable = [
        'user_id', 'Package_Name', 'Hours','Services','Price'
    ];
}
