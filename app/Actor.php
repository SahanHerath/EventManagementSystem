<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    protected $fillable = [
        'Actor_name', 'Address', 'Contact_No','Link','Description','Singer','Magician','Comedian','Actor','Announcer','Entertainer','Other','Main_pic','pic1','pic2','pic3','pic4','user_id'
    ];

}
