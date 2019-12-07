<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'description',
        'type'
    ];
}
