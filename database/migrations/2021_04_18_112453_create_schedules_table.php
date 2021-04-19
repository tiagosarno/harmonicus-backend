<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_psychologist')->nullable();
            $table->foreignId('id_patient')->nullable();

            $table->datetime('schedule')
                    ->nullable()
                    ->comment('Data e hora da consulta agendada');

            $table->datetime('new_schedule')
                    ->nullable()
                    ->comment('Nova data e hora da consulta em caso de reagendamento');

            $table->integer('status')->nullable();

            $table->integer('platform')
                    ->nullable()
                    ->comment('1-Google Meeting, 2-Zoom, 3-Skype, 4-MS Teams');

            $table->decimal('price')->nullable()->comment('Valor da consulta');
            $table->integer('rating')->nullable();

            $table->string('rating_note')
                    ->nullable()
                    ->comment('Algum comentário durante a avaliação');

            $table->boolean('public_rating')
                    ->nullable()
                    ->comment('Se o paciente deseja ser exibido em sua avaliação');

            $table->timestamps();

            $table->foreign('id_psychologist')->references('id')->on('psychologists');
            $table->foreign('id_patient')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
