<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $fillable = [
        'user_id', 'fname', 'lname','Address','Contact_No','About_me','Main_pic','Cover_pic'
    ];
}
