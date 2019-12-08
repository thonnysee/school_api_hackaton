<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public $incrementing = false;
    protected $hidden = [
        'id','created_at','updated_at','type_id','school_id'
    ];
}
