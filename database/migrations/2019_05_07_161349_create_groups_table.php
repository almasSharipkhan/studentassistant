<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->integerIncrements('group_id');
            $table->string('group_name');
            $table->enum('group_course', [
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
            ]);
            $table->integer('spec_id')->unsigned();
            $table->foreign('spec_id')->references('spec_id')->on('specialities');
            $table->integer('group_students_quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
