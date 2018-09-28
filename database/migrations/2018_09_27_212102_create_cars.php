<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car');
            $table->string('producer');
            $table->string('segment');
            $table->string('engine');
            $table->string('type_of_drive');
            $table->integer('weight');
            $table->integer('width');
            $table->integer('height');
            $table->integer('length');
            $table->integer('wheelbase');
            $table->integer('number_of_seats');
            $table->string('short_description');
            $table->text('description');
            $table->date('date_of_presentation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('cars');
    }
}
