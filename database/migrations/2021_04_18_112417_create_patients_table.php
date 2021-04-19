<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('cpf', 11)->unique()->nullable();
            $table->string('file_avatar', 255)->nullable();
			$table->date('birth_date')->nullable();
            $table->string('file_authorization_term', 255)->nullable();
            $table->string('file_responsible_cpf', 255)->nullable();

            $table->bigInteger('phone')
                    ->nullable()
                    ->comment('Formatação completa (DDD + Número). Ex: 62996657825');

            $table->boolean('phone_is_whatsapp')->nullable();

            $table->string('how_find_harmonicus', 160)
                    ->nullable()
                    ->comment('Como o psicólogo tomou conhecimento sobre a Harmonicus');

            $table->boolean('know_zoom')->nullable();
            $table->boolean('know_google_meeting')->nullable();
            $table->boolean('know_microsoft_teams')->nullable();
            $table->boolean('know_skype')->nullable();

            $table->char('address_state', 2)->nullable();
            $table->string('address_city', 150)->nullable();
            $table->string('address_cep', 9)->nullable();
            $table->string('address_district', 120)->nullable()->comment('Bairro');
            $table->string('address_street', 150)->nullable();

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
        Schema::dropIfExists('patients');
    }
}
