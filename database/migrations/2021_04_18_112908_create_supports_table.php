<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_psychologist')->nullable();
            $table->foreignId('id_admin')->nullable();
            $table->datetime('date')->nullable();
            $table->string('title')->nullable();
            $table->text('body')->nullable();

            $table->string('code_support', 36)
                    ->nullable()
                    ->comment('Código SHA256');

            $table->boolean('notify')->nullable();
            $table->timestamps();

            $table->foreign('id_psychologist')->references('id')->on('psychologists');
            $table->foreign('id_admin')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supports');
    }
}
