<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_lessons', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('student_id');
            $table->uuid('teacher_id');
            $table->boolean('assistance')->default('false');
            $table->uuid('exam_id')->nullable();
            $table->string('do_exam')->nullable()->default('N/A');
            $table->decimal('exam_score')->nullable();
            $table->uuid('homework_id')->nullable();
            $table->boolean('homework_delivered')->default('false');
            $table->boolean('student_reported')->default(false);
            $table->string('reason_reported')->nullable();
            $table->uuid('lesson_id');
            $table->date('lesson_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_lessons');
    }
}
