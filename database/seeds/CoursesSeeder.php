<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Excel::load('materias.csv', function($reader) {
//            $type_id = \App\Types::where('slug','curricular')->first();
//            $school = \App\Schools::where('city','HGO')->first();
//            foreach ($reader->get() as $materia) {
//                \App\Courses::create([
//                    'id' => \Webpatser\Uuid\Uuid::generate()->string,
//                    'name' => $materia->materia,
//                    'code' =>$materia->code,
//                    'subject' =>$materia->subject,
//                    'type_id'=>$type_id->id,
//                    'school_id'=>$school->id,
//                ]);
//            }
//        });
        $type_id = \App\Types::where('slug','curricular')->first();
        $school = \App\Schools::where('city','HGO')->first();
        \App\Courses::create([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name' => 'Matemáticas II',
            'code' =>'36',
            'subject' =>'Matemáticas',
            'type_id'=>$type_id->id,
            'school_id'=>$school->id,
        ]);
    }
}
