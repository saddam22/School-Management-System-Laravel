<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationResearchOverviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_research_overviews', function (Blueprint $table) {
            $table->increments('education_research_overviews_id');
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->string('count1');
            $table->string('count2');
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
        Schema::dropIfExists('education_research_overviews');
    }
}
