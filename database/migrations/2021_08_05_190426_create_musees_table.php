<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musees', function (Blueprint $table) {
            $table->integer('numMus')->unique()->primary();
            $table->string('nomMus');
            $table->integer('nblivres');
            $table->string('codePays');
            $table->foreign('codePays')->references('codePays')->on('pays');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musees');
    }
}
