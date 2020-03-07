<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDetailAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_detail_abouts', function (Blueprint $table) {
            $table->increments('event_detail_abouts_id');
            $table->string('title');
            $table->text('description');
            $table->string('title1');
            $table->text('sub_title1');
            $table->string('title2');
            $table->text('sub_title2');
            $table->string('date');
            $table->string('time');
            $table->text('address');
            $table->string('total_slots');
            $table->string('booked_slots');
            $table->string('cost');
            $table->string('title3');
            $table->text('description2');
            $table->text('sub_title3');
            $table->text('call');
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
        Schema::dropIfExists('event_detail_abouts');
    }
}
