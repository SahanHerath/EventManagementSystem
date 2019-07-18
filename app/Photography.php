<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
    //

    protected $fillable = [
        'Studio_Name', 'Address', 'ContactNo','Link','Description','Drone','Wedding_Photography','Preshoot_Vedio','Wedding_Vedio','Album_Making','Wedding_Card','main_pic','pic1','pic2','pic3','user_id'
    ];
}
