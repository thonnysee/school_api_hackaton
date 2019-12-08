<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use HasApiTokens, Notifiable;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'email',
            'password',
            'id',
            'firstname',
            'lastname',
            'second_lastname',
            'role_id',
            'is_active',
            'school_id',
            'user_code',
            'gender',
            'blood_group',
            'nationality',
            'phone_number',
            'address',
            'about',
            'profile_pic',
            'school_grade',
            'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function school()
    {
        return $this->belongsTo('App\Schools','school_id');
    }
    public function role()
    {
        return $this->belongsTo('App\Roles','role_id');
    }

    public function student_lessons(){
        return $this->hasMany('App\StudentsLessons','student_id');
    }
    public function teacher_lessons(){
        return $this->hasMany('App\StudentsLessons','teacher_id');
    }
    public function type(){
        return $this->belongsTo('App\Types','type_id');
    }
}
