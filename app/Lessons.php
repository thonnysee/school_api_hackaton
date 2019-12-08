<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    public $incrementing = false;
    protected $hidden = [
        'id','created_at','updated_at',
    ];
}
