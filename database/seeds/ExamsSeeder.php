<?php

use Illuminate\Database\Seeder;

class ExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = \App\Types::where('slug','quiz')->first();
        $partial = \App\Partials::where('name','Primero')->first();
        for ($i = 0; $i<25; $i++){
            \App\Exams::firstOrCreate([
                'id'=>\Webpatser\Uuid\Uuid::generate()->string,
                'title'=>'Quiz #'.($i+1),
                'description'=>'Quiz #'.($i+1),
                'slug'=>'quiz'.($i+1),
                'type_id'=>$type->id,
                'partial_id'=>$partial->id,
                'min_score'=>50.00,
                'max_score'=>100.00
            ]);
        }
    }
}
