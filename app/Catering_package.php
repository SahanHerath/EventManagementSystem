<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering_package extends Model
{
    //
    protected $fillable = [
        'user_id', 'Package_Name','Welcome_drinks','Foods','Desserts','Price','Pdf','Appetizers','Soups'

    ];
}
