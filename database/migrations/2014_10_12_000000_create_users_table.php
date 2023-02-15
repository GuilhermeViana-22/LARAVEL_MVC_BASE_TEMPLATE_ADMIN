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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf', 11)->unique()->nullable();
            $table->string('rg', 10)->nullable();
            $table->integer('idade')->nullable();
            $table->timestamp('data_nascimento')->nullable();
            $table->string('genero', 1)->nullable();
            $table->int('cns', 16);
            $table->int('tipo_usuario_id');
            $table->int('tipo_atendimento_id');
            $table->int('unidade_id');
            $table->int('setor_id');
            $table->timestamp('data_cadastro');
            $table->int('doenca_id');
            $table->string('preferencial');
            $table->int('tipo_deficiencia_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
