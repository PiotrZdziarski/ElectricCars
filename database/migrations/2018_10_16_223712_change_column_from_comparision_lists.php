<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnFromComparisionLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comparision_lists', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->string('xd');
        });

        Schema::table('comparision_lists', function (Blueprint $table) {
            $table->integer('id');
        });

        Schema::table('comparision_lists', function (Blueprint $table) {
            $table->dropColumn('xd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
