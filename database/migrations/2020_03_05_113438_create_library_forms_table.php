<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name');
            $table->string('subject');
            $table->string('writter_name');
            $table->string('class');
            $table->string('idno');
            $table->string('publishing_date');
            $table->string('upload_date');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('library_forms');
    }
}
