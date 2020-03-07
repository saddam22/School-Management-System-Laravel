<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_name');
            $table->string('idno');
            $table->string('gender');
            $table->string('class');
            $table->string('subject');
            $table->string('section');
            $table->string('time');
            $table->string('date');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('class_forms');
    }
}
