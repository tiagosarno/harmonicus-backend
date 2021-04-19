<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_psychologist')->nullable();
            $table->foreignId('id_patient')->nullable();
            $table->decimal('value')->nullable();
            $table->integer('type')->nullable();
            $table->boolean('future')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('wallets');
    }
}
