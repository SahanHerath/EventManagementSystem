<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decoration_package extends Model
{
    //
    protected $fillable = [
        'user_id','Package_Name', 'Decoration_Type', 'Services','Price','Pdf'
    ];
}
