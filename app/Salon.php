<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    //
    protected $fillable = [
        'Salon_Name','Address', 'Contact_No', 'Link','Description','Groom_Dressing','Bride_Dressing','Dress_Making','Jewelry','Makeup','Bridesman','Bridesmaid','Profile_Pic','pic1','pic2','pic3','pic4','user_id'
    ];
}
