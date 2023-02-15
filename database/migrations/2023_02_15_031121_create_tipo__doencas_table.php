<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDoencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo__doencas', function (Blueprint $table) {
            $table->id();
            $table->string('doenca');
            $table->timestamp('data_cadastro');
            $table->integer('ativo');
            $table->string('observacao');
            $table->string('tratamento');
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
        Schema::dropIfExists('tipo__doencas');
    }
}
