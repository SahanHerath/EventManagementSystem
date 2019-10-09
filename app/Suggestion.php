<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    //
    protected $fillable = [
        'Name','Email', 'Contact_No', 'Regarding','Message','state'
    ];
}
