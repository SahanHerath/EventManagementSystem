<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cake_package extends Model
{
    //
    protected $fillable = [
        'user_id','Package_Name', 'Cake_types', 'Description','Price','Pdf'
    ];
}
