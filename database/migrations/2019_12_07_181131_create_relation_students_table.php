<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_students', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('student_id');
            $table->uuid('relation_id');
            $table->uuid('course_id');
            $table->uuid('role_id');//Role Relation Father->student, Teacher->student tec
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
        Schema::dropIfExists('relation_students');
    }
}
