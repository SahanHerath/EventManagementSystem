<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poruwa_ceramony extends Model
{
    //
    protected $fillable = [
        'Name', 'Address', 'ContactNo','Link','Description','Poruwa_rituals','Poruwa_items','match_making','Astrological_support','jayamangala_gatha','Wedding_dancers','Cost','Main_pic','pic1','pic2','pic3','pic4','user_id'
    ];
}
