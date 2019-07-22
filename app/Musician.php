<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    protected $fillable = [
        'Dj_Name', 'Address', 'ContactNo','Link','Description','Drone','Playing_Hrs','Payment','Extra_Cost','Fire','Smoke','Lights','Main_Logo','pic1','pic2','pic3','pic4','user_id'
    ];
}
