<?php

use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<10; $i++){
            \App\Classrooms::firstOrCreate([
                'id'=>\Webpatser\Uuid\Uuid::generate()->string,
                'name' => $i.'B',
                'description'=>$i.'B',
                'schedule'=>'Matutino'
            ]);
        }
    }
}
