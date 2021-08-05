<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiters', function (Blueprint $table) {
            $table->integer('nbvisiteur');
            $table->integer('numMus');
            $table->date('jour');
            $table->foreign('numMus')->references('numMus')->on('musees');
            $table->foreign('jour')->references('jour')->on('moments');
            $table->primary(['numMus','jour']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiters');
    }
}
