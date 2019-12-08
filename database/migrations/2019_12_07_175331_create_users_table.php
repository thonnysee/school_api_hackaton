<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('second_lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->uuid('role_id');
            $table->boolean('is_active');
            $table->uuid('school_id')->nullable();
            $table->string('user_code')->unique()->nullable();
            $table->string('gender')->default('');
            $table->string('blood_group')->default('');
            $table->string('nationality')->default('')->nullable();
            $table->string('phone_number')->default('')->nullable();
            $table->string('address')->nullable();
            $table->text('about')->default('')->nullable();
            $table->string('profile_pic')->default('')->nullable();
            $table->integer('school_grade')->unsigned()->nullable();
            $table->uuid('type_id');
            $table->uuid('classroom_id')->nullable();
            $table->string('api_token', 80)->after('password')
                ->unique()
                ->nullable()
                ->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
