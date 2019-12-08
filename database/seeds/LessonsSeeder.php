<?php

use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classroom = \App\Classrooms::where('name','3B')->first();
        $course = \App\Courses::where('code','36')->first();
        $partial = \App\Partials::where('name','Primero')->first();
        $type = \App\Types::where('slug','presencial')->first();
        for ($i=0; $i<25; $i++){
            $homework = [];
            $homework = \App\Homeworks::where('slug','tarea'.($i+1))->first();
            $exam = \App\Exams::where('slug','quiz'.($i+1))->first();
            \App\Lessons::firstOrCreate([
                'id'=>\Webpatser\Uuid\Uuid::generate()->string,
                'classroom_id'=> $classroom->id,
                'course_id'=> $course->id,
                'partial_id'=> $partial->id,
                'homework_id'=> $homework->id,
                'exam_id'=> $exam->id,
                'type_id'=> $type->id,
                'date'=>\Carbon\Carbon::now()
            ]);
        }
    }
}
