<?php

use App\Roles;
use App\Schools;
use App\Users;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_role = Roles::where('name','ilike','Estudiante')->first();
        $default_school = Schools::first();
        $faker = Faker\Factory::create('es_ES');
        $type = \App\Types::where('slug','regular')->first();
        $classroom = \App\Classrooms::where('name','3B')->first();
        $student = Users::firstOrCreate([
            'id'           => \Webpatser\Uuid\Uuid::generate()->string,
            'firstname'     => 'Fernando',
            'lastname'     => 'López',
            'second_lastname'     => 'Silva',
            'role_id'     => $default_role->id,
            'is_active'     => true,
            'school_id'     => $default_school->id,
            'user_code'     => 'MLI184720',
            'gender'     => 'M',
            'blood_group'     => 'O+',
            'nationality'     => 'MX',
            'phone_number'     => '771-863-44-90',
            'address'     => 'Calle Falsa #123, Col. Centro, Pachuca, HGO, C.P. 42000',
            'about'     => 'Chico excepcional',
            'profile_pic'     => 'fernando_lopez_silva_08122019.jpg',
            'school_grade'     => '3',
            'type_id'     => $type->id,
            'email'    => 'MLI184720@mli.com',
            'classroom_id'=> $classroom->id,
            'password' => bcrypt('123456'),
        ]);
        $prof_role = Roles::where('name','ilike','Profesor')->first();
        $teacher = Users::firstOrCreate([
            'id'           => \Webpatser\Uuid\Uuid::generate()->string,
            'firstname'     => 'Brenda',
            'lastname'     => 'Lemus',
            'second_lastname'     => 'Vallarta',
            'role_id'     => $prof_role->id,
            'is_active'     => true,
            'school_id'     => $default_school->id,
            'user_code'     => 'MLIP67890',
            'gender'     => 'F',
            'blood_group'     => 'A+',
            'nationality'     => 'MX',
            'phone_number'     => '771-789-77-23',
            'address'     => 'Calle Otra Falsa #345, Col. Centro, Pachuca, HGO, C.P. 42000',
            'about'     => 'Maestra con licenciatura en Educación',
            'profile_pic'     => 'brenda_lemus_vallarta_08122019.jpg',
            'school_grade'     => 0,
            'type_id'     => $type->id,
            'email'    => 'bren2019@mli.com',
            'password' => bcrypt('123456'),
        ]);
        $course = \App\Courses::where('code','36')->first();
        \App\RelationStudents::firstOrCreate([
            'id'=>\Webpatser\Uuid\Uuid::generate()->string,
            'student_id'=>$student->id,
            'relation_id'=>$teacher->id,
            'course_id'=>$course->id,
            'role_id'=>$prof_role->id
        ]);
    }
}
