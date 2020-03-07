<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorProfileAboutsTable extends Migration
{

    public function up()
    {
        Schema::create('instructor_profile_abouts', function (Blueprint $table) {
            $table->increments('instructor_profile_id');
            $table->string('profession_title');
            $table->string('students');
            $table->string('courses');
            $table->string('reviews');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('biography');
            $table->text('description');
            $table->string('expertise');
            $table->string('soon');
            $table->string('position');
            $table->string('company_name');
            $table->string('position_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instructor_profile_abouts');
    }
}
