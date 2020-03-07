<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddExpenseFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_expense_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('idno');
            $table->string('expense_type');
            $table->string('amount');
            $table->string('phone');
            $table->string('email');
            $table->string('status');
            $table->string('date');
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
        Schema::dropIfExists('add_expense_forms');
    }
}
