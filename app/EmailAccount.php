<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailAccount extends Model
{
    //
    protected $fillable = [
        'id', 'email', 'password','recover_email', 'update_last_time'
    ];
    
}
