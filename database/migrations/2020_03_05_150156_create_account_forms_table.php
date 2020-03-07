<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('user_type');
            $table->string('gender');
            $table->string('faname');
            $table->string('moname');
            $table->string('dob');
            $table->string('religion');
            $table->string('joining');
            $table->string('email');
            $table->string('subject');
            $table->string('class');
            $table->string('section');
            $table->string('idno');
            $table->string('phone');
            $table->string('address');
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
        Schema::dropIfExists('account_forms');
    }
}
