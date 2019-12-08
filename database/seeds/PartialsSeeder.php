<?php

use Illuminate\Database\Seeder;

class PartialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Partials::firstOrCreate([
            'id'=>\Webpatser\Uuid\Uuid::generate()->string,
            'name'=>'Primero',
            'description'=>'Primero',
            'start_date'=>\Carbon\Carbon::now(),
            'end_date'=>\Carbon\Carbon::now()->addDays(30)
        ]);
    }
}
