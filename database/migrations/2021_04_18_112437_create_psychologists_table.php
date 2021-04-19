<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsychologistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychologists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->nullable();
			$table->string('name')->nullable();
			$table->string('email')->unique()->nullable();
            $table->string('alternative_email', 160)->nullable();
			$table->string('cpf', 11)->unique()->nullable();
			$table->string('file_avatar', 255)->nullable();
			$table->date('birth_date')->nullable();
            $table->char('gender', 1)->nullable();

			$table->bigInteger('phone')
                    ->nullable()
                    ->comment('Formatação completa (DDD + Número). Ex: 62996657825');

            $table->boolean('phone_is_whatsapp')->nullable();

			$table->string('crp', 25)
                    ->nullable()
                    ->comment('Número de registro no conselho regional de psicologia. Ex: 09/548743');

            $table->char('crp_state', 2)
                    ->nullable()
                    ->comment('Estato da federação onde o registro foi realizado');

            $table->string('file_crp', 255)->nullable();

            $table->string('how_find_harmonicus', 160)
                    ->nullable()
                    ->comment('Como o psicólogo tomou conhecimento sobre a Harmonicus');

			$table->boolean('know_zoom')->nullable();
			$table->boolean('know_google_meeting')->nullable();
			$table->boolean('know_microsoft_teams')->nullable();
			$table->boolean('know_skype')->nullable();

			$table->string('profissional_title', 255)
                    ->nullable()
                    ->comment('Como o psicólogo deseja ser tratado pela plataforma. Ex: Especialista em Constelação Familiar');

            $table->text('profissional_resume')->nullable();
            $table->string('file_curriculum', 255)->nullable();
			$table->string('file_univertisy_degree', 255)->nullable();
			$table->text('lates_url')->nullable();

			$table->text('completed_training_courses')
                    ->nullable()
                    ->comment('Campo descritivo para o psicólogo informar cursos que realizou durante sua trajetória');

            $table->char('address_state', 2)->nullable();
            $table->string('address_city', 150)->nullable();
            $table->string('address_cep', 9)->nullable();
            $table->string('address_district', 120)->nullable()->comment('Bairro');
            $table->string('address_street', 150)->nullable();

            $table->integer('address_number')
                    ->nullable()
                    ->comment("Será informado '0' quando não houver número");

			$table->string('address_street_addon', 180)->nullable()->comment('Complemento');

            $table->char('business_address_state', 2)->nullable();
            $table->string('business_address_city', 150)->nullable();
            $table->string('business_address_cep', 9)->nullable();
            $table->string('business_address_district', 120)->nullable()->comment('Bairro');
            $table->string('business_address_street', 150)->nullable();

            $table->integer('business_address_number')
                    ->nullable()
                    ->comment("Será informado '0' quando não houver número");

			$table->string('business_address_street_addon', 180)->nullable()->comment('Complemento');

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
        Schema::dropIfExists('psychologists');
    }
}
