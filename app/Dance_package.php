<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dance_package extends Model
{
    //
    protected $fillable = [
        'user_id', 'Package_Name','Dancing_Type','Services','Price','Pdf'
    ];
}
