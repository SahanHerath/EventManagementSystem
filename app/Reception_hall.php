<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception_hall extends Model
{
    //
    protected $fillable = [
        'Hall_Name', 'Address', 'Cost','Capacity','Square_feet','Description','Overview','Main_pic','pic1','pic2','pic3','pic4','hotel_id'
    ];
}
