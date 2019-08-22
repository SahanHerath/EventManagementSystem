<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_planner extends Model
{
    //
    protected $fillable = [
        'Organization_name', 'Address', 'Description','Contact_No','Link','Main_Pic','pic1','pic2','pic3','pic4','user_id'
    ];
}
