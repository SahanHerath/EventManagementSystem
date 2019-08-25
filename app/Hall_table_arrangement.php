<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall_table_arrangement extends Model
{
    //
    protected $fillable = [
        'theatre', 'U_shape', 'V_shape','classroom','hallow_square','Boardroom','Oval','Herringbone','Top_table_springs','banquet','cabaret','informal','hall_id'
    ];
}
