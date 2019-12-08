<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('description')->nullable();
            $table->date('date');
            $table->uuid('classroom_id');
            $table->uuid('course_id');
            $table->uuid('partial_id');
            $table->uuid('homework_id')->nullable();
            $table->uuid('exam_id')->nullable();
            $table->uuid('type_id');
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
        Schema::dropIfExists('lessons');
    }
}
