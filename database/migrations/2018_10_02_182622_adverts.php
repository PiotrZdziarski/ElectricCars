<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Adverts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->string('engine');
            $table->string('torque');
            $table->string('make');
            $table->string('model');
            $table->string('exterior_color');
            $table->string('interior_color');
            $table->string('transmission');
            $table->string('type_of_drive');
            $table->integer('mileage');
            $table->integer('price');
            $table->integer('year');
            $table->integer('number_of_seats');
            $table->integer('doors');
            $table->integer('weight');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
