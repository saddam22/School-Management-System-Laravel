<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPromotionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_promotion_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('current_session');
            $table->string('promote_session');
            $table->string('promotion_from');
            $table->string('promotion_to');
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
        Schema::dropIfExists('student_promotion_forms');
    }
}
