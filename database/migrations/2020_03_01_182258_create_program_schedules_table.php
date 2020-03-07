<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_schedules', function (Blueprint $table) {
            $table->increments('program_schedules_id');
            $table->string('title');
            $table->string('time');
            $table->string('sub_title');
            $table->string('t_title');
            $table->string('t_time1');
            $table->string('t_time2');
            $table->string('t_course');
            $table->string('t_end_time');
            $table->string('s_title');
            $table->string('s_time1');
            $table->string('s_time2');
            $table->string('s_course');
            $table->string('s_end_time');
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
        Schema::dropIfExists('program_schedules');
    }
}
