<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporter extends Model
{
    //
    protected $fillable = [
        'Transport_Service','Address', 'Contact_No', 'Link','Description','driver','decoration','rent_hours','Main_pic','pic1','pic2','pic3','pic4','user_id','rent_km'
    ];
}
