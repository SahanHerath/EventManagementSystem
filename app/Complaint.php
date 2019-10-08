<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $fillable = [
        'user_id', 'user_email', 'complaint_about','complaint','state'
    ];
}
