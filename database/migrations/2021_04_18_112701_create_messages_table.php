<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('date')->nullable();

            $table->string('to')
                    ->nullable()
                    ->comment('E-mail de quem enviou a mensagem');

            $table->string('from')
                    ->nullable()
                    ->comment('E-mail de quem deve receber a mensagem');

            $table->string('subject')->nullable();
            $table->text('body')->nullable();

            $table->string('file')
                    ->nullable()
                    ->comment('Caso exista anexo');

            $table->integer('type')
                    ->nullable()
                    ->comment('1-Para o psicólogo, 2-Para o paciente');

            $table->boolean('notify')
                    ->nullable()
                    ->comment('1-Notificar se não lida, 0-Parar notificação');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
