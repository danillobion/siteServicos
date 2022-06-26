<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricodeposicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicodeposicoes', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id')->nullable();
            $table->integer('linha_id')->nullable();
            $table->integer('parada_id')->nullable();
            $table->integer('tipo'); //0 'atrasado' ou 1 'na hora certa'
            $table->string('latitude');
            $table->string('longitude');
            $table->string('accuracy');
            $table->string('timestamp')->nullable();
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
        Schema::dropIfExists('historicodeposicoes');
    }
}
