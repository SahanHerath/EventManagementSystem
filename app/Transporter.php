<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporter extends Model
{
    //
    protected $fillable = [
        'Transport_Service','Address', 'Contact_No', 'Link','Description','driver','decoration','rent_hours','rent_km','cost','extra_km','extra_hour','Main_pic','pic1','pic2','pic3','pic4','user_id'
    ];
}
