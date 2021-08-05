<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencers', function (Blueprint $table) {
            $table->integer('numeroPage');
            $table->string('nomSite');
            $table->integer('ISBN');
            $table->foreign('nomSite')->references('nomSite')->on('sites');
            $table->foreign('ISBN')->references('ISBN')->on('ouvrages');
            $table->primary(['nomSite','numeroPage','ISBN']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referencers');
    }
}
