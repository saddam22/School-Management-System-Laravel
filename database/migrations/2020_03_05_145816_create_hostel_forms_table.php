<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hostel_name');
            $table->string('room_number');
            $table->string('room_type');
            $table->string('number_bed');
            $table->string('cost_bed');
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
        Schema::dropIfExists('hostel_forms');
    }
}
