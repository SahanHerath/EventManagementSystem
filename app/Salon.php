<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    //
    protected $fillable = [
        'Salon_Name','Address', 'Contact_No', 'Link','Description','Groom_Dressing','Bride_Dressing','Dress_Making','Jewelry','Makeup','Bridesman','Bridesmaid','Profile_Pic','Pic1','Pic2','Pic3','user_id'
    ];
}
