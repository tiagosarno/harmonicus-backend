<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsyStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psy_statistics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_psychologist')->nullable();
            $table->datetime('date')->nullable();
            $table->integer('position')->nullable();
            $table->string('area')->nullable();
            $table->string('specialty')->nullable();
            $table->string('period')->nullable();
            $table->string('age_range')->nullable();
            $table->string('ordenation')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();

            $table->foreign('id_psychologist')->references('id')->on('psychologists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psy_statistics');
    }
}
