<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_schedule')->nullable();
            $table->integer('rating')->nullable();
            $table->string('description')->nullable();

            $table->integer('type')
                    ->nullable()
                    ->comment('1-Avaliação Publica, 0-Avaliação Anônima');

            $table->timestamps();

            $table->foreign('id_schedule')->references('id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
