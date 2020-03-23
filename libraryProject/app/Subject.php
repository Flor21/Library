<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'year', 'dictation', 'type',
    ];

    public function users()
    {
        //
    }
}
