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
        Schema::create('users', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('user_id')->unique();
            $table->enum('user_role', [
                1 => "student",
                2 => "teacher",
            ]);
            $table->enum('user_course', [
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
            ]);
            $table->string('user_name');
            $table->string('user_surname');
            $table->date('user_birthday');
            $table->string('email')->unique();
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('group_id')->on('groups');
            $table->integer('dep_id')->unsigned();
            $table->foreign('dep_id')->references('dep_id')->on('departments');
            $table->string('password');
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
