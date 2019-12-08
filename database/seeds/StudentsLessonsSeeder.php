<?php

use Illuminate\Database\Seeder;

class StudentsLessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = \App\Users::where('school_grade','3')->first();
        $teacher = \App\Users::where('user_code','MLIP67890')->first();
        $lessons = \App\Lessons::all();
        foreach ($lessons as $lesson){
            $assistance = random_int(0,1);
            $report = random_int(0,1);
            \App\StudentsLessons::firstOrCreate([
                'id'=>\Webpatser\Uuid\Uuid::generate()->string,
                'student_id'=>$student->id,
                'teacher_id'=>$teacher->id,
                'assistance'=>$assistance,
                'exam_id'=>$lesson->exam_id,
                'do_exam' => ($assistance)?1:false,
                'exam_score'=> ($assistance)?random_int(50,100):50,
                'homework_id'=>$lesson->homework_id,
                'homework_delivered'=> ($assistance)?random_int(0,1):false,
                'lesson_id'=>$lesson->id,
                'lesson_date'=>$lesson->date,
                'student_reported'=>$report,
                'reason_reported'=>($report)?'Hablando y riendose en Clase':'Buena Conducta'
            ]);
        }
    }
}
