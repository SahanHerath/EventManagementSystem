<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dancer extends Model
{
    //
    protected $fillable = [
        'Team_Name', 'Address', 'Contact_No','Link','Description','Gender','choreography','Traditional','Western','Indian','Kandyan','Casual','Other','Main_pic','pic1','pic2','pic3','pic4','user_id'
    ];
}
