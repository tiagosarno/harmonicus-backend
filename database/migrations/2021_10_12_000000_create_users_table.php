<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('id_psychologist')->nullable();
            $table->foreignId('id_patient')->nullable();
            $table->foreignId('id_admin')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_psychologist')->references('id')->on('psychologists');
            $table->foreign('id_patient')->references('id')->on('patients');
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
        Schema::dropIfExists('users');
    }
}
