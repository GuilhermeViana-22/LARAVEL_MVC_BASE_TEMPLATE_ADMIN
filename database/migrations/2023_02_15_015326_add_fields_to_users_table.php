<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cpf', 11);
            $table->string('rg', 10)->nullable();
            $table->integer('idade')->nullable();
            //$table->date('data_nascimento')->format('Y-m-d');
            $table->string('genero', 1)->nullable();
            $table->string('cns' )->nullable();
            $table->integer('tipo_usuario_id');
            $table->integer('tipo_atendimento_id');
            $table->integer('unidade_id');
            $table->integer('setor_id');
            //$table->date('data_cadastro')->format('Y-m-d');
            $table->integer('doenca_id');
            $table->string('preferencial');
            $table->integer('tipo_deficiencia_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
