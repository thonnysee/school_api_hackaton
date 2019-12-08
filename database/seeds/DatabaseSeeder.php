<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(PartialsSeeder::class);
        $this->call(ExamsSeeder::class);
        $this->call(HomeworksSeeder::class);
        $this->call(LessonsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(StudentsLessonsSeeder::class);
    }
}
