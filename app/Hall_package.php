<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall_package extends Model
{
    //
    protected $fillable = [
        'hall_id', 'Package_Name', 'Appetizers','Welcome_drinks','Foods','Soups','Desserts','Price','Pdf'
    ];
}
