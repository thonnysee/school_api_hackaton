<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationStudents extends Model
{
    public $incrementing = false;
    protected $hidden = [
        'id','created_at','updated_at',
    ];
}
