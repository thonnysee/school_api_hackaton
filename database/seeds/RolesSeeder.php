<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_estudiante = \App\Roles::firstOrCreate([
           'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name' => "Estudiante",
            'description'=> "Rol de perfil de estudiante",
            'type' => "Estudiante"
        ]);
        $rol_maestro = \App\Roles::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name' => "Profesor",
            'description'=> "Rol de perfil de profesor",
            'type' => "Profesor"
        ]);
        $rol_padre_familia = \App\Roles::firstOrCreate([
            'id' => \Webpatser\Uuid\Uuid::generate()->string,
            'name' => "Padre de Familia",
            'description'=> "Rol de perfil de padre de familia",
            'type' => "Padre de Familia"
        ]);

    }
}
