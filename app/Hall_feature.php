<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall_feature extends Model
{
    //
    protected $fillable = [
        'projection', 'internet', 'parking','security_camera','security_personal','reception_area','Bar','garden','smoking_area','welcome_drinks','Buffet','Handicap_accessible','outside_balcony','inside_balcony','stage','hall_id'
    ];
}
