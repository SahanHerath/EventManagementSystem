<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    //
    protected $fillable = [
        'Service_Name', 'Address', 'Contact_No','Link','Description','Welcome_drink','Special_Food','Catering_set','Catering_tent','Cake','Garden_umbrella','Coffee_Machine','Table_chair','sink','dessert','Main_pic','pic1','pic2','pic3','pic4','user_id'
    ];
}
