<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cake_designer extends Model
{
    //
    protected $fillable = [
        'Organization_Name', 'Address', 'Contact_No','Link','Description','Wedding_cake','Birthday_cake','Cake_Structure','Pastry_cake','Cup_Cake','Other','Main_pic','pic1','pic2','pic3','pic4','user_id'
    ];
}
