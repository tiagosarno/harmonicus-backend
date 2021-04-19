<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsySchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psy_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_psychologist')->nullable();

            $table->integer('day')
                    ->nullable()
                    ->comment('0-Domingo, 1-Segunda-feira, 2-Terça-feira, 3-Quarta-feira, 4-Quinta-feira, 5-Sexta-feira, 6-Sábado');

            $table->string('hour')
                    ->nullable()
                    ->comment('Horários no formato HH:HH');

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
        Schema::dropIfExists('psy_schedules');
    }
}
