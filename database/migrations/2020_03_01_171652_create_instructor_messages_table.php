<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorMessagesTable extends Migration
{

    public function up()
    {
        Schema::create('instructor_messages', function (Blueprint $table) {
            $table->increments('instructor_messages_id');
            $table->string('name');
            $table->string('email');
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instructor_messages');
    }
}
