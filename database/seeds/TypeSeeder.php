<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User types
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Regular',
            'description'=>'Regular',
            'model'=>'Users',
            'slug'=>'regular'
        ]);
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Irregular',
            'description'=>'Irregular',
            'model'=>'Users',
            'slug'=>'irregular'
        ]);
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Recursando',
            'description'=>'Recursando',
            'model'=>'Users',
            'slug'=>'recursando'
        ]);
        //Courses type
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Curricular',
            'description'=>'Curricular',
            'model'=>'Courses',
            'slug'=>'curricular'
        ]);
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Extra Curricular',
            'description'=>'Extra Curricular',
            'model'=>'Courses',
            'slug'=>'extra-curricular'
        ]);
        // News type
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Noticias',
            'description'=>'Noticias',
            'model'=>'News',
            'slug'=>'noticias'
        ]);
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Avisos Oportunos',
            'description'=>'Avisos Oportunos',
            'model'=>'News',
            'slug'=>'avisos-oportunos'
        ]);
        //Lessons type
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Presencial',
            'description'=>'Presencial',
            'model'=>'Lessons',
            'slug'=>'presencial'
        ]);
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Remoto',
            'description'=>'Remotos',
            'model'=>'Lessons',
            'slug'=>'remoto'
        ]);
        //Homeworks type
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Obligatoria',
            'description'=>'Obligatoria',
            'model'=>'Homeworks',
            'slug'=>'obligatoria'
        ]);
        //Exams type
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Mixto',
            'description'=>'Mixto',
            'model'=>'Exams',
            'slug'=>'mixto'
        ]);
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Pregunta Multiple',
            'description'=>'Pregunta Multiple',
            'model'=>'Exams',
            'slug'=>'pregunta-multiple'
        ]);
        \App\Types::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name'=> 'Quiz',
            'description'=>'Quiz',
            'model'=>'Exams',
            'slug'=>'quiz'
        ]);
    }
}
