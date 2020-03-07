<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_details', function (Blueprint $table) {
            $table->increments('career_details_id');
            $table->string('job_title');
            $table->text('description');
            $table->string('position');
            $table->string('experience');
            $table->string('address_title');
            $table->text('description2');
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
        Schema::dropIfExists('career_details');
    }
}
