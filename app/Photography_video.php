<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photography_video extends Model
{
    //
    protected $fillable = [
        'user_id','Video_Name', 'Video'
    ];
}
