<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliothequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotheques', function (Blueprint $table) {
            $table->date('dateAchat');
            $table->integer('numMus');
            $table->integer('ISBN');
            $table->foreign('numMus')->references('numMus')->on('musees');
            $table->foreign('ISBN')->references('ISBN')->on('ouvrages');
            $table->primary(['numMus','ISBN']);
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliotheques');
    }
}
