<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsLessons extends Model
{
    public $table='public.students_lessons';
    public $incrementing = false;
    public function exam(){
        return $this->belongsTo('App\Exams','exam_id');
    }
    public function student(){
        return $this->belongsTo('App\Users','student_id');
    }
    public function teacher(){
        return $this->belongsTo('App\Users','teacher_id');
    }
    public function homework(){
        return $this->belongsTo('App\Homeworks','homework_id');
    }
    public function lesson(){
        return $this->belongsTo('App\Lessons','lesson_id');
    }
    public function course(){
        return $this->belongsTo('App\Courses','course_id');
    }
}
