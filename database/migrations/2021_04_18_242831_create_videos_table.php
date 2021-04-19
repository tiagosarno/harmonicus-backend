<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_psychologist')->nullable();
            $table->foreignId('id_theme')->nullable();
            $table->date('date')->nullable();
            $table->boolean('status')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->string('video')
                    ->nullable()
                    ->comment('Apenas vídeos do YouTube');

            $table->timestamps();

            $table->foreign('id_psychologist')->references('id')->on('psychologists');
            $table->foreign('id_theme')->references('id')->on('themes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
