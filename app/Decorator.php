<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decorator extends Model
{
    //
    protected $fillable = [
        'Team_Name', 'Address', 'Description','Contact_No','Link','Poruwa','Flower','Table_Hall','Setty_Backs','Lighting','Traditional','Wedding_Car','Main_Pic','pic1','pic2','pic3','user_id'
    ];
}
