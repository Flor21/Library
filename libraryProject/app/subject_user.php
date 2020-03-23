<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject_user extends Model
{
    protected $fillable = [
        'user_id',
        'subject_id',
        'state',
    ];

}
