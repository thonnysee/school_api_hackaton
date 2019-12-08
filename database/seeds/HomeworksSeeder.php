<?php

use Illuminate\Database\Seeder;

class HomeworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = \App\Types::where('slug','obligatoria')->first();
        for ($i=0; $i<25; $i++){
            \App\Homeworks::firstOrCreate([
                'id'=>\Webpatser\Uuid\Uuid::generate()->string,
                'title'=>'Tarea #'.($i+1),
                'description'=>'Tarea #'.($i+1),
                'slug'=>'tarea'.($i+1),
                'type_id'=>$type->id
            ]);
        }
    }
}
