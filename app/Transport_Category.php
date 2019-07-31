<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport_Category extends Model
{
    //
    protected $fillable = [
        'user_id','luxury', 'classic', 'vintage','horse_cart','air','travelling_coach',
    ];
}
