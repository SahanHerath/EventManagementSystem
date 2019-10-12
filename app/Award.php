<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //
    protected $fillable = [
        'user_id', 'Platinum', 'Gold','Silver','Bronze'
    ];
}
