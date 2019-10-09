<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport_package extends Model
{
    //
    protected $fillable = [
        'user_id','Package_Name', 'Transport_type', 'vehicle','picture','decoration','driver','Price'
    ];
}
